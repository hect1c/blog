<?php
/**
 * If viewing a multi post page
 */
if ( !is_front_page() && !is_singular() && !hoot_is_404() ) :
?>

	<div id="loop-meta">
		<div class="grid">
			<div class="grid-row">

				<div <?php hoot_attr( 'loop-meta', '', 'grid-span-12' ); ?>>

					<h1 <?php hoot_attr( 'loop-title' ); ?>><?php hoot_loop_title(); // Displays title for archive type (multi post) pages. ?></h1>

					<?php if ( $desc = hoot_get_loop_description() ) : ?>
						<div <?php hoot_attr( 'loop-description' ); ?>>
							<?php echo $desc; // Displays description for archive type (multi post) pages. ?>
						</div><!-- .loop-description -->
					<?php endif; // End paged check. ?>

				</div><!-- .loop-meta -->

			</div>
		</div>
	</div>

<?php
/**
 * If viewing a single post/page, and the page is not set as frontpage
 */
elseif ( !is_front_page() && is_singular() && !hoot_is_404() ) :
?>

	<?php if ( have_posts() ) : ?>
		<div id="loop-meta">
			<div class="grid">
				<div class="grid-row">

					<?php
					// Begins the loop through found posts, and load the post data.
					while ( have_posts() ) : the_post(); ?>

						<div <?php hoot_attr( 'loop-meta', '', 'grid-span-12' ); ?>>
							<div class="entry-header">

								<?php
								global $post;
								$pretitle = ( !isset( $post->post_parent ) || empty( $post->post_parent ) ) ? '' : get_the_title( $post->post_parent ) . ' &raquo; ';
								?>
								<h1 <?php hoot_attr( 'loop-title' ); ?>><?php the_title( $pretitle ); ?></h1>

								<?php $show_loop_description = apply_filters( 'hoot_show_loop_description', true ); ?>
								<?php if ( $show_loop_description && 'top' == hoot_get_option( 'post_meta_location' ) && !is_attachment() ) : ?>
									<div <?php hoot_attr( 'loop-description' ); ?>>
										<?php
										if ( is_page() )
											hoot_meta_info_blocks( hoot_get_option('page_meta') );
										else
											hoot_meta_info_blocks( hoot_get_option('post_meta') );
										?>
									</div><!-- .loop-description -->
								<?php endif; ?>

							</div><!-- .entry-header -->
						</div><!-- .loop-meta -->

					<?php
					endwhile;
					rewind_posts(); ?>

				</div>
			</div>
		</div>
	<?php endif; ?>

<?php endif; ?>