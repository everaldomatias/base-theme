<?php
/**
 * The front page template file.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 0.0.1
 */

get_header(); ?>

	<main id="content" class="<?php echo odin_classes_page_full(); ?>" tabindex="-1" role="main">

			<?php
				if ( have_posts() ) :
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					endwhile;

					// Post navigation.
					odin_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>

	</main><!-- #content -->

<?php
get_footer();
