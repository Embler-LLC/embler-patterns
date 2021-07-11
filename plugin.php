<?php
/**
 * Plugin Name:       Custom Patterns
 * Description:       A collection of custom WordPress block patterns for the Embler network of sites.
 * Version:           2.1
 * Author:            Angelia Embler
 * Author URI:        https://embler.com
 * GitHub Plugin URI: https://github.com/Embler-LLC/embler-patterns/
 * Primary Branch:    main
 */

add_action('init', 'embler_register_custom_pattern_categories');
add_action('init', 'embler_register_custom_pattern_review_movie');
add_action('init', 'embler_register_custom_pattern_review_book');
add_action('init', 'embler_register_custom_pattern_review_product');
add_action('init', 'embler_register_custom_pattern_guest_author');

function embler_register_custom_pattern_categories()
{
    register_block_pattern_category('embler-network', array(
        'label' => __('Embler', 'embler-patterns')
    ));
    register_block_pattern_category('embler-reviews', array(
        'label' => __('Reviews', 'embler-patterns')
    ));
}

function embler_register_custom_pattern_review_movie()
{
    register_block_pattern('embler-patterns/movie-review', array(
        'title' => __('Movie review', 'embler-patterns') ,
        'description' => _x('Important blocks for reviewing a movie', 'Block pattern description', 'embler-patterns') ,
        'content' => "<!-- wp:paragraph {\"placeholder\":\"Introduction to the movie including plot and other important details\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:cover {\"url\":\"https://images.unsplash.com/photo-1512149177596-f817c7ef5d4c\",\"className\":\"alignfull\"} -->\n<div class=\"wp-block-cover has-background-dim alignfull\"><img class=\"wp-block-cover__image-background\" alt=\"\" src=\"https://images.unsplash.com/photo-1512149177596-f817c7ef5d4c\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Movie title…\",\"fontSize\":\"extra-large\"} -->\n<p class=\"has-text-align-center has-extra-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"placeholder\":\"Starring...\",\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"placeholder\":\"Director...\",\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"center\"} -->\n<div class=\"wp-block-buttons is-content-justification-center\"><!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Buy</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Rent</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Watch</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:cover -->\n\n<!-- wp:paragraph {\"placeholder\":\"Write your review of the movie\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Trailer</h2>\n<!-- /wp:heading -->\n\n<!-- wp:video -->\n<figure class=\"wp-block-video\"></figure>\n<!-- /wp:video -->\n\n<!-- wp:heading -->\n<h2>Gallery</h2>\n<!-- /wp:heading -->\n\n<!-- wp:gallery {\"linkTo\":\"none\"} -->\n<figure class=\"wp-block-gallery columns-0 is-cropped\"><ul class=\"blocks-gallery-grid\"></ul></figure>\n<!-- /wp:gallery -->",
        'categories' => array(
            'embler-network',
            'embler-reviews'
        ) ,
    ));
}
function embler_register_custom_pattern_review_book()
{
    register_block_pattern('embler-patterns/book-review', array(
        'title' => __('Book review', 'embler-patterns') ,
        'description' => _x('Important blocks for reviewing a book', 'Block pattern description', 'embler-patterns') ,
        'content' => "<!-- wp:paragraph {\"placeholder\":\"Introduction to the book including plot and other important details\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:cover {\"url\":\"https://images.unsplash.com/photo-1432821596592-e2c18b78144f\",\"className\":\"alignfull\"} -->\n<div class=\"wp-block-cover has-background-dim alignfull\"><img class=\"wp-block-cover__image-background\" alt=\"\" src=\"https://images.unsplash.com/photo-1432821596592-e2c18b78144f\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Book title…\",\"fontSize\":\"extra-large\"} -->\n<p class=\"has-text-align-center has-extra-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"placeholder\":\"Author\",\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"placeholder\":\"Genre\",\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"center\"} -->\n<div class=\"wp-block-buttons is-content-justification-center\"><!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Buy</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:cover -->\n\n<!-- wp:paragraph {\"placeholder\":\"Write your review of the book\"} -->\n<p></p>\n<!-- /wp:paragraph -->",
        'categories' => array(
            'embler-network',
            'embler-reviews'
        ) ,
    ));
}
function embler_register_custom_pattern_review_product()
{
    register_block_pattern('embler-patterns/product-review', array(
        'title' => __('Product review', 'embler-patterns') ,
        'description' => _x('Important blocks for reviewing a product', 'Block pattern description', 'embler-patterns') ,
        'content' => "<!-- wp:paragraph {\"placeholder\":\"Introduction to the product\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image -->\n<figure class=\"wp-block-image\"><img src=\"https://images.unsplash.com/photo-1568659573704-59c50f2a62e7\" alt=\"\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph {\"placeholder\":\"Write your review of the product\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:cover {\"url\":\"https://images.unsplash.com/photo-1610109989495-833dee575a8c\",\"className\":\"alignfull has-background-dim-70\"} -->\n<div class=\"wp-block-cover has-background-dim alignfull has-background-dim-70\"><img class=\"wp-block-cover__image-background\" alt=\"\" src=\"https://images.unsplash.com/photo-1610109989495-833dee575a8c\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write product name\",\"fontSize\":\"extra-large\"} -->\n<p class=\"has-text-align-center has-extra-large-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"placeholder\":\"Add a short description\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"center\"} -->\n<div class=\"wp-block-buttons is-content-justification-center\"><!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Buy</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:cover -->",
        'categories' => array(
            'embler-network',
            'embler-reviews'
        ) ,
    ));
}
function embler_register_custom_pattern_guest_author()
{
    register_block_pattern('embler-patterns/guest-author', array(
        'title' => __('Guest Author', 'embler-patterns') ,
        'description' => _x('A box with author name, bio, and social links.', 'Block pattern description', 'embler-patterns') ,
        'content' => "<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"><!-- wp:image -->\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"66.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:66.66%\"><!-- wp:paragraph {\"placeholder\":\"Author name\",\"fontSize\":\"larger\"} -->\n<p class=\"has-larger-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"placeholder\":\"Add a short bio about the author in this space.\",\"fontSize\":\"small\"} -->\n<p class=\"has-small-font-size\"></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:social-links {\"openInNewTab\":true,\"className\":\"is-style-pill-shape\"} -->\n<ul class=\"wp-block-social-links is-style-pill-shape\"></ul>\n<!-- /wp:social-links --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
        'categories' => array(
            'embler-network',
            'columns'
        ) ,
    ));
}
