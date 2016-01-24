<?php
/**
 * This is the most generic template file in a WordPress theme
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the blog posts index page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */
?>

<?php get_header(); // Loads the header.php template. ?>

<?php

if( is_front_page() ){
	// Display HTML Slider
	$slider_width = hoot_get_option( 'wt_html_slider_width' );
	$slider_grid = ( 'stretch' == $slider_width ) ? 'grid-stretch' : 'grid'; ?>

	<div id="widgetized-template-html-slider" class="widgetized-template-area ">
		<div class="widgetized-template-slider">
			<div class="grid-row">
				<div class="grid-span-12">
					<?php
					global $hoot_theme;

					/* Reset any previous slider */
					$hoot_theme->slider = array();
					$hoot_theme->sliderSettings = array( 'class' => 'wt-slider', 'min_height' => hoot_get_option( 'wt_html_slider_min_height' ) );

					/* Create slider object */
					$slides = hoot_get_option( 'wt_html_slider' );
					foreach ( $slides as $slide ) {
						if ( !empty( $slide['image'] ) || !empty( $slide['content'] ) || !empty( $slide['url'] ) ) {
							$hoot_theme->slider[] = $slide;
						}
					}

					/* Display Slider Template */
					get_template_part( 'template-parts/slider-html' );
					?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php
// Dispay Loop Meta at top
if ( hoot_page_header_attop() ) {
	get_template_part( 'template-parts/loop-meta' ); // Loads the template-parts/loop-meta.php template to display Title Area with Meta Info (of the loop)
}
?>

<div class="grid">

	<div class="grid-row">

		<main <?php hoot_attr( 'content' ); ?>>

			<?php
			// Checks if any posts were found.
			if ( have_posts() ) :
			?>

				<div id="content-wrap">

					<?php
					// Dispay Loop Meta in content wrap
					if ( ! hoot_page_header_attop() ) {
						get_template_part( 'template-parts/loop-meta' ); // Loads the template-parts/loop-meta.php template to display Title Area with Meta Info (of the loop)
					}

					// Begins the loop through found posts, and load the post data.
					while ( have_posts() ) : the_post();

						// Loads the template-parts/content-{$post_type}.php template.
						hoot_get_content_template();

					// End found posts loop.
					endwhile;
					?>

				</div><!-- #content-wrap -->

				<?php
				// Loads the template-parts/loop-nav.php template.
				get_template_part( 'template-parts/loop-nav' );

			// If no posts were found.
			else :

				// Loads the template-parts/error.php template.
				get_template_part( 'template-parts/error' );

			// End check for posts.
			endif;
			?>

		</main><!-- #content -->

		<?php hoot_get_sidebar( 'primary' ); // Loads the template-parts/sidebar-primary.php template. ?>

	</div><!-- .grid-row -->

</div><!-- .grid -->

<?php get_footer(); // Loads the footer.php template. ?>