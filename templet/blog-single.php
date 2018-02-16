<?php
    
    $blogS = $data[$data['id']];
    $this ->pre(['p'=>$data,'t'=>'TITULO_ARAY']);
?>
<!-- Page title -->
<div class="page-title">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">                    
                <div class="page-title-heading">
                    <h1 class="title">The <span>Blog Single.</span></h1>
                </div><!-- /.page-title-captions -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="blog.html">Welcome to our blog</a></li>
                        <li> Blog Large Image</li>
                    </ul>                   
                </div><!-- /.breadcrumbs -->   
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div><!-- /.page-title --> 

<!-- Blog posts -->
<section class="main-content blog-posts blog-single">
    <div class="container">
        <div class="row">
            <div class="wrap-content-post">
                <div class="post-wrap">
                    <article class="post clearfix">
                        <div class="featured-post">
                            <img src="images/blog/1.jpg" alt="image">
                            <ul class="post-comment">           
                                <li class="entry-month jmy_web_div" id="mes" data-page="<?php echo $data['id']; ?>" contenteditable="true">
                                    <?php echo ($data['mes']!='')? $data['mes']:date('m'); ?></li>

                                <li class="entry-day jmy_web_div" id="dia" data-page="<?php echo $data['id']; ?>" contenteditable="true">
                                    <?php echo ($data['dia']!='')? $data['dia']:date('d'); ?></li>

                                <li class="entry-year jmy_web_div" id="anio" data-page="<?php echo $data['id']; ?>" contenteditable="true">
                                    <?php echo ($data['anio']!='')? $data['anio']:date('m'); ?></li>
                            </ul><!-- /.post-comment -->
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <h2 class="title-post"><a href="blog-single.html" class="jmy_web_div" id="titulo" data-page="<?php echo $data['id']; ?>" contenteditable="true">
                                    <?php echo ($data['titulo']!='')? $data['titulo']:'Título nuevo post'; ?></a></h2>                          
                            <ul class="meta-post clearfix">
                                <li class="author">
                                    <a href="#"  class="jmy_web_div" id="autor" data-page="<?php echo $data['id']; ?>" contenteditable="true">
                                    <?php echo ($data['autor']!='')? $data['autor']:'Autor de la nota'; ?></a>
                                </li>
                                <li class="categories"> 
                                    <a href="#">Makerting</a>, <a href="#" class="jmy_web_div" id="categorias" data-page="<?php echo $data['id']; ?>" contenteditable="true">
                                    <?php echo ($data['categorias']!='')? $data['categorias']:'Categoría 1, Categoría 2'; ?></a>
                                </li>
                            </ul><!-- /.meta-post -->
                            <div class="entry excerpt jmy_web_div" id="titulo" data-page="<?php echo $data['id']; ?>" contenteditable="true">
                                    <?php echo ($data['anio']!='')? $data['anio']:'<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat sit amet, consectetuer adipiscing elit, sed diam nonumm. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat sit amet, consectetuer adipiscing elit, sed diam nonumm.
                                </p>
                               
                                <blockquote>                                        
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.

                                </blockquote>
                                
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>'; ?>
                                

                            </div>

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
                        </div><!-- /.content-post -->
                    </article>    

                    <div class="main-single">                          
                        <div class="comments-area">
                            <h2 class="comments-title"> Comments </h2>
                            <ol class="comment-list">
                                <li class="comment">
                                    <article class="comment-body">                                        
                                        <div class="comment-author">
                                            <img src="images/blog/comment3.jpg" alt="image">  
                                        </div><!-- .comment-author -->
                                        <div class="comment-text">
                                            <div class="comment-metadata">
                                                <h5><a href="#">Jason Anderson</a></h5>                
                                                <span class="date">April 14, 2014 at 13:56</span>                   
                                            </div><!-- .comment-metadata -->
                                            <div class="comment-content">
                                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                            </div><!-- .comment-content -->

                                            <div class="reply">
                                                <a href="#" class="comment-reply-link">Reply<i class="fa fa-reply-all"></i></a>
                                            </div>
                                        </div><!-- /.comment-text -->                                       
                                    </article><!-- .comment-body -->
                                    <ol class="children">
                                        <li class="comment byuser comment-author-admin bypostauthor odd alt depth-2 parent" id="comment-2">
                                            <article class="comment-body" id="div-comment-2">
                                                <div class="comment-author">
                                                    <img src="images/blog/comment4.jpg" alt="image">
                                                </div><!-- .comment-author -->
                                                <div class="comment-text">
                                                    <div class="comment-metadata">
                                                        <h5><a href="#">William Jackson</a></h5>                
                                                        <span class="date">April 9, 2014 at 16:31</span>                   
                                                    </div><!-- .comment-metadata -->
                                                    <div class="comment-content">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitrsed diam nonumy eirmod tempor invidunt.</p>
                                                    </div><!-- .comment-content -->

                                                    <div class="reply">
                                                        <a href="#" class="comment-reply-link">Reply<i class="fa fa-reply-all"></i></a>
                                                    </div>
                                                </div><!-- /.comment-text -->
                                            </article><!-- .comment-body -->
                                            
                                        </li><!-- #comment-## -->
                                    </ol><!-- .children -->
                                    <article class="comment-body">                                        
                                        <div class="comment-author">
                                            <img src="images/blog/comment4.jpg" alt="image">  
                                        </div><!-- .comment-author -->
                                        <div class="comment-text">
                                            <div class="comment-metadata">
                                                <h5><a href="#">Jason Anderson</a></h5>                
                                                <span class="date">April 14, 2014 at 13:56</span>                   
                                            </div><!-- .comment-metadata -->
                                            <div class="comment-content">
                                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                            </div><!-- .comment-content -->

                                            <div class="reply">
                                                <a href="#" class="comment-reply-link">Reply<i class="fa fa-reply-all"></i></a>
                                            </div>
                                        </div><!-- /.comment-text -->                                       
                                    </article><!-- .comment-body -->
                                </li><!-- #comment-## -->                                   
                            </ol><!-- .comment-list -->

                            <div class="comment-respond" id="respond">
                                <h2 class="comment-reply-title">Leave Comment</h2>
                                <form novalidate="" class="comment-form" id="commentform" method="post" action="#">
                                    <p class="comment-notes">                                      
                                        <input type="text" placeholder="Full Name" aria-required="true" size="30" value="" name="author" id="author">
                                    </p>
                                    <p class="comment-form-email">                                        
                                        <input type="email" placeholder="Email Address" size="30" value="" name="email" id="email">
                                    </p>                                   
                                    <p class="comment-form-comment">
                                        <textarea class="" tabindex="4" placeholder="Message" name="comment" required></textarea>
                                    </p>                        
                                    <p class="form-submit">                 
                                        <button class="comment-submit">Post comment</button>
                                    </p>
                                </form>
                            </div><!-- /.comment-respond -->
                        </div><!-- /.comments-area -->
                    </div> 
                </div><!-- /.post-wrap -->                 
            </div><!-- /.content-post -->  

            <div class="sidebar-post">
                <div class="sidebar">
                    <div class="widget widget_search">
                        <form role="search" method="get" class="search-form" action="#">
                            <label>                                    
                                <input type="search" class="search-field" placeholder="Enter your search ..." value="" name="s">
                            </label>
                            <input type="submit" class="search-submit" value="">
                        </form>                            
                    </div><!-- /.widget-search -->

                    <div class="widget widget_text widget_info">
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

                    <div class="widget widget-recent-news">
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
