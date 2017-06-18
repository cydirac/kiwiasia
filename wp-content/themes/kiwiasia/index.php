<?php get_header(); ?>

    <?php query_posts(array('category_name'  => 'Carousel')); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    


    <?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>



  
    
     
    
  
  
  





    <?php wp_reset_query(); ?>

<?php  get_footer(); ?>