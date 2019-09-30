<?php
include '../model/UsuarioDao.php';

class UsuarioControlador{
    public static function login($usuario,$pass){
        $obj_usuario = new Usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPass($pass);

        return UsuarioDao::login($obj_usuario);
         
         

    }

    public static function registro($nombre,$apellido,$rut,$correo,$pass,$usuario){
        $obj_usuario = new Usuario();
        $obj_usuario->setNombre($usuario);
        $obj_usuario->setApellido($apellido);
        $obj_usuario->setRut($rut);
        $obj_usuario->setCorreo($correo);
        $obj_usuario->setPass($pass);
        $obj_usuario->setUsuario($usuario);

        return UsuarioDao::registro($obj_usuario);
    }
}


?>