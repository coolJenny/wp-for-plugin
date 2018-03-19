<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Unifield
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="general-title bg-color">
        <?php 
        	the_title( '<h2 class="entry-title">', '</h2>' ); 
        ?>
        <div class="title-devider"></div>
    </div>
	

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'unifield' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
