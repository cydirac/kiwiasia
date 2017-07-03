<!Document html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        
        <!-- Bootstrap Core CSS -->
        
        <!-- Custom Fonts -->
        <link href="<?php bloginfo('template_url'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php bloginfo('template_url'); ?>/include/css/aos.css" rel="stylesheet" type="text/css">
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        
        <title><?php bloginfo('name') ?></title>
        <?php wp_head(); ?>
        <script type='text/javascript' src="<?php bloginfo('template_url'); ?>/include/js/kiwiasia.js"></script>
        
    </head>
    <body id="page-top" class="index" style="font-family:Open Sans">
        <!-- video -->
        
        <video poster="" id="bgvid" playsinline autoplay muted loop>
        <source src="http://media.istockphoto.com/videos/huka-falls-near-lake-taupo-new-zealand-video-id685811292" type="video/mp4" >
        <!--
        <source src="<?php //bloginfo('template_url'); ?>/videos/background_water.mp4" type="video/mp4">
        -->
        </video>
        
        
        <!-- video -->
        
        
        <header>
			<div class="header inner">
			
			<nav class="navbar">
			  <div class="container">
			    <div class="navbar-header">
			      
			      <!-- hamburger button start -->
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			      <!-- hamburger button end -->
			      
			      <!-- logo text -->

			      <a href="<?php echo home_url(); ?>">
			          <h1 class="company-logo-text">
			              <span style="color: #b1d234;">Kiwi</span>
			              <span style="color: #ffffff;">Asia</span>
			         </h1>
			      </a>
			    
			    </div>
			    
			    <!-- top right corner menu start -->
                <div class="collapse navbar-collapse" id="myNavbar">
                    <?php 
                       $args =array(
                           'theme_location'=>'primary',
                           'menu_class' => 'nav navbar-nav navbar-right masthead-nav',
                           'menu' => 'Primary Menu'
                           );
                      ?>
                    <?php wp_nav_menu($args); ?>
                </div>
			    <!-- top right corner menu end -->
			    
			    <!-- banner -->
			    <div id="polina">

                    <h2 style="font-weight:900;"><span style="color: #b1d234;">KIWI</span>ASIA</h2>
                    <h3><!-- title --></h3>
                    <p>
                        <h4 style="color:#fff;">
                        <a href="http://thenewcode.com/777/Create-Fullscreen-HTML5-Page-Background-Video">
                            <?php bloginfo('description'); ?>
                        </a>
                        </h4>
                    </p>
                    <p><!-- content --></p>
                    <button>Find More</button>
                </div>
			  </div>
			</nav>
			</div>
		</header>
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		  <a href="#">About</a>
		  <a href="#">Services</a>
		  <a href="#">Clients</a>
		  <a href="#">Contact</a>
		</div>

		<span id="navPc" style="font-size:30px;cursor:pointer;float:right;color:#fff;position:absolute;top:5%;right: 10px;" onclick="openNav()">☰</span>


    <!-- tab menus -->
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
        <ul class="nav nav-pills nav-justified">
        <!-- item start -->
        <?php $count=0; ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
            <h1 style="font-weight:900;font-size:50px;">MEET THE AMAZING TEAM</h1>
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

            


    
        
            
            
        
        