<?php 
    include 'config.php';
    if(isset($_POST['new_estado'])){
    $conexion = new mysqli($Host, $Usuario, $Clave, 'Alysa');
    $new_estado=$_POST['new_estado'];
    $Caso=$_POST['caso'];

    $sql = "INSERT INTO `estados` (estado,fecha,idCaso)
    VALUES('$new_estado',NOW(),'$Caso')";
    $conexion->query($sql);}
?>
