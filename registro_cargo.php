<?php
if (isset($_POST['guardar'])) 
{
$cod_cargo=$_POST['cod_cargo']; 
$descripcion_cargo=$_POST['descripcion_cargo']; 
$estado=$_POST['estado']; 
	$mysql = new mysqli("localhost","root","","ingreso");
	$mysql = $mysql -> query("INSERT INTO cargos( Cod_Cargo, Descripcion_cargo, Estado)VALUES( '$cod_cargo', '$descripcion_cargo', '$estado')")or die(mysql_error());
	echo "<script> location.href='registro_cargo.html'</script>";
}
?>