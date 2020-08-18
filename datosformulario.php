<?php
	if (isset($_GET['enviar'])) {
		echo '<hr>';
		echo 'Nombre '.$_GET['nombre'];
		echo '<br>Contraseña '.$_GET['contrasena'];
		if ($_GET['sexo']==0) {
			echo '<br>Sexo femenino';
		}
		else{
			echo '<br>Sexo masculino';
		}
		if ($_GET['pasat1']==1) {
			echo '<br>Musica';
		}
		elseif ($_GET['pasat2']==1) {
			echo '<br>Leer';
		}
		elseif ($_GET['pasat3']==1) {
			echo '<br>Cine';
		}
		if ($_GET['grado']==1) {
			echo '<br>TSU';
		}
		else{
			echo '<br>Ingenieria';
		}
		echo '<br>Comentario es '.$_GET['coment'];
		echo '<br>El mensaje oculto es '.$_GET['oculto'];
	}
?>