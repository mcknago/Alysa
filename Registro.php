<?php
    if(isset($_POST['Nombre'] , $_POST['Apellido'],$_POST['Cedula'],$_POST['Sexo'],$_POST['FechaNac'],
    $_POST['DirecRes'],$_POST['DirecTrab'],$_POST['Examen'],$_POST['FechaEx'])){
    $conexion = new mysqli('localhost:3306','root', '', 'final');
    $Nombre=$_POST['Nombre'];
    $Apellido= $_POST['Apellido'];
    $Cedula=$_POST['Cedula'];
    $Sexo=$_POST['Sexo'];
    $FechaNac=$_POST['FechaNac'];
    $DirecRes=$_POST['DirecRes'];
    $DirecTrab=$_POST['DirecTrab'];
    $Examen=$_POST['Examen'];
    $FechaEx=$_POST['FechaEx'];

    $sql = "INSERT INTO `datos` (Nombre,Apellido,Cedula,Sexo,FechaNac,DirecRes,DirecTrab,Exam,FechaEx)
    VALUES('$Nombre','$Apellido','$Cedula','$Sexo','$FechaNac','$DirecRes','$DirecTrab','$Examen','$FechaEx')";
    $conexion->query($sql);
    
    $sql = "SELECT id FROM datos ORDER BY id DESC limit 1";
    $result=$conexion->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $Registro=$row['id'];
        };
      };
    };
    echo zeropad(dechex($Registro));
    
    function zeropad($num){
    return (strlen($num) >= 10) ? $num : zeropad("0" . $num);
    }
    ?>
    <script src="Registro.js"></script>;