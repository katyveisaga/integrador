<?php
$conn = new mysqli("localhost","root","","integradora");

$id_empleado = $_GET['id'];

$buscar = "SELECT * FROM empleado WHERE legajo = '$id_empleado'";

$query = mysqli_query($conn,$buscar);

foreach($query as $res){


?>


<html>
    <body>
<form action="actualizar_datos.php" method="post">
        <label for="ape_nom">Apellido y Nombres:</label>
        <input type="text" name="ape_nom" value="<?php echo($res['ape_nom']);?>">
        
        <br>
        <label for="puesto">Puesto:</label>
        <select name="puesto">
            <option value="8">Administración</option>
            <option value="9">Ventas</option>
            <option value="10">Gerencia</option>
        </select>
        <br>
        <label for="fecha_ing">Fecha de Ingreso:</label>
        <input type="date" name="fecha_ing" value="<?php echo($res['fecha_ingreso']);?>>
        <br>
        <input type="hidden name = 'legajo' value='<?php echo($id_empleado);?>'>
        <input type="submit" value="Actualizar">

    </form>

</body>
    </html>


<?php

}
?>