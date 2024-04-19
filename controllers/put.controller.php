<?php
require('models/put.model.php');

class PutController
{
    
    static public function putData($table, $columns,$data,$id){

        $response = PutModel::putData($table,$columns, $data, $id);
        $return = new PutController();
        $return->fncResponse($response);
    }

     //respuesta del controlador
     public function fncResponse($response)
     {
         if (!empty($response)) {
             $json = array(
                 "status" => 200,
                 "method" => 'put',
                 "results" => $response
             );
             echo json_encode($json, http_response_code($json['status']));
         } else {
 
             $json = array(
                 "status" => 404,
                 "results" => 'Not found',
                 "method" => 'put'
             );
             echo json_encode($json, http_response_code($json['status']));
         }
     }

}
