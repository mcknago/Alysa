<?php
include("conexion.php");
if(isset($_POST["llamado"])){
    $consulta = "SELECT fechaEx, count(exam)as numero, exam from casos where exam='Positivo' group by fechaEx";
    $resultado = mysqli_query($connection,$consulta);
   while($row = mysqli_fetch_array($resultado)){
      $casos[]=array((string) $row['fechaEx'],(string) $row['numero'],(string) $row['exam'] );
   }

   $consulta = "SELECT fecha, count(estado) as numero, estado from estados where estado='Muerte' group by fecha";
   $resultado = mysqli_query($connection,$consulta);
   while($row = mysqli_fetch_array($resultado)){
      $casos[]=array((string) $row['fecha'],(string) $row['numero'],(string) $row['estado']);
   }
    echo json_encode($casos);
 }
?>