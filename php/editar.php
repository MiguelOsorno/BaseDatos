<?php

//echo "estoy editando la materia con el identificador: ".$_GET["id"];

$clave=$_GET["id"];

$servername="127.0.0.1";
$username="miguel";
$pasword="12345";
$bd="alumnos";

$conexion=mysqli_connect($servername,$username,$pasword,$bd);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql= "SELECT * FROM materias where clave='".$clave."'";

$resultado = mysqli_query($conexion, $sql);


if (!$resultado) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    exit;
} 

if(mysqli_num_rows($resultado)==0){
    echo "no se encontraron filas";
    exit;
}

$fila= mysqli_fetch_assoc($resultado);

echo "<form action='actualizar.php' method='post'>";
echo "<label>clave: </label> "."<input type='text' value='".$fila["clave"]."' name='clave' readonly>";
echo "</br>";
echo "<label>descripcion: </label> "."<input type='text' value='".$fila["descripcion"]."' name='descripcion'>";
echo "</br>";
echo "<label>creditos: </label>"."<input type='text' value='".$fila["creditos"]."' name='creditos'>";
echo "</br>";
echo "<label>semestre: </label>"."<input type='text' value='".$fila["semestre"]."' name='semestre'>";
echo "</br>";
echo "<label>carrera</label>"."<input type='text' value='".$fila["carrera"]."' name='carrera'>";
echo "</br>";
echo "<button type='submit'>actualizar</button>";
echo "</form>";

//echo $sql;
?>

