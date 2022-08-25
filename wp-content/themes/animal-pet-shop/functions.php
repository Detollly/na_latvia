<?php
/**
 * Animal Pet Shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Animal Pet Shop
 */

if ( ! defined( 'PET_CARE_ZONE_URL' ) ) {
    define( 'PET_CARE_ZONE_URL', esc_url( 'https://www.themagnifico.net/themes/animal-wordpress-theme/', 'animal-pet-shop') );
}
if ( ! defined( 'PET_CARE_ZONE_TEXT' ) ) {
    define( 'PET_CARE_ZONE_TEXT', __( 'Animal Pet Shop Pro','animal-pet-shop' ));
}

function animal_pet_shop_enqueue_styles() {
    wp_enqueue_style('animal-pet-shop-font', pet_care_zone_font_url(), array());
    wp_enqueue_style( 'flatly-css', esc_url(get_template_directory_uri()) . '/assets/css/flatly.css');
    $parentcss = 'pet-care-zone-style';
    $theme = wp_get_theme(); wp_enqueue_style( $parentcss, get_template_directory_uri() . '/style.css', array(), $theme->parent()->get('Version'));
    wp_enqueue_style( 'animal-pet-shop-style', get_stylesheet_uri(), array( $parentcss ), $theme->get('Version'));

    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );  
}

add_action( 'wp_enqueue_scripts', 'animal_pet_shop_enqueue_styles' );

function animal_pet_shop_theme_color() {

    $theme_color_css = '';
    $pet_care_zone_theme_color = get_theme_mod('pet_care_zone_theme_color');
    $pet_care_zone_theme_color_2 = get_theme_mod('pet_care_zone_theme_color_2');
    $pet_care_zone_preloader_bg_color = get_theme_mod('pet_care_zone_preloader_bg_color');
    $pet_care_zone_preloader_dot_1_color = get_theme_mod('pet_care_zone_preloader_dot_1_color');
    $pet_care_zone_preloader_dot_2_color = get_theme_mod('pet_care_zone_preloader_dot_2_color');

    if(get_theme_mod('pet_care_zone_preloader_bg_color') == '') {
        $pet_care_zone_preloader_bg_color = '#000';
    }
    if(get_theme_mod('pet_care_zone_preloader_dot_1_color') == '') {
        $pet_care_zone_preloader_dot_1_color = '#fff';
    }
    if(get_theme_mod('pet_care_zone_preloader_dot_2_color') == '') {
        $pet_care_zone_preloader_dot_2_color = '#022d61';
    }

    $theme_color_css = '
        .top-info,.comment-respond input#submit,#colophon,.main-navigation .sub-menu,.sidebar h5,#button,.sidebar input[type="submit"], .sidebar button[type="submit"],.sidebar .tagcloud a:hover,.post-navigation .nav-previous a:hover, .post-navigation .nav-next a:hover, .posts-navigation .nav-previous a:hover, .posts-navigation .nav-next a:hover,.woocommerce .woocommerce-ordering select,.pro-button a, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce-account .woocommerce-MyAccount-navigation ul li,.toggle-nav i,span.onsale,.addtocart a:hover,.social-link i.fab.fa-linkedin-in,.featured-cat,.woocommerce a.added_to_cart{
            background: '.esc_attr($pet_care_zone_theme_color).';
         }
        h1, h2, h3, h4, h5, h6,.article-box a,.sidebar ul li a:hover,p.price, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price {
            color: '.esc_attr($pet_care_zone_theme_color).';
         }
         
        .post-navigation .nav-previous a:hover, .post-navigation .nav-next a:hover, .posts-navigation .nav-previous a:hover, .posts-navigation .nav-next a:hover,.addtocart a:hover {
            border-color: '.esc_attr($pet_care_zone_theme_color).';
         }
        .wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote {
            border-color: '.esc_attr($pet_care_zone_theme_color).'!important;
         }
         @media screen and (max-width:1000px){
             .sidenav {
            background: '.esc_attr($pet_care_zone_theme_color).';
            }
         }
        .topbtn,.main-navigation .sub-menu > li > a:hover, .main-navigation .sub-menu > li > a:focus,.pro-button a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce ul.products li.product .onsale, .woocommerce span.onsale,#button:hover, #button:active,.comment-respond input#submit:hover,.woocommerce a.added_to_cart:hover {
            background: '.esc_attr($pet_care_zone_theme_color_2).';
         }
         .woocommerce .star-rating span::before, .woocommerce ul.products li.product .star-rating, .woocommerce .star-rating{
            color: '.esc_attr($pet_care_zone_theme_color_2).';
         }
         .loading{
            background-color: '.esc_attr($pet_care_zone_preloader_bg_color).';
         }
         @keyframes loading {
          0%,
          100% {
            transform: translatey(-2.5rem);
            background-color: '.esc_attr($pet_care_zone_preloader_dot_1_color).';
          }
          50% {
            transform: translatey(2.5rem);
            background-color: '.esc_attr($pet_care_zone_preloader_dot_2_color).';
          }
        }
    ';
    wp_add_inline_style( 'animal-pet-shop-style',$theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'animal_pet_shop_theme_color' );

function animal_pet_shop_customize_register($wp_customize){

    // Slider
    $wp_customize->add_section('animal_pet_shop_top_slider',array(
        'title' => esc_html__('Slider Option','animal-pet-shop'),
        'description' => esc_html__('Here you have to select page in below dropdown. Image Dimension ( 1800px x 600px )','animal-pet-shop'),
        'priority'   => 50,
    ));

    for ( $count = 1; $count <= 3; $count++ ) {
        $wp_customize->add_setting( 'animal_pet_shop_top_slider_page' . $count, array(
            'default'           => '',
            'sanitize_callback' => 'pet_care_zone_sanitize_dropdown_pages'
        ) );
        $wp_customize->add_control( 'animal_pet_shop_top_slider_page' . $count, array(
            'label'    => __( 'Select Slide Page', 'animal-pet-shop' ),
            'section'  => 'animal_pet_shop_top_slider',
            'type'     => 'dropdown-pages'
        ) );
    }

    // Our Services
    $wp_customize->add_section('animal_pet_shop_services_section',array(
        'title' => esc_html__('Our Services','animal-pet-shop'),
        'description' => esc_html__('Here you have to select category which will display perticular services in the home page.','animal-pet-shop'),
        'priority' => 70,
    ));

    $wp_customize->add_setting('animal_pet_shop_services_title',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control('animal_pet_shop_services_title',array(
        'label' => esc_html__('Section Title','animal-pet-shop'),
        'section' => 'animal_pet_shop_services_section',
        'setting' => 'animal_pet_shop_services_title',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('animal_pet_shop_services_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control('animal_pet_shop_services_text',array(
        'label' => esc_html__('Section Text','animal-pet-shop'),
        'section' => 'animal_pet_shop_services_section',
        'setting' => 'animal_pet_shop_services_text',
        'type'  => 'text'
    ));

    $categories = get_categories();
    $cat_post = array();
    $cat_post[]= 'select';
    $i = 0; 
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cat_post[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('animal_pet_shop_services_sec_category',array(
        'default'   => 'select',
        'sanitize_callback' => 'pet_care_zone_sanitize_select',
    ));
    $wp_customize->add_control('animal_pet_shop_services_sec_category',array(
        'type'    => 'select',
        'choices' => $cat_post,
        'label' => __('Select Category to display services','animal-pet-shop'),
        'section' => 'animal_pet_shop_services_section',
    ));

    $wp_customize->add_setting('animal_pet_shop_services_per_page',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control('animal_pet_shop_services_per_page',array(
        'label' => esc_html__('No Of Icons','animal-pet-shop'),
        'section' => 'animal_pet_shop_services_section',
        'setting' => 'animal_pet_shop_services_per_page',
        'type'  => 'text'
    ));

    $icon = get_theme_mod('animal_pet_shop_services_per_page','');
    for ($i=1; $i <= $icon; $i++) {
        $wp_customize->add_setting('animal_pet_shop_services_icon'.$i,array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )); 
        $wp_customize->add_control('animal_pet_shop_services_icon'.$i,array(
            'label' => esc_html__('Icon ','animal-pet-shop').$i,
            'section' => 'animal_pet_shop_services_section',
            'setting' => 'animal_pet_shop_services_icon'.$i,
            'type'  => 'text'
        ));
    }
}
add_action('customize_register', 'animal_pet_shop_customize_register');

if ( ! function_exists( 'animal_pet_shop_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function animal_pet_shop_setup() {

        add_theme_support( 'responsive-embeds' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        add_image_size('animal-pet-shop-featured-header-image', 2000, 660, true);

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'pet_care_zone_custom_background_args', array(
            'default-color' => '',
            'default-image' => '',
        ) ) );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 50,
            'width'       => 50,
            'flex-width'  => true,
        ) );

        add_editor_style( array( '/editor-style.css' ) );

        add_theme_support( 'align-wide' );

        add_theme_support( 'wp-block-styles' );
    }
endif;
add_action( 'after_setup_theme', 'animal_pet_shop_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function animal_pet_shop_widgets_init() {
        register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'animal-pet-shop' ),
        'id'            => 'sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'animal-pet-shop' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ) );
}
add_action( 'widgets_init', 'animal_pet_shop_widgets_init' );

function animal_pet_shop_remove_my_action() {
    remove_action( 'admin_menu','pet_care_zone_themepage' );
    remove_action( 'after_switch_theme','pet_care_zone_setup_options' );
}
add_action( 'init', 'animal_pet_shop_remove_my_action');

function animal_pet_shop_remove_customize_register() {
    global $wp_customize;
    $wp_customize->remove_section( 'pet_care_zone_top_slider' );
}

add_action( 'customize_register', 'animal_pet_shop_remove_customize_register', 11 );