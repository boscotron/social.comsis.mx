<?php

//$this->pre(['p'=>$data,'t'=>'Variables disponibles']);
$blog_templet = $data['blog_templet'];
$blog = $data['resultados'];
?>
<!-- Page title -->
<div class="page-title background2">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">                    
                <div class="page-title-heading">
                    <h1 class="title jmy_web_div" id="titulo_blog" data-page="blog" contenteditable="true"><?php echo ($blog_templet['titulo_blog']!='')? $blog_templet['titulo_blog']:'El <span>Blog.'; ?></span></h1>
                </div><!-- /.page-title-captions -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="index.html" class="jmy_web_div" id="bread_1" data-page="blog" contenteditable="true"><?php echo ($blog_templet['bread_1']!='')? $blog_templet['bread_1']:'Inicio'; ?></a></li>
                        <li><a href="blog.html" class="jmy_web_div" id="bread_2" data-page="blog" contenteditable="true"><?php echo ($blog_templet['bread_2']!='')? $blog_templet['bread_2']:'Welcome to our blog'; ?></a></li>
                        <li class="jmy_web_div" id="bread_3" data-page="blog" contenteditable="true"><?php echo ($blog_templet['bread_3']!='')? $blog_templet['bread_3']:'Blog Large Image'; ?></li>
                    </ul>                   
                </div><!-- /.breadcrumbs -->   
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div><!-- /.page-title --> 

<!-- Blog posts -->
<section class="main-content blog-posts background4 background_bottom">
    <div class="container">
        <div id="jmy_web_agregar_blog"></div>
        <div class="row">
            <div class="wrap-content-post">
                <div class="post-wrap">
                    <?php
                    for($i=0;$i<count($blog['otKey']);$i++){
                        $tmp=$blog['ot'][$blog['otKey'][$i]];
                        if($tmp['url']!='' && $tmp['titulo']!='' ){
                            $t =explode('src="', $tmp['imagen']);
                            $t =explode('"', $t[1]);
                            $tmp['imagen']=$t[0];
                            $img=($tmp['imagen']!='')?$tmp['imagen']:RUTA_ACTUAL.BASE_TEMPLET.'images/blog/1.jpg';
                            echo '<article class="post clearfix">
                                <div class="featured-post">
                                    <img src="'.$img.'" alt="image">
                                    <ul class="post-comment">           '.$tmp['fecha'].'
                                    </ul><!-- /.post-comment -->
                                </div><!-- /.feature-post -->
                                <div class="content-post">
                                    <h2 class="title-post"><a href="'.RUTA_ACTUAL.'blog/'.$tmp['url'].'">'.$tmp['titulo'].'</a></h2>
                                    <div class="entry-post excerpt">                              
                                        <p>'.$tmp['subtitulo'].'
                                        </p>
                                        <div class="more-link">
                                        <a href="'.RUTA_ACTUAL.'blog/'.$tmp['url'].'">Leer más</a>
                                        </div>
                                    </div>
                                </div><!-- /.content-post -->
                            </article>';
                        }
                    }?>
                    
                </div><!-- /.post-wrap -->  
                 <div class="blog-pagination">
                    <ul class="flat-pagination clearfix">    
                        <li class="next">
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </li>                               
                    </ul><!-- /.flat-pagination -->
                </div><!-- /.blog-pagination -->                  
            </div><!-- /.content-post -->  

            <div class="sidebar-post">
                <div class="sidebar">                 

                    <div class="widget widget_text widget_info">
                        <h5 class="widget-title jmy_web_div" id="titulo_desc_blog" data-page="blog" contenteditable="true"><?php echo ($blog_templet['titulo_desc_blog']!='')? $blog_templet['titulo_desc_blog']:'Descripción del blog'; ?></h5>
                        <div class="textwidget">                                
                            <p class="jmy_web_div" id="descripcion_blog" data-page="blog" contenteditable="true"><?php echo ($blog_templet['descripcion_blog']!='')? $blog_templet['descripcion_blog']:'Sed pellentesque nibh enim, quis euismod enim lacinia nec. Phasellus quam diam, semper in erat eu. Consectetur adipiscing elit. Sed pellentesque nibh enim, quis euismod enim lacinia nec.'; ?></p>
                            <div class="social-links">

                                <a href="#" class="jmy_web_div" id="redes_sociales_twiter" data-page="blog" contenteditable="true"><?php echo ($blog_templet['redes_sociales_twiter']!='')? $blog_templet['redes_sociales_twiter']:'<i class="fa fa-twitter"></i>'; ?></a>

                                <a href="#" class="jmy_web_div" id="redes_sociales_facebook" data-page="blog" contenteditable="true"><?php echo ($blog_templet['redes_sociales_facebook']!='')? $blog_templet['redes_sociales_facebook']:'<i class="fa fa-facebook"></i>'; ?></a>

                                <a href="#" class="jmy_web_div" id="redes_sociales_pinterest" data-page="blog" contenteditable="true"><?php echo ($blog_templet['redes_sociales_pinterest']!='')? $blog_templet['redes_sociales_pinterest']:'<i class="fa fa-pinterest"></i>'; ?></a>

                               
                            </div>                              
                        </div><!-- /.textwidget -->
                    </div>                            

                    <div class="widget widget-recent-news">
                        <h5 class="widget-title jmy_web_div" id="titulo_blog" data-page="blog" contenteditable="true" >Latest Posts</h5>
                        <ul class="popular-news clearfix">
                            <li>
                                <div class="thumb">
                                   <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>images/blog/s1.jpg" alt="image">
                                </div>
                                <div class="text">                        
                                    <h6>
                                        <a href="#">Graphic design work</a>
                                    </h6>    
                                    <p>27th July 2016</p>               
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                   <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>images/blog/s3.jpg" alt="image">
                                </div>
                                <div class="text">
                                    <h6><a href="#">Client branding project</a></h6>
                                    <p>27th July 2016</p>
                                    
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                   <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>images/blog/s2.jpg" alt="image">
                                </div>
                                <div class="text">
                                    <h6><a href="#">Thank you from us</a></h6>
                                    <p>27th July 2016</p>
                                    
                                </div>
                            </li>
                        </ul><!-- /.popular-news -->
                    </div><!-- /.widget-popular-news -->

                    <div class="widget widget_tag">
                        <h5 class="widget-title">Tags</h5>
                        <div class="tag-list">
                            <a class="active" href="#">Graphic Design</a>
                            <a href="#">Lifestyle</a>
                            <a href="#">Road Trip</a>
                            <a href="#">Vintage</a>
                            <a href="#">Photography</a>  
                            <a href="#">Branding</a>              
                        </div>
                    </div><!-- /.widget-tag -->
                </div><!-- /.sidebar -->
            </div><!-- /.sidebar-post -->            
        </div><!-- /.row -->           
    </div><!-- /.container -->   
</section>        