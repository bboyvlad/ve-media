<form class="frmanuncios grid-80 push-10" action="views/pubanuncio/frmprocanun.php" method="post" id="frmreganun"> <!-- method="post" action="vistas/pregistro.php" -->
	<h2><span class="grid-25"> Nuevo Anuncio </span>
	<input type="text" placeholder="Titulo del Anuncio Aqui" name="titulo_anuncio" value="" class="textbox grid-60" id="tituloanuncio">
	</h2>
	<div class="clear"></div>
	<hr>
	<input id="fechanuncio" class="grid-10" type="text" value= "<?php echo date("d-m-Y"); ?>" name="fecha" disabled>
	<label id="lblfechanuncio" class="grid-15 label-info">Fecha Publicacion</label>
	<div class="clear"></div>
	<div class="grid-30">
		<label class="grid-100">* Nombres del Anunciante</label><br>
		<input class="textbox grid-60" type="text" value="" name="nomanun" >
		<br>
		<label class="grid-100" >* Email</label><br>
		<input class="textbox grid-60" type="email" value="" name="email" >
		<br>
		<label class="grid-100" >* Clave</label><br>
		<input class="textbox grid-60" type="password" value="" name="clave" >
		<br>
		<label class="grid-100" >* Telefono 1</label><br>
		<input class="textbox grid-60" type="text" value="" name="tel1" >
		<br>
		<label class="grid-100" >* Telefono 2</label><br>
		<input class="textbox grid-60" type="text" value="" name="tel2" >
		<br>
		<label class="grid-100" >* Categor&iacutea</label><br>
		<?php
		include_once("../../Library/conexPdo.php");
		$conex = new Conexion;
		$sql = "select codcat, descat from d_categorias";
				$rs = $conex->getArray($sql);
				echo"<select class='combobox grid-60' name='categoria'>";
				foreach($rs as $value){
					echo "<option value=".$value['codcat'].">".$value['descat']."</option>";
				}
				echo"</select>";
		?>
		<br>
		<label class="grid-100" >* Monto a Publicar</label><br>
		<input id="montobox" type="text" value="" name="precio" >
		<input class="check01" type="checkbox" name="checkprecio" value="1"><label id="chpre">A Convenir</label>
	</div>
	<div class="grid-30">
		<section id="descripcionanuncio">
			<label class="grid-100" >* Descripcion de la Publicacion</label><br>
			<textarea id="despub" class="textbox" type="text" value="" name="descripcion" cols="31" rows="9" onkeyup="countChar(this)" maxlength="220"></textarea>
			<label id="rcara">Caracteres Restantes: </label>
			<div id="numcaracter" ></div>
		</section>
	</div>
	<div class="grid-30">
		<div class="imagenesauncio">
				
		</div>
		<div class="clear"></div>
		<div class="grid-90 push-15">
			<div class="miniaturaimg"><img src=""></div>
			<div class="miniaturaimg"><img src=""></div>
			<div class="miniaturaimg"><img src=""></div>
			<div class="miniaturaimg"><img src=""></div>
			<div class="miniaturaimg"><img src=""></div>
			<div class="miniaturaimg"><img src=""></div>
		</div>
	</div>
	<div class="clear"></div>

	<hr>
	<input type="submit" id="btn_anunciar" value="Anunciar Gratis" class="frmbotones grid-15">
</form>

<script type="text/javascript" src="views/pubanuncio/frmreganun.js"></script>
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