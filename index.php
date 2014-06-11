<html>
<head>
	<title>ANUNCIOSBOLIVAR.COM - Publica lo Que Quieras GRATIS !!</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/unsemantic/assets/stylesheets/unsemantic-grid-base.css" />
	<noscript>
	  <!--<link rel="stylesheet" href="css/unsemantic/assets/stylesheets/unsemantic-grid-mobile.css" />
	   <link rel="stylesheet" href="css/unsemantic/assets/stylesheets/unsemantic-grid-desktop.css" /> -->
	</noscript>
	<script>
	  var ADAPT_CONFIG = {
	    path: 'css/unsemantic/assets/stylesheets/',
	    dynamic: true,
	    range: [
	      '0 to 767px = unsemantic-grid-mobile.css',
	      '767px = unsemantic-grid-desktop.css'
	    ]
	  };
	</script>
	<script src="css/unsemantic/assets/javascripts/adapt.min.js"></script>
</head>



<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand " href="#"><img src="images/logo2.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <form class="navbar-form navbar-left " role="search">
        <div class="form-group">
          <input id="txtbuscar" class="textbox form-control " type="text" value="" name="busq" placeholder="¿Que estas Buscando?"  >
        </div>
        <button type="submit" class="btn btn-default botones" id="btn_encontrar" >Encontrar</button>
      </form>

    

      <ul class="nav navbar-nav navbar-right">
			
			<li id="li3"><a href="#" class="" id="patrocina">Patrocinar</a></li>
			<li id="li2"><a href="#" class="" id="anuncia">Anuncia Gratis</a></li>
			<li id="li4"><a href="#" class=""><img src="images/login.png"></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="busqueda">
		<!-- <form id="fmrbuscar">
			<input id="txtbuscar" class="textbox" type="text" value="" name="ced" placeholder="¿Que estas Buscando?" >
			<input type="button" id="btn_encontrar" value="Encontrar" class="botones">
		</form>	 -->
		<div id="clear"></div><div class="clear"></div> <div class="clear"></div> <div class="clear"></div> 
		<div id="categorias" class="grid-80 push-35">
		
				<div class="grid-5 "><a href="#" id="hogar" class="menuitem"><img style="width: 150%;" src="images/hogar.png"></a></div>
				<div class="grid-5"><a href="#" id="vehculo" class="menuitem"><img style="width: 150%;" src="images/car.png"></a></div>
				<div class="grid-5"><a href="#" id="electrodom" class="menuitem"><img style="width: 150%;" src="images/pc.png"></a></div>
				<div class="grid-5"><a href="#" id="servicios" class="menuitem"><img style="width: 150%;" src="images/servicios.png"></a></div>
				<div class="grid-5"><a href="#" id="educacion" class="menuitem"><img style="width: 150%;" src="images/aprende.png"></a></div>
				<div class="grid-5"><a href="#" id="musica" class="menuitem"><img style="width: 150%;" src="images/musica.png"></a></div>
				<div class="grid-5"><a href="#" id="varios" class="menuitem"><img style="width: 150%;" src="images/misc.png"></a></div>
			
		</div>
	</div>

	<div class="clear"></div> 
	<div class="contenido grid-100">
		
	</div>

</body>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/bootstrap/js/bootstrap.min.js">
<script type="text/javascript" src="js/jquery.form.min.js"></script>

	<script>
      $(document).ready(function(){
         $("#anuncia").click(function(){
            $(".contenido").load("views/pubanuncio/frmautentica.php");
         });
         $("#patrocina").click(function(){
            alert("Patrocinador");
         });
         $(".contenido").load("views/publicados/listados.php");
      });  
   </script>

</html>