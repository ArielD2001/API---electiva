<?php

require_once('connection.php');

class PostModel {

    /**
     * Método estático para insertar datos en la base de datos.
     *
  
     */
    static public function postData($table, $data) {

        // Verifica si los datos están vacíos
        if (empty($data)) {
            return null;
        }

        // Genera la lista de columnas y marcadores de posición
        $columns = implode(',', array_keys($data));
        $placeholders = ':' . implode(',:', array_keys($data));

        // Establece la conexión con la base de datos
        $conn = Connection::connect();

        try {
            // Consulta SQL para insertar datos
            $sql = "INSERT INTO $table ($columns) VALUES($placeholders)";
            $stmt = $conn->prepare($sql);

            // Vincula los parámetros
            foreach ($data as $key => $value) {
                $stmt->bindParam(":$key", $data[$key], PDO::PARAM_STR);
            }

            // Ejecuta la consulta de inserción
            if ($stmt->execute()) {
                $response = array(
                    "comment" => "The process was successful",
                    "lastId" => $conn->lastInsertId()
                );
                return $response;
            } else {
                return array("error" => $stmt->errorInfo());
            }
        } catch (PDOException $e) {
            // Captura cualquier excepción de PDO
            return array("error" => $e->getMessage());
        }
    }
}
