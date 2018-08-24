<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ns-starter-theme
 */

get_header();
?>

<div class="site__grid grid">
	<div class="site__row row">
		<div class="site__col site__col--main col col--12 col--lg_8">
			<main id="main" class="site__main">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php
						printf( esc_html__( 'Search Results for: %s', 'nstheme' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header><!-- .page-header -->

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/post-item', 'search' );

				endwhile;
				the_posts_navigation();
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
			</main><!-- #main -->
		</div>
		<div class="site__col site__col--sidebar col col--12 col--lg_4">
		<?php 
			get_sidebar();
		?>
		</div>
	</div>
</div>

<?php
get_footer();
