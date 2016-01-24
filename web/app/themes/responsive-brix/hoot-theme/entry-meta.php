<?php
if(!function_exists('mb_entry_meta')) :
    function mb_entry_meta() {

        $category_list = get_the_category_list(', ');

        echo '<div class="entry-date-cat"><time class="updated" datetime="'. get_the_time('c') .'">'. sprintf(__('%s', 'mb'), get_the_date()) .'</time> | ' . $category_list .'</div>';
        // echo '<p class="byline author">'. __('Written by', 'dcpro') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
    }
endif;

if(!function_exists('mb_entry_post_meta')) :
    function mb_entry_post_meta(){
        echo comments_popup_link(__( '0 Comments', 'mb' ),
                                __( '1 Comment', 'mb' ),
                                __( '% Comments', 'mb' ), 'comments-link', '' );
    }
endif;
?>
