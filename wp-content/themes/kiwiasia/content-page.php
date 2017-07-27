<?php $my_postid = the_ID(); ?>
<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */
 get_header();  ?>


<div class="container" style="background-color:rgba(255, 255, 255, 0.7);padding:30px;">
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<center>
		<?php the_title( '<h1 class="entry-title" style="font-weight:bold;">', '</h1>' ); ?>
	</center>
	
	<!-- .entry-header -->
	<div class="entry-content">
		<?php echo get_post_field('post_content', $my_postid); ?>
	</div>
	<!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'kiwiasia' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
</article><!-- #post-## -->

</div>