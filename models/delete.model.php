<?php

require_once('connection.php');

class DeleteModel {

    /**
     * Método estático para eliminar un registro de la base de datos.
     *
     *
     */
    static public function deleteData($id) {
    
        // Establece la conexión con la base de datos
        $conn = Connection::connect();

        try {
            // Consulta para verificar si el registro existe
            $sql = "SELECT * FROM productos WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();

            // Obtiene el número de filas afectadas por la consulta
            $num = $stmt->rowCount();
            
            // Verifica si el registro existe
            if ($num != 0) {
                
                // Consulta para eliminar el registro
                $sql = "DELETE FROM productos WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':id', $id, PDO::PARAM_STR);

                // Ejecuta la consulta de eliminación
                if ($stmt->execute()) {
                    $response = array(
                        "comment" => "The delete was successful",
                    );
                    return $response;
                } else {
                    return array("error" => $stmt->errorInfo());
                }
            } else {
                // Si el ID no coincide con ningún registro
                $response = array(
                    "comment" => "el id no coincide con ningun registro",
                );
                return $response;
            }
        } catch (PDOException $e) {
            // Captura cualquier excepción de PDO
            return array("error" => $e->getMessage());
        }
    }
}
