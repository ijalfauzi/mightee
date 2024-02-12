<?php

// Load Stylesheet and JavaScript

function mightee_files() {
    wp_enqueue_style('mightee_main_files', get_theme_file_uri('/css/style.css'));
    wp_enqueue_script('mightee_main_js', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'mightee_files');

// Google Fonts

function enqueue_google_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,500i,600,600i,700,700i,800|Open+Sans:400,400i,600,600i,700,700i,800', array(), null);
}

add_action('wp_enqueue_scripts', 'enqueue_google_fonts');

function add_preconnect_header() {
    echo '<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>';
}

add_action('wp_head', 'add_preconnect_header');

function add_font_display_property($styles) {
    $styles .= '<style></style>';
    return str_replace('<style>', '<style></style>', $styles);
}
add_filter('style_loader_tag', 'add_font_display_property');

// Add Document Title Tag

function mightee_features() {
    register_nav_menu('headerMenuLocation', __('Header Menu Location'));
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'mightee_features');

// Remove Gutenberg Block Library CSS from Loading the Frontend

function mightee_remove_wp_block_library() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wp-blocks-style' ); // Remove WooCommerce block CSS
}

add_action('wp_enqueue_scripts', 'mightee_remove_wp_block_library');

// Remove Dashicons in Frontend for Unauthenticated Users

function mightee_remove_dashicons() {
    if ( ! is_user_logged_in() ) {
        wp_deregister_style( 'dashicons' );
    }
}

add_action('wp_enqueue_scripts', 'mightee_remove_dashicons');

// Remove WordPress Classic Theme CSS

function mightee_remove_classic_theme() {
    wp_deregister_style('classic-theme-styles');
    wp_dequeue_style('classic-theme-styles');
}

add_filter('wp_enqueue_scripts', 'mightee_remove_classic_theme');

// Filter function to disable TinyMCE emojicons

function disable_emojicons_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
      return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
      return array();
    }
}
  
function disable_wp_emojicons() {
  
    // all actions related to emojis
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  
    // filter to remove TinyMCE emojis
    add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );

}

add_action( 'init', 'disable_wp_emojicons' ); // hook into init and remove actions

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


// Add theme options page to the admin menu

function custom_theme_menu() {
    add_theme_page('Theme Options', 'Theme Options', 'manage_options', 'theme-options', 'custom_theme_page');
}

add_action('admin_menu', 'custom_theme_menu');


// Display the theme options page

function custom_theme_page() {
    ?>
    <div class="wrap">
        <h1>Mightee Theme Options</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('custom_theme_options');
            do_settings_sections('custom_theme_options');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}


// Register and initialize theme options

function custom_theme_settings() {
    register_setting('custom_theme_options', 'custom_theme_settings', 'sanitize_callback');

    add_settings_section('general_section', 'General Settings', 'section_callback', 'custom_theme_options');

    add_settings_field('text_field', 'Text Field', 'text_field_callback', 'custom_theme_options', 'general_section');
}

add_action( 'admin_init', 'custom_theme_settings' );


// Sanitize callback function

function sanitize_callback($input) {
    // Sanitize and validate input as needed
    return $input;
}

// Section callback function

function section_callback() {
    // Optional section description
}

// Text field callback function

function text_field_callback() {
    $options = get_option('custom_theme_settings');
    echo "<input type='text' name='custom_theme_settings[text_field]' value='" . esc_attr($options['text_field']) . "' />";
}

// Custom Walker Nav Menu

// Define Custom_Walker_Nav_Menu class

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = NULL ) {
        if ($depth === 0) {
            // Top-level dropdown menu
            $output .= "\n<ul class=\"dropdown-menu\" role=\"menu\">\n";
        } else {
            // Sub-menu
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
        }
    }

    function end_lvl( &$output, $depth = 0, $args = NULL ) {
        if ($depth === 0) {
            // Close top-level dropdown menu
            $output .= "</ul>\n";
        } else {
            // Close sub-menu
            $indent = str_repeat("\t", $depth);
            $output .= "$indent</ul>\n";
        }
    }

    function start_el( &$output, $item, $depth = 0, $args = NULL, $id = 0 ) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        if (in_array('menu-item-has-children', $item->classes) && $depth === 0) {
            $classes[] = 'nav-item dropdown';
            $atts['class'] = 'nav-link dropdown-toggle';
            $atts['data-toggle'] = 'dropdown';
        } else {
            $classes[] = 'nav-item';
            $atts['class'] = 'nav-link';
        }

        $active_class = in_array('current-menu-item', $item->classes) ? ' active' : '';

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . $active_class . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        $atts = array();
        $atts['title']  = ! empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = ! empty($item->target)     ? $item->target     : '';
        $atts['rel']    = ! empty($item->xfn)        ? $item->xfn        : '';
        $atts['href']   = ! empty($item->url)        ? $item->url        : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (! empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        // Check if the item has children
        if ($depth === 0 && in_array('menu-item-has-children', $item->classes)) {
            // Add dropdown menu structure
            $item_output .= '<ul class="dropdown-menu" role="menu">';
        }

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    function end_el( &$output, $item, $depth = 0, $args = NULL ) {
        if ($depth === 0 && in_array('menu-item-has-children', $item->classes)) {
            // Close the dropdown menu
            $output .= '</ul>';
        }
    }
}






