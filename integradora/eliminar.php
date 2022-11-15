<?php
$conn = new mysqli("localhost","root","","integradora");
$id_empleado = $_GET['id'];

$baja = "DELETE FROM empleado WHERE legajo = '$id_empleado'";


$query = mysqli_query($conn, $baja);
if($query){
    echo("Se ha dado de baja correctamente.");
}



?>