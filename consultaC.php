<?php 
    include 'clave.php';
    if(isset($_POST['dato'])){
    $conexion = new mysqli($Host, $Usuario, $Clave, 'Alysa');

    $sql = "SELECT * FROM casos, estados WHERE cedula = $dato";
    $result = $conexion->query($sql);


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $Tabla[] = array($row['id'], $row['nombre'], $row['apellido'],$row['cedula'], $row['sexo'], $row['FechaNacimiento'],
          $row['direcRes'], $row['direcTrab'], $row['exam'], $row['fechaEx'], $row['estado'], $row['fecha'],);
        };
      } else {
        $Tabla[] = ['NADA'];
      } 
      }else {
        $Tabla[] = ['NO POST'];
      }

    echo json_encode($Tabla);

?>