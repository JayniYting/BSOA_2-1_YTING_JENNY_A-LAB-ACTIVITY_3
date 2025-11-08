<?php
/**
 * Title: Header
 * Slug: farm-cultivation/header
 * Categories: farm-cultivation, header
 */
?>
<!-- wp:group {"className":"main-header","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"0"}}},"backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-group main-header has-secondary-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","className":"header-inner-box"} -->
<div class="wp-block-columns are-vertically-aligned-center header-inner-box"><!-- wp:column {"verticalAlignment":"center","width":"13%","className":"logo-box"} -->
<div class="wp-block-column is-vertically-aligned-center logo-box" style="flex-basis:13%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"22px"}},"textColor":"background"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"47%","className":"menu-box"} -->
<div class="wp-block-column is-vertically-aligned-center menu-box" style="flex-basis:47%"><!-- wp:navigation {"textColor":"white","overlayBackgroundColor":"white","overlayTextColor":"black","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"header-menu","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500","letterSpacing":"1px","textTransform":"uppercase"},"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e('Home','farm-cultivation'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e('Pages','farm-cultivation'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e('Services','farm-cultivation'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e('Contact Us','farm-cultivation'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e('Buy Now','farm-cultivation'); ?>","type":"link","opensInNewTab":true,"url":"https://www.ovationthemes.com/products/cultivation-wordpress-theme","kind":"custom","className":"buynow"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%","className":"header-phone-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-phone-box" style="flex-basis:15%"><!-- wp:paragraph {"className":"header-phone","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"var:preset|spacing|60"}}},"textColor":"white"} -->
<p class="header-phone has-white-color has-text-color has-link-color" style="padding-left:var(--wp--preset--spacing--60);font-size:16px;font-style:normal;font-weight:600"><a href="tel:556545455418"><?php esc_html_e('(+55) 654 - 545 - 5418','farm-cultivation'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","className":"header-right-box"} -->
<div class="wp-block-column header-right-box" style="flex-basis:25%"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"search","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"className":"header-search","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":"5px"},"typography":{"fontSize":"16px"}},"backgroundColor":"primary","textColor":"background"} /-->

<!-- wp:image {"lightbox":{"enabled":false},"id":26,"width":"22px","height":"22px","scale":"contain","sizeSlug":"full","linkDestination":"custom","className":"header-cart","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<figure class="wp-block-image size-full is-resized header-cart" style="margin-top:0px;margin-bottom:0px"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/header-cart.png'); ?>" alt="" class="wp-image-26" style="object-fit:contain;width:22px;height:22px"/></a></figure>
<!-- /wp:image -->

<!-- wp:buttons {"className":"header-btn","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-buttons header-btn" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"primary","textColor":"secondary","style":{"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"border":{"radius":"10px"},"spacing":{"padding":{"left":"15px","right":"15px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-primary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-radius:10px;padding-top:6px;padding-right:15px;padding-bottom:6px;padding-left:15px;font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize"><?php esc_html_e('get in touch','farm-cultivation'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->