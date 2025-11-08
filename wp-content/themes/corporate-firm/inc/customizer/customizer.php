<?php
/**
 * Corporate Firm: Customizer
 *
 * @subpackage Corporate Firm
 * @since 1.0
 */

function corporate_firm_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('corporate_firm_pro', array(
        'title'    => __('CORPORATE FIRM PREMIUM', 'corporate-firm'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('corporate_firm_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Corporate_Firm_Pro_Control($wp_customize, 'corporate_firm_pro', array(
        'label'    => __('CORPORATE FIRM PREMIUM', 'corporate-firm'),
        'section'  => 'corporate_firm_pro',
        'settings' => 'corporate_firm_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'corporate_firm_customize_register' );


define('CORPORATE_FIRM_PRO_LINK',__('https://www.ovationthemes.com/products/wordpress-business-theme','corporate-firm'));

define('CORPORATE_FIRM_BUNDLE_BTN',__('https://www.ovationthemes.com/products/wordpress-bundle','corporate-firm'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Corporate_Firm_Pro_Control')):
    class Corporate_Firm_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( CORPORATE_FIRM_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE CORPORATE FIRM PREMIUM','corporate-firm');?> </a>
	        </div>
            <div class="col-md">
                <img class="corporate_firm_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
                <ul style="padding-top:10px">
                    <li class="upsell-corporate_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'corporate-firm');?> </li>                 
                    <li class="upsell-corporate_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'corporate-firm');?> </li>
                    <li class="upsell-corporate_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'corporate-firm');?> </li>
                    <li class="upsell-corporate_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'corporate-firm');?> </li>
                    <li class="upsell-corporate_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'corporate-firm');?> </li>
                    <li class="upsell-corporate_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'corporate-firm');?> </li>
                    <li class="upsell-corporate_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'corporate-firm');?> </li>
                    <li class="upsell-corporate_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'corporate-firm');?> </li>
                    <li class="upsell-corporate_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'corporate-firm');?> </li>
                    <li class="upsell-corporate_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'corporate-firm');?> </li>
                    <li class="upsell-corporate_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'corporate-firm');?> </li>
                    <li class="upsell-corporate_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'corporate-firm');?> </li>
                    <li class="upsell-corporate_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'corporate-firm');?> </li>
                    <li class="upsell-corporate_firm"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'corporate-firm');?> </li>
                </ul>
        	</div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( CORPORATE_FIRM_BUNDLE_BTN ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('WP Theme Bundle (120+ Themes)','corporate-firm');?> </a>
            </div>
        </label>
    <?php } }
endif;