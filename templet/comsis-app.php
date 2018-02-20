<?php 
    //$this ->pre(['p'=>$print,'t'=>'TITULO_ARAY']);
    //$this ->pre(['p'=>$this->pnt('titulo'),'t'=>'titulo']);
 ?>
<!-- Page title -->
<div class="page-title parallax parallax1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">                    
                <div class="page-title-heading">
                    <h1 class="title jmy_web_div" id="titulo" data-page="comsis-app" ><?php $this->pnt('titulo','titulo servicio'); ?></h1>
                </div><!-- /.page-title-captions -->
                <div class="breadcrumbs jmy_web_div" data-page="comsis-app" id="breadcrumbs"><?php $this->pnt('breadcrumbs','<ul><li> Descripción del servicio </li></ul>'); ?></div><!-- /.breadcrumbs -->   
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div><!-- /.page-title --> 

<!-- Portfolio detail -->
<section class="flat-row work-detail-fullscreen"> 
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-8"> 
            	<div class="work-detail-thumb">
            		<img src="<?php $this->url_templet(); ?>images/portfolio/single/single.jpg" alt="images">
            	</div>   
            </div>
            <div class="col-md-4"> 
            	<div class="work-detail-content">
            		<div class="flat-work-detail">
                        <div class="project-content">
                        	<div class="title-single-portfolio jmy_web_div" id="subtitulo" data-page="comsis-app"><?php $this->pnt('subtitulo','<ul><li> Descripción del servicio </li></ul>'); ?></div>
                        	<p class=" jmy_web_div" id="descripcion" data-page="comsis-app"><?php $this->pnt('descripcion','Donec suscipit vehicula turpis sed lutpat Quisque vitae quam neque. Morbi cilisis placerat dapibus. Etiam ultrices nulla ed leo malesuada commodo bibendum orci vi verra. Donec suscipit vehicula turpis sed lutpat Quisque vitae quam neque. Morbi cilisis placerat dapibus. Etiam ultrices nulla ed leo malesuada commodo bibendum orci vi verra.'); ?></p>
                        	<ul class="project-field jmy_web_div" id="listado" data-page="comsis-app" data-editor="no"><?php $this->pnt('listado','<li><Span>Client: </Span>Johnson Group, US</li>
                                <li><Span>Year: </Span>2016</li>
                                <li><Span>Link: </Span>themesflat.com</li>
                                <li><Span>Category: </Span> <a href="#">Design</a> , <a href="#">Handmade</a> , <a href="#">Photography</a> </li>'); ?>
                        	
                        	</ul>
                            
                        </div>                         
                    </div>
            	</div>
            </div>
        </div>
    </div>
</section> 

<!-- Promobox style1 -->
<section class="flat-row background-color1 row-promobox">        
    <div class="container">
        <div class="row">
            <div class="flat-promobox text-center">
                <div class="promobox-group-btn jmy_web_div" id="titulo_contacto" data-page="comsis-app""><?php $this->pnt('titulo_contacto','<a class="flat-button radius bg-white" href="#">LLamanos</a>'); ?>
                    
                </div>
            </div>
        </div>      
    </div><!-- /.container -->   
</section>  