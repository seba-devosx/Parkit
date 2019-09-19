<?php
class Database{
Public static function StartUp(){
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=parkit1;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;


    }catch(Exception $error){
        echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $error->getMessage();
        exit;
        die("Error".$error->getMessage());
        echo "Linea del error". $error->getLine();

    }
    return $pdo;
}

}
?>