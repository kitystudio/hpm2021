<?php
/**
 * Intentionally Blank Theme functions
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

if ( ! function_exists( 'blank_setup' ) ) :
	/**
	 * Sets up theme defaults and registers the various WordPress features that
	 * this theme supports.
	 */
	function blank_setup() {
		load_theme_textdomain( 'intentionally-blank' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );

		// This theme allows users to set a custom background.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'f5f5f5',
			)
		);

		add_theme_support( 'custom-logo' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 256,
				'width'       => 256,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			)
		);
	}
endif; // end function_exists blank_setup.
add_action( 'after_setup_theme', 'blank_setup' );

add_action(
	'customize_register',
	function( $wp_customize ) {
		$wp_customize->remove_section( 'static_front_page' );
	}
);

/*	検索結果に固定ページを含めない
		参考サイト: https://www.imamura.biz/blog/10460
*/
function SearchFilter($query) {
	if ($query->is_search) { //検索結果ページが表示されている場合
	 $query->set('post_type', 'post'); //投稿タイプが投稿のみ
	}
	return $query;
 }
 
 add_action('pre_get_posts','SearchFilter'); //アクションフック