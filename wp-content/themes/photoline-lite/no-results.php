<?php
/**
 * The template part for displaying a message that posts cannot be found.
 * @package Photoline Lite
 */
?>

<section class="no-results not-found">

	<div class="page-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'photoline-lite' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'photoline-lite' ); ?></p>
			<?php the_widget( 'WP_Widget_Search' ); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'photoline-lite' ); ?></p>
			<?php the_widget( 'WP_Widget_Search' ); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
