<!Document html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        
        <!-- Bootstrap Core CSS -->

    
        <!-- Custom Fonts -->
        <link href="<?php bloginfo('template_url'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        
        <script type='text/javascript' src="<?php bloginfo('template_url'); ?>/include/js/kiwiasia.js"></script>

        
        <title><?php bloginfo('name') ?></title>
        
        <?php wp_head(); ?>
    </head>
    <body id="page-top" class="index">
        <!-- video -->
        
        <video poster="" id="bgvid" playsinline autoplay muted loop>

        <source src="<?php bloginfo('template_url'); ?>/videos/background_water.mp4" type="video/mp4">
        </video>
        
        
        <!-- video -->
        
        
        <header>
			<div class="container header inner">
			
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
			      <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
			    
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
                    <h1 style="font-weight:900;"><span style="color: #b1d234;">Kiwi</span>Asia</h1>
                    <h2><p>Your path to residency in</p> New Zealand</h2>
                    <p>
                        <a href="http://thenewcode.com/777/Create-Fullscreen-HTML5-Page-Background-Video">
                            The exciting new way to New Zealand residency!
                        </a>
                    </p>
                    <p>Have you fallen in love with New Zealand while studying and would like to live here permanently?.</p>
                    
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

<!--
		<div class="container-fluid tabStrip">
		  <ul class="nav nav-tabs text-center">
		    <li class="col-sm-3 grey"><a href="#"><i class="fa fa-truck fa-2x col-sm-12"></i><span class="col-sm-12">Packers and Movers</span></a></li>
		    <li class="col-sm-3 orange"><a href="#"><i class="fa fa-ship fa-2x col-sm-12"></i><span class="col-sm-12">Cargo</span></a></li>
		    <li class="col-sm-3 blue"><a href="#"><i class="fa fa-building fa-2x col-sm-12"></i><span class="col-sm-12">Warehouse</span></a></li>
		    <li class="col-sm-3 green"><a href="#"><i class="fa fa-building fa-2x col-sm-12"></i><span class="col-sm-12">Transport</span></a></li>
		  </ul>
		</div>
-->

    <!-- tab menus -->
	<div class="container-fluid tabSlider">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
        <ul class="nav nav-pills nav-justified">
          <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#"><i class="fa fa-truck fa-2x col-sm-12"></i>New Zealand Suppliers</a></li>
          <li data-target="#myCarousel" data-slide-to="1"><a href="#"><i class="fa fa-ship fa-2x col-sm-12"></i>Business Coaching</a></li>
          <li data-target="#myCarousel" data-slide-to="2"><a href="#"><i class="fa fa-building fa-2x col-sm-12"></i>Boost Your Network</a></li>
          <li data-target="#myCarousel" data-slide-to="3"><a href="#"><i class="fa fa-building fa-2x col-sm-12"></i>Meet The Team</a></li>
        </ul>


    <!-- carousel -->

    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
        
             
        <article class="item active">
          <img src="<?php bloginfo('template_url'); ?>/img/farm.png">
          <div class="carousel-caption">
            <h3>So let’s get started!</h3>
            <p>
            To find out whether KiwiAsia could open the door to permanent residency in New Zealand, you just need to fill out a short questionnaire.
            Once you’ve submitted it, a KiwiAsia support person will contact you to let you know if you qualify and how to proceed.
            </p>
            <p><a class="btn btn-info btn-sm">JOIN</a></p>
          </div>
        </article>
        
        <?php query_posts(array('category_name'  => 'Carousel')); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
            <article class="item">
                <?php the_post_thumbnail_remove_class(the_post_thumbnail( 'full' ));  ?>
                <div class="carousel-caption">    
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
                <p>
                    <a class="btn btn-info btn-sm">Read More</a>
                </p>
                </div>
            </article>
    
    
        <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

  
        <?php wp_reset_query(); ?>
        
        </div>
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>        
          <!-- Controls -->
        <div class="carousel-controls">
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="fa fa-angle-double-left"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="fa fa-angle-double-right"></span>
            </a>
        </div>
    </div>    
    
    <!-- meet the team section -->
    <div style="background: rgba(00, 00, 00, .8);width:100%;">
    <div class="container" style="padding-top:60px;">
        <!-- Meet The Team - Title -->
        <div class="intro-text" style="margin-bottom:60px;">
            <center>
            <h3 style="color: #b1d234;font-weight:900;">MEET THE AMAZING TEAM!</h3>
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

            


    
        
            
            
        
        