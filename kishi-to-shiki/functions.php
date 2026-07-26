<?php

function add_files() {
	// WordPress提供のjquery.jsを読み込まない
	wp_deregister_script('jquery');
 
	// jQueryの読み込み
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', "", "20160608", false );
 
	// サイト共通JS
	wp_enqueue_script( 'smart-script', get_template_directory_uri() . '/jQuery.js', array( 'jquery' ), '20160608', true );
 
	// サイト共通のCSSの読み込み
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css', "", '20160608' );
}
add_action('wp_enqueue_scripts', 'add_files');
function cpt_register_achivement(){
    $labels = [
        "singular_name" =>"achivement",
        "edit_item" => "achivement",
    ];
    $args = [
        "label"=>"Achivement",
        "labels" => $labels,
        "description"=>"",
        "public" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "achivement", "with_front" => true ], //スラッグをachivementに設定
		"query_var" => true,
		"menu_position" => 5,
        "supports" => [ "title", "editor", "thumbnail" ],
    ];
    register_post_type("achivement",$args);
}
add_action('init','cpt_register_achivement');?>