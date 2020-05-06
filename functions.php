<?php
function wordpressify_resources() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'header_js', get_template_directory_uri() . '/js/header-bundle.js', null, 1.0, false );
	wp_enqueue_script( 'footer_js', get_template_directory_uri() . '/js/footer-bundle.js', null, 1.0, true );
}

add_action( 'wp_enqueue_scripts', 'wordpressify_resources' );
add_action( 'enqueue_block_editor_assets', 'guttenberEditor' );
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', array('excerpt') );

function guttenberEditor() {
	
	wp_enqueue_style( 'guttenberEditor', get_theme_file_uri( '/style-editor.css' ), false );
}

register_nav_menus(array(
	'top'    => 'Верхнее меню',
	'main' => 'Главное меню'
));

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title'    => __('Настройки сайта'),
		'menu_title'    => __('Настройки сайта'),
		'menu_slug'     => 'theme-general-settings'
  ));
	
}
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title'    => __('Отзывы'),
		'menu_title'    => __('Отзывы'),
		'menu_slug'     => 'testimonial-menu',
		'post_id' => 'testimonial'
  ));
	
}


add_action( 'acf/init', 'ctaLeftBlock' );
add_action( 'acf/init', 'advantagePic' );
add_action( 'acf/init', 'tickList' );
add_action( 'acf/init', 'formPage' );
add_action( 'acf/init', 'termsLoad' );
//Регистрация блоков
function ctaLeftBlock() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'ctaLeftBlock',
			  'title'             => __('Левый блок'),
			  'description'       => __('Обычно выводится только в ипотеке. Содержит заголовок, текст, кнопку'),
			  'enqueue_style'     => get_template_directory_uri() . '/cta-left-block.css',
			  'render_template'   => '/blocks-editor/cta-left-block.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'Edit'
		 ));
	}
}

function advantagePic() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'advantagePic',
			  'title'             => __('Преимущества'),
			  'description'       => __('Картинка и текст в маленькой карточке'),
			  'enqueue_style'     => get_template_directory_uri() . '/advantagePic-block.css',
			  'render_template'   => '/blocks-editor/advantagePic.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'Edit'
		 ));
	}
}

function tickList() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'tickList',
			  'title'             => __('Иконка и текст'),
			  'description'       => __('Блок с иконкой и текстом'),
			  'enqueue_style'     => get_template_directory_uri() . '/tickList-block.css',
			  'render_template'   => '/blocks-editor/tickList.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'Edit'
		 ));
	}
}

function formPage() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'formPage',
			  'title'             => __('Форма для внутриних страниц'),
			  'description'       => __('Блок с главной формой текстом и заголовком'),
			  'enqueue_style'     => get_template_directory_uri() . '/formPage-block.css',
			  'render_template'   => '/blocks-editor/formPage.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'Edit'
		 ));
	}
}


function termsLoad() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'termsLoad',
			  'title'             => __('Условия кредита'),
			  'description'       => __('Блок для условий кредита'),
			  'enqueue_style'     => get_template_directory_uri() . '/termsLoad-block.css',
			  'render_template'   => '/blocks-editor/termsLoad.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'Edit'
		 ));
	}
}