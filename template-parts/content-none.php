<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ns-starter-theme
 */

?>

<section class="single-page single-page--content_none">
	<header class="single-page__header">
		<h1 class="single-page__title"><?php esc_html_e( 'Nothing found', 'nstheme' ); ?></h1>
	</header><!-- .single-page__header -->

	<div class="single-page__content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'nstheme' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'nstheme' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'nstheme' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .single-page__content"-->
</section><!-- .single-page  -->
