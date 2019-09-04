<?php
//se se requiere de la base de datos para poedr generar 
//la conexion si el arhivo no se encuentra no va adirigri el controlador hacia el inicio
require_once 'model/conexion.php';

$controller = 'cliente';
/*la logica de fron controlaer ess que cuand se hace llamar a un funcion por ejemplo el registro se ahce el lo
lo siguiente: dode se hace el href ?c=cliente&a=Guardar se coloca esto indicando que la accion que esta dentro 
del controler clinete ejecute el controlador cliente y que se seleccione la funcion guardar   /*/
if(!isset($_REQUEST['c']))
{
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{
    //a = action que se va arelizar el cliente 
    //c = controlador que v a ser seleccionado 
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}