<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ns-starter-theme
 */

?>

<article id="post-<?php the_ID(); ?>" class="post-item post-item--search">

	<header class="post-item__header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="post-item__meta">
			<?php
			nstheme_posted_on();
			nstheme_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

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

	<div class="post-item__sumary">
		<?php the_excerpt(); ?>
	</div><!-- .post-item__sumary-->

	<footer class="post-item__footer">
		<?php nstheme_entry_footer(); ?>
	</footer><!-- .post-item__footer -->

</article><!-- .post-item -->
