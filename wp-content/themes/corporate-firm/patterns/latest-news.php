<?php
/**
 * Title: Latest News
 * Slug: corporate-firm/latest-news
 * Categories: corporate-firm, latest-news
 */
?>
<!-- wp:group {"className":"latest-news","style":{"spacing":{"padding":{"top":"0rem","right":"0","bottom":"var:preset|spacing|80"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group latest-news" style="margin-top:0px;margin-bottom:0px;padding-top:0rem;padding-right:0;padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"className":"head-box wow zoomIn","layout":{"type":"default"}} -->
<div class="wp-block-group head-box wow zoomIn"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"28px","textTransform":"capitalize","fontStyle":"Thin","fontWeight":"700"},"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"roboto"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-roboto-font-family" style="margin-bottom:0;font-size:28px;font-style:Thin;font-weight:700;text-transform:capitalize"><?php esc_html_e('insights & resources','corporate-firm'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"sec-sub-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"},"spacing":{"margin":{"top":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} -->
<p class="has-text-align-center sec-sub-heading has-heading-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--40);font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Practical strategies and updates for modern businesses.','corporate-firm'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":10,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"wow zoomIn news-boxes owl-carousel","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"height":"200px","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

<!-- wp:post-title {"isLink":true,"className":"news-title","style":{"typography":{"fontSize":"20px","textTransform":"capitalize","fontStyle":"Thin","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontFamily":"roboto"} /-->

<!-- wp:post-excerpt {"excerptLength":25,"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} /-->

<!-- wp:read-more {"content":"Read More","className":"news-btn","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"},"padding":{"top":"6px","bottom":"6px","left":"25px","right":"25px"}},"border":{"radius":"12px","width":"1px"}},"textColor":"heading","borderColor":"heading"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->