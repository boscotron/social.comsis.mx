<?php
//require_once();
class JMY3WEB extends JMY3MySQL{
  public $out;
  private $tabla;
  private $modoEdicion;
  public $print;
  public function __construct(){
  	global $tabla;
  	$tabla = "vistaweb";
  	global $modoEdicion;
  	$modoEdicion = 1;
	 //$_SESSION['JMY3WEB']['add_js']=[];
}
public function url_templet(){
	echo RUTA_ACTUAL.BASE_TEMPLET;
}
public function url_inicio(){
	echo RUTA_ACTUAL;
}
  public function cargar($d=[],$o=['error'=>'datos insuficientes']){ /* cargar(["pagina"=>"blog","id"=>"titulo_nota"]); // id opcional */
  	global  $print;global $tabla;
  	if($d['pagina']!=''){
	  	$o = parent::ver(["TABLA"=>$tabla,"ID_F"=>$d['pagina']]);	  	
	  	//$this->pre(['p'=>$o]);
	  	$print =$o['ot'][$d['pagina']];

	  } return $o;
  }

  public function guardar($d=[],$r="no data"){
  	global $tabla;
  	if($d['id']!=''&&$d['pagina']!=''&&$d['valor']!=''){
  		parent::db([$tabla]);
  		//$d['opciones'] // guardar aparte
  		$t=[$d['id']=>$d['valor']];
  		$t=["TABLA"=>$tabla, 
			"ID_F"=>$d['pagina'],
			"A_D"=>TRUE, 
			"GUARDAR"=>$t	];
  		$r=parent::guardar($t);
	} return [$t,$r];
  }
  
  public function pre($d=[]){
	$o=$d['p'];$t=($d['t']!="")?"<h5>".$d['t']."</h5>":"";
	echo"$t<pre>";print_r($o);echo"</pre>";
  }
  public function pnt($d,$ph="Texto texto texto"){ // print(id, place holder);
  	global $print; 
  	echo ($print[$d]!='')?$print[$d]:$ph;
  }

  public function cargar_vista($d=[]){	
	global $print;
	global $modoEdicion;
	$data = $d["data"];
	if($modoEdicion){
		$this->cargar_js(['url'=>BASE_APP.'js/ckeditor/ckeditor.js']); // editor de textos
		$this->cargar_js(['url'=>BASE_APP.'js/jmy/jmyWeb.js']); // funciones jmy 
	}
	if(file_exists(BASE_TEMPLET.TEMPLET_HEADER)){
		$out = parent::ver([	
				"TABLA"=>"vistaweb", 		
				"ID_F"=>PAGE_HEADER
			]);
		$header_P = is_array($out['ot'])?$out['ot'][PAGE_HEADER]:["error"=>"no encontrado"];
		include(BASE_TEMPLET.TEMPLET_HEADER); 
	}	
	if(file_exists(BASE_TEMPLET.$d['url'])){
		include(BASE_TEMPLET.$d['url']);
	}else{
		if(file_exists(BASE_TEMPLET.'error404.php'))
			include(BASE_TEMPLET.'error404.php');
		else
			echo "error 404 ".$d['url']; 
	}	
	if(file_exists(BASE_TEMPLET.TEMPLET_FOOTER)){
		include(BASE_TEMPLET.TEMPLET_FOOTER);
	}
  }

  public function cargar_js($d=[]){	
	if(!is_array($_SESSION['JMY3WEB']['add_js']))
		$_SESSION['JMY3WEB']['add_js']=[];
	if($d['url']!="" && !in_array($d['url'],$_SESSION['JMY3WEB']['add_js']))
		$_SESSION['JMY3WEB']['add_js'][]=$d['url'];
	if($d['unico'])
		$_SESSION['JMY3WEB']['cargar_js_borrar'][]=$d['url'];


  }
  public function llamar_js($d=[],$tmp = ''){	
  	$this ->pre(['p'=>$_SESSION,'t'=>'SESSION']);
	if(is_array($_SESSION['JMY3WEB']['add_js'])){
		$key = array_keys($_SESSION['JMY3WEB']['add_js']);
		print_r($_SESSION['JMY3WEB']['add_js']);
		for($i=0;$i<count($key) ;$i++){
			if($_SESSION['JMY3WEB']['add_js'][$i]!='')
				$tmp .= '<script src="'.RUTA_ACTUAL.$_SESSION['JMY3WEB']['add_js'][$key[$i]].'"></script>'; 
			if(in_array($_SESSION['JMY3WEB']['add_js'][$i],$_SESSION['JMY3WEB']['cargar_js_borrar']))
				unset($_SESSION['JMY3WEB']['add_js'][$i]);
		}
		echo $tmp;
	}
  }
  private function sess($d=[]){
	/*$va = ($_SESSION['JMY3WEB']!="")?[]:json_decode(base64_decode($_SESSION['JMY3WEB']));
	if($d["nom"]!="" && $d["val"]!="")
		$va[$d["nom"]] = $d["val"];
	$_SESSION['JMY3WEB'] = base64_encode(json_encode($va));
	return $va;*/
  }
}