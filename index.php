<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;
				?>

				<div class="post-list">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/post-item', get_post_type() );
					endwhile;
					?>
				</div>

				<?php 

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
			</main><!-- #main -->
		</div>
		<div class="site__col site__col--sidebar col col--12 col--lg_4">
			<?php echo get_sidebar(); ?>
		</div>
	</div>
</div>

	


<?php
get_footer();
