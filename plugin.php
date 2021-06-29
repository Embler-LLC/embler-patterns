<?php
/**
 * Plugin Name:       Custom Patterns
 * Description:       A collection of custom WordPress block patterns for the Embler network of sites.
 * Version:           1.0.5
 * Author:            Angelia Embler
 * Author URI:        https://embler.com
 * GitHub Plugin URI: https://github.com/Embler-LLC/embler-patterns/
 * Primary Branch:    main
 */

add_action( 'init', 'embler_plugin_register_custom_pattern_categories' );
function embler_plugin_register_custom_pattern_categories() {
  register_block_pattern_category(
    'embler-network',
    array( 'label' => __( 'Embler', 'embler-patterns' ) )
    );
    register_block_pattern_category(
      'embler-reviews',
      array( 'label' => __( 'Reviews', 'embler-patterns' ) )
      );
 }

add_action( 'init', 'embler_plugin_register_custom_patterns' );
function embler_plugin_register_custom_patterns() {
// Moview review
if ( defined( 'ULTIMATE_BLOCKS_VERSION' ) ) {
  register_block_pattern(
    'embler-patterns/movie-review',
    array(
      'title'       => __( 'Movie review', 'embler-patterns' ),
      'description' => _x( 'Important blocks for reviewing a movie', 'Block pattern description', 'embler-patterns' ),
      'content'     => "<!-- wp:paragraph {\"placeholder\":\"Introduction to the movie including plot and other important details\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:cover {\"url\":\"https://images.unsplash.com/photo-1512149177596-f817c7ef5d4c\",\"className\":\"alignfull\"} -->\n<div class=\"wp-block-cover has-background-dim alignfull\"><img class=\"wp-block-cover__image-background\" alt=\"\" src=\"https://images.unsplash.com/photo-1512149177596-f817c7ef5d4c\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Movie title…\",\"fontSize\":\"extra-large\"} -->\n<p class=\"has-text-align-center has-extra-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"placeholder\":\"Starring...\",\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"placeholder\":\"Director...\",\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"center\"} -->\n<div class=\"wp-block-buttons is-content-justification-center\"><!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Buy</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Rent</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Watch</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:cover -->\n\n<!-- wp:ub/star-rating-block {\"blockID\":\"511f5d38-80a9-4d56-baf7-f23fd5dd61b8\",\"starColor\":\"#ffb901\"} /-->\n\n<!-- wp:heading -->\n<h2>Trailer</h2>\n<!-- /wp:heading -->\n\n<!-- wp:video -->\n<figure class=\"wp-block-video\"></figure>\n<!-- /wp:video -->\n\n<!-- wp:heading -->\n<h2>Gallery</h2>\n<!-- /wp:heading -->\n\n<!-- wp:gallery {\"linkTo\":\"none\"} -->\n<figure class=\"wp-block-gallery columns-0 is-cropped\"><ul class=\"blocks-gallery-grid\"></ul></figure>\n<!-- /wp:gallery -->",
      'categories'  => array( 'embler-network', 'embler-reviews' ),
      )
    );
} else {
  register_block_pattern(
    'embler-patterns/movie-review',
    array(
      'title'       => __( 'Movie review', 'embler-patterns' ),
      'description' => _x( 'Important blocks for reviewing a movie', 'Block pattern description', 'embler-patterns' ),
      'content'     => "<!-- wp:paragraph {\"placeholder\":\"Introduction to the movie including plot and other important details\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:cover {\"url\":\"https://images.unsplash.com/photo-1512149177596-f817c7ef5d4c\",\"className\":\"alignfull\"} -->\n<div class=\"wp-block-cover has-background-dim alignfull\"><img class=\"wp-block-cover__image-background\" alt=\"\" src=\"https://images.unsplash.com/photo-1512149177596-f817c7ef5d4c\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Movie title…\",\"fontSize\":\"extra-large\"} -->\n<p class=\"has-text-align-center has-extra-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"placeholder\":\"Starring...\",\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"placeholder\":\"Director...\",\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"center\"} -->\n<div class=\"wp-block-buttons is-content-justification-center\"><!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Buy</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Rent</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Watch</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:cover -->\n\n<!-- wp:heading -->\n<h2>Trailer</h2>\n<!-- /wp:heading -->\n\n<!-- wp:video -->\n<figure class=\"wp-block-video\"></figure>\n<!-- /wp:video -->\n\n<!-- wp:heading -->\n<h2>Gallery</h2>\n<!-- /wp:heading -->\n\n<!-- wp:gallery {\"linkTo\":\"none\"} -->\n<figure class=\"wp-block-gallery columns-0 is-cropped\"><ul class=\"blocks-gallery-grid\"></ul></figure>\n<!-- /wp:gallery -->",
      'categories'  => array( 'embler-network', 'embler-reviews' ),
      )
    );
}

// Book review
    register_block_pattern(
      'embler-patterns/book-review',
      array(
        'title'       => __( 'Book review', 'embler-patterns' ),
        'description' => _x( 'Important blocks for reviewing a book', 'Block pattern description', 'embler-patterns' ),
        'content'     => "<!-- wp:paragraph {\"placeholder\":\"Introduction to the book including plot and other important details\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:cover {\"url\":\"https://images.unsplash.com/photo-1432821596592-e2c18b78144f\",\"className\":\"alignfull\"} -->\n<div class=\"wp-block-cover has-background-dim alignfull\"><img class=\"wp-block-cover__image-background\" alt=\"\" src=\"https://images.unsplash.com/photo-1432821596592-e2c18b78144f\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Book title…\",\"fontSize\":\"extra-large\"} -->\n<p class=\"has-text-align-center has-extra-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"placeholder\":\"Author\",\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"placeholder\":\"Genre\",\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"center\"} -->\n<div class=\"wp-block-buttons is-content-justification-center\"><!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Buy</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:cover -->\n\n<!-- wp:ub/star-rating-block {\"blockID\":\"6c37857a-74af-43f1-9196-e58ee54abca1\",\"starColor\":\"#ffb901\"} /-->",
        'categories'  => array( 'embler-network', 'embler-reviews' ),
        )
      );

// Product review
    register_block_pattern(
      'embler-patterns/product-review',
      array(
        'title'       => __( 'Product review', 'embler-patterns' ),
        'description' => _x( 'Important blocks for reviewing a product', 'Block pattern description', 'embler-patterns' ),
        'content'     => "<!-- wp:paragraph {\"placeholder\":\"Introduction to the product\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:media-text {\"mediaLink\":\"https://images.unsplash.com/photo-1610109989495-833dee575a8c\",\"mediaType\":\"image\",\"imageFill\":true,\"focalPoint\":{\"x\":\"0.50\",\"y\":\"0.50\"},\"className\":\"is-style-default\"} -->\n<div class=\"wp-block-media-text alignwide is-stacked-on-mobile is-image-fill is-style-default\"><figure class=\"wp-block-media-text__media\" style=\"background-image:url(https://images.unsplash.com/photo-1610109989495-833dee575a8c);background-position:50% 50%\"><img src=\"https://images.unsplash.com/photo-1610109989495-833dee575a8c\" alt=\"\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Content…\",\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\"></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:media-text -->\n\n<!-- wp:paragraph {\"placeholder\":\"What does the product solve\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:media-text {\"mediaPosition\":\"right\",\"mediaLink\":\"https://images.unsplash.com/photo-1568659573704-59c50f2a62e7\",\"mediaType\":\"image\",\"imageFill\":true,\"focalPoint\":{\"x\":\"0.50\",\"y\":\"0.50\"},\"className\":\"is-style-default\"} -->\n<div class=\"wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-image-fill is-style-default\"><figure class=\"wp-block-media-text__media\" style=\"background-image:url(https://images.unsplash.com/photo-1568659573704-59c50f2a62e7);background-position:50% 50%\"><img src=\"https://images.unsplash.com/photo-1568659573704-59c50f2a62e7\" alt=\"\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Content…\",\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\"></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:media-text -->\n\n<!-- wp:ub/star-rating-block {\"blockID\":\"49177a64-b0ec-401a-b34b-beab873ab828\",\"starColor\":\"#ffb901\"} /-->",
        'categories'  => array( 'embler-network', 'embler-reviews' ),
        )
      );
// Guest Author
    register_block_pattern(
      'embler-patterns/guest-author',
      array(
        'title'       => __( 'Guest Author', 'embler-patterns' ),
        'description' => _x( 'A box with author name, bio, and social links.', 'Block pattern description', 'embler-patterns' ),
        'content'     => "<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"><!-- wp:image -->\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"66.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:66.66%\"><!-- wp:paragraph {\"placeholder\":\"Author name\",\"fontSize\":\"larger\"} -->\n<p class=\"has-larger-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"placeholder\":\"Add a short bio about the author in this space.\",\"fontSize\":\"small\"} -->\n<p class=\"has-small-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:social-links {\"openInNewTab\":true,\"className\":\"is-style-pill-shape\"} -->\n<ul class=\"wp-block-social-links is-style-pill-shape\"></ul>\n<!-- /wp:social-links --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
        'categories'  => array( 'embler-network', 'columns' ),
        )
      );
/* Template to copy for new ones.
 * Replace 'template-slug', 'TemplateName', 'TemplateDescription' and add content.


// TemplateName
    register_block_pattern(
      'embler-patterns/template-slug',
      array(
        'title'       => __( 'TemplateName', 'embler-patterns' ),
        'description' => _x( 'TemplateDescription', 'Block pattern description', 'embler-patterns' ),
        'content'     => "",
        'categories'  => array( 'embler-network' ),
        )
      );
*/
}
