<?php
/**
 * Template to display single post content on archive pages
 * Archive Post Style: Big Thumbnail (default)
 */
?>

<article <?php hoot_attr( 'post', '', 'archive-big' ); ?>>

	<div class="entry-grid grid">

		<div class="entry-grid-content grid-span-12">

			<header class="entry-header">
				<div class="screen-reader-text" itemprop="datePublished" itemtype="https://schema.org/Date"><?php echo get_the_date('Y-m-d'); ?></div>
				<?php mb_entry_meta(); ?>
				<?php the_title( '<h1 ' . hoot_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h1>' ); ?>
			</header><!-- .entry-header -->

			<?php if ( is_sticky() ) : ?>
				<div class="entry-sticky-tag contrast-typo"><?php _e( 'Sticky', 'responsive-brix' ) ?></div>
			<?php endif; ?>

			<?php $img_size = apply_filters( 'hoot_post_image_archive_big', '' );
			hoot_post_thumbnail( 'entry-content-featured-img entry-grid-featured-img', $img_size ); ?>

			<div <?php hoot_attr( 'entry-summary' ); ?>>
				<?php
				if ( 'full-content' == hoot_get_option('archive_post_content') )
					the_content();
				else
					the_excerpt();
				?>
			</div><!-- .entry-summary -->

			<div <?php hoot_attr( 'entry-post-meta'); ?>>
				<?php
					mb_entry_post_meta();
				?>
			</div>

		</div><!-- .entry-grid-content -->

	</div><!-- .entry-grid -->

</article><!-- .entry -->