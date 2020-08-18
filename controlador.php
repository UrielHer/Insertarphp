<?php
//controlador de datos
require_once 'cls_usuarios.php';

$objUsuarios = new Usuarios();
$objUsuarios->contacto($_POST['nombre'],$_POST['telefono'],$_POST['correo'],$_POST['mensaje']);
?>