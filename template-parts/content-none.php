<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dchglobal
 */

?>

<section class="no-results not-found">
	<div class="blog-content">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="post post-content">
						<div class="p-header">
							<h1><?php esc_html_e( 'Nothing Found', 'dchglobal' ); ?></h1>
							<?php
							if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

								<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'dchglobal' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

							<?php elseif ( is_search() ) : ?>

								<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dchglobal' ); ?></p>
								<?php

							else : ?>

								<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'dchglobal' ); ?></p>
								<?php

							endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
