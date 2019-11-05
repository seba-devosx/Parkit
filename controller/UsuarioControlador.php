<?php
include '../model/UsuarioDao.php';

class UsuarioControlador{
    public static function login($usuario,$pass){
        $obj_usuario = new Usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPass($pass);

        return UsuarioDao::login($obj_usuario);
         
         

    }

    public static function registro($nombre,$apellido,$rut,$correo,$pass,$usuario,$privilegio){
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

    public function getUsuario($usuario,$pass){
        $obj_usuario = new Usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPass($pass);

        return UsuarioDao::getUsuario($obj_usuario);
    }
    public function getUsuarios(){
      

        return UsuarioDao::getUsuarios();
    }

}


?>