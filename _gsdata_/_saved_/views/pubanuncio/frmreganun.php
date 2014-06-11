<form class="frmanuncios" action="views/pubanuncio/frmprocanun.php" method="post" id="frmreganun"> <!-- method="post" action="vistas/pregistro.php" -->
	<h2>Nuevo Anuncio
	<input id="tituloanuncio" class="textbox" type="text" value="" name="titulo_anuncio" placeholder="Titulo del Anuncio Aqui" >
	</h2>
	<hr>
	<input id="fechanuncio" type="date" value= "<?php echo date("d-m-Y"); ?>" name="fecha" disabled>
	<label id="lblfechanuncio">Fecha Publicacion</label>
	<br>
	<label>* Nombres del Anunciante</label><br>
	<input class="textbox" type="text" value="" name="nomanun" >
	<br>
	<label>* Email</label><br>
	<input class="textbox" type="email" value="" name="email" >
	<br>
	<label>* Clave</label><br>
	<input class="textbox" type="password" value="" name="clave" >
	<br>
	<label>* Telefono 1</label><br>
	<input class="textbox" type="text" value="" name="tel1" >
	<br>
	<label>* Telefono 2</label><br>
	<input class="textbox" type="text" value="" name="tel2" >
	<br>
	<label>* Categor&iacutea</label><br>
	<?php
	include_once("../../Library/conexPdo.php");
	$conex = new Conexion;
	$sql = "select codcat, descat from d_categorias";
			$rs = $conex->getArray($sql);
			echo"<select class='combobox' name='categoria'>";
			foreach($rs as $value){
				echo "<option value=".$value['codcat'].">".$value['descat']."</option>";
			}
			echo"</select>";
	?>
	<br>
	<label>* Monto a Publicar</label><br>
	<input id="montobox" type="text" value="" name="precio" >
	<input class="check01" type="checkbox" name="checkprecio" value="1"><label id="chpre">A Convenir</label>
	<div class="clear"></div>
	<section id="descripcionanuncio">
		<label>* Descripcion de la Publicacion</label><br>
		<textarea id="despub" class="textbox" type="text" value="" name="descripcion" cols="31" rows="9" onkeyup="countChar(this)" maxlength="220"></textarea>
		<label id="rcara">Caracteres Restantes: </label>
		<div id="numcaracter" ></div>
	</section>
	<div class="imagenesauncio">
			<div class="miniaturaimg"><img src=""></div>
			<div class="miniaturaimg"><img src=""></div>
			<div class="miniaturaimg"><img src=""></div>
			<div class="miniaturaimg"><img src=""></div>
			<div class="miniaturaimg"><img src=""></div>
			<div class="miniaturaimg"><img src=""></div>
	</div>
	
	<div class="clear"></div>
	<hr>
	<input type="submit" id="btn_anunciar" value="Anunciar Gratis" class="frmbotones">
</form>
<script>


    function countChar(val) {
      var len = val.value.length;
      if (len >= 500) {
        val.value = val.value.substring(0, 500);
      } else {
        $('#numcaracter').text(220 - len);
      }
    };

</script>