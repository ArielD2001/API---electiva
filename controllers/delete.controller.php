<?php

require('models/delete.model.php');

class DeleteController{

    static public function deleteData($id){
      
        $response = DeleteModel::deleteData($id);
        $return = new DeleteController();
        $return->fncResponse($response);
    }

    public function fncResponse($response)
    {
        if (!empty($response)) {
            $json = array(
                "status" => 200,
                "method" => 'delete',
                "results" => $response
            );
            echo json_encode($json, http_response_code($json['status']));
        } else {

            $json = array(
                "status" => 404,
                "results" => 'Not found',
                "method" => 'delete'
            );
            echo json_encode($json, http_response_code($json['status']));
        }
    }

}