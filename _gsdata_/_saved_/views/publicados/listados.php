<section class="mae_anuncios">
<?php
	include_once("../../Library/conexPdo.php");
	$conex = new Conexion;
	$sql = "select an_titulo,an_monto,an_fecpub from r_anuncios";
			$rs = $conex->getArray($sql);
			foreach($rs as $value){
				echo"<section class='det_anuncios'>";
					if ($value['an_fecpub']==date("Y-m-d")){
						echo  "<div id='minicalendario'></div>";
					}
					echo "<label class='lbl_anuncio'>".strtoupper($value['an_titulo'])."</label>";
					//echo"<div class='clear'></div>";
					if ($value['an_monto']>0) {
						echo "<label class='lbl_precioanun'>, Bs. ".$value['an_monto']."</label>";
					}else{
						echo "<label class='lbl_precioanun'>, precio a convenir</label>";
					}	
				echo"</section>";
			}	
?>
</section>

