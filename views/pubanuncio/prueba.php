<?php
	include_once("../../Library/conexPdo.php");
	$conex = new Conexion;
		$an_correo="eddfernandez@gmail.com";

		$c_query="select count(a_mail) as cantidad from r_anunciantes where a_mail='$an_correo'";
		$c_rs = $conex->getArray($c_query);
		foreach($c_rs as $value){
			$ex=$value["cantidad"];
		}
		
		if ($ex>0) {
			$an_status='0';
		}else{
			$an_status='1';
		}
		echo $ex;
		echo $c_query;
		echo $an_status;
?>


