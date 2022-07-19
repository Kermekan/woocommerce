<?php

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

/**
* Force WooCommerce Database Update
*/
function update_woocommerce_version() { 		
	if( class_exists( 'WooCommerce' )) { 			
		global $woocommerce; 			 			
		if ( version_compare( get_option( 'woocommerce_db_version', null ), $woocommerce->version, '!=' )) { 		
			update_option( 'woocommerce_db_version', $woocommerce->version ); 		 	
			if( ! wc_update_product_lookup_tables_is_running() ) {
				wc_update_product_lookup_tables();
			} 
		}	
	}		 	
}
add_action( 'init', 'update_woocommerce_version' );
