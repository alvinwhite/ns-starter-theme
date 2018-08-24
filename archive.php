<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ns-starter-theme
 */

get_header();
?>

<div class="site__grid grid">
	<div class="site__row row">
		<div class="site__col site__col--content col col--12 col--lg_8">
			<main id="main" class="site__main">
				<section class="single-page">
					<div class="single-page__grid grid">
		
						<header class="single-page__header">
							<?php
							the_archive_title( '<h1 class="single-page__title">', '</h1>' );
							the_archive_description( '<div class="single-page__description">', '</div>' );
							?>
						</header><!-- .single-page__header -->
						<?php if ( have_posts() ) : ?>
	
							<?php

							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/post-item', get_post_type() );
							endwhile;
		
							the_posts_navigation();
		
						else :
		
							get_template_part( 'template-parts/content', 'none' );
		
						endif;
						?>
		
					</div>
				</section>
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
