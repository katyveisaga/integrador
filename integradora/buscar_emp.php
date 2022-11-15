<?php
$conn = new mysqli("localhost","root","","integradora");
$buscar = $_POST['buscar'];


$buscar = "SELECT empleado.legajo, empleado.ape_nom, empleado.fecha_ing, puesto.puesto as 'verPuesto',puesto.sueldo FROM empleado, puesto WHERE empleado.puesto = puesto.id AND empleado.ape_nom LIKE '%$buscar%'
AND empleado.puesto = puesto.id";

$query = mysqli_query($conn,$buscar);

foreach($query as $res){
    echo("<br>Legajo:". $res['legajo']);
    echo("<br>Apellido y Nombres:". $res['ape_nom']);
    echo("<br>Puesto: ".$res['verPuesto']);
    echo("<br>Sueldo: $ ". $res['sueldo']);
    echo("<br>Fecha de ingreso. ".$res['fecha_ing']);
     
    $leg = $res['legajo'];

    echo("<br><a href='modificar.php?id=".$leg."'>Modificar</a>");
    echo(" <a href='eliminar.php?id=".$leg."'>Eliminar</a>");
    echo("<hr>");


}
?>
