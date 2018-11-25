<?php
$clave= $_POST["clave"];
$descripcion=$_POST["descripcion"];
$creditos=$_POST["creditos"];
$semestre=$_POST["semestre"];
$carrera=$_POST["carrera"];

$servername="127.0.0.1";
$username="miguel";
$pasword="12345";
$bd="alumnos";

$conexion=mysqli_connect($servername,$username,$pasword,$bd);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
 
$sql="UPDATE materias SET descripcion="."'".$descripcion."'".", creditos="."'".$creditos."'".", semestre="."'".$semestre."'".", carrera="."'".$carrera."'"." WHERE clave="."'".$clave."'" ;



if (mysqli_query($conexion, $sql)) {
    echo "El registro fue actualizado";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>