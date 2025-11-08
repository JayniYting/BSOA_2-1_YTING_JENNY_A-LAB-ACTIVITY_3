<?php
/**
 * Title: Header
 * Slug: corporate-firm/header
 * Categories: corporate-firm, header
 */
?>
<!-- wp:group {"className":"main-header","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group main-header has-secondary-background-color has-background" style="margin-top:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"header-top","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomRight":"30px","bottomLeft":"30px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-top has-primary-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:10px;padding-bottom:10px"><!-- wp:columns {"verticalAlignment":"center","className":"header-info-sec"} -->
<div class="wp-block-columns are-vertically-aligned-center header-info-sec"><!-- wp:column {"verticalAlignment":"center","width":"15%","className":"header-call"} -->
<div class="wp-block-column is-vertically-aligned-center header-call" style="flex-basis:15%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px"},"spacing":{"padding":{"left":"22px"}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="padding-left:22px;font-size:14px"><a href="tel:1234567890"><?php esc_html_e('+1234567890','corporate-firm'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"22%","className":"header-mail"} -->
<div class="wp-block-column is-vertically-aligned-center header-mail" style="flex-basis:22%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px"},"spacing":{"padding":{"left":"22px"}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="padding-left:22px;font-size:14px"><a href="mailto:corporatebusiness@example.com"><?php esc_html_e('corporatebusiness@example.com','corporate-firm'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"48%","className":"header-text"} -->
<div class="wp-block-column is-vertically-aligned-center header-text" style="flex-basis:48%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px"},"spacing":{"padding":{"left":"22px"}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="padding-left:22px;font-size:14px"><?php esc_html_e('Now offering free strategy consultation for new clients!','corporate-firm'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%","className":"header-social-icons"} -->
<div class="wp-block-column is-vertically-aligned-center header-social-icons" style="flex-basis:15%"><!-- wp:social-links {"iconColor":"base","iconColorValue":"#FFFFFF","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"www.twitter.com","service":"x"} /-->

<!-- wp:social-link {"url":"www.youtube.com","service":"youtube"} /-->

<!-- wp:social-link {"url":"www.pinterest.com","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-bottom","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"30px","bottom":"30px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-bottom" style="margin-top:0px;margin-bottom:0px;padding-top:30px;padding-bottom:30px"><!-- wp:columns {"verticalAlignment":"center","className":"header-inner-box"} -->
<div class="wp-block-columns are-vertically-aligned-center header-inner-box"><!-- wp:column {"verticalAlignment":"center","width":"25%","className":"logo-box"} -->
<div class="wp-block-column is-vertically-aligned-center logo-box" style="flex-basis:25%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"22px"}},"textColor":"heading"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"75%","className":"menu-box"} -->
<div class="wp-block-column is-vertically-aligned-center menu-box" style="flex-basis:75%"><!-- wp:navigation {"textColor":"heading","overlayBackgroundColor":"white","overlayTextColor":"black","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"header-menu","style":{"typography":{"fontSize":"15px","letterSpacing":"1px","textTransform":"capitalize","fontStyle":"Thin","fontWeight":"500"},"spacing":{"blockGap":"var:preset|spacing|50"}},"fontFamily":"roboto","layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e('Home','corporate-firm'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e('About Us','corporate-firm'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e('Industries','corporate-firm'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e('Case Studies','corporate-firm'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e('Contact','corporate-firm'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e('Buy Now','corporate-firm'); ?>","type":"link","opensInNewTab":true,"url":"https://www.ovationthemes.com/products/wordpress-business-theme","kind":"custom","className":"buynow"} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->