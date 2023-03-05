<?php
 namespace Titanweb\lpk;

require __DIR__ . '/vendor/autoload.php';

new Loader();
new Fields();

if ( ! function_exists( 'rwmb_meta' ) ) {
	function rwmb_meta( $key, $args = [], $post_id = null ) {
		return null;
	}
}
