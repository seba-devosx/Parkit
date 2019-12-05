<?php
include '../model/UsuarioDao.php';

class UsuarioControlador{
    public static function login($usuario,$pass){
        $obj_usuario = new Usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPass($pass);

        return UsuarioDao::login($obj_usuario);
         
         

    }

    public static function registro($nombre,$apellido,$rut,$correo,$pass,$usuario,$privilegio,$numero,$patente){
        $obj_usuario = new Usuario();
        $obj_usuario->setNombre($nombre);
        $obj_usuario->setApellido($apellido);
        $obj_usuario->setRut($rut);
        $obj_usuario->setCorreo($correo);
        $obj_usuario->setPass($pass);
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPrivilegio($privilegio);
        $obj_usuario->setNumero($numero);
        $obj_usuario->setPatente($patente);

        return UsuarioDao::registro($obj_usuario);
    }

    public function getUsuario($usuario,$pass){
        $obj_usuario = new Usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPass($pass);

        return UsuarioDao::getUsuario($obj_usuario);
    }

    //esta metodo sirve para traer los datos de todos usuarios
    public function getUsuarios(){
      

        return UsuarioDao::getUsuarios();
    }

     
    //esta funcion sirve para dar debaja las cuentas de usuario del lado del administrador
    public function eliminarUsuario($rut){
      

        return UsuarioDao::eliminarUsuario($rut);
    }

    //esta funcion controla la actualizacion de datos desde el administrador 
    public static function actualizarUsuario($nombre,$apellido,$rut,$correo,$pass,$usuario,$privilegio){
        $obj_usuario = new Usuario();
        $obj_usuario->setNombre($nombre);
        $obj_usuario->setApellido($apellido);
        $obj_usuario->setRut($rut);
        $obj_usuario->setCorreo($correo);
        $obj_usuario->setPass($pass);
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPrivilegio($privilegio);

        return UsuarioDao::registro($obj_usuario);
    }
    //esta funcion controla el ingreso de datos desde el lado del administrao
    public static function Registrar_usuario_Admin($nombre,$apellido,$rut,$correo,$pass,$usuario,$privilegio,$numero,$patente){
        $obj_usuario = new Usuario();
        $obj_usuario->setNombre($nombre);
        $obj_usuario->setApellido($apellido);
        $obj_usuario->setRut($rut);
        $obj_usuario->setCorreo($correo);
        $obj_usuario->setPass($pass);
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPrivilegio($privilegio);
        $obj_usuario->setNumero($numero);
        $obj_usuario->setPatente($patente);

        return UsuarioDao::CrearAdmin($obj_usuario);
    }
   

    //funcion de 
    public function getUsuarioporrut($rut){

        return UsuarioDao::getUsuarioporrut($rut);
    }

    public function getInfo(){

        return UsuarioDao::getInfo();
    }


}


?>