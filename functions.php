<?php 

add_theme_support( 'post-thumbnails' ); 


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