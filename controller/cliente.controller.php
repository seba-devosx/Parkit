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
    
    public function Crud(){
        $cliente = new cliente();
        
        if(isset($_REQUEST['id'])){
            $cliente = $this->model->Obtener($_REQUEST['id']);
        }
         require_once 'view/cliente/Registro.php';
        
     
        
    }
    
    
    public function Guardar(){
        $cliente = new cliente();
        
        
        $cliente->email = $_REQUEST['email'];  
        $cliente->nombre = $_REQUEST['nombre'];
        $cliente->apellido = $_REQUEST['apellido'];
        $cliente->pass = $_REQUEST['pass'];    
      

        $cliente->id > 0 
            ? $this->model->Actualizar($cliente)
            : $this->model->Registrar($cliente);
        
        header('Location: index.php');
    }

    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}