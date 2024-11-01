<?php
/**
*	Fired when plugin is uninstalled.
*	@link	http://www.valhallawp.com
*/

// If uninstall not called from WordPress, then exit.
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

/* ******  delete options  ****** */
delete_option( 'vhwp-iaw-image' );
delete_option( 'vhwp_iaw_top_percentage' );
delete_option( 'vhwp_iaw_left_percentage' );
delete_option( 'vhwp_iaw_image_width' );
delete_option( 'vhwp_iaw_image_height' );
delete_option( 'vhwp_iaw_image_url' );
delete_option( 'vhwp_iaw_image_position' );