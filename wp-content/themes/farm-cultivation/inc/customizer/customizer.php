<?php
/**
 * Farm Cultivation: Customizer
 *
 * @subpackage Farm Cultivation
 * @since 1.0
 */

function farm_cultivation_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('farm_cultivation_pro', array(
        'title'    => __('FARM CULTIVATION PREMIUM', 'farm-cultivation'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('farm_cultivation_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Farm_Cultivation_Pro_Control($wp_customize, 'farm_cultivation_pro', array(
        'label'    => __('FARM CULTIVATION PREMIUM', 'farm-cultivation'),
        'section'  => 'farm_cultivation_pro',
        'settings' => 'farm_cultivation_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'farm_cultivation_customize_register' );


define('FARM_CULTIVATION_PRO_LINK',__('https://www.ovationthemes.com/products/cultivation-wordpress-theme','farm-cultivation'));

define('FARM_CULTIVATION_BUNDLE_BTN',__('https://www.ovationthemes.com/products/wordpress-bundle','farm-cultivation'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Farm_Cultivation_Pro_Control')):
    class Farm_Cultivation_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( FARM_CULTIVATION_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE FARM CULTIVATION PREMIUM','farm-cultivation');?> </a>
	        </div>
            <div class="col-md">
                <img class="farm_cultivation_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
                <ul style="padding-top:10px">
                    <li class="upsell-farm_cultivation"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'farm-cultivation');?> </li>                 
                    <li class="upsell-farm_cultivation"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'farm-cultivation');?> </li>
                    <li class="upsell-farm_cultivation"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'farm-cultivation');?> </li>
                    <li class="upsell-farm_cultivation"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'farm-cultivation');?> </li>
                    <li class="upsell-farm_cultivation"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'farm-cultivation');?> </li>
                    <li class="upsell-farm_cultivation"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'farm-cultivation');?> </li>
                    <li class="upsell-farm_cultivation"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'farm-cultivation');?> </li>
                    <li class="upsell-farm_cultivation"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'farm-cultivation');?> </li>
                    <li class="upsell-farm_cultivation"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'farm-cultivation');?> </li>
                    <li class="upsell-farm_cultivation"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'farm-cultivation');?> </li>
                    <li class="upsell-farm_cultivation"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'farm-cultivation');?> </li>
                    <li class="upsell-farm_cultivation"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'farm-cultivation');?> </li>
                    <li class="upsell-farm_cultivation"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'farm-cultivation');?> </li>
                    <li class="upsell-farm_cultivation"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'farm-cultivation');?> </li>
                </ul>
        	</div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( FARM_CULTIVATION_BUNDLE_BTN ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('WP Theme Bundle (120+ Themes)','farm-cultivation');?> </a>
            </div>
        </label>
    <?php } }
endif;