<!-- Slider -->
<div class="tp-banner-container" id="home">
    <div class="tp-banner" >
        <ul>
            <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                <img src="http://social.comsis.mx/att/carpeta/slider1.jpg" alt="slider-image" />
                <div class="tp-caption sfl title-slide center" data-x="319" data-y="300" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                    Creative Ideas
                </div>  
                <div class="tp-caption sfr desc-slide center" data-x="363" data-y="260" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                   Creating beautiful products
                </div>    
                <div class="tp-caption sfl flat-button-slider bg-button-slider-32bfc0" data-x="420" data-y="410" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="#">Read more</a> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>

                <div class="tp-caption sfr flat-button-slider" data-x="600" data-y="410" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="#">Contact us</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>
            </li>

            <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                <img src="http://social.comsis.mx/att/carpeta/slider2.jpg" alt="slider-image" />
                <div class="tp-caption sfr title-slide center" data-x="0" data-y="250" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                    Your Business
                </div>  
                <div class="tp-caption sfr desc-slide center" data-x="0" data-y="215" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                   what is 
                </div>    

                <div class="tp-caption sfr content-slide text-white center" data-x="0" data-y="356" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut">
                With the combination of responsive design and parallax animations, this theme will<br> provide an optimal viewing experience and will make your website look great on across<br> wide range of devices and screen sizes. 
                </div>                            

                <div class="tp-caption sfr flat-button-slider bg-button-slider-32bfc0" data-x="0" data-y="450" data-speed="1000" data-start="2500" data-easing="Power3.easeInOut"><a href="#">Read more</a> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>
            </li>

            <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                <img src="http://social.comsis.mx/att/carpeta/slider2.jpg" alt="slider-image" />
                <div class="tp-caption sfl title-slide center" data-x="605" data-y="255" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                    Story Theme
                </div>  
                <div class="tp-caption sfr desc-slide center" data-x="605" data-y="215" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                   Vivamus malesuada
                </div>  

                 <div class="tp-caption sfr content-slide text-white center" data-x="605" data-y="356" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut">
                Duis bibendum lorem non velit sodales sollicitudin. 
                Vestibulum sed diam felis. Vivamus <br>malesuada
                placerat pulvinar risus ullamcorper non.
                </div>                               
                <div class="tp-caption sfl flat-button-slider bg-button-slider-32bfc0" data-x="605" data-y="430" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="#">Read more</a> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>

                <div class="tp-caption sfr flat-button-slider" data-x="790" data-y="430" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="#">Contact us</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>
            </li>
        </ul>
    </div>
</div>

<section class="flat-row no-pad  clearfix background1">
    <div class=" padl60">
        <div class="flat-spacer height60"></div>
        <div class="row">
            <?php 
            $servicios = [
                            [   "titulo"=>"Redes",
                                "icon"=>"fa fa-users",
                                "desc"=>"Manejo de tus redes sociales",
                                "url"=>RUTA_ACTUAL."servicios/comsis-redes",
                            ],
                            [   "titulo"=>"APP",
                                "icon"=>"fa fa-mobile",
                                "desc"=>"Desarrollo de aplicaciones web",
                                "url"=>RUTA_ACTUAL."servicios/comsis-app",
                            ],
                            [   "titulo"=>"Web",
                                "icon"=>"fa fa-link",
                                "desc"=>"Diseño web",
                                "url"=>RUTA_ACTUAL."servicios/comsis-web",
                            ],
                            [   "titulo"=>"Diseño",
                                "icon"=>"fa fa-paint-brush",
                                "desc"=>"Diseño empresarial e imagen coorporativa",
                                "url"=>RUTA_ACTUAL."servicios/comsis-diseno",
                            ],
                            [   "titulo"=>"Audiovisual",
                                "icon"=>"fa fa-play-circle",
                                "desc"=>"Videos coorporativos",
                                "url"=>RUTA_ACTUAL."servicios/comsis-audiovisual",
                            ],
                            [   "titulo"=>"E-Commerce",
                                "icon"=>"fa fa-shopping-cart",
                                "desc"=>"Tiendas en línea",
                                "url"=>RUTA_ACTUAL."servicios/comsis-ecommerce",
                            ],
                        ];
            for($i=0;$i<count($servicios);$i++){ 
                echo '
            <div class="col-md-2 col-sm-4 col-xs-4">
                <div class="iconbox color-white left">                    
                    <div class="box-header">
                        <i class="'.$servicios[$i]['icon'].' fa-x5" aria-hidden="true"></i>                  
                        <div class="box-title " ><a href="'.$servicios[$i]['url'].'">'.$servicios[$i]['titulo'].'</a></div>
                    </div>
                    <div class="box-content jmy_web_div" id="nosotros_d_'.$i.'" data-page="inicio" data-editor="no" >'.$this->pnt('nosotros_d_'.$i, $servicios[$i]['desc'],['return'=>1]).'</div>
                </div><!-- /.iconbox -->
            </div><!-- /.col-md-4 -->
            '; } ?>
        </div>
        <div class="flat-spacer height60"></div>
    </div>                  
</section>   
<!-- About -->
<section class="flat-row about background-color border-bottom info-inicio">
    <div class="container">                    
        <div class="row">
            <div class="col-md-12">  
                <h3 class="bskH3 jmy_web_div" id="tituloH3" data-page="inicio"  >
                    <?php $this->pnt('tituloH3','¿Por qué es importante tener presencia en Internet?');
                             ?> </h3>
                <h2 class="bskH2 jmy_web_div" id="tituloH2" data-page="inicio"  >
                    <?php $this->pnt('tituloH2','¿Por qué es importante tener presencia en Internet?'); ?> </h2>
            </div>
        </div>                
        <div class="row">
            <div class="col-md-3">
                <div class="iconbox style4 circle">                    
                    <div class="box-header">
                        <i class="fa fa-bullseye" aria-hidden="false"></i>
                        <div class="box-title jmy_web_div" id="tip_titulo_1" data-page="inicio" data-editable="no"  ><a href="#">
                            <?php  $this->pnt('tip_titulo_1','Titulo Tip');?>
                            </a></div>
                    </div>
                    <div class="box-content jmy_web_div" id="tip_desc_1" data-page="inicio"  >
                       <?php $this->pnt('tip_desc_1','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.');
                          ?>
                    </div>                        
                </div><!-- /.iconbox -->                            
            </div><!-- /.col-md-3 -->
            <div class="col-md-3">
                <div class="iconbox style4 circle">                    
                    <div class="box-header">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <div class="box-title jmy_web_div" id="tip_titulo_2" data-page="inicio" data-editable="no"  ><a href="#">
                            <?php $this->pnt('tip_titulo_2','Titulo Tip'); ?></a></div>
                    </div>
                    <div class="box-content jmy_web_div" id="tip_desc_2" data-page="inicio"  >
                       <?php $this->pnt('tip_desc_2','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.');?>
                    </div>                        
                </div><!-- /.iconbox -->                            
            </div><!-- /.col-md-3 -->
            <div class="col-md-3">
                <div class="iconbox style4 circle">                    
                    <div class="box-header">
                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                        <div class="box-title jmy_web_div" id="tip_titulo_3" data-page="inicio" data-editable="no"  ><a href="#">
                            <?php $this->pnt('tip_titulo_3','Titulo Tip'); ?></a></div>
                    </div>
                    <div class="box-content jmy_web_div" id="tip_desc_3" data-page="inicio"  >
                       <?php $this->pnt('tip_desc_3','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.');
                            ?>
                    </div>                        
                </div><!-- /.iconbox -->                            
            </div><!-- /.col-md-3 -->
            <div class="col-md-3">
                <div class="iconbox style4 circle">                    
                    <div class="box-header">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <div class="box-title jmy_web_div" id="tip_titulo_4" data-page="inicio" data-editable="no" ><a href="#">                            
                            <?php $this->pnt('tip_titulo_4','Titulo Tip'); ?>
                            </a></div>
                    </div>
                    <div class="box-content jmy_web_div" id="tip_desc_4" data-page="inicio"  >
                       <?php $this->pnt('tip_desc_4','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.'); ?>
                    </div>                        
                </div><!-- /.iconbox -->                            
            </div><!-- /.col-md-3 -->

       
        </div>      
    </div><!-- /.container -->   
</section>  

<section class="flat-row paquetes">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section text-center">
                    <h1 class="title jmy_web_div" id="paquetes_titulo" data-page="inicio"  >
                        <?php $this->pnt('paquetes_titulo','Título paquetes'); ?>                        
                    </h1>  
                </div>
                <div class="flat-spacer height30"></div>
            </div><!-- /.col-md-12 -->
        </div>        
        <div class="row">
            <div class="col-md-12">
                <div class="images-box  clear-fix ">  <div class="jmy_web_div" id="paquete_img_1" data-page="inicio"> <?php $this->pnt('paquete_img_1','<img src="'.RUTA_ACTUAL.BASE_TEMPLET.'/images/paquetes/2.jpg" alt="serives"> '); ?> </div>
                    <div class="box-content descripcionServicios">
                        <div class="box-title">
                            <a href="#" class="jmy_web_div" id="paquete_titulo_1" data-page="inicio"  data-editor="no" >
                            <?php $this->pnt('paquete_titulo_1','Título paquetes'); ?>
                            </a>
                        </div>  
                        <div class="jmy_web_div" id="paquete_descripcion_1" data-page="inicio"  >
                            <?php $this->pnt('paquete_descripcion_1','Descripción corta del paquete'); ?>
                         </div>
                         <a href="<?php $this->url_inicio(); ?>paquetes/paquete-local" class="box-redmore">Leer más</a>
                    </div>                                
                </div><!-- /.images-box -->    

                <div class="images-box  clear-fix"><div class="jmy_web_div" id="paquete_img_2" data-page="inicio"> <?php $this->pnt('paquete_img_2','<img src="'.RUTA_ACTUAL.BASE_TEMPLET.'/images/paquetes/3.jpg" alt="serives"> '); ?> </div>
                    <div class="box-content descripcionServicios">
                        <div class="box-title">
                            <a href="#" class="jmy_web_div" id="paquete_titulo_2" data-page="inicio"  data-editor="no" >
                                <?php $this->pnt('paquete_titulo_2','Título paquetes'); ?>
                            </a>
                        </div>  
                        <div class="jmy_web_div" id="paquete_descripcion_2" data-page="inicio"  >
                            <?php $this->pnt('paquete_descripcion_2','Descripción corta del paquete'); ?>
                         </div><a href="<?php $this->url_inicio(); ?>paquetes/paquete-sucursal" class="box-redmore">Leer más</a>
                    </div>                                
                </div><!-- /.images-box -->    

                <div class="images-box  clear-fix show">   <div class="jmy_web_div" id="paquete_img_3" data-page="inicio"> <?php $this->pnt('paquete_img_3','<img src="'.RUTA_ACTUAL.BASE_TEMPLET.'/images/paquetes/4.jpg" alt="serives"> '); ?> </div>
                    <div class="box-content descripcionServicios">
                        <div class="box-title">
                            <a href="#" class="jmy_web_div" id="paquete_titulo_3" data-page="inicio"  data-editor="no" >
                                <?php $this->pnt('paquete_titulo_3','Título paquetes'); ?>
                            </a>
                        </div>  
                        <div class="jmy_web_div" id="paquete_descripcion_3" data-page="inicio"  >
                            <?php $this->pnt('paquete_descripcion_3','Descripción corta del paquete'); ?>
                         </div>
                        <a href="<?php $this->url_inicio(); ?>paquetes/paquete-empresa" class="box-redmore">Leer más</a>
                    </div>                                
                </div><!-- /.images-box -->
                <div class="images-box  clear-fix show">  <div class="jmy_web_div" id="paquete_img_4" data-page="inicio"> <?php $this->pnt('paquete_img_4','<img src="'.RUTA_ACTUAL.BASE_TEMPLET.'/images/paquetes/2.jpg" alt="serives"> '); ?> </div>
                    <div class="box-content descripcionServicios">
                        <div class="box-title">
                            <a href="#" class="jmy_web_div" id="paquete_titulo_4" data-page="inicio"  data-editor="no" >
                            <?php $this->pnt('paquete_titulo_4','Título paquetes'); ?>
                            </a>
                        </div>  
                        <div class="jmy_web_div" id="paquete_descripcion_4" data-page="inicio"  >
                            <?php $this->pnt('paquete_descripcion_4','Descripción corta del paquete'); ?>
                         </div>
                         <a href="<?php $this->url_inicio(); ?>paquetes/paquete-local" class="box-redmore">Leer más</a>
                    </div>                                
                </div><!-- /.images-box -->    

                <div class="images-box  clear-fix"><div class="jmy_web_div" id="paquete_img_5" data-page="inicio"> <?php $this->pnt('paquete_img_5','<img src="'.RUTA_ACTUAL.BASE_TEMPLET.'/images/paquetes/3.jpg" alt="serives"> '); ?> </div>
                    <div class="box-content descripcionServicios">
                        <div class="box-title">
                            <a href="#" class="jmy_web_div" id="paquete_titulo_5" data-page="inicio"  data-editor="no" >
                                <?php $this->pnt('paquete_titulo_5','Título paquetes'); ?>
                            </a>
                        </div>  
                        <div class="jmy_web_div" id="paquete_descripcion_5" data-page="inicio"  >
                            <?php $this->pnt('paquete_descripcion_5','Descripción corta del paquete'); ?>
                         </div><a href="<?php $this->url_inicio(); ?>paquetes/paquete-sucursal" class="box-redmore">Leer más</a>
                    </div>                                
                </div><!-- /.images-box -->    

            </div><!-- /.col-md-12 -->
        </div>       
    </div><!-- /.container -->   
</section>
<!-- Blog -->
<section class="flat-row blog parallax parallax5 background4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section text-center color-white">
                    <h1 class="title jmy_web_div" id="titulo_blog" data-page="inicio" data-editor="no" >
                            <?php $this->pnt('titulo_blog',"Let's blog"); ?> </a></h1>                                  
                </div>
            </div><!-- /.col-md-12 -->
        </div>
        <div class="row">
            <div class="col-md-12"><div id="jmy_web_agregar_blog"></div>
                <div class="blog-shortcode blog-carosuel-wrap">
                    <div class="blog-carosuel">
                        
                        <?php
                        $blog = $data['blog'];
                       // $this ->pre(['p'=>$blog,'t'=>'TITULO_ARAY']);
                    for($i=0;$i<count($blog['otKey']);$i++){
                        $tmp=$blog['ot'][$blog['otKey'][$i]];
                        if($tmp['url']!='' && $tmp['titulo']!='' ){
                            $t =explode('src="', $tmp['imagen']);
                            $t =explode('"', $t[1]);
                            $tmp['imagen']=$t[0];
                            $img=($tmp['imagen']!='')?$tmp['imagen']:RUTA_ACTUAL.BASE_TEMPLET.'images/blog/1.jpg';
                            
                            echo ' <article class="post clearfix">
                                    <div class="featured-post">
                                        <ul class="post-meta">
                                            <li class="month">
                                               '.$tmp['fecha'].'
                                            </li>
                                        </ul><!-- /.post-meta -->
                                    </div><!-- /.feature-post -->
                                    <div class="content-post">
                                        <h2 class="title-post"><a href="'.RUTA_ACTUAL.'blog/'.$tmp['url'].'">'.$tmp['titulo'].'</a></h2> 
                                        <div class="entry-post excerpt">
                                            <p>'.$tmp['subtitulo'].'
                                            </p>
                                        </div>                         
                                        <ul class="meta-post clearfix">
                                            <li class="avatar"> 
                                                <a href="'.RUTA_ACTUAL.'blog/'.$tmp['url'].'"><img src="'.$img.'" alt="blog" ></a>
                                            </li>
                                        </ul><!-- /.meta-post -->
                                    </div><!-- /.content-post -->
                                </article>';


                        }
                    }?>

                    </div>
                </div>
            </div>
        </div>
    </div> 
</section> 
