<?php 


$doc=$_POST['documento'];
$nom=$_POST['nombres'];
$apell=$_POST['apellidos'];
$dir=$_POST['direccion'];
$tel_fijo=$_POST['tel_fijo'];
$tel_cel=$_POST['tel_celular'];

if (isset($_POST['guardar'])) 
{
	
	$mysql = new mysql("localhost","root","","ingreso");
	$mysql = $mysql -> query("INSERT INTO paciente(Documento,Nombres,Apellidos,Tel_Fijo,Tel_celular)VALUES('$doc', '$nom', '$apell','$dir','$tel_fijo','$tel_cel')")or 
	       die(mysql_error());


	echo "<script> location.href='registro_paciente.html'</script>";       


}


 ?>