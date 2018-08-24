<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ns-starter-theme
 */

get_header();
?>

<div class="site__grid grid">
	<div class="site__row row">
		<div class="site__col site__col--main col col--12 col--lg_8">
			<main id="main" class="site__main">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/post', get_post_type() );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</main><!-- #main -->	
		</div>
		<div class="site__col site__col--sidebar col col--12 col--lg_4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php
get_footer();
