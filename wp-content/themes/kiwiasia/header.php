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

		<span id="navPc" class="navPcButton" onclick="openNav()">☰</span>


    <!-- tab menus -->
    
    

            


    
        
            
            
        
        