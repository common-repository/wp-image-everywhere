<?php
/**     
 * Plugin Name: WP Image Anywhere
 * Plugin URI: https://www.ohyeahdev.es/plugins/wp-image-anywhere
 * Version: 1.1
 * Description: With this plugin you can put image  wherever you want in your page.
 * Author: Oh! Yeah Dev
 * Tested up to: 4.9.8
 * Author URI: http://www.ohyeahdev.es
 * Text Domain: vhwp-iaw
 * Domain Path: /languages
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Go away!
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function vhwp_iaw_inter() {
	load_plugin_textdomain( 'wpo-iaw', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'vhwp_iaw_inter' );

include_once 'includes/vhwp-iaw-customizer.php';

function vhwp_iaw_image_anywhere() {
	?>

		<?php
			if ( ! is_admin() ) {
				if (get_option ('vhwp_iaw_image_url' ) != '' ) {

					echo '<a href="' . get_option ('vhwp_iaw_image_url' ) . '"><img class="icono" src="' . get_option( 'vhwp_iaw_image' ) . '"/></a>';
				} else if ( get_option( 'vhwp_iaw_image' ) ){

				echo '<img class="icono" src="' . get_option( 'vhwp_iaw_image' ) . '"/>';
				}
			}
		?>
		
		<style>
			.icono{
				display: block;
				position: absolute;
				<?php 
					if ( get_option( 'vhwp_iaw_top_percentage' ) )
					{
						echo 'top: ' . get_option( 'vhwp_iaw_top_percentage' ) . '%;';
					}

					if ( get_option( 'vhwp_iaw_left_percentage' ) )
					{
						echo 'left: ' . get_option( 'vhwp_iaw_left_percentage' ) . '%;';
					}

					if ( get_option( 'vhwp_iaw_image_width' ) )
					{
						echo 'width: ' . get_option( 'vhwp_iaw_image_width' ) . 'px;';
					}

					if ( get_option( 'vhwp_iaw_image_height' ) )
					{
						echo 'height: ' . get_option( 'vhwp_iaw_image_height' ) . 'px;';
					}

					if ( get_option( 'vhwp_iaw_image_position' ) )
					{
						echo 'position: ' . get_option( 'vhwp_iaw_image_position' ) . '!important;';
					}

				?>
		    	display: -webkit-box;
		    	display: -ms-flexbox;
			    display: flex;
			    -webkit-box-orient: vertical;
			    -webkit-box-direction: normal;
			    -ms-flex-direction: column;
			    flex-direction: column;
			    text-align: center;
			    z-index: 300;
			    padding: 15px 10px;
			    cursor: pointer;
			    text-decoration: none;
			    z-index: 99999;
			}
		</style>
	<?php
}
		
add_action ( 'wp', 'vhwp_iaw_image_anywhere' );
