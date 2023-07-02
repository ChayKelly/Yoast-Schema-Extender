<?php
/**
 * Plugin Name: Yoast Schema Extender Simple Version 2
 * Plugin URI: https://capsulemarketing.co.uk
 * Description: A very basic plugin to extend Yoast Schema.org data.
 * Version: 1.0
 * Author: Chay Kelly/Georgia Monk
 * Author URI: https://capsulemarketing.co.uk
 **/
add_filter( 'yoast_seo_development_mode', '__return_true' );
add_filter( 'wpseo_schema_webpage', 'add_paywall' );

function add_paywall( $data ) {
// data

        $data['isAccessibleForFree'] = "False";
        $data['hasPart'][] = array (
            "@type" => "WebPageElement",
              "isAccessibleForFree" => "False",
              "cssSelector" => ".paywall"
        );
        return $data;
}