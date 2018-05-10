<?php 


$docu=$_POST['documento'];
$cod_c=$_POST['codigo_cups'];
$des=$_POST['descripcion'];
$cod_m=$_POST['cod_med'];
$fec_soli=$_POST['fecha_solicitud'];
$fec_ci=$_POST['fecha_cita'];
$usu_adm=$_POST['usuario_admision'];
$nu_ingr=$_POST['nu_ingreso'];
$fec_ingr=$_POST['fecha_ingreso'];

if (isset($_POST['guardar'])) 
{
	
	$mysql = new mysql("localhost","root","","ingreso");
	$mysql = $mysql -> query("INSERT INTO admision(Documento_paciente,Codigo_cups,Descripcion,Cod_med,Fecha_solicitud,Fecha_cita,Usuario_admision,Nu_ingreso,Fecha_ingreso)VALUES('$docu', '$cod_c', '$des','$cod_m','$fec_soli','$fec_ci'.'$usu_adm', '$nu_ingr', '$fec_ingr')")or 
	       die(mysql_error());


	echo "<script> location.href='registro_admision.html'</script>";       


}


 ?>