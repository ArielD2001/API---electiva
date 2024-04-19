<?php
require('controllers/delete.controller.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $response = new Deletecontroller();
    $response->deleteData($id, $table);
}else{
    $json = array(
        "status" => 400,
        "results" => 'Error: no id',
        "method" => 'delete'
    );
    echo json_encode($json, http_response_code($json['status']));
    return;
}