<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
				if ( have_posts() ) :

					while ( have_posts() ) : 
					the_post();
					?>
					<section class="single-page">
						<div class="single-page__content">
							<?php the_content(); ?>
						</div>
					</section>
					<?php 
					endwhile; 
				else: 
					?>
					<p>Sorry, no posts matched your criteria.</p>
					<?php 
				endif; 
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
