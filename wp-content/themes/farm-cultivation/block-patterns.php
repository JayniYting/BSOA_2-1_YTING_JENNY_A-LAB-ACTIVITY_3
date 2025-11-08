<?php
/**
 * Farm Cultivation: Block Patterns
 *
 * @since Farm Cultivation 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Farm Cultivation 1.0
 *
 * @return void
 */
function farm_cultivation_register_block_patterns() {
	$farm_cultivation_block_pattern_categories = array(
		'farm-cultivation'    => array( 'label' => __( 'Farm Cultivation', 'farm-cultivation' ) ),
	);

	$farm_cultivation_block_pattern_categories = apply_filters( 'farm_cultivation_block_pattern_categories', $farm_cultivation_block_pattern_categories );

	foreach ( $farm_cultivation_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'farm_cultivation_register_block_patterns', 9 );
