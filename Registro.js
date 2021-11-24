Enviar= document.getElementById('Registrar');
overlay = document.getElementById('overlay'),
popup = document.getElementById('popup'),
Cerrar = document.getElementById('btn-cerrar-popup');

Enviar.addEventListener('click',function(){
        Nombre=document.getElementById('first_name').value;
        Apellido=document.getElementById('last_name').value;
        Cedula=document.getElementById('Cedula').value;
        Sexo=document.getElementById('Sexo').value;
        FechaNac=document.getElementById('FechaNac').value;
        DirecRes=document.getElementById('DirecRes').value;
        DirecTrab=document.getElementById('DirecTrab').value;
        Examen=document.getElementById('examen').value;
        FechaEx=document.getElementById('FechaEx').value;

        $.post('Registro.php', {Nombre:Nombre,Apellido:Apellido,Cedula:Cedula,Sexo:Sexo,FechaNac:FechaNac
            ,DirecRes:DirecRes,DirecTrab:DirecTrab,Examen:Examen,FechaEx:FechaEx}, function(data) {
                document.getElementById('Codigo').textContent=data;
                overlay.classList.add('active');
                popup.classList.add('active');
        });    
});

Cerrar.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});