<section id="autentica">

	<div class="areas">
			<div class="tippub">
				<label > YA HE PUBLICADO ANTES</label>
			</div>
			<p> 
				Si ya has publicado antes, accede y edita tus 
				publicaciones o simplemente modifica tus datos.
			</p>
			<form id="frmlogin">
				<label class="lb_loginpass">Correo:</label>
				<input class="loginpass" type="email" value="" name="email" placeholder="Ej: alguien@tucorreo.com" >
				<br>
				<label class="lb_loginpass1">Clave:</label>
				<input class="loginpass" type="password" value="" name="pass" placeholder="Tu contraseña de publicacion">
				<br>
				<input type="button" id="btn_acceder" value="Acceder">
			</form>
	</div>
	<div class="areas">
			<div class="tippub">
				<label> PRIMERA PUBLICACION</label>
			</div>
			<p>
				Si esta es tu primera vez con nosotros,
				entonces registrate y publica en 1 solo paso.
			</p>
			<br>
			<input type="button" id="btn_ir" value="Publicar">
	</div>
	
</section>

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
