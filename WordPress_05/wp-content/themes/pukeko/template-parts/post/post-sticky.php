<?php
/**
 * Displays sticky posts on blog
 *
 * @package Pukeko
 * @since Pukeko 1.0.0
 * @version 1.0.2
 */

	$custom_sticky_post_excerpt = array(
	 'sticky_post_excerpt_length'	=> get_theme_mod( 'pukeko_sticky_excerpt_lengths' ),
	);
?>

<header class="entry-header">
	<div class="entry-meta">
			<?php pukeko_entry_meta(); ?>
	</div><!-- .entry-meta -->

	<?php the_title( '<h2 class="entry-title f2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

	<div class="entry-summary">

		<?php if ( '40' == get_theme_mod( 'pukeko_sticky_excerpt_lengths' ) || '' == get_theme_mod( 'pukeko_sticky_excerpt_lengths' ) ) : ?>
			<?php echo pukeko_custom_excerpt_length(40); ?>
		<?php else: ?>
			<?php echo pukeko_custom_excerpt_length($custom_sticky_post_excerpt['sticky_post_excerpt_length']); ?>
		<?php endif; ?>

	</div><!-- .entry-summary -->

	<?php pukeko_edit_link(); ?>

</header><!-- .entry-header -->

	<div class="post-thumb">
		<a href="<?php the_permalink(); ?>" class="post-thumb-img">
			<?php the_post_thumbnail('pukeko-fi-classic'); ?>
			<span class="sticky-more"><?php esc_html_e( 'Read More', 'pukeko' ); ?><?php echo pukeko_get_svg( array( 'icon' => 'arrow-right' ) ); ?></span>
		</a>
	</div><!-- .post-thumb -->

	<footer class="entry-footer cf">

	<?php pukeko_posted_on(); ?>

	<?php if ( comments_open() ) : ?>
		<span class="entry-comments">
			<?php comments_popup_link(
			'<span class="screen-reader-text">' . esc_html__( 'Number of comments', 'pukeko' ) . '</span>' . '<span class="leave-reply">' . esc_html__( 'Comments 0', 'pukeko' ) . '</span>', esc_html__( 'Comment 1', 'pukeko' ), esc_html__( 'Comments %', 'pukeko' ) );
			?>
		</span><!-- end .entry-comments -->
	<?php endif; // comments_open() ?>

	</footer><!-- .entry-footer -->
