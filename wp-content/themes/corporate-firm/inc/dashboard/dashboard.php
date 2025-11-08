<?php

add_action( 'admin_menu', 'corporate_firm_gettingstarted' );
function corporate_firm_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'corporate-firm'), esc_html__('Begin Installation', 'corporate-firm'), 'edit_theme_options', 'corporate-firm-guide-page', 'corporate_firm_guide');
}

if ( ! defined( 'CORPORATE_FIRM_SUPPORT' ) ) {
define('CORPORATE_FIRM_SUPPORT',__('https://wordpress.org/support/theme/corporate-firm/','corporate-firm'));
}
if ( ! defined( 'CORPORATE_FIRM_REVIEW' ) ) {
define('CORPORATE_FIRM_REVIEW',__('https://wordpress.org/support/theme/corporate-firm/reviews/','corporate-firm'));
}
if ( ! defined( 'CORPORATE_FIRM_LIVE_DEMO' ) ) {
define('CORPORATE_FIRM_LIVE_DEMO',__('https://trial.ovationthemes.com/ovation-one-login-business-pro/','corporate-firm'));
}
if ( ! defined( 'CORPORATE_FIRM_BUY_PRO' ) ) {
define('CORPORATE_FIRM_BUY_PRO',__('https://www.ovationthemes.com/products/wordpress-business-theme','corporate-firm'));
}
if ( ! defined( 'CORPORATE_FIRM_PRO_DOC' ) ) {
define('CORPORATE_FIRM_PRO_DOC',__('https://trial.ovationthemes.com/docs/ot-one-login-business-pro/','corporate-firm'));
}
if ( ! defined( 'CORPORATE_FIRM_FREE_DOC' ) ) {
define('CORPORATE_FIRM_FREE_DOC',__('https://trial.ovationthemes.com/docs/corporate-firm-free-doc/','corporate-firm'));
}
if ( ! defined( 'CORPORATE_FIRM_THEME_NAME' ) ) {
define('CORPORATE_FIRM_THEME_NAME',__('Premium Corporate Firm Theme','corporate-firm'));
}
if ( ! defined( 'CORPORATE_FIRM_BUNDLE_LINK' ) ) {
define('CORPORATE_FIRM_BUNDLE_LINK',__('https://www.ovationthemes.com/products/wordpress-bundle','corporate-firm'));
}
/**
 * Theme Info Page
 */
function corporate_firm_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="header-box-left">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'corporate-firm'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="header-box-right">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( CORPORATE_FIRM_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'corporate-firm'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( CORPORATE_FIRM_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'corporate-firm'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( CORPORATE_FIRM_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'corporate-firm'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="box-container">
			<div class="box-left-main">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','corporate-firm'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','corporate-firm'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','corporate-firm'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','corporate-firm'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','corporate-firm'); ?></h4>
					<p><?php esc_html_e('To check your website click here','corporate-firm'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','corporate-firm'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','corporate-firm'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','corporate-firm'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( CORPORATE_FIRM_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','corporate-firm'); ?></a>
				</div>
       	</div>
			<div class="box-right-main">
				<h3><?php echo esc_html(CORPORATE_FIRM_THEME_NAME); ?></h3>
				<img class="corporate_firm_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<div class="pro-links-inner">
						<a class="button-primary livedemo" href="<?php echo esc_url( CORPORATE_FIRM_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'corporate-firm'); ?></a>
						<a class="button-primary buynow" href="<?php echo esc_url( CORPORATE_FIRM_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'corporate-firm'); ?></a>
						<a class="button-primary docs" href="<?php echo esc_url( CORPORATE_FIRM_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'corporate-firm'); ?></a>
					</div>
						<a class="button-primary bundle-btn" href="<?php echo esc_url( CORPORATE_FIRM_BUNDLE_LINK ); ?>" target="_blank"><?php esc_html_e('WordPress Theme Bundle (120+ Themes at Just $89)', 'corporate-firm'); ?></a>
				</div>
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
		</div>
	</div>

<?php }?>