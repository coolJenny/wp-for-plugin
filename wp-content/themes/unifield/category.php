<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Unifield
 */

get_header(); ?>

<div class="container">
     <div class="page_content">
        <section class="site-main fullwidth">
            <header class="page-header">
                <div class="general-title bg-color">
				 <?php
						the_archive_title( '<h2>', '</h2>' );                        
						// the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
                    <div class="title-devider"></div>
                </div>
            </header><!-- .page-header -->
			<?php if ( have_posts() ) : ?>
                <div class="blog-post">
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content' ); ?>
                    <?php endwhile; ?>                   
                </div>
                <?php the_posts_pagination(); ?>
            <?php else : ?>
                <?php get_template_part( 'no-results' ); ?>
            <?php endif; ?>
       </section>
       
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- container -->

<?php get_footer(); ?>