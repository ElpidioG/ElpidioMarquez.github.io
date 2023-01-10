<?php
$nombre = %_POST['Nombre'];
$apellido = %_POST['Apellido'];
$correo = %_POST['Correo'];
$tele = %_POST['Tele'];
$mensaje = %_POST['Mensaje'];


echo $nombre. "ha dicho: <br/>".$mensaje;
mail('guillermox0417@gmail.com', $correo, $mensaje);
?>