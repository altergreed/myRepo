<?php
function child_twentyseventeen_scripts() {
    wp_enqueue_script( 'jquery');
	wp_enqueue_style( 'twentyseventeen-child-main-style', get_theme_file_uri(). '/assets/css/main.min.css' );
    wp_enqueue_style( 'twentyseventeen-child-owl-carousel', get_theme_file_uri() . '/assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'twentyseventeen-child-owl-theme', get_theme_file_uri() . '/assets/css/owl.theme.default.min.css' );
    wp_enqueue_script( 'twentyseventeen-child-owl-script', get_theme_file_uri() . '/assets/js/owl.carousel.min.js' );
    wp_enqueue_script( 'twentyseventeen-child-sticky-kit', get_theme_file_uri() . '/assets/js/jquery.sticky-kit.min.js' );
    wp_enqueue_script( 'twentyseventeen-child-main-script', get_theme_file_uri() . '/assets/js/main.min.js' );
    wp_enqueue_script( 'twentyseventeen-child-sticky-script', get_theme_file_uri() . '/assets/js/sticky.min.js' );
}
add_action( 'wp_enqueue_scripts', 'child_twentyseventeen_scripts' );

add_filter('widget_text', 'do_shortcode');

add_theme_support( 'html5', array( 'search-form' ) );

require_once (dirname(__FILE__) . '/sample/barebones-config.php');

function get_slider_main( $name = null ) {

	do_action( 'get_slider_main', $name );

	$templates = array();
	$name      = (string) $name;
	if ( '' !== $name ) {
		$templates[] = "slider-main-{$name}.php";
	}

	$templates[] = 'slider-main.php';

	locate_template( $templates, true );
}

function get_slider_industry( $name = null ) {

	do_action( 'get_slider_industry', $name );

	$templates = array();
	$name      = (string) $name;
	if ( '' !== $name ) {
		$templates[] = "slider-industry-{$name}.php";
	}

	$templates[] = 'slider-industry.php';

	locate_template( $templates, true );
}

function get_announ_news( $name = null ) {

	do_action( 'get_announ_news', $name );

	$templates = array();
	$name      = (string) $name;
	if ( '' !== $name ) {
		$templates[] = "announ-news-{$name}.php";
	}

	$templates[] = 'announ-news.php';

	locate_template( $templates, true );
}

function get_on_this_category( $name = null ) {

	do_action( 'get_on_this_category', $name );

	$templates = array();
	$name      = (string) $name;
	if ( '' !== $name ) {
		$templates[] = "on-this-category-{$name}.php";
	}

	$templates[] = 'on-this-category.php';

	locate_template( $templates, true );
}

function jpen_custom_post_sort( $post ){
  add_meta_box(
    'custom_post_sort_box',
    'Позиция',
    'jpen_custom_post_order',
    'post' ,
    'side'
    );
}
add_action( 'add_meta_boxes', 'jpen_custom_post_sort' );

/* Add a field to the metabox */
function jpen_custom_post_order( $post ) {
  wp_nonce_field( basename( __FILE__ ), 'jpen_custom_post_order_nonce' );
  $current_pos = get_post_meta( $post->ID, 'custom_post_order', true); ?>
  <p>Позиция элемента на главной странице</p>
  <p><input type="number" name="pos" value="<?php echo $current_pos; ?>" /></p>
  <?php
}

/* Save the input to post_meta_data */
function jpen_save_custom_post_order( $post_id ){
  if ( !isset( $_POST['jpen_custom_post_order_nonce'] ) || !wp_verify_nonce( $_POST['jpen_custom_post_order_nonce'], basename( __FILE__ ) ) ){
    return;
  }
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
    return;
  }
  if ( ! current_user_can( 'edit_post', $post_id ) ){
    return;
  }
  if ( isset( $_REQUEST['pos'] ) ) {
    update_post_meta( $post_id, 'custom_post_order', sanitize_text_field( $_POST['pos'] ) );
  }
}
add_action( 'save_post', 'jpen_save_custom_post_order' );

/* Add custom post order column to post list */
function jpen_add_custom_post_order_column( $columns ){
  return array_merge ( $columns,
    array( 'pos' => 'Позиция', ));
}
add_filter('manage_posts_columns' , 'jpen_add_custom_post_order_column');

/* Display custom post order in the post list */
function jpen_custom_post_order_value( $column, $post_id ){
  if ($column == 'pos' ){
    echo '<p>' . get_post_meta( $post_id, 'custom_post_order', true) . '</p>';
  }
}
add_action( 'manage_posts_custom_column' , 'jpen_custom_post_order_value' , 10 , 2 );

add_filter('wp_ulike_format_number','wp_ulike_new_format_number',10,3);
function wp_ulike_new_format_number($value, $num, $plus){
	if ($num >= 1000 && get_option('wp_ulike_format_number') == '1'):
	$value = round($num/1000, 2) . 'K';
	elseif($num==0):
    $value=0;
    else:
	$value = $num;
	endif;
	return $value;
}

?>
