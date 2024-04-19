<?php

// Verifica si se proporciona un ID en la URL
if(isset($_GET['id'])) {

    // Obtiene el ID de la URL
    $id = $_GET['id'];

    // Instancia el controlador de Delete
    $response = new Deletecontroller();

    // Llama al método deleteData del controlador Delete
    $response->deleteData($id, $table);

} else {

    // Si no se proporciona un ID en la URL, se genera un mensaje de error
    $json = array(
        "status" => 400,
        "results" => 'Error: no id',
        "method" => 'delete'
    );

    // Envía una respuesta JSON con el mensaje de error y un código de estado HTTP 400 (Bad Request)
    echo json_encode($json, http_response_code($json['status']));
    return;
}
