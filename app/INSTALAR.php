<?php
require(RUTA_APP."class/jmy3mysql.class.php"); $jmy = new JMY3MySQL();
require(RUTA_APP."class/jmy3webHelp.class.php"); $jmyWeb = new JMY3WEB();




$cu=new mysqli(DB_HO,DB_US,DB_PA,DB_DB);

if($cu->connect_error){$error='Error de Conexión ('.$mysqli->connect_errno.')'.$mysqli->error;}else{

$n='CREATE TABLE IF NOT EXISTS `cat_d` (

  `ID` int(11) NOT NULL AUTO_INCREMENT,

  `NAME` varchar(250) NOT NULL,

  PRIMARY KEY (`ID`),

  UNIQUE KEY `NAME` (`NAME`)

) ENGINE=MyISAM DEFAULT CHARSET=latin1;';

if(!$cu->query($n)){$g['cat_d'] = "Tabla existente-".$cu->error;}   

$g['cat_d'] = 'DB cat Install';

}



$g['db'] = $jmyweb->db(['blog','vistaweb','estadisticas']);		



$jmyWeb ->pre(['p'=>$g,'t'=>'Estado del instalador']);
