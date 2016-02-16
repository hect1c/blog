<?php
/**
 * Template to display single post content on archive pages
 * Archive Post Style: Big Thumbnail (default)
 */
?>

<article <?php hoot_attr( 'post', '', 'archive-category-small' ); ?>>

    <div class="entry-grid grid">

        <div class="entry-grid-content grid-span-12">
            <div class="grid-span-4">
                <?php $img_size = apply_filters( 'hoot_post_image_archive_big', '' );
                hoot_post_thumbnail( 'entry-content-featured-img entry-grid-featured-img', '4', true ); ?>
            </div>

            <div class="grid-span-8">
                <?php mb_cat_entry_meta(); ?>
                <header class="entry-header">
                    <div class="screen-reader-text" itemprop="datePublished" itemtype="https://schema.org/Date"><?php echo get_the_date('Y-m-d'); ?></div>
                    <?php the_title( '<h2 ' . hoot_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>
                </header><!-- .entry-header -->
                <?php if ( is_sticky() ) : ?>
                    <div class="entry-sticky-tag contrast-typo"><?php _e( 'Sticky', 'responsive-brix' ) ?></div>
                <?php endif; ?>
                <div <?php hoot_attr('entry-summary'); ?>>
                    <?php
                        the_excerpt();
                        // mb_custom_excerpt_length(25);
                    ?>
                </div><!-- .entry-summary -->
            </div>
            <div class="ssba-link grid-span-12">
                <div class="comments grid-span-4">
                    <?php mb_comments_entry_meta(); ?>
                </div>
                <div class="grid-span-8">
                    <?php echo do_shortcode('[ssba]'); ?>
                </div>
            </div>
        </div><!-- .entry-grid-content -->

    </div><!-- .entry-grid -->

</article><!-- .entry -->