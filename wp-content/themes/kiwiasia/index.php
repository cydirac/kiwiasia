<?php get_header(); ?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
        <ul class="nav nav-pills nav-justified">
        <!-- item start -->
        
        <?php 
            $args = array('category_name' => 'Carousel');
            $the_query = new WP_Query($args);
        ?>
        
        <?php $count=0; ?>
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php if((get_the_category($post->ID)[0]->name)=='Carousel'): ?>
          
          <?php 
            $icon_class = "";
            switch ($count) {
                case 0:
                    $icon_class= "fa fa-university fa-2x col-sm-12";
                    break;
                case 1:
                    $icon_class= "fa fa-building fa-2x col-sm-12";
                    break;
                case 2:
                    $icon_class= "fa fa-users fa-2x col-sm-12";
                    break;
                case 3:
                    $icon_class= "fa fa-life-ring fa-2x col-sm-12";
                    break;
                case 4:
                    $icon_class= "fa fa-globe fa-2x col-sm-12";
                    break;
            }
          ?>  
          
          <?php if($count==0): ?>
          
          <li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>" class="active"><a href="#"><i class="<?php echo $icon_class; ?>"></i><?php the_title(); ?></a></li>
          <?php $count+=1; ?>
          
          <?php else: ?>
          
          <li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>" ><a href="#"><i class="<?php echo $icon_class; ?>"></i><?php the_title(); ?></a></li>
          <?php $count+=1; ?>
          
          <?php endif;?>
          
        <?php endif; ?>
        <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        <!-- item end -->
        </ul>
       <div class="carousel-inner">
        <?php $countX=0; ?>
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php if((get_the_category($post->ID)[0]->name)=='Carousel'): ?>
            
            <?php if($countX==0): ?>
                <div class="item active">
                <?php $countX=1+$countX; ?>
            <?php else: ?>
                <div class="item">
            <?php endif;?>
            
            <?php the_post_thumbnail_remove_class(the_post_thumbnail( 'full' ));  ?>
                <div class="carousel-caption">    
                <?php the_content(); ?>
                <p>
                    <a class="btn btn-info btn-sm">Read More</a>
                </p>
                </div>
            </div>
            
            <?php endif; ?>

        <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
  
        <?php wp_reset_query(); ?>
        
        </div>

    </div>    
    
    <!-- mobile menu -->
    <div class="menu-mobile-class">
        <?php $countX=0; ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if((get_the_category($post->ID)[0]->name)=='Carousel'): ?>
            
            <div class="menu-mobile-item">
            
            
                <?php the_post_thumbnail_remove_class(the_post_thumbnail( 'full' ));  ?>
                <div class="menu-mobile-caption">    
                <?php the_content(); ?>
                <p>
                    <center>
                    <a class="btn btn-info btn-md">Read More</a>
                    </center>
                </p>
                </div>
            </div>
            
            <?php endif; ?>

        <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
  
        <?php wp_reset_query(); ?>
    </div>
    
    <!-- Section divider -->
    <div id="transcroller-body" class="aos-all" style="background:rgba(250, 135, 25, 0.8);padding-top:30px;padding-bottom:30px;">
        <div class="aos-item" data-aos="fade-up">
            <div class="aos-item__inner" style="padding:40px;">
                <center>
                    <h2 style="font-size:50px;font-weight:900;color:#fff;">
                        START NOW
                    </h2>
                    <h4>
                        Fill out the questionnaire and start to open the door to permanent residency in New Zealand.
                    </h4>
                </center>
            </div>
        </div>
    </div>
    
    <script src="<?php bloginfo('template_url'); ?>/include/js/aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
    
    <!-- meet the team section -->
    <div class="team-container">
    <div class="container" style="padding-top:60px;">
        <!-- Meet The Team - Title -->
        <div style="margin-bottom:60px;">
            <center>
            <h1 style="font-weight:900;">MEET THE AMAZING TEAM</h1>
            <a href="#services" class="btn-tellme">Tell Me More</a>
            </center>
        </div>
        
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="<?php bloginfo('template_url'); ?>/img/face.png" width="100%" alt="...">
                    
                    <div class="caption">
                    <h3>FirstName LastName</h3>
                    <p class="title">CEO &amp; Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>example@example.com</p>
                    <p><button class="btn" style="width:100%">Contact</button></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="<?php bloginfo('template_url'); ?>/img/face.png" width="100%" alt="...">
                    
                    <div class="caption">
                    <h3>FirstName LastName</h3>
                    <p class="title">CEO &amp; Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>example@example.com</p>
                    <p><button class="btn" style="width:100%">Contact</button></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="<?php bloginfo('template_url'); ?>/img/face.png" width="100%" alt="...">
                    
                    <div class="caption">
                    <h3>FirstName LastName</h3>
                    <p class="title">CEO &amp; Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>example@example.com</p>
                    <p><button class="btn" style="width:100%">Contact</button></p>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
    
    </div>
    <!-- end of the team section -->

    <script>
    jQuery(document).ready(function($) {
        jQuery(document).ready(function(carousel) {
            $('#myCarousel').carousel({
        		interval:   4000
        	});
         });
    });
    	
    </script>
    
    <!-- End Carousel Inner -->

	</div>
	</div>
        
    
    <!-- contact form -->    
    <div class="container" >
    
    <div class="row" style="background: rgba(00, 00, 00, .8);width:100%;padding:30px 30px 30px 30px;margin-top:30px;color:#ffffff;margin-bottom:50px;">
        <center>
        <h3 style="font-weight:900;">CONTACT US</h3>
        </center>
        
        <?php echo do_shortcode('[wppb-register]'); ?>
        
    </div>

<?php  get_footer(); ?>