<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function farm_cultivation_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Ovation Elements', 'farm-cultivation' ),
			'slug'             => 'ovation-elements',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	farm_cultivation_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'farm_cultivation_register_recommended_plugins' );