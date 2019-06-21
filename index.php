<?php
//se se requiere de la base de datos para poedr generar 
//la conexion si el arhivo no se encuentra no va adirigri el controlador hacia el inicio
require_once 'model/database.php';

$controller = 'cliente';

// Todo esta lógica hara el papel de un FrontController
//el funcionamiento que tiene principamente es checkerar si 
//hay algo en las carpeta controlador si no hay nada generara una nueva instancia del controlador
//si ya se encuentra el controlador seleccionara los 
if(!isset($_REQUEST['c']))
{
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['controller']);
    $accion = isset($_REQUEST['action']) ? $_REQUEST['aacction'] : 'Index';
    
    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}