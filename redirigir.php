<?php 

if(isset($_POST['cerrar_sesion'])){
	session_unset();
	session_destroy();
	header('location: index.html');
}

if(isset($_SESSION['rol'])){
	direccion();
}

include("conexion.php");
if (!$connection) {
      die("Connection failed: " . mysqli_connect_error());}
 
if(isset($_POST["usuario"]) && isset($_POST["contra"])){
	$user=strval($_POST['usuario']);
	$pass=strval($_POST['contra']);
	$consulta = "SELECT * FROM usuarios WHERE usuario='$user' AND contra='$pass' ";

	$resultado = mysqli_query($connection,$consulta);
	$contador=mysqli_num_rows($resultado);

	if($contador==1){
		$row = mysqli_fetch_array($resultado);
		$rol = $row['rol'];
		$_SESSION['rol'] = $rol;

	} else {
		$rol = "0";

	}
	direccion(); //Dependiendo del rol me manda al html correspondiente
	echo  $rol;
}

function direccion(){
		switch ($_SESSION['rol']) {
			case 0:
				header('location: inicio_sesion.html');
				break;
			case 1:
				header('location: administracion.html');
				break;
			case 2:
				header('location: inicio_sesion.html');
				break;
			case 3:
				header('location: Registro.html');
				break;
			default:
				header('location: inicio_sesion.html');
				break;
		}
}

?>
