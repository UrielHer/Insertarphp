<?php
//clase o modelo para hacer insercion de datos
class Usuarios
{
	public function contacto($nombre,$tel,$correo,$mensaje)
	{
		include 'conexion.php';
		$sql="INSERT INTO usuarios(`id`,`nombre`,`telefono`,`correo`,`mensaje`) VALUES (NULL,'".$nombre."','".$tel."','".$correo."','".$mensaje."');";
		mysqli_query($con,$sql) or die (mysqli_error($con));
		header("Location ./");
	}
}
?>