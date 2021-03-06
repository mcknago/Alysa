<?php 
session_start();

if(!isset($_SESSION['rol'])){
	header('location: inicio_sesion.html');
}else{
	if($_SESSION['rol']!=1){
		header('location: login.php');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alysa</title>
	<link rel="stylesheet" href="css/inicio.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<script	src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"> </script>
</head>
<body>
<header>
	<h1>Alysa</h1>
		<button type="submit" class="btn_header" action="cerrar_sesion.php" method="POST" onclick="location='index.html'">Cerrar sesión
	</button>
		<p> Sistema para la gestión de casos de COVID-19 </p>
</header>	
<section id="formulario">
	<h2> Registro de usuario </h2>

	<input type="text" id="nombre" name="nombre" maxlength="20" placeholder="Nombre" autocomplete="off">
	<br>
	<input type="text" id="apellido" name="apellido" maxlength="20" placeholder="Apellido" autocomplete="off">
	<br>

	<input type="text" id="cedula" name="cedula" maxlength="10" placeholder="Cédula" autocomplete="off">
	<br>

	<select name="rol" id="rol" name="rol">
	<option value="none">Seleccionar rol...</option>
  	<option value="2">Médico</option>
  	<option value="3">Ayudante</option>
	</select>
	<br>

	<input type="text" id="usuario" name="usuario" maxlength="10" placeholder="Nombre de usuario" autocomplete="off">
	<br>

	<input type="password" id="contra" name="contra" maxlength="10" placeholder="Contraseña" autocomplete="off">
	
	<button name="registrar" id="registrar" onclick="registrar()">
		Registrar
	</button>
</section>

 <div class="overlay" id="overlay">
		<div class="popup" id="popup">
			<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
			<label>Por favor, llene todos los campos</label>
		</div>
</div>

 <div class="overlay" id="overlay2">
		<div class="popup" id="popup2">
			<a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
			<label>Datos registrados correctamente</label>
		</div>
</div>


	<script src="registrar_usuario.js">
	</script>	

</body>
</html>