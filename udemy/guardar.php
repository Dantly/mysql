<?php

include 'conexion.php';

$nombre = $_POST['nombre'];

$paterno = $_POST['paterno'];

$materno= $_POST['materno'];

$ins = $con -> query("INSERT INTO alumno (id,nombre,paterno, materno) 

                   VALUES ('','$nombre','$paterno','$materno')");



if($ins){



echo "guardo";

}else{

echo "no guardo";

}

?>



