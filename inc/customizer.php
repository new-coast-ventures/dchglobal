<?php
/**
 * dchglobal Theme Customizer.
 *
 * @package dchglobal
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function dchglobal_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'dchglobal_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function dchglobal_customize_preview_js() {
	wp_enqueue_script( 'dchglobal_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'dchglobal_customize_preview_js' );

/**
 * Check if content is empty
 */
function empty_content($str) {
    return trim(str_replace('&nbsp;','',strip_tags($str))) == '';
}

/**
 * Comments
 */
 function pillow_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
      <div id="comment-<?php comment_ID(); ?>">

				<?php if ($comment->comment_approved == '0') : ?>
					<em><?php _e('Your comment is awaiting moderation.') ?></em>
				<?php endif; ?>

				<div class="comment-meta commentmetadata">
					<?php edit_comment_link(__('Edit')) ?>
					<?php printf(__('%s'), get_comment_author_link()) ?> on <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a> said:
				</div>
				<?php comment_text() ?>
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
<?php }
