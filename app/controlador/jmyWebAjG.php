<?php 
$out=["error"=>"datos insuficientes"];
if($_POST['pagina']!=''&&$_POST['id']!=''&&$_POST['valor']!=''){
	$out=$jmyWeb->guardar(['pagina'=>$_POST['pagina'],'id'=>$_POST['id'],'valor'=>$_POST['valor'],'opciones'=>$_POST['opciones']]);
}elseif($_POST['pagina']!=''){
	$out = ['out'=>[]];
}
$out['POST']=$_POST;
echo json_encode($out);
?>
