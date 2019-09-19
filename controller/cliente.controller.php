<?php
require_once 'model/cliente.php';

class clienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new cliente();
    }
    
    public function Index(){
       require_once 'view/cliente/Portada.html';
       
    }
    
    
    public function Guardar(){
        $cliente = new cliente();
        
        $cliente->Nombre = $_REQUEST['Nombre'];
        $cliente->Apellido = $_REQUEST['Apellido'];
        $cliente->Rut = $_REQUEST['Rut'];
        $cliente->Correo = $_REQUEST['Correo'];  
        $cliente->Pass = $_REQUEST['Pass'];

       $this->model->Registrar($cliente);
       require_once 'view/cliente/Registrado.html';

      
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}