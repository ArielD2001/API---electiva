<?php

require_once('connection.php');

class PutModel
{
    static public function putData($table,$columns, $data, $id)
    {
        if (empty($data)) {
            return null;
        }
        $set = '';
      
        foreach ($columns as $key => $value) {
            $set .= " $value = :$value, ";
        }

        $set = substr($set, 0, -1);
        $set = substr($set, 0, -1);

        $conn = Connection::connect();

        try {
            $sql = "UPDATE $table SET $set  WHERE id = :id";
            $stmt = $conn->prepare($sql);
            foreach ($columns as $key => $value) {

                $stmt->bindParam(":$value", $data[$key],  PDO::PARAM_STR);
            }
            $stmt->bindParam(':id', $id,  PDO::PARAM_STR);

            if ($stmt->execute()) {
                $response = array(
                    "comment" => "The update was successful",
                );
                return $response;
            } else {
                return array("error" => $stmt->errorInfo());
            }
        } catch (PDOException $e) {
            return array("error" => $e->getMessage());
        }
    }
}
