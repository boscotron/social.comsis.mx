<?php
    
   // $blogS = $data[$data['id']];
    //$this ->pnt(id, place holder);
   // $this ->pre(['p'=>$data,'t'=>'data']);
   // $this ->pre(['p'=>$blogS,'t'=>'blogS']);
   // $this ->pre(['p'=>$data['id'],'t'=>'blogS']);
    $blog = $data['id'];
   // echo $blog;
?>
<!-- Page title -->
<div class="page-title background2">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">                    
                <div class="page-title-heading">
                    <h1 class="title jmy_web_div" data-tabla="blog" data-page="<?php echo $blog; ?>" id="titulo" ><?php $this->pnt('titulo','Titulo del blog.'); ?></span></h1>
                </div><!-- /.page-title-captions -->
                <div class="breadcrumbs jmy_web_div" data-tabla="blog" data-page="<?php echo $blog; ?>" id="subtitulo" ><?php $this->pnt('subtitulo','
                    <ul>
                        <li>Descripción corta</li>
                    </ul>'); ?>
                </div><!-- /.breadcrumbs -->   
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div><!-- /.page-title --> 

<!-- Blog posts -->
<section class="main-content blog-posts blog-single  background6">
    <div class="container">
        <div class="row">
            <div class="wrap-content-post">
                <div class="post-wrap">
                    <article class="post clearfix">
                        <div class="featured-post jmy_web_div" id="imagen" data-page="<?php echo $blog; ?>" data-tabla="blog">
                            <?php $this->pnt('imagen','
                            <img src="'.$this->url_templet(["return"=>true]).'images/blog/1.jpg" alt="image">'); ?>
                        </div><!-- /.feature-post -->

                        <div class="content-post">
                            <div class="jmy_web_div" id="cabeza" data-page="<?php echo $blog; ?>" data-tabla="blog">
                                
                                <h2 class="title-post jmy_web_div" id="fecha" data-page="<?php echo $blog; ?>" data-tabla="blog" data-editor="no"><?php $this->pnt('fecha',date('Y').'/'.date('m').'/'.date('d')); ?></h2>                          
                                <ul class="meta-post clearfix">
                                    <li class="author">
                                        <a href="#" class=" jmy_web_div" id="nombre_autor" data-page="<?php echo $blog; ?>" data-tabla="blog" data-editor="no"> <?php $this->pnt('nombre_autor','Nombre del autor'); ?></a>    
                                    </li>
                                    <li class="categories jmy_web_div bsk_tags" id="tags" data-page="<?php echo $blog; ?>" data-tabla="blog" data-editor="no"> <?php $this->pnt('tags','Tag 1, Tag 2, separado por comas'); ?>
                                    </li>
                                </ul><!-- /.meta-post -->
                            </div>

                            <div class="entry excerpt jmy_web_div" id="post" data-page="<?php echo $blog; ?>" data-tabla="blog"><?php $this->pnt('post','<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat sit amet, consectetuer adipiscing elit, sed diam nonumm. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat sit amet, consectetuer adipiscing elit, sed diam nonumm.
                                </p>
                                <blockquote>                                        
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.
                                </blockquote>                                
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>'); ?></div>
                            <!--
                            <div class="direction">
                                <ul>                                        
                                    <li>
                                        <div class="black-button"><a href="#" rel="prev">Prev Post</a></div>
                                    </li>                 
                                    
                                    <li>
                                        <div class="accent-button"><a href="" rel="next">Next Post</a></div>
                                    </li>                                             
                                </ul>
                            </div>
                        -->
                        </div><!-- /.content-post -->
                    </article>    

                    
                </div><!-- /.post-wrap -->                 
            </div><!-- /.content-post -->  

            <div class="sidebar-post">

                    <div class="widget widget_text widget_info lateral-blog">
                        <h5 class="widget-title">About Me</h5>
                        <div class="textwidget">                                
                            <p>Sed pellentesque nibh enim, quis euismod enim lacinia nec. Phasellus quam diam, semper in erat eu. Consectetur adipiscing elit. Sed pellentesque nibh enim, quis euismod enim lacinia nec.</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>                              
                        </div><!-- /.textwidget -->
                    </div>                            

                    <div class="widget widget-recent-news lateral-blog">
                        <h5 class="widget-title">Latest Posts</h5>
                        <ul class="popular-news clearfix">
                            <li>
                                <div class="thumb">
                                   <img src="images/blog/s1.jpg" alt="image">
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
                                   <img src="images/blog/s3.jpg" alt="image">
                                </div>
                                <div class="text">
                                    <h6><a href="#">Client branding project</a></h6>
                                    <p>27th July 2016</p>
                                    
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                   <img src="images/blog/s2.jpg" alt="image">
                                </div>
                                <div class="text">
                                    <h6><a href="#">Thank you from us</a></h6>
                                    <p>27th July 2016</p>
                                    
                                </div>
                            </li>
                        </ul><!-- /.popular-news -->
                    </div><!-- /.widget-popular-news -->

                    <div class="widget widget_tag lateral-blog">
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
