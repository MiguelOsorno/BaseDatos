<?php
$clave= $_GET["id"];


$servername="127.0.0.1";
$username="miguel";
$pasword="12345";
$bd="alumnos";

$conexion=mysqli_connect($servername,$username,$pasword,$bd);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
 
$sql= "DELETE FROM materias WHERE clave="."'".$clave."'";



if (mysqli_query($conexion, $sql)) {
    echo "El registro fue eliminado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>