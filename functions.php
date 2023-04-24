<?php

/**
 * Theme setup.
 */
function intergest_theme_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
			'secondary' => __( 'Secondary Menu', 'tailpress'),
			'services' => __( 'Services Menu', 'tailpress'),
			'contact' => __( 'Contact Menu', 'tailpress'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'intergest_theme_setup' );

/**
 * Enqueue theme assets.
 */
function intergest_theme_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', intergest_theme_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', intergest_theme_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'intergest_theme_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function intergest_theme_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function intergest_theme_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'intergest_theme_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function intergest_theme_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'intergest_theme_nav_menu_add_submenu_class', 10, 3 );

function intergest_theme_social($wp_customize) {

	$wp_customize->add_section('intergest-theme-social-section', array(
		'title' => 'Social Media'
		));

	$wp_customize->add_setting('intergest-theme-social-li', array(

		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'intergest-theme-social-li-control', array(
		'label' => 'Linkedin link',
		'section' => 'intergest-theme-social-section',
		'settings' => 'intergest-theme-social-li'
		)));

	$wp_customize->add_setting('intergest-theme-social-yt', array(

		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'intergest-theme-social-yt-control', array(
		'label' => 'Youtube link',
		'section' => 'intergest-theme-social-section',
		'settings' => 'intergest-theme-social-yt'
		)));

	$wp_customize->add_setting('intergest-theme-social-it', array(

		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'intergest-theme-social-it-control', array(
		'label' => 'Instagram link',
		'section' => 'intergest-theme-social-section',
		'settings' => 'intergest-theme-social-it'
		)));
}

add_action('customize_register','intergest_theme_social');

function intergest_theme_company_details($wp_customize) {

	$wp_customize->add_section('intergest-theme-company-details', array(
		'title' => 'Company Details'
		));

	$wp_customize->add_setting('intergest-theme-company-details-name', array(

		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'intergest-theme-company-details-name-control', array(
		'label' => 'Name',
		'section' => 'intergest-theme-company-details',
		'settings' => 'intergest-theme-company-details-name'
		)));

	$wp_customize->add_setting('intergest-theme-company-details-address-1', array(

		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'intergest-theme-company-details-address-1-control', array(
		'label' => 'Address',
		'section' => 'intergest-theme-company-details',
		'settings' => 'intergest-theme-company-details-address-1'
		)));

	$wp_customize->add_setting('intergest-theme-company-details-address-2', array(

		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'intergest-theme-company-details-address-2-control', array(
		'label' => 'Country, Zip code, City',
		'section' => 'intergest-theme-company-details',
		'settings' => 'intergest-theme-company-details-address-2'
		)));

	$wp_customize->add_setting('intergest-theme-company-details-tel', array(

		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'intergest-theme-company-details-tel-control', array(
		'label' => 'Telephone number',
		'section' => 'intergest-theme-company-details',
		'settings' => 'intergest-theme-company-details-tel'
		)));

	$wp_customize->add_setting('intergest-theme-company-details-fax', array(

		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'intergest-theme-company-details-fax-control', array(
		'label' => 'Fax number',
		'section' => 'intergest-theme-company-details',
		'settings' => 'intergest-theme-company-details-fax'
		)));

	$wp_customize->add_setting('intergest-theme-company-details-mail', array(

		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'intergest-theme-company-details-mail-control', array(
		'label' => 'Email',
		'section' => 'intergest-theme-company-details',
		'settings' => 'intergest-theme-company-details-mail'
		)));
}

add_action('customize_register','intergest_theme_company_details');

function intergest_theme_language_switcher_widget_area(){

	register_sidebar(
		array(
			'before_title' => '',
			'after_title' => '',
			'before_widget' => '',
			'after_widget' => '',
			'name' => 'Navbar Language Switcher Area',
			'id' => 'language-switcher',
			'description' => 'Navbar Language Switcher Widget Area'
		)
	);
}

add_action('widgets_init', 'intergest_theme_language_switcher_widget_area');