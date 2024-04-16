<?php

//mostrar errores 
ini_set('display_errors', 1);
ini_set("log_errors", 1);
ini_set("error_log", "C:/xampp/htdocs/codigos/API/php_error_log");

require('models/connection.php');

//requerimientos
require_once('controllers/routes.controller.php');
$index = new RoutesController();
$index->index();