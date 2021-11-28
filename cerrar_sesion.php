<?php 
session_start();
if(isset($_POST['cerrar_sesion'])){
	session_destroy();
	header('location: index.html');
}
?>