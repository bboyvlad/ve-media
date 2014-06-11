<?php
include_once("../../Library/conexPdo.php");
$conex = new Conexion;

$user=$_POST['email'];
$pass=$_POST['pass'];

$query="select a_passwd from r_anunciantes where a_mail='$user'";
		$rs = $conex->getArray($query);
		foreach($rs as $value){
			$a_clave=$value["a_passwd"];
		}
		
 if ($pass==$a_clave) {
 	echo "
 		<script type='text/javascript'>
			$('.contenido').load('views/usuarios/cpanel_an/cpanel_an.php');
		</script>
 	";
 }else{
 	echo "no va";
 }

?>
