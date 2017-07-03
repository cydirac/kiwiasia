
        </div><!-- end of container -->
        
<footer id="footer-Section" class="footer-top-layout" style="background:#000000;color:#ffffff;">
  <div class="footer-top-layout">
    <div class="container">
      <div class="row" style="padding:20px;">
          <!-- column 1 -->
          <div class="col-sm-3">
            
            <div class="footer-col-item">
                <center>
                <h4>The Agreements</h4>
                </center>
                <nav class="site-nav">
                 <?php 
                   $args =array('theme_location'=>'footer');
                  ?>
                  <?php wp_nav_menu($args); ?>
                </nav>
                
            </div>
            
          </div>
          
          <!-- column 2 -->
          <div class="col-sm-3">
            <center>
                <div class="footer-col-item">
                      <h4>Reach Us</h4>
                        <div class="item-contact"> 
                                <a href="tel:630-885-9200"><span class="link-id">P</span>:<span>888-888-9999</span></a> 
                                <a href="tel:630-839.2006"><span class="link-id">F</span>:<span>888-888-9999</span></a> 
                                <a href="mailto:info@kiwiasia.kiwi"><span class="link-id">E</span>:<span>info@kiwiasia.kiwi</span></a>
                        </div>
                </div>
            </center>
          </div>
          <!-- end of column 2 -->
          
          <!-- column 3 -->
          <div class="col-sm-6">
        
                <!--TO-DO -->
                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/QdEsM7-_DLI?ecver=1" frameborder="0" allowfullscreen></iframe>
                
          </div>
          <!-- end of column 3 -->
      </div>
    </div>
  </div>
  
  <div class="footer-bottom-layout" >
        <center>
            <div class="copyright-tag" ><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?>. All Rights Reserved.</div>
        </center>
  </div>
</footer>

        <?php wp_footer(); ?>
    
        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" 
                integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" 
                crossorigin="anonymous"></script>

    </body>
</html>