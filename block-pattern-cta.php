<?php
/**
 * @package Block_Pattern_CTA
 * @version 0.1.0
 */
/*
Plugin Name: Block Pattern - CTA
Plugin URI: https://dream-encode.com
Description: A sample plugin demonstrating Block Patterns in the block editor.
Author: David Baumwald
Version: 0.1.0
Author URI: https://dream-encode.com
*/

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}

class DE_Block_Pattern_CTA {
	public function __construct() {}

	public static function init() {
		add_action( 'init', array( __CLASS__, 'register_block_patterns' ) );
	}

	public static function register_block_patterns() {
		register_block_pattern_category(
			'cta',
			array( 'label' => __( 'CTA', 'block-pattern-cta' ) )
		);

		register_block_pattern(
			'block-pattern-cta/image-cta-pattern',
			array(
				'title'       => __( 'Image CTA Block', 'block-pattern-cta' ),
				'description' => _x( 'Two equal columns with an image on the left and a heading and CTA button on the right.', 'Block pattern description', 'block-pattern-cta' ),
				'categories'  => array( 'cta', 'buttons' ),
				'content'     => "<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image -->\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"align\":\"center\"} -->\n<h2 class=\"has-text-align-center\">CTA Heading</h2>\n<!-- /wp:heading -->\n\n<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"backgroundColor\":\"secondary\",\"className\":\"is-style-fill\"} -->\n<div class=\"wp-block-button is-style-fill\"><a class=\"wp-block-button__link has-secondary-background-color has-background\">BUTTON TEXT</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
			)
		);
	}
}

$de_block_pattern_cta = new DE_Block_Pattern_CTA();

$de_block_pattern_cta::init();