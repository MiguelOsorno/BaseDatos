<?php


$servername="127.0.0.1";
$username="miguel";
$pasword="12345";
$bd="alumnos";

$conexion=mysqli_connect($servername,$username,$pasword,$bd);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
 
$sql= "SELECT * FROM materias";

$resultado = mysqli_query($conexion, $sql);

if (!$resultado) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    exit;
} 

if(mysqli_num_rows($resultado)==0){
    echo "no se encontraron filas";
    exit;
}

echo "<table>";
echo    "<tr>";
echo        "<th>clave</th>";
echo        "<th>descripcion</th>";
echo        "<th>creditos</th>";
echo        "<th>semestre</th>";
echo        "<th>carrera</th>";
echo        "<th>acciones</th>";
while($fila= mysqli_fetch_assoc($resultado)){
 echo   "<tr>";
 echo       "<td>".$fila["clave"]."</td>";
 echo       "<td>".$fila["descripcion"]."</td>";
 echo       "<td>".$fila["creditos"]."</td>";
 echo       "<td>".$fila["semestre"]."</td>";
 echo       "<td>".$fila["carrera"]."</td>";
 echo       '<td>'.'<a href="editar.php?id='.$fila['clave'].'"><div class="btn btn-warning">Editar</div></a>'.'</td>';
 echo   "</tr>";
}
echo "</table>";

mysqli_close($conexion);
?>