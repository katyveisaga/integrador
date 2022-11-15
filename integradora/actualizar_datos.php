<?php
$conn = new mysqli("localhost","root","","integradora");

$ape_nom = $_POST['ape_nom'];
$puesto = $_POST['puesto'];
$fecha_ingreso = $_POST['fecha_ing'];
$legajo = $_POST['legajo'];

$actualizar = "UPDATE empleado SET ape_nom = '$ape_nom',puesto = '$puesto',fecha_ing = '$fecha_ing' WHERE legajo = '$legajo'";

$query = mysqli_query($conn, $actualizar);

if($query){
    echo("Se han actualizado correctamente los datos....");
}
?>