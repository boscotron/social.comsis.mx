   <!--begin footer -->
        <footer id="footer">
            
            <!--begin row -->
            <div class="row">
                
                <!--begin twelvecol -->
                <div class="twelvecol">  
            
                    <!--begin footer_logo icons -->
                    <span class="footer_logo">Fourteen</span>
                    <!--end footer_logo icons -->
                    
                    <!--begin social icons -->
                    <ul class="social">
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter contact-icon-circle"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-pinterest contact-icon-circle"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-github contact-icon-circle"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-tumblr contact-icon-circle"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus contact-icon-circle"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-dribbble fa-1x contact-icon-circle"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-dropbox fa-1x contact-icon-circle"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-instagram fa-1x contact-icon-circle"></i>
                            </a>
                        </li>
                    </ul>
                    <!--end social icons -->
                    
                    <div class="footer_line"><span></span></div>
                    
                    <!--begin copyright -->            
                    <p class="copyright">Copyright © 2014 Fourteen. All rights reserved.<br>Designed &amp; developed by <a href="http://themeforest.net/user/bogdan_09/portfolio?ref=bogdan_09" target="_blank">Bogdan</a>.</p>
                    <!--end copyright -->
                    
                </div>
                <!--end twelvecol -->
                
            </div>
            <!--end row -->
        
        </footer>
        <!--end footer -->
           
    </div>
    <!--! end of #container -->
    
    <!-- scripts concatenated and minified via ant build script-->
    <script src="<?php $this->url_templet(); ?>lib/js/modernizr-2.6.1.min.js"></script>
    <script src="<?php $this->url_templet(); ?>lib/js/conditional.js"></script>
    <script src="<?php $this->url_templet(); ?>lib/js/script.js"></script>
    <script src="<?php $this->url_templet(); ?>lib/js/jquery.inview.js"></script>
    
    <!-- begin jquery.sticky script-->
    <script type="text/javascript" src="<?php $this->url_templet(); ?>lib/js/jquery.sticky.js"></script>
        <script>
        $(window).load(function(){
          $("#header_wrapper").sticky({ topSpacing: 0 });
        });
    </script>
    <!-- end jquery.sticky script-->
  
    <!-- begin menu scrollTo script-->
    <script src="<?php $this->url_templet(); ?>lib/js/jquery.scrollTo-min.js"></script>
      <?php  $this->llamar_js(); ?> 
    <script type="text/javascript">
        (function($){
            $(document).ready(function() {  
            /* This code is executed after the DOM has been completely loaded */
                
                $("#nav li a").click(function(e){
        
                    var full_url = this.href;
                    var parts = full_url.split("#");
                    var trgt = parts[1];
                    var target_offset = $("#"+trgt).offset();
                    var target_top = target_offset.top;
                    
                    $('html,body').animate({scrollTop:target_top -80}, 1000);
                        return false;
                    
                });
                        
            });
        })(jQuery);
    </script>
    <!-- end menu scrollTo script-->
    
    <!-- begin menu color script-->
    <script src="<?php $this->url_templet(); ?>lib/js/jquery.nav.js"></script>
    <script>
    $(document).ready(function() {
        $('#nav').onePageNav({
        filter: ':not(.external)',
        scrollThreshold: 0.25
        });
    });
    </script>
    <!-- end menu color script-->
    
    <!--begin shrink header script -->
    <script>
    $(function(){
     var shrinkHeader = 50;
      $(window).scroll(function() {
        var scroll = getCurrentScroll();
          if ( scroll >= shrinkHeader ) {
               $('#header_wrapper').addClass('shrink');
            }
            else {
                $('#header_wrapper').removeClass('shrink');
            }
      });
    function getCurrentScroll() {
        return window.pageYOffset;
        }
    });
    </script>
    <!--end shrink header script -->
    
</body>
</html>