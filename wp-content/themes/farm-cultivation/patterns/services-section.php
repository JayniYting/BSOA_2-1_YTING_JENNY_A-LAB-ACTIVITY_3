<?php
/**
 * Title: Services Section
 * Slug: farm-cultivation/services-section
 * Categories: farm-cultivation, services-section
 */
?>
<!-- wp:group {"className":"services-section wow zoomIn","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group services-section wow zoomIn"><!-- wp:group {"className":"service-head-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-head-box"><!-- wp:paragraph {"align":"center","className":"service-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"border":{"radius":"100px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"20px","right":"20px"}}},"backgroundColor":"primary","textColor":"secondary"} -->
<p class="has-text-align-center service-sub-title has-secondary-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:100px;padding-top:5px;padding-right:20px;padding-bottom:5px;padding-left:20px;font-size:18px;font-style:normal;font-weight:500;text-transform:capitalize"><?php esc_html_e('our services','farm-cultivation'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"service-title","style":{"typography":{"fontSize":"35px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"black"} -->
<h2 class="wp-block-heading has-text-align-center service-title has-black-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--40);font-size:35px;text-transform:capitalize"><?php esc_html_e('best agriculture','farm-cultivation'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"wow slideInUp services-box","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|80"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"service-img-box","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group service-img-box" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-featured-image {"height":"300px","className":"services-img","style":{"border":{"radius":"10px"}}} /-->

<!-- wp:read-more {"content":"\u003cimg class=\u0022wp-image-40\u0022 style=\u0022width: 39px;\u0022 src=<?php echo esc_url( get_template_directory_uri() . '/images/service-btn.png'); ?> alt=\u0022\u0022\u003e","className":"service-btn","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"6px","bottom":"6px","left":"25px","right":"25px"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"category","className":"service-cat","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"primary"} /-->

<!-- wp:post-title {"isLink":true,"className":"service-box-title","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} /-->

<!-- wp:post-excerpt {"excerptLength":25,"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->