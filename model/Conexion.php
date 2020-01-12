<?php
/*conexion a la base de datos 
@return: retorna la conexion

*/ 
class Conexion{
Public static function conectar(){
    try{
        $cn= new PDO('mysql:host=localhost;dbname=Parkit2;charset=utf8', 'root', '');
        /*$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, 1);*/
        
        return $cn;
       


    }catch(PDOException $error){
       echo"No conectado";
        die($error->getMessage());
     

    }
}

}
Conexion::conectar();

