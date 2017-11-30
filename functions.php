<?php
/**
 * AdPost Custom Theme
 *
 */
 /**
 *Register bootstrap and custom scripts
 */
 
function adpost_enqueue_scripts(){
	//register a script like this for a theme
	wp_enqueue_script('tether-js', get_template_directory_uri().'/assets/js/tether-1.3.3/dist/js/tether.min.js');
	wp_enqueue_script('jquery-js', get_template_directory_uri().'/assets/js/jquery/jquery-3.2.1.min.js');
	wp_enqueue_script('jquery-validate-js', get_template_directory_uri().'/assets/js/jquery/jquery.validate.js');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap/js/bootstrap.min.js');
	wp_enqueue_script('adpost-js', get_template_directory_uri().'/assets/js/script.js');
}
add_action('wp_enqueue_scripts', 'adpost_enqueue_scripts');

function adpost_enqueue_style() {
	wp_enqueue_style( 'custom-styles', get_template_directory_uri(). '/assets/css/custom-styles.css' );
}
add_action( 'login_enqueue_scripts', 'adpost_enqueue_style' );
/**
*Redirect to home page after login
*
*/
function login_redirect_page(){
	return '/wordpress/aboutme/home/';
}
add_filter('login_redirect', 'login_redirect_page');

/**
*Create home page
*/
if(get_page_by_title("home") == null){
	$post = array(
		'post_title' 	=>	'home',
		'post_status'	=>	'publish',
		'post_type' 	=> 	'page',
		'menu_order' 	=>	'-100',
		'page_template' =>	'scroll-page.php'
	);
	wp_insert_post($post);
	$home_page = get_page_by_title("home");
	update_option('page_on_front', $home_page->ID);
	update_option('show_on_front', 'page');
}
/**
*Create page links
*
*/
function new_nav_memnu_items($items){
	$items = "";
	$args = array(
				'post_type'	=> 'page',
				'order'		=> 'ASC',
				'orderby'	=> 'menu_order'
			);
	$the_query = new WP_Query($args);
	if($the_query->have_posts()):
		while($the_query->have_posts()):
			$the_query->the_post();
			$items .= '<li><a href="#post-'. get_the_ID() . '" onclick=scrollTo("post-'. get_the_ID() .'")>' .get_the_title() . '</a></li>';
		endwhile;
	else:
		echo '';
	endif;
	
	return $items;
}
add_filter('wp_nav_menu_items', 'new_nav_memnu_items');
/**
*Register menus
*
*/
register_nav_menus(
	array(
		'primary' 	=> __('Primary Navigation', 'onepagesite'),
		'secondary' => __('Secondary Navigation', 'onepagesite')
	)
);
/**
*Header Image
*
*/
$header_img = array(
	'flex-width' => true,
	'width'		=> 0,
	'height'	=> 0,
	'flex-height'            => false,
	'flex-width'             => true,
	'default-image'	=> '',
	'uploads'	=> true,
);
add_theme_support('custom-header', $header_img);

/**
*Custom Background
*
*/
$custom_background = array(
	'default-color' => 'e9eef2',
	'default-image' => ''
);
add_theme_support( 'custom-background', $args );
									
/**
 * Register widget area.
 *
 */
function adpost_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 1', 'adpost' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'adpost' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Page Widget Area 1', 'adpost' ),
		'id'            => 'page-1',
		'description'   => __( 'Add widgets here to appear in your page.', 'adpost' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'adpost_widgets_init' );

?>