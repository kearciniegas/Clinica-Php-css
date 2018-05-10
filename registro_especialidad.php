<?php
if (isset($_POST['guardar'])) 
{
$cod_especialidad=$_POST['cod_especialidad']; 
$descripcion=$_POST['descripcion']; 
	$mysql = new mysqli("localhost","root","","ingreso");
	$mysql = $mysql -> query("INSERT INTO especialiad( Cod_especialidad, Descripcion)VALUES( '$cod_especialidad', '$descripcion')")or die(mysql_error());
	echo "<script> location.href='registro_especialidad.html'</script>";
}
?>