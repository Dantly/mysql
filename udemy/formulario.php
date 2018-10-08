<?php  include 'conexion.php'; ?>

<!DOCTYPE html="es">

<html>

<head>

<title></title>

</head>

<body>



<form action="guardar.php" method="post">

<input type="text" name="nombre" placeholder="Nombre del alumno "><br>

<input type="text" name="paterno" placeholder="Apellido paterno "><br>

<input type="text" name="materno" placeholder="Apellido materno"><br>

<input type="submit" value="Guardar">

</form>

<table>

<th>id</th>

<th>Nombre</th>

<th>Apellido Paterno</th>

<th>Apellido Materno</th>

<?php

$sel = $con ->query("SELECT id,nombre,paterno,materno from alumno");

while ($fila = $sel -> fetch_assoc()) {

?>

  <tr>

  <td><?php echo $fila['id'] ?></td>

  <td><?php echo $fila['nombre']  ?></td>

  <td><?php echo $fila['paterno']  ?></td>

  <td><?php echo $fila['materno']  ?></td>

  </tr>

<?php }  ?> 

</table>

</body>

</html>

