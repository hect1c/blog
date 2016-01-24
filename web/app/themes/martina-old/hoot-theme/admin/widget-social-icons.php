<?php
/**
 * Social Icons Widget
 *
 * @package hoot
 * @subpackage responsive-brix
 * @since responsive-brix 1.0
 */

/**
* Class Hoot_Social_Icons_Widget
*/
class Hoot_Social_Icons_Widget extends Hoot_WP_Widget {

	function __construct() {
		parent::__construct(

			//id
			'hoot-social-icons-widget',

			//name
			__( 'Hoot > Social Icons', 'hoot' ),

			//widget_options
			array(
				'description'	=> __('Display Social Icons', 'hoot'),
				'class'			=> 'hoot-social-icons-widget', // CSS class applied to frontend widget container via 'before_widget' arg
			),

			//control_options
			array(),

			//form_options
			//'name' => can be empty or false to hide the name
			array(
				array(
					'name'		=> __( 'Icon Size', 'hoot' ),
					'id'		=> 'size',
					'type'		=> 'select',
					'std'		=> 'medium',
					'options'	=> array(
						'small'		=> __( 'Small', 'hoot' ),
						'medium'	=> __( 'Medium', 'hoot' ),
						'large'		=> __( 'Large', 'hoot' ),
						'huge'		=> __( 'Huge', 'hoot' ),
					),
				),
				array(
					'name'		=> __( 'Social Icons', 'hoot' ),
					'id'		=> 'icons',
					'type'		=> 'group',
					'options'	=> array(
						'item_name'	=> __( 'Icon', 'hoot' ),
					),
					'fields'	=> array(
						array(
							'name'		=> __( 'Social Icon', 'hoot' ),
							'id'		=> 'icon',
							'type'		=> 'select',
							'options'	=> array(
								'fa-behance'	=> __( 'Behance', 'hoot' ),
								'fa-bitbucket'	=> __( 'Bitbucket', 'hoot' ),
								'fa-btc'		=> __( 'BTC', 'hoot' ),
								'fa-codepen'	=> __( 'Codepen', 'hoot' ),
								'fa-delicious'	=> __( 'Delicious', 'hoot' ),
								'fa-deviantart'	=> __( 'Deviantart', 'hoot' ),
								'fa-digg'		=> __( 'Digg', 'hoot' ),
								'fa-dribbble'	=> __( 'Dribbble', 'hoot' ),
								'fa-dropbox'	=> __( 'Dropbox', 'hoot' ),
								'fa-envelope'	=> __( 'Email', 'hoot' ),
								'fa-facebook'	=> __( 'Facebook', 'hoot' ),
								'fa-flickr'		=> __( 'Flickr', 'hoot' ),
								'fa-foursquare'	=> __( 'Foursquare', 'hoot' ),
								'fa-github'		=> __( 'Github', 'hoot' ),
								'fa-google-plus'=> __( 'Google Plus', 'hoot' ),
								'fa-instagram'	=> __( 'Instagram', 'hoot' ),
								'fa-lastfm'		=> __( 'Last FM', 'hoot' ),
								'fa-linkedin'	=> __( 'Linkedin', 'hoot' ),
								'fa-pinterest'	=> __( 'Pinterest', 'hoot' ),
								'fa-reddit'		=> __( 'Reddit', 'hoot' ),
								'fa-rss'		=> __( 'RSS', 'hoot' ),
								'fa-skype'		=> __( 'Skype', 'hoot' ),
								'fa-slack'		=> __( 'Slack', 'hoot' ),
								'fa-slideshare'	=> __( 'Slideshare', 'hoot' ),
								'fa-soundcloud'	=> __( 'Soundcloud', 'hoot' ),
								'fa-stack-exchange'	=> __( 'Stack Exchange', 'hoot' ),
								'fa-stack-overflow'	=> __( 'Stack Overflow', 'hoot' ),
								'fa-steam'		=> __( 'Steam', 'hoot' ),
								'fa-stumbleupon'=> __( 'Stumbleupon', 'hoot' ),
								'fa-tumblr'		=> __( 'Tumblr', 'hoot' ),
								'fa-twitch'		=> __( 'Twitch', 'hoot' ),
								'fa-twitter'	=> __( 'Twitter', 'hoot' ),
								'fa-vimeo-square'=> __( 'Vimeo', 'hoot' ),
								'fa-wordpress'	=> __( 'Wordpress', 'hoot' ),
								'fa-yelp'		=> __( 'Yelp', 'hoot' ),
								'fa-youtube'	=> __( 'Youtube', 'hoot' ),
							),
						),
						array(
							'name'		=> __( 'URL', 'hoot' ),
							'id'		=> 'url',
							'type'		=> 'text',
							'sanitize'	=> 'url',
						),
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
		include( hoot_locate_widget( 'social-icons' ) ); // Loads the widget/social-icons or template-parts/widget-social-icons.php template.
	}

}

/**
 * Register Widget
 */
function hoot_social_icons_widget_register(){
	register_widget('Hoot_Social_Icons_Widget');
}
add_action('widgets_init', 'hoot_social_icons_widget_register');