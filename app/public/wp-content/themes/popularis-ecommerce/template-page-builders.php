<?php
/**
 *
 * Template name: Page Builders
 * 
 */
get_header( 'builders' );
?>
<!-- start content container -->       
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div <?php post_class(); ?>>
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>        
<?php else : ?>            
	<?php get_template_part( 'content', 'none' ); ?>        
<?php endif; ?>    
<!-- end content container -->
<?php
get_footer();
