Enviar= document.getElementById('Registrar');
overlay = document.getElementById('overlay');
popup = document.getElementById('popup');
overlay2 = document.getElementById('overlay2');
popup2 = document.getElementById('popup2');
Cerrar = document.getElementById('btn-cerrar-popup');
Cerrar2 = document.getElementById('btn-cerrar-popup2');

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
        console.log(Nombre);
        if(Nombre!=''&&Apellido!=''&&Cedula!=''&&Sexo!=''&&FechaNac!=''&&DirecRes!=''&&DirecTrab!=''&&Examen!=''&&FechaEx!=''){
        $.post('Registro.php', {Nombre:Nombre,Apellido:Apellido,Cedula:Cedula,Sexo:Sexo,FechaNac:FechaNac
        ,DirecRes:DirecRes,DirecTrab:DirecTrab,Examen:Examen,FechaEx:FechaEx}, function(data) {
                document.getElementById('Codigo').textContent=data;
                overlay.classList.add('active');
                popup.classList.add('active');
        });    
        }else{overlay2.classList.add('active');
        popup2.classList.add('active');}
});

Cerrar.addEventListener('click', function(){
	overlay.classList.remove('active');
	popup.classList.remove('active');        
});

Cerrar2.addEventListener('click', function(){
        overlay2.classList.remove('active');
	popup2.classList.remove('active');
});