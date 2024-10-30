<?php 
/*
 * Plugin Name: JT Internet explorer URL
 * Plugin URI: http://studio-jt.co.kr
 * Description: Display human readable URL on Internet Explorer (for non English Alphabet). Made by studio-jt.co.kr (Nico)
 * Author: Studio-JT
 * Version: 1.0
 * Author URI: http://studio-jt.co.kr
 * License: GPL2+
 */


/* 
 * DO THE MAGIC 
 */
function jt_decode_permalink( $permalink ){
	
	$permalink = urldecode($permalink);
	
	return $permalink;
	
}
add_filter( 'post_link', 'jt_decode_permalink', 10, 1);
add_filter( 'page_link', 'jt_decode_permalink', 10, 1);
add_filter( 'term_link', 'jt_decode_permalink', 10, 1);
add_filter( 'post_type_link', 'jt_decode_permalink', 10, 1);