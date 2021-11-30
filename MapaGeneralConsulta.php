
<?php
    include 'Config.php';
    $conexion = new mysqli($Host, $Usuario, $Clave, 'Alysa');
    $sql = "SELECT casos.direcRes, casos.direcTrab, estados.estado FROM casos, estados 
    WHERE estados.IDestado IN (SELECT MAX(IDestado) FROM estados GROUP BY idCaso) AND casos.id=estados.idCaso
    ORDER BY estados.IDestado desc;
    ";
    $result=$conexion->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $Direcciones[]=$row;
        };
    };
    echo(json_encode($Direcciones));
?>
