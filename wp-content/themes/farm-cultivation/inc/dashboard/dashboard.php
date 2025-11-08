<?php

add_action( 'admin_menu', 'farm_cultivation_gettingstarted' );
function farm_cultivation_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'farm-cultivation'), esc_html__('Begin Installation', 'farm-cultivation'), 'edit_theme_options', 'farm-cultivation-guide-page', 'farm_cultivation_guide');
}

if ( ! defined( 'FARM_CULTIVATION_SUPPORT' ) ) {
define('FARM_CULTIVATION_SUPPORT',__('https://wordpress.org/support/theme/farm-cultivation/','farm-cultivation'));
}
if ( ! defined( 'FARM_CULTIVATION_REVIEW' ) ) {
define('FARM_CULTIVATION_REVIEW',__('https://wordpress.org/support/theme/farm-cultivation/reviews/','farm-cultivation'));
}
if ( ! defined( 'FARM_CULTIVATION_LIVE_DEMO' ) ) {
define('FARM_CULTIVATION_LIVE_DEMO',__('https://trial.ovationthemes.com/farm-cultivation/','farm-cultivation'));
}
if ( ! defined( 'FARM_CULTIVATION_BUY_PRO' ) ) {
define('FARM_CULTIVATION_BUY_PRO',__('https://www.ovationthemes.com/products/cultivation-wordpress-theme','farm-cultivation'));
}
if ( ! defined( 'FARM_CULTIVATION_PRO_DOC' ) ) {
define('FARM_CULTIVATION_PRO_DOC',__('https://trial.ovationthemes.com/docs/farm-cultivation-pro-doc/','farm-cultivation'));
}
if ( ! defined( 'FARM_CULTIVATION_FREE_DOC' ) ) {
define('FARM_CULTIVATION_FREE_DOC',__('https://trial.ovationthemes.com/docs/farm-cultivation-free-doc/','farm-cultivation'));
}
if ( ! defined( 'FARM_CULTIVATION_THEME_NAME' ) ) {
define('FARM_CULTIVATION_THEME_NAME',__('Premium Farm Cultivation Theme','farm-cultivation'));
}
if ( ! defined( 'FARM_CULTIVATION_BUNDLE_LINK' ) ) {
define('FARM_CULTIVATION_BUNDLE_LINK',__('https://www.ovationthemes.com/products/wordpress-bundle','farm-cultivation'));
}
/**
 * Theme Info Page
 */
function farm_cultivation_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="header-box-left">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'farm-cultivation'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="header-box-right">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( FARM_CULTIVATION_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'farm-cultivation'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( FARM_CULTIVATION_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'farm-cultivation'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( FARM_CULTIVATION_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'farm-cultivation'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="box-container">
			<div class="box-left-main">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','farm-cultivation'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','farm-cultivation'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','farm-cultivation'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','farm-cultivation'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','farm-cultivation'); ?></h4>
					<p><?php esc_html_e('To check your website click here','farm-cultivation'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','farm-cultivation'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','farm-cultivation'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','farm-cultivation'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( FARM_CULTIVATION_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','farm-cultivation'); ?></a>
				</div>
       	</div>
			<div class="box-right-main">
				<h3><?php echo esc_html(FARM_CULTIVATION_THEME_NAME); ?></h3>
				<img class="farm_cultivation_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<div class="pro-links-inner">
						<a class="button-primary livedemo" href="<?php echo esc_url( FARM_CULTIVATION_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'farm-cultivation'); ?></a>
						<a class="button-primary buynow" href="<?php echo esc_url( FARM_CULTIVATION_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'farm-cultivation'); ?></a>
						<a class="button-primary docs" href="<?php echo esc_url( FARM_CULTIVATION_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'farm-cultivation'); ?></a>
					</div>
						<a class="button-primary bundle-btn" href="<?php echo esc_url( FARM_CULTIVATION_BUNDLE_LINK ); ?>" target="_blank"><?php esc_html_e('WordPress Theme Bundle (120+ Themes at Just $89)', 'farm-cultivation'); ?></a>
				</div>
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
		</div>
	</div>

<?php }?>