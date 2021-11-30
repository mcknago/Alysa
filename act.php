<?php 
    include 'config.php';
    if(isset($_POST['new_estado'], $_POST['date'])){
    $conexion = new mysqli($Host, $Usuario, $Clave, 'Alysa');
    $new_estado=$_POST['new_estado'];
    $date=$_POST['date'];

    $sql = "SELECT * FROM casos, estados WHERE id = $dato";
    $result = $conexion->query($sql);


    $sql = "INSERT INTO `estados` (estado,fecha)
    VALUES('$new_estado','$date')";
    $conexion->query($sql);

?>
