<?php
/*
Plugin Name: Namen Und Firmen
Description: Display Options for custom taxonomies 
Version: 0.1
Author: Martin Virtel 
Author URL: http://twitter.com/mvtango
Plugin URL: git@github.com:martinvirtel/namen-und-firmen.git
*/


add_action( 'pre_get_posts', 'sort_name_namen' );
function sort_name_namen( $query ) {
    if ( $query->is_main_query() && !is_admin() ) {
        if ( $query->is_tax('firmen') || $query->is_category('koepfe')) {
            $query->set('orderby', 'name');
            $query->set('order', 'ASC'); 
        }       
    }
} 

