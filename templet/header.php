<?php
$linkWhathsApp ="https://api.whatsapp.com/send?phone=5215513709088&text=Hola,%20estoy%20interesado%20en%20cotizar%20un%20proyecto";
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-MX" lang="es-MX"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Social Comsis - Activamos tu marca en redes</title>

    <meta name="author" content="comsis.mx">
    <meta name="description" content="Somos un equipo al que le gusta ver sus ideas en funcionamiento. Creemos que el diseño publicitario no se limita a grandes empresas. Trabajamos para conceptualizar tu negocio, empapándonos de tus ideas combinado con nuestro conocimiento y creatividad.">
    <meta name="keywords" content="Redes, Gestión de redes Sociales, App, Desarrollo de aplicaciones móviles, web, web desing, diseño y desarrollo web, imagen empresarial, personaliza tu marca, Audiovisual, Videos animados, producción de video, postproduccion, fotografía corporativa, E-Commerce, ecommerce, comercio electronico, tienda virtual">

    <!-- Mobile Specific Metas -->

	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="<?php $this->url_templet(); ?>stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?php $this->url_templet(); ?>stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?php $this->url_templet(); ?>stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="<?php $this->url_templet(); ?>stylesheets/colors/color1.css" id="colors">
    
    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="<?php $this->url_templet(); ?>stylesheets/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php $this->url_templet(); ?>stylesheets/jmyweb.css">

    <!-- Favicon and touch icons  -->
    <link href="<?php $this->url_templet(); ?>icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="<?php $this->url_templet(); ?>icon/favicon.png" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head>                                 
<body class="header_sticky home4 has-top"> 
    <!-- Preloader -->
    <div id="jmy_web"></div>
    <div id="jmy_web_tools"></div>
    <div id="botonWhastAPP">
        <div class="col-md-3 text-right">
            <div class="textwidget"><p class="get-appointment">
                <a href="<?php echo $linkWhathsApp; ?>" id="btn_whatsapp" class="sombraObscura"><i class="fa fa-whatsapp rebote"  style="font-size: 40px"> </i> Envíanos un mensaje</a> 
            </p></div>
        </div>        
    </div>
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Cargando...</h2>
        </div>
    </section>   
   
        <div class="site-wrapper ">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-offset-md-1">  
                                         
                            <ul class="flat-information">
                                
                                <li class="address"><a href="+84905010025" class="jmy_web_div" id="header_direccion"  data-editor="no" data-page="header"><?php $this->pnt('header_direccion','<i class="fa fa-map-marker" aria-hidden="true"></i> Mérida Yucatán, México.',["secundario"=>"header"]); ?></a></li>

                                <li class="email jmy_web_div"  id="header_horario" data-page="header" data-editor="no"><?php 
                                $this->pnt('header_horario','<i class="fa fa-clock-o jmy_web_ico" aria-hidden="true"></i> Horario 10 am - 6 pm',["secundario"=>"header"]); ?></li>
                                    

                                <li class="phone jmy_web_div" id="header_telefono" data-page="header" data-editor="no"><?php 
                                $this->pnt('header_telefono','<i class="fa fa-phone"></i> 585555885',["secundario"=>"header"]); ?></li>



                            </ul>                    
                        </div><!-- /.col-md-10 -->       
                        <div class="col-md-3 text-right hidden-xs hidden-sm hidden-md">
                            <div class="textwidget"><p class="get-appointment">
                                <a href="<?php echo $linkWhathsApp; ?>" id="btn_whatsapp" class="sombraObscura"><i class="fa fa-whatsapp"  style="font-size: 40px"> </i> Envíanos un mensaje</a> 
                            </p></div>
                        </div>        
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.top -->

            <!-- Header -->            
            <header id="header" class="header header-style4 clearfix">
                <div class="container">
                    <div class="row">                 
                        <div class="header-wrap clearfix">
                            <div class="col-md-12">
                                <div id="logo" class="logo">
                                    <a href="<?php $this->url_inicio(); ?>" rel="home">
                                        <img src="<?php $this->url_templet(); ?>images/logo.png" alt="image">
                                    </a>
                                </div><!-- /.logo -->
                                <div class="btn-menu ">
                                    <span></span>
                                </div><!-- //mobile menu button -->

                                <div class="nav-wrap">                            
                                    <nav id="mainnav" class="mainnav">
                                        <ul class="menu"> 
                                            <li class="home"><a href="<?php $this->url_inicio(); ?>">Inicio</a></li>
                                            <li><a href="<?php $this->url_inicio(); ?>nosotros">Social Comsis</a>
                                            <ul class="submenu">     
                                                <li><a href="<?php $this->url_inicio(); ?>blog">Blog</a></li>
                                            </ul></li>
                                            <li><a href="<?php $this->url_inicio(); ?>servicios">Servicios</a>
                                                <ul class="submenu">                           
                                                    <li><a href="<?php $this->url_inicio(); ?>servicios/comsis-redes">Comsis Redes</a></li>
                                                    <li><a href="<?php $this->url_inicio(); ?>servicios/comsis-app">Comsis APP</a></li>
                                                    <li><a href="<?php $this->url_inicio(); ?>servicios/comsis-web">Comsis Web</a></li>
                                                    <li><a href="<?php $this->url_inicio(); ?>servicios/comsis-diseno">Comsis Diseño</a></li>
                                                    <li><a href="<?php $this->url_inicio(); ?>servicios/comsis-audiovisual">Comsis Audiovisual</a></li>
                                                    <li><a href="<?php $this->url_inicio(); ?>servicios/comsis-ecommerce">Comsis E-Commerce</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?php $this->url_inicio(); ?>paquetes">Paquetes</a>
                                                <ul class="submenu">                           
                                                    <li><a href="<?php $this->url_inicio(); ?>paquetes/paquete-local">Paquete Local</a></li>
                                                    <li><a href="<?php $this->url_inicio(); ?>paquetes/paquete-sucursal">Paquete Sucursal</a></li>
                                                    <li><a href="<?php $this->url_inicio(); ?>paquetes/paquete-empresa">Paquete Empresa</a></li>
                                                    <li><a href="<?php $this->url_inicio(); ?>paquetes/paquete-web">Paquete Web</a></li>
                                                    <li><a href="<?php $this->url_inicio(); ?>paquetes/paquete-e-commerce">Paquete E-Commerce</a></li>
                                                    <li><a href="<?php $this->url_inicio(); ?>paquetes/paquete-pizza">Paquete Pizza</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?php $this->url_inicio(); ?>contacto">Contacto</a></li>
                                        </ul><!-- /.menu -->
                                    </nav><!-- /.mainnav -->      
                                </div><!-- /.nav-wrap -->

                                <ul class="menu menu-extra  hidden-xs hidden-sm">     
                                    <li class="off-canvas">
                                        <a href="#"><i class="fa fa-bars"></i></a>
                                    </li>
                                </ul> 

                            </div><!-- /.col-md-12 -->              
                        </div><!-- /.header-inner -->                 
                    </div><!-- /.row -->
                </div>
            </header><!-- /.header -->