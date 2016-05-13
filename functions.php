<?
function enqueue_styles() {
	wp_enqueue_style( 'reset-style', get_template_directory_uri() . '/css/reset.css');
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	wp_enqueue_script('html5-shim', get_template_directory_uri() . '/js/html5.js');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
?>