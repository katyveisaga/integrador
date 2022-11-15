<?php

$conn = new mysqli("localhost","root","","integradora"); 

$puesto = $_POST['puesto'];
$sueldo = $_POST['sueldo'];

$alta = "INSERT INTO puesto(puesto,sueldo) VALUES ('$puesto','$sueldo')";

$query = mysqli_query($conn,$alta);

if($query){
    echo("Se ha dado de alta:". $puesto);
    echo("<br><a href='crear_puesto.html'>Volver</a>");
}
?>