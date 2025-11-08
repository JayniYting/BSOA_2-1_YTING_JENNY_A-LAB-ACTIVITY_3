<?php
/**
 * Title: Banner
 * Slug: farm-cultivation/banner
 * Categories: farm-cultivation, banner
 */
?>
<!-- wp:group {"className":"banner-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"20px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group banner-section" style="border-radius:20px;margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner-bg.png'); ?>","id":8,"dimRatio":0,"isUserOverlayColor":true,"minHeight":700,"sizeSlug":"large","className":"banner-bg","style":{"spacing":{"padding":{"top":"0px","left":"0px","right":"0px","bottom":"6%"}},"border":{"radius":"20px"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover banner-bg" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:6%;padding-left:0px;min-height:700px"><img class="wp-block-cover__image-background wp-image-8 size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner-bg.png'); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"banner-inner-box"} -->
<div class="wp-block-columns banner-inner-box"><!-- wp:column {"width":"30%","className":"banner-left"} -->
<div class="wp-block-column banner-left" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","className":"banner-cont-box wow zoomIn"} -->
<div class="wp-block-column banner-cont-box wow zoomIn" style="flex-basis:40%"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","className":"banner-sub-title","style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"border":{"radius":"100px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"22px","right":"22px"}}},"backgroundColor":"background","textColor":"secondary"} -->
<p class="has-text-align-center banner-sub-title has-secondary-color has-background-background-color has-text-color has-background has-link-color" style="border-radius:100px;padding-top:5px;padding-right:22px;padding-bottom:5px;padding-left:22px;font-size:15px;font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e('welcome to agriculture','farm-cultivation'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"banner-title","style":{"typography":{"fontSize":"45px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"15px","bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<h2 class="wp-block-heading has-text-align-center banner-title has-background-color has-text-color has-link-color" style="margin-top:15px;margin-bottom:15px;font-size:45px;font-style:normal;font-weight:600"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php esc_html_e('Agriculture','farm-cultivation'); ?></mark> <?php esc_html_e('from a Fresh Perspective','farm-cultivation'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"banner-desc","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<p class="has-text-align-center banner-desc has-background-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px;font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e('There are numerous variations of passages available, but most have been modified in some way by the addition of humor or randomized words.','farm-cultivation'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btn","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons banner-btn"><!-- wp:button {"textAlign":"center","backgroundColor":"primary","textColor":"secondary","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"border":{"radius":"10px"},"spacing":{"padding":{"left":"18px","right":"18px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-primary-background-color has-text-color has-background has-link-color has-text-align-center has-custom-font-size wp-element-button" href="#" style="border-radius:10px;padding-top:6px;padding-right:18px;padding-bottom:6px;padding-left:18px;font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize"><?php esc_html_e('contact us','farm-cultivation'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","className":"banner-right"} -->
<div class="wp-block-column banner-right" style="flex-basis:30%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->