<div class="mae_anuncios">
<?php
	include_once("../../Library/conexPdo.php");
	$conex = new Conexion;
	$sql = "select an_titulo,an_monto,an_fecpub from r_anuncios where an_status=1";
			$rs = $conex->getArray($sql);
			foreach($rs as $value){
				echo"<div class='det_anuncios grid-15'>";
					echo "<label class='lbl_anuncio'>".strtoupper($value['an_titulo'])."</label>";
					//echo"<div class='clear'></div>";
					if ($value['an_monto']>0) {
						echo "<label class='lbl_precioanun grid-100'>, Bs. ".$value['an_monto']."</label>";
					}else{
						echo "<label class='lbl_precioanun grid-100'>, precio a convenir</label>";
					}
					
					if ($value['an_fecpub']==date("Y-m-d")){
						echo  "<div id='minicalendario' class='grid-5'></div>";
					}	
				echo"</div>";
			}	
?>
</div>

