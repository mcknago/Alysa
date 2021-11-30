<?php
include("conexion.php");
if(isset($_POST["llamado"])){
    $consulta = "SELECT estado FROM estados where IDestado in (SELECT max(IDestado) FROM estados GROUP BY idCaso) order by IDestado";
    $resultado = mysqli_query($connection,$consulta);
    
   while($row = mysqli_fetch_array($resultado)){
      $data[]=$row[0];  
   }
    echo json_encode($data);
 }
?>