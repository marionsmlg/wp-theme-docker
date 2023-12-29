<?php

function console_log($data)
{
    // Generate a unique ID for the script tag
    $unique_id = uniqid('console_log_');

    // Convert the data into a JSON format
    $json_data = json_encode($data);

    // Output the data to the JavaScript console
    // Also add JavaScript to remove the script tag after execution
    echo "<script id='$unique_id'>
            console.log($json_data);
            const scriptTag = document.getElementById('$unique_id');
            scriptTag.parentNode.removeChild(scriptTag);
          </script>";
}


function montheme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tete du menu');
    register_nav_menu('footer', 'Pied de page');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'montheme_supports');

// -- ESBUILD FILES INTEGRATION -- //
add_action('wp_enqueue_scripts', 'esbuild_js');
add_action('wp_enqueue_scripts', 'esbuild_css');

function get_assets_dist_path()
{
    return get_stylesheet_directory() . '/assets/dist';
}

function get_assets_dist_uri()
{
    return get_stylesheet_directory_uri() . '/assets/dist';
}

function esbuild_css()
{
    $assets = read_assets_meta();
    if ($assets && isset($assets['css'])) {
        foreach ($assets['css'] as $css_file) {
            wp_enqueue_style('esbuild-css-' . basename($css_file), get_assets_dist_uri() . '/' . $css_file);
        }
    }
}

function esbuild_js()
{
    $assets = read_assets_meta();
    if ($assets && isset($assets['js'])) {
        foreach ($assets['js'] as $js_file) {
            wp_enqueue_script('esbuild-js-' . basename($js_file), get_assets_dist_uri() . '/' . $js_file, array(), null, true);
        }
    }
}

function read_assets_meta()
{
    // Get the path to the JSON file.
    $json_path = get_assets_dist_path() . '/meta.json';
    // Check if the file exists.
    if (file_exists($json_path)) {
        // Get the contents of the JSON file.
        $json_content = file_get_contents($json_path);

        // Decode the JSON data into a PHP array.
        $data = json_decode($json_content, true);

        // Check for errors in JSON decoding.
        if (json_last_error() === JSON_ERROR_NONE) {
            // Check if the 'files' key exists and is an array.
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
                // 'files' key is missing or not an array.
                error_log('JSON format error: Missing or invalid "files" key.');
            }
        } else {
            // Handle JSON decoding error.
            error_log('Error decoding JSON: ' . json_last_error_msg());
        }
    } else {
        // File doesn't exist, handle the error.
        error_log('JSON file not found: ' . $json_path);
    }

    return false;
}
