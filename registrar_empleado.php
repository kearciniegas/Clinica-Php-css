<?php
if (isset($_POST['guardar'])) 
{
$documento=$_POST['documento']; 
$nombre=$_POST['nombre']; 
$apellido=$_POST['apellido']; 
$tel_fijo=$_POST['tel_fijo']; 
$tel_celular=$_POST['tel_celular']; 
$no_contrato=$_POST['no_contrato']; 
$fecha_inicio=$_POST['fecha_inicio']; 
$fecha_fin=$_POST['fecha_fin']; 
$sueldo=$_POST['sueldo']; 
$cod_cargo=$_POST['cod_cargo']; 
$usuario=$_POST['usuario']; 
$cod_jefe=$_POST['cod_jefe']; 
	$mysql = new mysqli("localhost","root","","ingreso");
	$mysql = $mysql -> query("INSERT INTO empleado ( Documento, Nombres, Apellidos, Tel_fijo, Tel_celular, No_contrato, Fecha_inicio, Fecha_Fin, Sueldo, Cod_cargo, Usuario, Cod_jefe)VALUES('$documento', '$nombre', '$apellido', '$tel_fijo', '$tel_celular', '$no_contrato', '$fecha_inicio', '$fecha_fin', '$sueldo', '$cod_cargo', '$usuario', '$cod_jefe')")or die(mysql_error());
	echo "<script> location.href='registrar_empleado.html'</script>";
}
?>