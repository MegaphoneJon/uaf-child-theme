<?php

/**
 * Custom gutenberg blocks for use with this theme
 */


add_action('acf/init', 'fawf_theme_acf_blocks_init');

function fawf_theme_acf_blocks_init()
{

    // check function exists
    if (function_exists('acf_register_block_type')) {

        // ******************* Hero Block *******************************
        acf_register_block_type(array(
            'name' => 'fawf-hero-block',
            'title' => __('FAWF Hero Block'),
            'description' => __('Modified Hero block'),
            'render_template' => 'templates/blocks/fawf-hero-block.php',
            'icon' => 'superhero',
            'keywords' => array('padding', 'hero', 'id'),
            'mode' => 'edit',
        ));

        // ******************* New Text Media Block *******************************
        acf_register_block_type(array(
            'name' => 'fawf-text-media-block',
            'title' => __('Extended Text Media Block'),
            'description' => __('Text Media block'),
            'render_template' => 'templates/blocks/fawf-text-media-block.php',
            'icon' => 'align-right',
            'keywords' => array('padding', 'text', 'image', 'id'),
            'mode' => 'edit',
        ));

        // ******************* Stories Block *******************************
        acf_register_block_type(array(
            'name' => 'stories-block',
            'title' => __('Stories Block'),
            'description' => __('Custom Stories block'),
            'render_template' => 'templates/blocks/stories-block.php',
            'icon' => 'book',
            'keywords' => array('stories', 'block', 'custom'),
            'mode' => 'edit',
        ));

        // ******************* Left Quote Block *******************************
        acf_register_block_type(array(
            'name' => 'left-quote-block',
            'title' => __('Left Quote Block'),
            'description' => __('Custom Left Quote block'),
            'render_template' => 'templates/blocks/left-quote-block.php',
            'icon' => 'testimonial',
            'keywords' => array('quote', 'left', 'custom'),
            'mode' => 'edit',
        ));

        // ******************* FAWF Accordion Block *******************************
        acf_register_block_type(array(
            'name' => 'mosaic-accordion-block',
            'title' => __('Mosaic Accordion Block'),
            'description' => __('Mosaic Accordion block'),
            'render_template' => 'templates/blocks/mosaic-accordion-block.php',
            'icon' => 'layout',
            'keywords' => array('accordion', 'custom'),
            'mode' => 'edit',
        ));

// ******************* Single Color Block *******************************
acf_register_block_type(array(
    'name' => 'single-color-block',
    'title' => __('Single Color Block'),
    'description' => __('Custom Single Color block'),
    'render_template' => 'templates/blocks/single-color-block.php',
    'icon' => 'text page',
    'keywords' => array('color', 'custom'),
    'mode' => 'edit',
));

// ******************* FAWF Text Block *******************************
acf_register_block_type(array(
    'name' => 'fawf-text-block',
    'title' => __('FAWF Text Block'),
    'description' => __('Text block with class funcitonality'),
    'render_template' => 'templates/blocks/fawf-text-block.php',
    'icon' => 'text',
    'keywords' => array('text', 'custom'),
    'mode' => 'edit',
));

        
        
    }
}


// Merge new blocks with allowed existing blocks
// https://rudrastyh.com/gutenberg/remove-default-blocks.html
function fawf_theme_allowed_block_types($allowed_block, $post)
{
    $allowed_block = array(
        'core/shortcode',
        'acf/hero-block',
        'acf/hero-text-block',
        'acf/text-media-block',
        'acf/stats-block',
        'acf/links-menu-block',
        'acf/spokespeople-block',
        'acf/mentions-block',
        'acf/releases-block',
        'acf/financials-block',
        'acf/publications-block',
        'acf/posts-block',
        'acf/cta-block',
        'acf/map-block',
        'acf/list-block',
        'acf/legal-block',
        'acf/three-items-block',
        'acf/large-accordion-block',
        'acf/careers-block',
        'acf/quote-block',
        'acf/text-block',
        'acf/steps-block',
        'acf/media-block',
        'acf/blog-list-block',
        'acf/faq-block',
        'acf/team-block',
        'acf/former-team-block',
        'acf/criteria-block',
        'acf/partners-block',
        'acf/anchor-link-block',
        'acf/grant-block',
        'acf/code-snippet-block',

    );

    $allowed_block = array_merge($allowed_block, array(
        'acf/fawf-hero-block',
        'acf/fawf-text-media-block',
        'acf/stories-block',
        'acf/left-quote-block',
        'acf/mosaic-accordion-block',
        'acf/single-color-block',
        'acf/fawf-text-block',
    ));

    return $allowed_block;
}

add_filter('allowed_block_types_all', 'fawf_theme_allowed_block_types', 11, 2);

//Customize button options

add_filter('acf/load_field/name=circle_colour', 'my_acf_load_field');

function my_acf_load_field($field)
{

    $field['choices'] = array(
        'black' => '<div style="background-color: #000; width:20px; height: 20px; border-radius: 50%; float: left;margin-right: 5px;"></div>Black',
        'orange' => '<div style="background-color: #DB9E38; width:20px; height: 20px; border-radius: 50%; float: left;margin-right: 5px;"></div>Orange',
        'brick' => '<div style="background-color: #AD5726; width:20px; height: 20px; border-radius: 50%; float: left;margin-right: 5px;"></div>Brick',
    );

    return $field;
}
