<?php
/**
 * Call To Action Widget
 *
 * @package hoot
 * @subpackage responsive-brix
 * @since responsive-brix 1.0
 */

/**
* Class Hoot_CTA_Widget
*/
class Hoot_CTA_Widget extends Hoot_WP_Widget {

	function __construct() {
		parent::__construct(

			//id
			'hoot-cta-widget',

			//name
			__( 'Hoot > Call To Action', 'hoot' ),

			//widget_options
			array(
				'description'	=> __('Display Call To Action block.', 'hoot'),
				'class'			=> 'hoot-cta-widget', // CSS class applied to frontend widget container via 'before_widget' arg
			),

			//control_options
			array(),

			//form_options
			//'name' => can be empty or false to hide the name
			array(
				array(
					'name'		=> __( 'Headline', 'hoot' ),
					'id'		=> 'headline',
					'type'		=> 'text',
				),
				array(
					'name'		=> __( 'Description', 'hoot' ),
					'id'		=> 'description',
					'type'		=> 'textarea',
				),
				array(
					'name'		=> __( 'Button Text', 'hoot' ),
					'desc'		=> __( 'Leave empty if you dont want to show button', 'hoot' ),
					'id'		=> 'button_text',
					'type'		=> 'text',
					'std'		=> __( 'KNOW MORE', 'hoot' ),
				),
				array(
					'name'		=> __( 'URL', 'hoot' ),
					'desc'		=> __( 'Leave empty if you dont want to show button', 'hoot' ),
					'id'		=> 'url',
					'type'		=> 'text',
					'sanitize'	=> 'url',
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
			)
		);
	}

	/**
	 * Echo the widget content
	 */
	function display_widget( $instance, $before_title = '', $title='', $after_title = '' ) {
		extract( $instance, EXTR_SKIP );
		include( hoot_locate_widget( 'cta' ) ); // Loads the widget/cta or template-parts/widget-cta.php template.
	}

}

/**
 * Register Widget
 */
function hoot_cta_widget_register(){
	register_widget('Hoot_CTA_Widget');
}
add_action('widgets_init', 'hoot_cta_widget_register');