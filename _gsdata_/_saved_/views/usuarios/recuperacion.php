<section id="recupera_passwd">
	<p>Hemos detectado que ya estas registrado y que tu contraseña es incorrecta, tienes problemas para publicar?</p>
	<form id="frmrecupera_passwd">
		<label>Recupera tu Clave</label>
		<hr>
		<label>Correo Electronico para Recuperar tu Clave</label><br>
		<input type="email" name="r_email" id="btn_busq_mail"placeholder="Ej. tucorreo@gmail.com"><br>
		<section id="op_recup">

		</section>
		<hr>
		<input type="button" id="btn_busq" value="Buscar">
	</form>
</section>

<script>
	$("#btn_busq_mail").click(function(){
	<?php
	include_once("../../Library/conexPdo.php");
	$conex = new Conexion;
		$an_correo=$_POST['r_email'];
		echo $an_correo;
		// $c_query="select count(a_mail) as cantidad from r_anunciantes where a_mail='$an_correo'";
		// $c_rs = $conex->getArray($c_query);
		// foreach($c_rs as $value){
		// 	$ex=$value["cantidad"];
		// }
	?>

		$("#op_recup").load("views/pubanuncio/frmreganun.php");
	});
</script>