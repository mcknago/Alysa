function registrar(){
var nombre = document.getElementById("nombre").value;
var apellido = document.getElementById("apellido").value;
var cedula = document.getElementById("cedula").value;
var rol = document.getElementById("rol").value;
var usuario = document.getElementById("usuario").value;
var contra = document.getElementById("contra").value;
var popup = document.getElementById('popup');
var overlay = document.getElementById('overlay');
var popup2 = document.getElementById('popup2');
var overlay2 = document.getElementById('overlay2');
var Cerrar = document.getElementById('btn-cerrar-popup');
var Cerrar2 = document.getElementById('btn-cerrar-popup2');

if(nombre=='' || apellido=='' || cedula=='' || rol=='' || usuario=='' || contra=='' ){
	console.log("Datos incompletos");
        overlay.classList.add('active');
        popup.classList.add('active');
} else {
$.post('registrar_usuario.php', {nombre, apellido, cedula, rol, usuario, contra}, function(data){
        overlay2.classList.add('active');
        popup2.classList.add('active');
		document.getElementById("nombre").value = "";
		document.getElementById("apellido").value = "";
		document.getElementById("cedula").value = "";
		document.getElementById("rol").value ="";
		document.getElementById("usuario").value= "";
		document.getElementById("contra").value= "";        
});

}

Cerrar.addEventListener('click', function(){
	overlay.classList.remove('active');
	popup.classList.remove('active');        
});

Cerrar2.addEventListener('click', function(){
	overlay2.classList.remove('active');
	popup2.classList.remove('active');        
});


}


