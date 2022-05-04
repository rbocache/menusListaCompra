<?php

require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';

function show_error() {
    $error = new errorController();
    $error->index();
}

if(isset($_GET['controller'])) {
    
    $nombre_controlador = $_GET['controller'].'Controller';
} else {
    show_error();
    exit();
}

if(class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        show_error();
    }
} else {
    show_error(); 
}

require_once 'views/layout/footer.php';



?>