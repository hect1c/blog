<?php
/**
 * Content Blocks Widget
 *
 * @package hoot
 * @subpackage responsive-brix
 * @since responsive-brix 1.0
 */

/**
* Class Hoot_Content_Blocks_Widget
*/
class Hoot_Content_Blocks_Widget extends Hoot_WP_Widget {

	function __construct() {
		parent::__construct(

			//id
			'hoot-content-blocks-widget',

			//name
			__( 'Hoot > Content Blocks', 'hoot' ),

			//widget_options
			array(
				'description'	=> __('Display Styled Content Blocks.', 'hoot'),
				'class'			=> 'hoot-content-blocks-widget', // CSS class applied to frontend widget container via 'before_widget' arg
			),

			//control_options
			array(),

			//form_options
			//'name' => can be empty or false to hide the name
			array(
				array(
					'name'		=> __( 'Blocks Style', 'hoot' ),
					'id'		=> 'style',
					'type'		=> 'images',
					'std'		=> 'style1',
					'options'	=> array(
						'style1'	=> trailingslashit( HOOT_THEMEURI ) . 'admin/images/content-block-style-1.png',
						'style2'	=> trailingslashit( HOOT_THEMEURI ) . 'admin/images/content-block-style-2.png',
						'style3'	=> trailingslashit( HOOT_THEMEURI ) . 'admin/images/content-block-style-3.png',
						'style4'	=> trailingslashit( HOOT_THEMEURI ) . 'admin/images/content-block-style-4.png',
					),
				),
				array(
					'name'		=> __( 'No. Of Columns', 'hoot' ),
					'id'		=> 'columns',
					'type'		=> 'select',
					'std'		=> '3',
					'options'	=> array(
						'1'	=> __( '1', 'hoot' ),
						'2'	=> __( '2', 'hoot' ),
						'3'	=> __( '3', 'hoot' ),
						'4'	=> __( '4', 'hoot' ),
						'5'	=> __( '5', 'hoot' ),
					),
				),
				array(
					'name'		=> __( 'Icon Style', 'hoot' ),
					'desc'		=> __( "Not applicable if 'Featured Image' is seected below.", 'hoot' ),
					'id'		=> 'icon_style',
					'type'		=> 'select',
					'std'		=> 'circle',
					'options'	=> array(
						'none'		=> __( 'None', 'hoot' ),
						'circle'	=> __( 'Circle', 'hoot' ),
						'square'	=> __( 'Square', 'hoot' ),
					),
				),
				array(
					'name'		=> __( 'Border', 'hoot' ),
					'desc'		=> __( 'Top and bottom borders.', 'hoot' ),
					'id'		=> 'border',
					'type'		=> 'select',
					'std'		=> 'none none',
					'options'	=> array(
						'line line'	=> __( 'Top - Line || Bottom - Line', 'hoot' ),
						'line shadow'	=> __( 'Top - Line || Bottom - DoubleLine', 'hoot' ),
						'line none'	=> __( 'Top - Line || Bottom - None', 'hoot' ),
						'shadow line'	=> __( 'Top - DoubleLine || Bottom - Line', 'hoot' ),
						'shadow shadow'	=> __( 'Top - DoubleLine || Bottom - DoubleLine', 'hoot' ),
						'shadow none'	=> __( 'Top - DoubleLine || Bottom - None', 'hoot' ),
						'none line'	=> __( 'Top - None || Bottom - Line', 'hoot' ),
						'none shadow'	=> __( 'Top - None || Bottom - DoubleLine', 'hoot' ),
						'none none'	=> __( 'Top - None || Bottom - None', 'hoot' ),
					),
				),
				array(
					'name'		=> __( "Use 'Featured Image' of page instead of icons.", 'hoot' ),
					'id'		=> 'image',
					'type'		=> 'checkbox',
				),
				array(
					'name'		=> __( "Display excerpt instead of full content (Read More link will be automatically used instead of Custom URLs below)", 'hoot' ),
					'id'		=> 'excerpt',
					'type'		=> 'checkbox',
				),
				array(
					'name'		=> __( 'Content Boxes', 'hoot' ),
					'id'		=> 'boxes',
					'type'		=> 'group',
					'options'	=> array(
						'item_name'	=> __( 'Content Box', 'hoot' ),
					),
					'fields'	=> array(
						array(
							'name'		=> __('Icon', 'hoot'),
							'desc'		=> __( "Not applicable if 'Featured Image' is selected above.", 'hoot' ),
							'id'		=> 'icon',
							'type'		=> 'icon'),
						array(
							'name'		=> __( 'Page', 'hoot' ),
							'id'		=> 'page',
							'type'		=> 'select',
							'options'	=> Hoot_WP_Widget::get_wp_list('page'),
						),
						array(
							'name'		=> __('Link Text (optional)', 'hoot'),
							'id'		=> 'link',
							'type'		=> 'text'),
						array(
							'name'		=> __('Link URL', 'hoot'),
							'id'		=> 'url',
							'std'		=> 'http://',
							'type'		=> 'text',
							'sanitize'	=> 'url'),
					),
				),
			)
		);
	}

	/**
	 * Echo the widget content
	 */
	function display_widget( $instance, $before_title = '', $title='', $after_title = '' ) {
		extract( $instance, EXTR_SKIP );
		include( hoot_locate_widget( 'content-blocks' ) ); // Loads the widget/content-blocks or template-parts/widget-content-blocks.php template.
	}

}

/**
 * Register Widget
 */
function hoot_content_blocks_widget_register(){
	register_widget('Hoot_Content_Blocks_Widget');
}
add_action('widgets_init', 'hoot_content_blocks_widget_register');