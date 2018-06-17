<?php
define('THEME_NAME', 'inmediate');
/**
 * * ***************************************************************************
 * Is admin
 */
if(is_admin()) {
    require ('inc/admin/customizer.php');
    require ('inc/admin/filter.php');
} else {    
    /**
     * ***************************************************************************
     * Front end
     */
    require ('inc/theme-functions.php');
    require ('inc/filter.php');
    require ('inc/theme-render.php');

    // Test show logo
    // $logo = $themeMods->getMods('img-upload-logo');
    // renderLogo($logo);
}
require ('inc/register-posttype.php');

if ( ! function_exists( 'inmediate_setup' ) ) :   
    function inmediate_setup() {     
        load_theme_textdomain( THEME_NAME );    
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
         * Enable support for custom logo. 
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 165,
            'width'       => 40,
            'flex-height' => true,
        ) );
    
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1200, 9999 );
    
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', THEME_NAME ),
            'social'  => __( 'Social Links Menu', THEME_NAME ),
        ) );
    
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
    
        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat',
        ) );
    
        // Indicate widget sidebars can use selective refresh in the Customizer.
        add_theme_support( 'customize-selective-refresh-widgets' );
    }
    endif; // twentysixteen_setup
    add_action( 'after_setup_theme', 'inmediate_setup' );