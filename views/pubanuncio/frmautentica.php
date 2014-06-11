<div id="autentica" class="grid-60 push-20">

	<div class="areas grid-45 push-5">
			<div class="tippub grid-100">
				<label > YA HE PUBLICADO ANTES</label>
			</div>
			<p class="grid-100"> 
				Si ya has publicado antes, accede y edita tus 
				publicaciones o simplemente modifica tus datos.
			</p>
			<form id="frmlogin" class="grid-100">
				<label class="lb_loginpass grid-100">Correo:</label>
				<!-- <div id="clear"></div> -->
				<input class="loginpass grid-100" type="email" value="" name="email" placeholder="Ej: alguien@tucorreo.com" >
				<br>
				<label class="lb_loginpass1 grid-100">Clave:</label>
				<!-- <div id="clear"></div> -->
				<input class="loginpass grid-100" type="password" value="" name="pass" placeholder="Tu contraseña de publicacion">
				<br>
				<input type="button" id="btn_acceder" value="Acceder"><br>
				<div id="clear"></div><div id="clear"></div>
			</form>
	</div>
	<div class="areas grid-45 push-5">
			<div class="tippub">
				<label> PRIMERA PUBLICACION</label>
			</div>
			<p class="grid-70">
				Si esta es tu primera vez con nosotros,
				entonces registrate y publica en 1 solo paso.
			</p>
			<br>
			<input type="button" id="btn_ir" value="Publicar">
	</div>
	
</div>

<script type="text/javascript">
	$("#btn_ir").click(function(){
		$(".contenido").load("views/pubanuncio/frmreganun.php");
	});
	$("#btn_acceder").click(function(){
		$.ajax({
			type: "POST",
			url: "views/usuarios/prusuarios.php",
			data: $("#frmlogin").serialize(),
			success: function(data){
			$(".contenido").html(data);	
			}
		});
			return false;
	});

</script>
