<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dchglobal
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<?php if ( have_comments() ) : ?>
					<h5 class="comments-title">
						<?php
							printf( // WPCS: XSS OK.
								esc_html( _nx( 'One response to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'dchglobal' ) ),
								number_format_i18n( get_comments_number() ),
								'<span>' . get_the_title() . '</span>'
							);
						?>
					</h5>
					<ol class="comment-list">
						<?php
							wp_list_comments('type=comment&callback=mytheme_comment');
							wp_list_comments( array(
								'type'				=> 'comment',
								'callback'		=> 'pillow_comment',
								'style'      	=> 'ol',
								'short_ping' 	=> true,
							));
						?>
					</ol>
				<?php endif; ?>
				<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
					<p class="no-comments"><?php esc_html_e( 'Responses are closed.', 'dchglobal' ); ?></p>
				<?php endif; ?>
				<?php $args = array(
					'fields' => apply_filters( 'comment_form_default_fields', array(
						'author' =>
							'<fieldset class="form-group">' .
							'<input id="author" class="form-control" placeholder="Name" name="author" type="text" value="' .
							esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
							( $req ? '<span class="required">*</span>' : '' )  .
							'</fieldset>',

						'email' =>
							'<fieldset class="form-group">' .
							'<input id="email" class="form-control" placeholder="Email address (will not be published)" name="email" type="text" value="' .
							esc_attr(  $commenter['comment_author_email'] ) .
							'" size="30"' . $aria_req . ' />'  .
							( $req ? '<span class="required">*</span>' : '' ).
							'</fieldset>',

						'url' =>
							'<fieldset class="form-group">' .
							'<input id="url" class="form-control" name="url" placeholder="Website" type="text" value="' .
							esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
							'</fieldset>'
						)
					),
					'comment_field' =>
						'<fieldset class="form-group">' .
						'<textarea id="comment" class="form-control" name="comment" rows="6" aria-required="true"></textarea>' .
						'</fieldset>',

    			'title_reply' =>
						'<h5>Leave a Reply</h5>',

					'label_submit' =>
						'Comment'
				); ?>
				<?php comment_form( $args ); ?>
			</div>
		</div>
	</div>
</div>
