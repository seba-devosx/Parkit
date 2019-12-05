<?php
include '../model/AdminDao.php';

class AdminControlador{
    public static function login($usuario,$pass){
        $obj_admin = new Admin();
        $obj_admin->setUsuario($usuario);
        $obj_admin->setPass($pass);

        return AdminDao::login($obj_admin);
         
         

    }

    public function getAdmin($usuario,$pass){
        $obj_admin = new Admin();
        $obj_admin->setUsuario($usuario);
        $obj_admin->setPass($pass);

        
        return AdminDao::getAdmin($obj_admin);
    }

    public function getAdmins(){
      

        return AdminDao::getAdmins();
    }

}


?>