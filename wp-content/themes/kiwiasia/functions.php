<?php
    /*
    function kiwiAsiaWordPress_resources(){
        wp_enqueue_style('style',get_stylesheet_uri());
    }
    
    add_action('wp_enqueue_scripts','kiwiAsiaWordPress_resources');
    */
    
    //Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
    ));
    add_theme_support( 'post-thumbnails' );
    //remove class from the_post_thumbnail
    function the_post_thumbnail_remove_class($output) {
    	$output = preg_replace('/class=".*?"/', '', $output);
    	return $output;
    }
    add_filter('post_thumbnail_html', 'the_post_thumbnail_remove_class');
    
    function remove_width_attribute( $html ) {
       $html = preg_replace("/(<img\\s)[^>]*(src=\\S+)[^>]*(\\/?>)/i", "$1$2$3", $html);
       //$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
       //$html = preg_replace( '/(alt|srcset)="\d*"\s/', "", $html );
       return $html;
    }
    add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
    add_theme_support('post-formats',array('aside','gallery','link'));
    
    add_action('wp_enqueue_script','theme_enqueue_style');
    
    add_action( 'wp_default_scripts', function( $scripts ) {
        if ( ! empty( $scripts->registered['jquery'] ) ) {
            $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
        }
    } );
    
    function kiwiasia_child_scripts(){
        wp_enqueue_script('jquery');
        wp_enqueue_script('vendor-jquery',get_stylesheet_directory_uri().'/vendor/jquery/jquery.min.js',array(),false,false);
        //load base URI
        wp_enqueue_script('kiwiasia',get_stylesheet_directory_uri().'/include/');
        
        wp_enqueue_style('jbvalidation',get_stylesheet_directory_uri().'include/js/jqBootstrapValidation.js',array('vendor-jquery'),false,true);
        wp_enqueue_script('vendor-bootstrap',get_stylesheet_directory_uri().'/vendor/bootstrap/js/bootstrap.min.js',array('vendor-jquery'),false,true);
        wp_enqueue_script('agency',get_stylesheet_directory_uri().'/include/js/agency.min.js',array('vendor-jquery','vendor-bootstrap'),false,true);
        wp_enqueue_script('video_bg',get_stylesheet_directory_uri().'/include/js/video_bg.js',array('vendor-jquery'),false,true);
        wp_enqueue_script('contact_me',get_stylesheet_directory_uri().'/include/js/contact_me.js',array('vendor-jquery','vendor-bootstrap'),false,true);
        
        
        wp_enqueue_style('video_bg',get_stylesheet_directory_uri().'/include/css/video_bg.css');
        
        wp_enqueue_style('vendor',get_stylesheet_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('kiwiasia',get_stylesheet_directory_uri().'/include/css/kiwiasia.css');
        
    }
    add_action('wp_enqueue_scripts','kiwiasia_child_scripts');
    
    function custom_excerpt_length( $length ) {
    	return 999;
    }
    //add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );