<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />    
    <title>Fourteen - Responsive Landing Page Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php $this->url_templet(); ?>lib/images/favicon.png">
    <meta name="description" content="">
    <meta name="author" content="">
        
    <!-- 1140px Grid styles for IE -->
    <!--[if lte IE 9]><link rel="stylesheet" href="lib/css/ie.css" type="text/css" media="screen" /><![endif]-->

    <!-- CSS concatenated and minified via ant build script-->
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>lib/css/style.css">
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>lib/css/animate.css">
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>lib/css/font-awesome.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- end CSS-->
    
    <script src="<?php $this->url_templet(); ?>lib/js/jquery-1.10.2.min.js"></script>
    <script src="<?php $this->url_templet(); ?>lib/js/jquery-migrate-1.2.1.js"></script>
    
</head>

<body>

    <div id="jmy_web"></div>
    <div id="jmy_web_tools"></div>

    <!--begin container -->
    <div id="container">
        
        <!--begin intro -->
        <div id="intro">
        
            <!--begin header_wrapper -->
            <header id="header_wrapper">
                
                <!--begin header -->    
                <div id="header" class="clearfix">

                    
                    <!--begin row -->
                    <div class="row">
                        
                        <!--begin twelvecol -->
                        <div class="twelvecol jmy_web_div" data-page="inicio" id="varialbe_titulo" data-editor="no">
                            
<?php $this->pnt('varialbe_titulo','

                            <!--begin logo -->            
                            <a href="index.html" id="logo">Fourteen</a>
                            <!--end logo -->
                            
                            <!--begin purchase button -->
                            <a href="#" class="purchase">Purchase Now</a>
                            <!--end purchase button -->
                             
                            <!--begin nav -->
                            <ul id="nav">
                                <li>
                                    <a href="#container">Home</a>
                                </li>
                                <li>
                                    <a href="#showcase">Showcase</a>
                                </li>
                                <li>
                                    <a href="#services">Services</a>
                                </li>
                                <li>
                                    <a href="#features">Features</a>
                                </li>
                                <li>
                                    <a href="#pricing">Pricing</a>
                                </li>
                                <li class="last">
                                    <a href="#subscribe">Subscribe</a>
                                </li>
                            </ul>
                            <!--end nav -->
                                                    '); ?>
                        </div>
                        <!--end twelvecol -->
                    
                    </div>
                    <!--end row -->
                        
                </div>
                <!--end header -->
                
            </header>
            <!--end header_wrapper -->
              <!--begin home section -->
            <section id="home">
            
                <div class="home_box bounce_fade">
                    
                    <span class="slider_text1">Create & share beautiful landing pages with our amazing custom template.</span>
                                            
                    <span class="slider_text2">We want to make your word beautiful. You can use our love & passion!</span>
                    
                    <a href="#" class="slider_text3"><i class="fa fa-apple"></i>&nbsp; Download app</a>
                
                    <a href="#" class="slider_text4">Discover more</a>
                    
                </div>
                                        
            </section>
            <!--end home section -->
            
        </div>