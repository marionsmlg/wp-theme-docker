<?php

function console_log($data) {
    $unique_id = uniqid('console_log_');
    $json_data = json_encode($data);
    echo "<script id='$unique_id'>
            console.log($json_data);
            const scriptTag = document.getElementById('$unique_id');
            scriptTag.parentNode.removeChild(scriptTag);
          </script>";
}

add_filter('wpcf7_validate_configuration', '__return_false');

function montheme_supports() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tete du menu');
    register_nav_menu('footer', 'Pied de page');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'montheme_supports');


function load_commitments_stylesheet() {
    if (is_page_template('commitments.php')) {
        wp_enqueue_style('commitments-style', get_template_directory_uri() . '/assets/src/commitments.css');
    }
}

add_action('wp_enqueue_scripts', 'load_commitments_stylesheet');

// -- ESBUILD FILES INTEGRATION -- //
add_action('wp_enqueue_scripts', 'esbuild_js');
add_action('wp_enqueue_scripts', 'esbuild_css');

function get_assets_dist_path() {
    return get_stylesheet_directory() . '/assets/dist';
}

function get_assets_dist_uri() {
    return get_stylesheet_directory_uri() . '/assets/dist';
}

function esbuild_css() {
    $assets = read_assets_meta();
    if ($assets && isset($assets['css'])) {
        foreach ($assets['css'] as $css_file) {
            wp_enqueue_style('esbuild-css-' . basename($css_file), get_assets_dist_uri() . '/' . $css_file);
        }
    }
}

function esbuild_js() {
    $assets = read_assets_meta();
    if ($assets && isset($assets['js'])) {
        foreach ($assets['js'] as $js_file) {
            wp_enqueue_script('esbuild-js-' . basename($js_file), get_assets_dist_uri() . '/' . $js_file, array(), null, true);
        }
    }
}

function read_assets_meta() {
    $json_path = get_assets_dist_path() . '/meta.json';
    if (file_exists($json_path)) {
        $json_content = file_get_contents($json_path);
        $data = json_decode($json_content, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            if (isset($data['files']) && is_array($data['files'])) {
                $assets = ['css' => [], 'js' => []];
                foreach ($data['files'] as $file) {
                    $extension = pathinfo($file, PATHINFO_EXTENSION);
                    if ($extension === 'css') {
                        $assets['css'][] = $file;
                    } elseif ($extension === 'js') {
                        $assets['js'][] = $file;
                    }
                }
                return $assets;
            } else {
                error_log('JSON format error: Missing or invalid "files" key.');
            }
        } else {
            error_log('Error decoding JSON: ' . json_last_error_msg());
        }
    } else {
        error_log('JSON file not found: ' . $json_path);
    }

    return false;
}
