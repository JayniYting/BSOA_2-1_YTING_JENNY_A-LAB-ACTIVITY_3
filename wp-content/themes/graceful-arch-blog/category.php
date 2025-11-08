<?php
/**
 * The category template file
 *
 * @package Graceful Space Blog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
	
// Left Sidebar
get_template_part( 'template-parts/sidebars/sidebar', 'left' ); 

// Content Columns Wrapper
?>
<h1 class="graceful-arch-category-title">
    <?php echo esc_html( single_cat_title( '', false ) ); ?>
</h1>

<div class="graceful-arch-category-description">
    <?php echo wp_kses_post( category_description() ); ?>
</div>
<?php
get_template_part( 'template-parts/columns/column', 'one' );

// Right Sidebar
get_template_part( 'template-parts/sidebars/sidebar', 'right' ); 

get_footer();