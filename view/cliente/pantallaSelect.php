
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
