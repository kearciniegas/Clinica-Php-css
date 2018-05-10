<?php
if (isset($_POST['guardar'])) 
{$cod=$_POST['cod']; 
$tipo=$_POST['tipo']; 
$marc=$_POST['marc'];
$ref=$_POST['ref'];
$cant=$_POST['cant'];
$val_pro=$_POST['val_pro'];
$val_vent= ($val_pro+($val_pro*(20/100)));
$ganancia=($val_vent-$val_pro);
	$mysql = new mysqli("localhost","root","","zapateria");
	$mysql = $mysql -> query("INSERT INTO registro(cod, tipo, marc, ref, cant, val_pro, val_vent, ganancia)VALUES('$cod', '$tipo', '$marc', '$ref', '$cant', '$val_pro', '$val_vent', '$ganancia')")or die(mysql_error());
	echo "<script> location.href='registrar.html'</script>";}
?>