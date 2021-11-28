
<?php
$conexion = new mysqli('localhost:3306','root', '', 'final');
$sql = "SELECT DirecRes, DirecTrab FROM datos ORDER BY id DESC";
$result=$conexion->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $Direcciones[]=$row;
    };
};
echo(json_encode($Direcciones));
?>