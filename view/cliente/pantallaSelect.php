<?php

$server= "localhost";
$user = "root";
$pass ="";
$db="tesis";

$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) 
{
   die("Connection failed: " . mysqli_connect_error());
}
////consulta a la base de datos////
$query="SELECT reserva.idReserva, reserva.HoraIn, reserva.HoraOut, reserva.Estacionamiento,usuarios.Nombre,usuarios.Apellido FROM reserva INNER JOIN usuarios ON reserva.Rut = usuarios.Rut";
$resultado=$conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Datos De Reserva</h1>
    <br>
    <table>
    <tr>
    <td>Codigo Reserva</td>
    <td>Hora de ingreso</td>
    <td>Hora de salida</td>
    <td>Estacionamiento</td>
    <td>Nombre Cliente </td>
    <td>Apellido Cliente</td>
    </tr>

    <?php
    while($mostrar=$resultado->fetch_array(MYSQLI_BOTH))
    {
        echo'
        <tr>
        <td>'.$mostrar['idReserva'].'</td>
        <td>'.$mostrar['HoraIn'].'</td>
        <td>'.$mostrar['HoraOut'].'</td>
        <td>'.$mostrar['Estacionamiento'].'</td>
        <td>'.$mostrar['Nombre'].'</td>
        <td>'.$mostrar['Apellido'].'</td>
        </tr>
        '; 
        
    }
    ?>
    </table>
    </body>
</html>
