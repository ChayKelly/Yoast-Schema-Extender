<?php
/**
 * Plugin Name: Yoast Schema Extender Simple Version 2
 * Plugin URI: https://hugoscott.com/
 * Description: A very basic plugin to extend Yoast Schema.org data.
 * Version: 1.0
 * Author: Hugo Scott
 * Author URI: https://hugoscott.com/
 **/
add_filter( 'yoast_seo_development_mode', '__return_true' );
add_filter('wpseo_schema_person', 'example_change_person');

if (is_single('524')) {
    function example_change_person($data)
    {
        $data['knowsAbout'] = "https://en.wikipedia.org/wiki/Balti_(food)";
        return $data;
    }
}
    else {
        function example_change_person($data)
        {
            return $data;
        }
}