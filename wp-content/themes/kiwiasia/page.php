<?php /* Template Name: KiwiAsiaPage */ ?>
<?php get_header(); ?>


<div id="primary" class="content-area">


	<main id="main" class="site-main" role="main">
	    <?php $post_id = get_the_ID(); ?>
		<?php if ($post_id==10): ?>
		<?php echo do_shortcode("[post_grid id='199']"); ?>

		<?php endif ?>
		
	</main><!-- .site-main -->


</div><!-- .content-area -->


<?php get_footer(); ?>