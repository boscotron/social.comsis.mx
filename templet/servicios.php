
 <!-- Portfolio -->
<section class="flat-row background1">  
    <div class="container">                
        <div class="row">
            <div class="col-md-12">                           
                <ul class="portfolio-filter">
                    <li class="active"><a data-filter="*" href="#">Servicios</a></li>

                    <li><a data-filter="redes" href="#">Redes sociales</a>
                        <div class="filter-tooltip">
                            Paquetes desde
                            <span class="precioPaquete jmy_web_div" id="servicios_precio_btn_1" data-page="inicio"  >
                                <?php echo ($data['servicios_precio_btn_1']!='')? $data['servicios_precio_btn_1']:'$200.00'; ?></span>
                            <span class="tiempoPaquete jmy_web_div" id="servicios_tiempo_btn_1" data-page="inicio"  >
                                <?php echo ($data['servicios_tiempo_btn_1']!='')? $data['servicios_tiempo_btn_1']:'Semanales'; ?></span>
                        </div>
                    </li>


                    <li><a data-filter="web" href="#">Web</a>
                        <div class="filter-tooltip">                            
                            Paquetes desde
                            <span class="precioPaquete jmy_web_div" id="servicios_precio_btn_2" data-page="inicio"  >
                                <?php echo ($data['servicios_precio_btn_2']!='')? $data['servicios_precio_btn_2']:'$200.00'; ?></span>
                            <span class="tiempoPaquete jmy_web_div" id="servicios_tiempo_btn_2" data-page="inicio"  >
                                <?php echo ($data['servicios_tiempo_btn_2']!='')? $data['servicios_tiempo_btn_2']:'Semanales'; ?></span>
                        </div>
                    </li>

                    <li><a data-filter="diseno" href="#">Diseño</a>
                        <div class="filter-tooltip">
                            Paquetes desde
                            <span class="precioPaquete jmy_web_div" id="servicios_precio_btn_3" data-page="inicio"  >
                                <?php echo ($data['servicios_precio_btn_3']!='')? $data['servicios_precio_btn_3']:'$200.00'; ?></span>
                            <span class="tiempoPaquete jmy_web_div" id="servicios_tiempo_btn_3" data-page="inicio"  >
                                <?php echo ($data['servicios_tiempo_btn_3']!='')? $data['servicios_tiempo_btn_3']:'Semanales'; ?></span>
                    </li>

                    <li><a data-filter="audiovisual" href="#">Audiovisual</a>
                        <div class="filter-tooltip">
                            Paquetes desde
                            <span class="precioPaquete jmy_web_div" id="servicios_precio_btn_4" data-page="inicio"  >
                                <?php echo ($data['servicios_precio_btn_4']!='')? $data['servicios_precio_btn_4']:'$200.00'; ?></span>
                            <span class="tiempoPaquete jmy_web_div" id="servicios_tiempo_btn_4" data-page="inicio"  >
                                <?php echo ($data['servicios_tiempo_btn_4']!='')? $data['servicios_tiempo_btn_4']:'Semanales'; ?></span>
                    </li>

                    <li><a data-filter="app" href="#">App's</a>
                        <div class="filter-tooltip">
                            Paquetes desde
                            <span class="precioPaquete jmy_web_div" id="servicios_precio_btn_5" data-page="inicio"  >
                                <?php echo ($data['servicios_precio_btn_5']!='')? $data['servicios_precio_btn_5']:'$200.00'; ?></span>
                            <span class="tiempoPaquete jmy_web_div" id="servicios_tiempo_btn_5" data-page="inicio"  >
                                <?php echo ($data['servicios_tiempo_btn_5']!='')? $data['servicios_tiempo_btn_5']:'Semanales'; ?></span>
                    </li>

                    <li><a data-filter="ecommerce" href="#">E-Commerce</a>
                        <div class="filter-tooltip">
                            Paquetes desde
                            <span class="precioPaquete jmy_web_div" id="servicios_precio_btn_6" data-page="inicio"  >
                                <?php echo ($data['servicios_precio_btn_6']!='')? $data['servicios_precio_btn_6']:'$200.00'; ?></span>
                            <span class="tiempoPaquete jmy_web_div" id="servicios_tiempo_btn_6" data-page="inicio"  >
                                <?php echo ($data['servicios_tiempo_btn_6']!='')? $data['servicios_tiempo_btn_6']:'Semanales'; ?></span>
                    </li>

                </ul><!-- /.project-filter -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="flat-portfolio grid-4columns simple style-4">             
                    <div class="portfolio-wrap clearfix">
                        <div class="item builder app ">
                            <div class="featured-images">
                                <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>images/portfolio/simple/12.jpg" alt="images">
                                <h3 class="project-title jmy_web_div" id="comsis_app" data-page="inicio" >
                                   <?php echo ($data['comsis_app']!='')? $data['comsis_app']:'Descripción App'; ?>
                                </h3>
                                <div class="overlay">  
                                    <ul class="portfolio-details">
                                        <li><i class="fa fa-arrows-alt"></i>
                                        </li>    
                                    </ul>                          
                                </div>                       
                            </div><!-- /.featured-images -->                                              
                        </div><!-- /.portfolio-item -->

                        <div class="item builder redes w2">
                            <div class="featured-images">
                                <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>images/portfolio/simple/3.1.jpg" alt="images">
                                <h3 class="project-title jmy_web_div" id="comsis_redes" data-page="inicio" >
                                    <?php echo ($data['comsis_redes']!='')? $data['comsis_redes']:'Descripción comsis redes'; ?>
                                </h3>
                                <div class="overlay">  
                                    <ul class="portfolio-details">
                                        <li><i class="fa fa-arrows-alt"></i>
                                        </li>    
                                    </ul>                      
                                </div>                       
                            </div><!-- /.featured-images -->                
                        </div><!-- /.portfolio-item -->

                        <div class="item electric diseno">
                            <div class="featured-images">
                                <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>images/portfolio/simple/9.jpg" alt="images">
                                 <h3 class="project-title jmy_web_div" id="comsis_diseno" data-page="inicio" >
                                    <?php echo ($data['comsis_diseno']!='')? $data['comsis_diseno']:'Descripción comsis diseño'; ?>
                                </h3>
                                <div class="overlay">  
                                    <ul class="portfolio-details">
                                        <li><i class="fa fa-arrows-alt"></i>
                                        </li>    
                                    </ul>                      
                                </div>                         
                            </div><!-- /.featured-images -->    
                        </div><!-- /.portfolio-item -->

                         <div class="item builder audiovisual">
                            <div class="featured-images">
                                <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>images/portfolio/simple/11.jpg" alt="images"> 
                                    <h3 class="project-title jmy_web_div" id="comsis_audiovisual" data-page="inicio" >
                                    <?php echo ($data['comsis_audiovisual']!='')? $data['comsis_audiovisual']:'Descripción comsis audiovisual'; ?>
                                   
                                </h3>
                                <div class="overlay">  
                                    <ul class="portfolio-details">
                                        <li><i class="fa fa-arrows-alt"></i>
                                        </li>    
                                    </ul>                      
                                </div>                       
                            </div><!-- /.featured-images -->                                                  
                        </div><!-- /.portfolio-item -->

                        <div class="item electric ecommerce">
                            <div class="featured-images">
                                <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>images/portfolio/simple/3.3.jpg" alt="images">
                                <h3 class="project-title jmy_web_div" id="comsis_ecommerce" data-page="inicio" >
                                    <?php echo ($data['comsis_ecommerce']!='')? $data['comsis_ecommerce']:'Descripción comsis ecommerce'; ?>
                                   
                                </h3>
                                <div class="overlay">  
                                    <ul class="portfolio-details">
                                        <li><i class="fa fa-arrows-alt"></i>
                                        </li>    
                                    </ul>                      
                                </div>                         
                            </div><!-- /.featured-images -->    
                        </div><!-- /.portfolio-item -->


                        <div class="item electric hammer">
                            <div class="featured-images">
                                <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>images/portfolio/simple/3.4.jpg" alt="images">
                                <h3 class="project-title jmy_web_div" id="descripcion_tecnopack" data-page="inicio" >
                                    <?php echo ($data['descripcion_tecnopack']!='')? $data['descripcion_tecnopack']:'Descripción Tecnopack'; ?>
                                   
                                </h3>
                                <div class="overlay">  
                                    <ul class="portfolio-details">
                                        <li><i class="fa fa-arrows-alt"></i>
                                        </li>    
                                    </ul>                      
                                </div>                         
                            </div><!-- /.featured-images -->           
                        </div><!-- /.portfolio-item -->

                        <div class="item builder painting ">
                            <div class="featured-images">
                                <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>images/portfolio/simple/3.9.jpg" alt="images">
                                <h3 class="project-title jmy_web_div" id="descripcion_restart" data-page="inicio" >
                                    <?php echo ($data['descripcion_restart']!='')? $data['descripcion_restart']:'Descripción restart'; ?>
                                   
                                </h3>
                                <div class="overlay">  
                                    <ul class="portfolio-details">
                                        <li><i class="fa fa-arrows-alt"></i>
                                        </li>    
                                    </ul>                      
                                </div>                       
                            </div><!-- /.featured-images -->                                              
                        </div><!-- /.portfolio-item -->

                        <div class="item builder painting w2">
                            <div class="featured-images">
                                <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>images/portfolio/simple/3.533.jpg" alt="images">
                                <h3 class="project-title jmy_web_div" id="app_web" data-page="inicio" >
                                    <?php echo ($data['app_web']!='')? $data['app_web']:'Descripción comsis Web'; ?>
                                   
                                </h3>
                                <div class="overlay">  
                                    <ul class="portfolio-details">
                                        <li><i class="fa fa-arrows-alt"></i>
                                        </li>    
                                    </ul>                      
                                </div>                       
                            </div><!-- /.featured-images -->                                              
                        </div><!-- /.portfolio-item -->
                    </div><!-- /.portfolio-wrap --> 
                </div><!-- /.flat-portfolio --> 
            </div>
        </div>
    </div> 
</section> 