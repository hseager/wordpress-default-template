<?php 

// Enable featured image
add_theme_support( 'post-thumbnails' ); 

// Remove wordpress emoji junk
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Remove Gutenburg CSS
function remove_wp_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'wc-block-style' ); // Remove woocommerce
  wp_dequeue_style( 'global-styles' ); // Remove json stuff
}

add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 );

// Remove oembed & API
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

// Remove classic CSS
add_action( 'wp_enqueue_scripts', 'mywptheme_child_deregister_styles', 20 );
function mywptheme_child_deregister_styles() {
  wp_dequeue_style( 'classic-theme-styles' );
}

// Remove edit link
add_action('init', 'remheadlink');
function remheadlink() {
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
}

/* Hide Top Admin Bar 
add_filter( 'show_admin_bar', '__return_false' );
*/

/* Wordpress Menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' ); 
*/

/* Custom Image Size
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'block-image', 9999, 300 );  
}
*/

/* Custom Comment Template
function wordpressapi_comments($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>
 
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
<div id="comment-<?php comment_ID(); ?>">
 
<div>
<span class="postedon">Posted on <?php echo get_comment_date('d F Y') ?> - </span>
<?php $user_name_str = substr(get_comment_author(),0, 20); ?>
<span class="postedby">Posted by <?php echo $user_name_str ?> -  <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></span><span class="replylink"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
</div>
<?php if ($comment->comment_approved == '0') : ?>
<em><?php _e('Your comment is awaiting moderation.') ?></em>
<br />
<?php endif; ?>
 
<div class="commenttext">
<img src="/wp-content/themes/ctrservices/images/quotes.png" class="quotes"/> 
<div class="ctext"><?php comment_text() ?></div>
</div>
 
</div>
<?php } ?>

*/


?>