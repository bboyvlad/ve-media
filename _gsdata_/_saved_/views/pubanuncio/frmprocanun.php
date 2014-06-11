<?php
	//conexion PDO
	include_once("../../Library/conexPdo.php");
	$conex = new Conexion;
	//twitter
	require('twitter.php');
	//Recibo Aqui los Parametros del Formulario
	$an_titulo=$_POST['titulo_anuncio'];
	//Cuadro la Fecha pa que mysql la acepte bien
	$an_fecpub=date("Y-m-d");
	//Continuo con el resto de los Campos
	$an_anunciante=$_POST['nomanun'];
	$an_desanun=$_POST['descripcion'];
	
	$an_correo=$_POST['email'];
	$a_passwd=$_POST['clave'];

	$an_telefono1=$_POST['tel1'];
	$an_telefono2=$_POST['tel2'];
	$an_monto=$_POST['precio'];
	$an_codcat=$_POST['categoria'];
	$an_rutagalery="ruta/de/la/galeria/";
	
		//Reviso si el Correo Existe
		$c_query="select count(a_mail) as cantidad from r_anunciantes where a_mail='$an_correo'";
		$c_rs = $conex->getArray($c_query);
		foreach($c_rs as $value){
			$ex=$value["cantidad"];
		}

		if ($ex>0) {
			//Verifico la Clave y El Pass a ver si fue que se le olvido
			$query="select a_passwd from r_anunciantes where a_mail='$an_correo'";
			$rs = $conex->getArray($query);
			foreach($rs as $value){
				$a_clave=$value["a_passwd"];
			}
		
 			if ($a_passwd==$a_clave) {
 				//El Usuario ya ha Publicado antes, se guardara la publicacion pero en Status 0
				$an_status='0';
				$publica=true;

 			}else{
 				//Tendra que Recuperar la Contraseña
 				
 				$publica=false;
 		
 			}

		}else{
			//El Usuario es primera vez que publica, asi que se registra y se 
			$an_status='1';
			//Registro Primero el Anunciante
			$datos_an = array(
						"a_anunciante" => $an_anunciante,
						"a_telefono1" => $an_telefono1,
						"a_telefono2" => $an_telefono2,
						"a_mail" => $an_correo,
						"a_status"=>$an_status,
						"a_passwd"=>$a_passwd,
						);
			$conex->qqInsert("r_anunciantes",$datos_an);
			$publica=true;	
		}

		if ($publica==true){
			//Luego obtengo su ID
			$an_query="select a_id from r_anunciantes where a_mail='$an_correo'";
			$rs = $conex->getArray($an_query);
			foreach($rs as $value){
				$a_id=$value["a_id"];
			}
			//Registro el anuncio
			$datos = array(
						"an_titulo" => $an_titulo,
						"a_id" => $a_id,
						"an_desanun" => $an_desanun,
						"an_monto"=>$an_monto,
						"an_status"=>$an_status,
						"an_fecpub" =>$an_fecpub,
						"an_rutagallery"=>$an_rutagalery,
						"an_codcat"=>$an_codcat,
						);
			$conex->qqInsert("r_anuncios",$datos);
			//Tambien debo aprovechar registrarlo, y de paso enviarle un correo (con sus datos de registro) donde el puede desactivar el anuncio, y tambien decirle cuanto tiempo estará alli.
			//Publico el Anuncio en Twitter
			$mensaje = "$an_titulo, ver mas..";
			$twitter= $connection->post('statuses/update', array('status' => $mensaje));
			
			}			
?>



