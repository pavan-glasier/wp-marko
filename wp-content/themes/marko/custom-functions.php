<?php
/**
 * marko custom style css adding
 *
 */


 if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		$args = array();
		if( have_rows('register_menus', 'option') ):
			while(have_rows('register_menus', 'option')): the_row();
			$args = array_merge($args, array(
				get_sub_field('name') => __( get_sub_field('label'), 'marko' ),
			));
			endwhile; 
		endif;
		register_nav_menus( $args );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}


// Register Nav Walker class_alias
// require_once('wp-bootstrap-navwalker.php');

 if (!function_exists('marko_style_css')) {
	function marko_style_css()
	{
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 'all');
		wp_enqueue_style('rs', get_template_directory_uri() . '/assets/css/rs.css', array(), 'all');
		wp_enqueue_style('shortcodes', get_template_directory_uri() . '/assets/css/shortcodes.css', array(), 'all');
		wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), 'all');
		wp_enqueue_style('style-min', get_template_directory_uri() . '/assets/css/style.css', array(), 'all');
		wp_enqueue_style('megamenu', get_template_directory_uri() . '/assets/css/megamenu.css', array(), 'all');
		wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), 'all');
		wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.css', array(), 'all');
	}
	add_action('wp_head', 'marko_style_css', 1);
}

if (!function_exists('marko_script_js')) {
	function marko_script_js(){
		wp_enqueue_script('jquery-min-js', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), true);
		wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.3.2.min.js', array(), true);
		wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), true);
		wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.js', array(), true);
		wp_enqueue_script('jquery-waypoints', get_template_directory_uri() . '/assets/js/jquery-waypoints.js', array(), true);
		wp_enqueue_script('jquery-validate', get_template_directory_uri() . '/assets/js/jquery-validate.js', array(), true);
		wp_enqueue_script('jquery-prettyPhoto', get_template_directory_uri() . '/assets/js/jquery.prettyPhoto.js', array(), true);
		wp_enqueue_script('slick-min-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), true);
		wp_enqueue_script('numinate-min', get_template_directory_uri() . '/assets/js/numinate.min.js', array(), true);
		
		wp_enqueue_script('imagesloaded-min', get_template_directory_uri() . '/assets/js/imagesloaded.min.js', array(), true);
		wp_enqueue_script('jquery-isotope', get_template_directory_uri() . '/assets/js/jquery-isotope.js', array(), true);
		wp_enqueue_script('rbtools.min', get_template_directory_uri() . '/assets/js/rbtools.min.js', array(), true);
		wp_enqueue_script('rs6.min', get_template_directory_uri() . '/assets/js/rs6.min.js', array(), true);
		wp_enqueue_script('slider-js', get_template_directory_uri() . '/assets/js/slider.js', array(), true); 
		wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), true); 
	}
	add_action('wp_footer', 'marko_script_js');
}
// if (!function_exists('add_lang_item_to_nav_menu')) {
// 	add_filter('wp_nav_menu_items', 'add_lang_item_to_nav_menu', 10, 2);
// 	function add_lang_item_to_nav_menu($items, $args)
// 	{
// 		if ($args->theme_location == 'header-menu') {
// 			$items .= '<li class="languages">
// 							<select name="languages">
// 								<option value="en">EN</option>
// 								<option value="es">ES</option>
// 								<option value="pt">PT</option>
// 								<option value="fr">FR</option>
// 								<option value="zh">ZH</option>
// 							</select>
// 						</li>';
// 		}
// 		return $items;
// 	}
// }


add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{
	if (function_exists('acf_add_options_page')) {
		// Theme General Options
		$general_options   = array(
			'page_title' 	=> __('Theme General Options', 'marko'),
			'menu_title'	=> __('Theme Options', 'marko'),
			'menu_slug' 	=> 'theme-general-options',
			'capability'	=> 'edit_posts',
			'redirect'	=> true,
			'icon_url'      => 'dashicons-screenoptions',
			'position'      => 2
		);
		acf_add_options_page($general_options);

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Header',
			'menu_title'	=> 'Theme Header',
			'parent_slug'	=> 'theme-general-options',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Footer',
			'menu_title'	=> 'Theme Footer',
			'parent_slug'	=> 'theme-general-options',
		));
	}
}


// add css file in admin for acf
function acf_admin_theme_style()
{
	wp_enqueue_style('acf-admin', get_template_directory_uri() . '/assets/css/acf-admin.css');
}
add_action('admin_enqueue_scripts', 'acf_admin_theme_style');
add_action('login_enqueue_scripts', 'acf_admin_theme_style');


// testimonial post type register
/**
 * Post Type: Testimonials.
 */
function register_marko_testimonials() {
	$labels = [
		"name" => __( "Testimonials", "marko" ),
		"singular_name" => __( "Testimonials", "marko" ),
	];
	$args = [
		"label" => __( "Testimonials", "marko" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "testimonials", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-quote",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"show_in_graphql" => false,
	];
	register_post_type( "testimonials", $args );
}
add_action( 'init', 'register_marko_testimonials' );




// product post type register
/**
 * Post Type: Products.
 */
function register_marko_products() {
	$labels = [
		"name" => __( "Products", "marko" ),
		"singular_name" => __( "Products", "marko" ),
	];
	$args = [
		"label" => __( "Products", "marko" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "products", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-products",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		// "show_in_graphql" => false,
	];
	register_post_type( "products", $args );
}
add_action( 'init', 'register_marko_products' );


/**
 * Taxonomy: Product Category.
 */
function register_marko_product_category()
{
	$labels = [
		"name" => __("Product Categories", "marko"),
		"singular_name" => __("Category", "marko"),
	];
	$args = [
		"label" => __("Categories", "marko"),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => ['slug' => 'product_category', 'with_front' => true, 'hierarchical' => true],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "product_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		// "show_in_graphql" => false,
	];
	register_taxonomy("product_category", ["products"], $args);
}
add_action('init', 'register_marko_product_category');


// Allow SVG
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
	global $wp_version;
	if ($wp_version !== '4.7.1') {
		return $data;
	}
	$filetype = wp_check_filetype($filename, $mimes);
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}, 10, 4);

function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');




// Function to get the client IP address
function get_client_ip()
{
	$ipaddress = '';
	if (isset($_SERVER['HTTP_CLIENT_IP']))
		$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if (isset($_SERVER['HTTP_X_FORWARDED']))
		$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
		$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	else if (isset($_SERVER['HTTP_FORWARDED']))
		$ipaddress = $_SERVER['HTTP_FORWARDED'];
	else if (isset($_SERVER['REMOTE_ADDR']))
		$ipaddress = $_SERVER['REMOTE_ADDR'];
	else
		$ipaddress = 'UNKNOWN';
	return $ipaddress;
}
add_shortcode('client_ip', 'get_client_ip');


// contact form 7 validation
add_filter('wpcf7_before_send_mail', function ($contact_form, &$abort) {
	$submission = WPCF7_Submission::get_instance();
	$data = $submission->get_posted_data();
	$email = sanitize_text_field($data['email']);

	if (preg_match("/[~`!@#$%^&*()+={}\[\]|\\:;\"'<>,.?\/]/", sanitize_text_field($data['fullname']))) {
		$abort = true;
		$submission->set_response("Invalid Your Name. Please try again.");
	} else if (preg_match("/[~`!@#$%^&*()+={}\[\]|\\:;\"'<>,.?\/]/", sanitize_text_field($data['subject']))) {
		$abort = true;
		$submission->set_response("Invalid Your Subject. Please try again later.");
	} else if (preg_match("/[~`!@#$%^&*()+={}\[\]|\\:;\"'<>,.?\/]/", sanitize_text_field($data['message']))) {
		$abort = true;
		$submission->set_response("There was an error trying to send your message. Please try again later.");
	}
}, 10, 2);


// remove archive prefix "Archives"
add_filter('get_the_archive_title_prefix', '__return_false');



// logo link site url
function custom_login_logo_url()
{
	return get_bloginfo('url');
}
add_filter('login_headerurl', 'custom_login_logo_url');

// add a new logo to the login page
function wptutsplus_login_logo()
{
	$logoImage = wp_get_attachment_url(get_theme_mod('custom_logo'), 'full'); ?>
<style type="text/css">
.login #login h1 a {
    background-image: url('<?php echo $logoImage; ?>');
    background-size: 200px auto;
    height: 120px;
    width: 100%;
    margin-bottom: 10px;
}

.login #nav a,
.login #backtoblog a {
    color: #eb6e0e !important;
}

.login #nav a:hover,
.login #backtoblog a:hover {
    color: #eb6e0e !important;
}

.login #login_error,
.login .message,
.login .success {
    margin-bottom: 10px;
}

.login form {
    margin-top: 10px;
}

.login.wp-core-ui .button.button-primary {
    background: #eb6e0e !important;
    border-color: #eb6e0e !important;
    color: #fff !important;
}

.login.wp-core-ui .button-primary.focus,
.login.wp-core-ui .button-primary.hover,
.login.wp-core-ui .button-primary:focus,
.login.wp-core-ui .button-primary:hover {
    background: #3f3f41 !important;
    border-color: #3f3f41 !important;
}

.login.wp-core-ui .button,
.login.wp-core-ui .button-secondary {
    color: #3f3f41 !important;
}

.login .button.wp-hide-pw:focus {
    border-color: #3f3f41 !important;
    box-shadow: 0 0 0 1px #3f3f41 !important;
}

.login #loginform input[type="checkbox"]:focus,
.login #loginform input[type="password"]:focus,
.login #loginform input[type="radio"]:focus,
.login #loginform input[type="text"]:focus,
.login #loginform select:focus,
.login #loginform textarea:focus {
    border-color: #3f3f41 !important;
    box-shadow: 0 0 0 1px #3f3f41 !important;
    outline: 2px solid transparent;
}

.login #loginform input[type="checkbox"]:checked::before {
    content: "" !important;
    mask-image: url("data:image/svg+xml;utf8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 20 20'%3E%3Cpath d%3D'M14.83 4.89l1.34.94-5.81 8.38H9.02L5.78 9.67l1.34-1.25 2.57 2.4z' fill%3D'%233582c4'%2F%3E%3C%2Fsvg%3E");
    mask-origin: border-box;
    background: #3f3f41;
}
</style>
<?php }
add_action('login_enqueue_scripts', 'wptutsplus_login_logo');




function my_nav_menu_submenu_css_class( $classes ) {
    $classes[] = 'mega-submenu';
    return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'my_nav_menu_submenu_css_class' );

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_specific_menu_location_atts( $atts, $item, $args ) {
	foreach ($item->classes as $key => $value) {
		if( $value == 'menu-item-has-children' ){
			$atts['class'] = 'mega-menu-link';
		}
	}
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );


