<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function corporate_firm_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Ovation Elements', 'corporate-firm' ),
			'slug'             => 'ovation-elements',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	corporate_firm_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'corporate_firm_register_recommended_plugins' );