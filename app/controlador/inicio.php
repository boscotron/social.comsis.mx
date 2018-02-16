<?php 
$out = $jmyWeb->cargar(["pagina"=>"inicio"]);
$out = $print[ot]['inicio'];
$jmyWeb->pre(['p'=>$out]);
$jmyWeb->pre(['p'=>$jmyWeb->pnt('paquetes_titulo')]);
if(in_array('pre',$pet)){ 
	$jmyWeb ->pre(["p"=>$out]); 
}else{
	echo $jmyWeb ->cargar_vista(["url"=>"inicio.php","data"=>$out]);
}
?>