<?php

$conn = new mysqli("localhost","root","","integradora"); 

$ape_nom = $_POST['ape_nom'];
$puesto = $_POST['puesto'];
$fecha_ing = $_POST['fecha_ing'];

$alta = "INSERT INTO empleado(ape_nom,puesto,fecha_ing) VALUES('$ape_nom', '$puesto','$fecha_ing')";


if($query = mysqli_query($conn,$alta)){
    echo("Se ha dado de alta correctamente.");
    
}else{
    echo("Error al dar de alta...");
}
echo("<br><a href='alta_emp.html'>Dar de Alta otro empleado</a>");

?>