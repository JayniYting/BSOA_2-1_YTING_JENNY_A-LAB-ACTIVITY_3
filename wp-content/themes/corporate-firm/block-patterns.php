<?php
/**
 * Corporate Firm: Block Patterns
 *
 * @since Corporate Firm 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Corporate Firm 1.0
 *
 * @return void
 */
function corporate_firm_register_block_patterns() {
	$corporate_firm_block_pattern_categories = array(
		'corporate-firm'    => array( 'label' => __( 'Corporate Firm', 'corporate-firm' ) ),
	);

	$corporate_firm_block_pattern_categories = apply_filters( 'corporate_firm_block_pattern_categories', $corporate_firm_block_pattern_categories );

	foreach ( $corporate_firm_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'corporate_firm_register_block_patterns', 9 );
