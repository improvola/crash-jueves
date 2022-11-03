<?php
	require_once("../model/modelo.php");
	$ingreso = new Ingreso();
	$pd = $ingreso->getIngreso();
	require_once("../view/vista.php");
?>
