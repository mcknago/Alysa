<?php 
    include 'clave.php';
    if(isset($_POST['dato'])){
    $conexion = new mysqli($Host, $Usuario, $Clave, 'taxi');

    $sql = "SELECT * FROM datos WHERE Nombre = $dato AND id = $dato AND Cedula = $dato";
    $result = $conexion->query($sql);


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $Tabla[] = array($row['id'], $row['Nombre'], $row['Apellido'],$row['Cedula'], $row['Sexo'], $row['FechaNac'],
          $row['DirecRes'], $row['DirecTrab'], $row['Exam'], $row['FechaEx']);
        };
      } else {
        $Tabla[] = ['NADA'];
      } 
      }else {
        $Tabla[] = ['NO POST'];
      }

    echo json_encode($Tabla);

?>