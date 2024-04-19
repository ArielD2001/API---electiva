<?php

require_once('connection.php');

class PutModel {

    /**
     * Método estático para actualizar un registro en la base de datos.
     *
     */
    static public function putData($table, $columns, $data, $id) {

        // Verifica si los datos están vacíos
        if (empty($data)) {
            return null;
        }

        // Inicializa la cadena de asignación para la actualización
        $set = '';

        // Genera la cadena de asignación para la actualización
        foreach ($columns as $key => $value) {
            $set .= " $value = :$value, ";
        }

        // Elimina la última coma y el espacio extra
        $set = substr($set, 0, -2);

        // Establece la conexión con la base de datos
        $conn = Connection::connect();

        try {
            // Consulta SQL para actualizar el registro
            $sql = "UPDATE $table SET $set WHERE id = :id";
            $stmt = $conn->prepare($sql);

            // Vincula los parámetros
            foreach ($columns as $key => $value) {
                $stmt->bindParam(":$value", $data[$key], PDO::PARAM_STR);
            }

            $stmt->bindParam(':id', $id, PDO::PARAM_STR);

            // Ejecuta la consulta de actualización
            if ($stmt->execute()) {
                $response = array(
                    "comment" => "The update was successful",
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
