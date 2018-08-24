<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ns-starter-theme
 */

?>

<article id="post-<?php the_ID(); ?>" class="post-item">

	<header class="post-item__header">
		<?php 
		the_title( '<h2 class="post-item__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); 
		
		if ( 'post' === get_post_type() ) :
			?>
			<div class="post-item__meta">
				<?php
				nstheme_posted_on();
				nstheme_posted_by();
				?>
			</div>
			<?php 
		endif; 
		?>
	</header><!-- .post-item__header -->
	
	<?php
	if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) :
		?>
		<a href="<?php the_permalink(); ?>" class="post-item__thumb">
			<?php
			the_post_thumbnail( 'post-thumbnail', [
				'alt' => the_title_attribute( [
					'echo' => false,
				 ] ),
			] );
			?>
		</a><!-- .post-item__thumb -->
		<?php 
	endif;
	?>

	<div class="post-item__content">
		<?php
		the_content( sprintf(
			wp_kses( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'nstheme' ),
				[ 
					'span' => [ 'class' => [], ],
				]
			),
			get_the_title()
		) );
		?>
	</div>

	<footer class="post-item__footer">
		<?php nstheme_entry_footer(); ?>
	</footer><!-- .post-item__footer -->
	
</article><!-- .post-item -->