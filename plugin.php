<?php
/**
 * Plugin Name:       Custom Patterns
 * Description:       A collection of custom WordPress block patterns for the Embler network of sites.
 * Version:           2.5.2
 * Requires at least: 5.8
 * Requires PHP:      7.4.22
 * Author:            Angelia Embler
 * Author URI:        https://embler.com
 * GitHub Plugin URI: https://github.com/Embler-LLC/embler-patterns/
 * Primary Branch:    main
 */

add_action('init', 'embler_register_custom_pattern_categories');
add_action('init', 'embler_register_custom_pattern_review_movie');
add_action('init', 'embler_register_custom_pattern_review_book');
add_action('init', 'embler_register_custom_pattern_review_music');
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
        'content' => "<!-- wp:paragraph {\"placeholder\":\"Introduction to the movie including plot and other important details\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:media-text {\"align\":\"full\",\"mediaPosition\":\"right\",\"mediaType\":\"image\",\"verticalAlignment\":\"top\",\"imageFill\":true,\"focalPoint\":{\"x\":\"0.50\",\"y\":\"0.50\"},\"backgroundColor\":\"secondary\",\"className\":\"alignwide\"} -->\n<div class=\"wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top is-image-fill alignwide has-secondary-background-color has-background\"><figure class=\"wp-block-media-text__media\" style=\"background-image:url(https://images.unsplash.com/photo-1512149177596-f817c7ef5d4c);background-position:50% 50%\"><img src=\"https://images.unsplash.com/photo-1512149177596-f817c7ef5d4c\" alt=\"\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Release Year\",\"backgroundColor\":\"subtle-background\",\"fontSize\":\"small\"} -->\n<p class=\"has-text-align-center has-subtle-background-background-color has-background has-small-font-size\"></p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Duration\",\"backgroundColor\":\"subtle-background\",\"fontSize\":\"small\"} -->\n<p class=\"has-text-align-center has-subtle-background-background-color has-background has-small-font-size\"></p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"66.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:66.66%\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Generes\",\"backgroundColor\":\"subtle-background\",\"fontSize\":\"small\"} -->\n<p class=\"has-text-align-center has-subtle-background-background-color has-background has-small-font-size\"></p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"MPAA Rating\",\"backgroundColor\":\"subtle-background\",\"fontSize\":\"small\"} -->\n<p class=\"has-text-align-center has-subtle-background-background-color has-background has-small-font-size\"></p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:paragraph {\"placeholder\":\"Short description of plot and other movie details\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"center\"} -->\n<div class=\"wp-block-buttons is-content-justification-center\"><!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Watch on Amazon</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Learn more on IMDB</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:media-text -->\n\n<!-- wp:paragraph {\"placeholder\":\"Write your review of the movie\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 id=\"h-trailer\">Trailer</h2>\n<!-- /wp:heading -->\n\n<!-- wp:video -->\n<figure class=\"wp-block-video\"></figure>\n<!-- /wp:video -->",
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
        'content' => "<!-- wp:paragraph {\"placeholder\":\"Introduction to the book\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:media-text {\"align\":\"full\",\"mediaType\":\"image\",\"verticalAlignment\":\"top\",\"imageFill\":false,\"focalPoint\":{\"x\":\"0.50\",\"y\":\"0.50\"},\"backgroundColor\":\"secondary\",\"className\":\"alignwide\"} -->\n<div class=\"wp-block-media-text alignfull is-stacked-on-mobile is-vertically-aligned-top alignwide has-secondary-background-color has-background\"><figure class=\"wp-block-media-text__media\"><img src=\"https://images.unsplash.com/photo-1532012197267-da84d127e765\" alt=\"\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Short description of plot\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"center\"} -->\n<div class=\"wp-block-buttons is-content-justification-center\"><!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Buy</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Swap</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:media-text -->\n\n<!-- wp:paragraph {\"placeholder\":\"Review of the book\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 id=\"h-preview\">Preview</h2>\n<!-- /wp:heading -->\n\n<!-- wp:html -->\n<!-- Insert preview from https://books.google.com/ -->\n<!-- /wp:html -->",
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
function embler_register_custom_pattern_review_music()
{
    register_block_pattern('embler-patterns/music-review', array(
        'title' => __('Music review', 'embler-patterns') ,
        'description' => _x('Important blocks for reviewing a music album', 'Block pattern description', 'embler-patterns') ,
        'content' => "<!-- wp:paragraph {\"placeholder\":\"Introduction to the music album and other important details\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:media-text {\"align\":\"full\",\"mediaPosition\":\"right\",\"mediaType\":\"image\",\"verticalAlignment\":\"top\",\"imageFill\":true,\"focalPoint\":{\"x\":\"0.50\",\"y\":\"0.50\"},\"backgroundColor\":\"secondary\",\"className\":\"alignwide\"} -->\n<div class=\"wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top is-image-fill alignwide has-secondary-background-color has-background\"><figure class=\"wp-block-media-text__media\" style=\"background-image:url(https://images.unsplash.com/flagged/photo-1558706379-e9698f05d675);background-position:50% 50%\"><img src=\"https://images.unsplash.com/flagged/photo-1558706379-e9698f05d675\" alt=\"\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Release Year\",\"backgroundColor\":\"subtle-background\",\"fontSize\":\"small\"} -->\n<p class=\"has-text-align-center has-subtle-background-background-color has-background has-small-font-size\"></p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"\"} -->\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Duration\",\"backgroundColor\":\"subtle-background\",\"fontSize\":\"small\"} -->\n<p class=\"has-text-align-center has-subtle-background-background-color has-background has-small-font-size\"></p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:audio /-->\n\n<!-- wp:buttons {\"contentJustification\":\"center\"} -->\n<div class=\"wp-block-buttons is-content-justification-center\"><!-- wp:button {\"width\":100} -->\n<div class=\"wp-block-button has-custom-width wp-block-button__width-100\"><a class=\"wp-block-button__link\">Buy on Amazon</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:media-text -->\n\n<!-- wp:paragraph {\"placeholder\":\"Write your review of the music album\"} -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 id=\"h-music-video\">Music Video</h2>\n<!-- /wp:heading -->\n\n<!-- wp:video -->\n<figure class=\"wp-block-video\"></figure>\n<!-- /wp:video -->",
        'categories' => array(
            'embler-network',
            'embler-reviews'
        ) ,
    ));
}
