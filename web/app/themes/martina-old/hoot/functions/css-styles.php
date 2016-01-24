<?php
/**
 * Functions for building CSS styles to be printed.
 *
 * @package hoot
 * @subpackage framework
 * @since hoot 1.0.0
 */

/**
 * Create general CSS style
 *
 * @since 1.0.0
 * @access public
 * @param string $style name of the css property
 * @param string $value value of the css property
 * @param bool $echo
 * @param bool $important
 * @return void|string
 */
function hoot_css_rule( $style, $value, $echo = false, $important = false ) {
	if ( empty( $style ) || empty( $value ) )
		return '';
	$important = ( $important ) ? ' !important' : '';
	$output = " $style: $value$important; ";
	if ( true === $echo || 'true' === $echo )
		echo $output;
	else
		return $output;
}

/**
 * Create CSS styles from a background array.
 *
 * @since 1.0.0
 * @access public
 * @param array $background
 * @return string
 */
function hoot_css_background( $background ) {
	$background_defaults = array(
		'color' => '',
		'type' => 'predefined',
		'pattern' => 0,
		'image' => '',
		'repeat' => '',
		'position' => '',
		'attachment' => '',
	);
	$background = wp_parse_args( $background, $background_defaults );
	extract( $background, EXTR_SKIP );

	$output = '';

	if ( !empty( $color ) ) {
		$color = hoot_color_santize_hex( $color );
		if ( $color )
			$output .= hoot_css_rule( 'background-color', $color );
	}

	if ( 'predefined' == $type ) {
		if ( !empty( $pattern ) ) { // skip if pattern = 0 (i.e. user has selected 'No Pattern')
			$background_image = 'url("' . trailingslashit( HOOT_IMAGES ) . 'patterns/' . $pattern . '")';
			$output .= hoot_css_rule( 'background-image', $background_image );
			$output .= hoot_css_rule( 'background-repeat', 'repeat' );
		}
	}

	if ( 'custom' == $type ) {
		if ( !empty( $image ) ) {
			$background_image = 'url("' . esc_url( $image ) . '")';
			$output .= hoot_css_rule( 'background-image', $background_image );
			if ( !empty( $repeat ) ) {
				$output .= hoot_css_rule( 'background-repeat', $repeat );
			}
			if ( !empty( $position ) ) {
				$output .= hoot_css_rule( 'background-position', $position );
			}
			if ( !empty( $attachment ) ) {
				$output .= hoot_css_rule( 'background-attachment', $attachment );
			}
		}
	}

	return $output;
}

/**
 * Create CSS styles from a typography array.
 *
 * @since 1.1.1
 * @access public
 * @param array $typography
 * @param bool $reset Reset earlier css rules from stylesheets etc.
 * @return string
 */
function hoot_css_typography( $typography, $reset = false ) {
	$typography_defaults = array(
		'size' => '',
		'face' => '',
		'style' => '',
		'color' => '',
	);
	$typography = wp_parse_args( $typography, $typography_defaults );
	extract( $typography, EXTR_SKIP );

	$output = '';

	if ( !empty( $color ) ) {
		$color = hoot_color_santize_hex( $color );
		if ( $color )
			$output .= hoot_css_rule( 'color', $color );
	}

	if ( !empty( $size ) ) {
		$output .= hoot_css_rule( 'font-size', $size );
	}

	if ( !empty( $face ) ) {
		$output .= hoot_css_rule( 'font-family', $face );
	}

	if ( !empty( $style ) ) {
		switch ( $style ) {
			case 'italic':
				$output .= hoot_css_rule( 'font-style', 'italic' );
				if ( $reset ) $output .= hoot_css_rule( 'text-transform', 'none' );
				if ( $reset ) $output .= hoot_css_rule( 'font-weight', 'normal' );
				break;
			case 'bold':
				$output .= hoot_css_rule( 'font-weight', 'bold' );
				if ( $reset ) $output .= hoot_css_rule( 'text-transform', 'none' );
				if ( $reset ) $output .= hoot_css_rule( 'font-style', 'normal' );
				break;
			case 'bold italic':
				$output .= hoot_css_rule( 'font-weight', 'bold' );
				$output .= hoot_css_rule( 'font-style', 'italic' );
				if ( $reset ) $output .= hoot_css_rule( 'text-transform', 'none' );
				break;
			case 'lighter':
				$output .= hoot_css_rule( 'font-weight', 'lighter' );
				if ( $reset ) $output .= hoot_css_rule( 'text-transform', 'none' );
				if ( $reset ) $output .= hoot_css_rule( 'font-style', 'normal' );
				break;
			case 'lighter italic':
				$output .= hoot_css_rule( 'font-weight', 'lighter' );
				$output .= hoot_css_rule( 'font-style', 'italic' );
				if ( $reset ) $output .= hoot_css_rule( 'text-transform', 'none' );
				break;
			case 'uppercase':
				$output .= hoot_css_rule( 'text-transform', 'uppercase' );
				if ( $reset ) $output .= hoot_css_rule( 'font-weight', 'normal' );
				if ( $reset ) $output .= hoot_css_rule( 'font-style', 'normal' );
				break;
			case 'uppercase italic':
				$output .= hoot_css_rule( 'text-transform', 'uppercase' );
				$output .= hoot_css_rule( 'font-style', 'italic' );
				if ( $reset ) $output .= hoot_css_rule( 'font-weight', 'normal' );
				break;
			case 'uppercase bold':
				$output .= hoot_css_rule( 'text-transform', 'uppercase' );
				$output .= hoot_css_rule( 'font-weight', 'bold' );
				if ( $reset ) $output .= hoot_css_rule( 'font-style', 'normal' );
				break;
			case 'uppercase bold italic':
				$output .= hoot_css_rule( 'text-transform', 'uppercase' );
				$output .= hoot_css_rule( 'font-weight', 'bold' );
				$output .= hoot_css_rule( 'font-style', 'italic' );
				break;
			case 'uppercase lighter':
				$output .= hoot_css_rule( 'text-transform', 'uppercase' );
				$output .= hoot_css_rule( 'font-weight', 'lighter' );
				if ( $reset ) $output .= hoot_css_rule( 'font-style', 'normal' );
				break;
			case 'uppercase lighter italic':
				$output .= hoot_css_rule( 'text-transform', 'uppercase' );
				$output .= hoot_css_rule( 'font-weight', 'lighter' );
				$output .= hoot_css_rule( 'font-style', 'italic' );
				break;
			case 'none': default:
				if ( $reset ) $output .= hoot_css_rule( 'text-transform', 'none' );
				if ( $reset ) $output .= hoot_css_rule( 'font-weight', 'normal' );
				if ( $reset ) $output .= hoot_css_rule( 'font-style', 'normal' );
				break;
		}
	}

	return $output;
}

/**
 * Create CSS style from grid width.
 *
 * @since 1.0.0
 * @access public
 * @return string
 */
function hoot_css_grid_width() {
	$output = '';

	$width = intval( hoot_get_option( 'site_width' ) );
	$width = !empty( $width ) ? $width : 1260;

	$output .= hoot_css_rule( 'max-width', $width . 'px' );

	return $output;
}

/**
 * Callback function for Custom Background
 *
 * @since 1.1.72
 * @access public
 * @return string
 */
function hoot_custom_background_cb() {

	// $background is the saved custom image, or the default image.
	$background = set_url_scheme( get_background_image() );

	// $color is the saved custom color.
	// A default has to be specified in style.css. It will not be printed here.
	$color = get_background_color();

	if ( $color === get_theme_support( 'custom-background', 'default-color' ) ) {
		$color = false;
	}

	if ( ! $background && ! $color )
		return;

	$style = $color ? "background-color: #$color;" : '';

	$hoot_bg = hoot_get_option( 'background' );

	if ( $background && isset( $hoot_bg['type'] ) && $hoot_bg['type'] == 'custom' ) {
		$image = " background-image: url('$background');";

		$repeat = get_theme_mod( 'background_repeat', get_theme_support( 'custom-background', 'default-repeat' ) );
		if ( ! in_array( $repeat, array( 'no-repeat', 'repeat-x', 'repeat-y', 'repeat' ) ) )
			$repeat = 'repeat';
		$repeat = " background-repeat: $repeat;";

		$position = get_theme_mod( 'background_position_x', get_theme_support( 'custom-background', 'default-position-x' ) );
		if ( ! in_array( $position, array( 'center', 'right', 'left' ) ) )
			$position = 'left';
		$position = " background-position: top $position;";

		$attachment = get_theme_mod( 'background_attachment', get_theme_support( 'custom-background', 'default-attachment' ) );
		if ( ! in_array( $attachment, array( 'fixed', 'scroll' ) ) )
			$attachment = 'scroll';
		$attachment = " background-attachment: $attachment;";

		$style .= $image . $repeat . $position . $attachment;
	}
?>
<style type="text/css" id="custom-background-css">
body.custom-background { <?php echo trim( $style ); ?> }
</style>
<?php
}