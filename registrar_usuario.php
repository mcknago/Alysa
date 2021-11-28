<?php 
include("conexion.php");
if (!$connection) {
      die("Connection failed: " . mysqli_connect_error());}
 
if(isset($_POST["nombre"]) && $_POST["apellido"] && $_POST["cedula"] && $_POST["rol"] && $_POST["usuario"] && $_POST["contra"]) {
	$nombre=strval($_POST['nombre']);
	$apellido=strval($_POST['apellido']);
	$cedula=strval($_POST['cedula']);
	$rol=strval($_POST['rol']);
	$usuario=strval($_POST['usuario']);
	$contra=strval($_POST['contra']);
 
	$sql = "INSERT INTO usuarios (nombre, apellido, cedula, rol, usuario, contra) VALUES ('$nombre', '$apellido', '$cedula', '$rol', '$usuario', '$contra')";

	if (mysqli_query($connection, $sql)) {
		$info="Registrado exitosamente";
	} else {
		$info= "Error: " . $sql . "<br>" . mysqli_error($connection);
	}
	mysqli_close($connection);
	echo $info ;
}
?>