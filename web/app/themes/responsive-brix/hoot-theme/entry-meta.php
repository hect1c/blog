<?php
if(!function_exists('mb_entry_meta')) :
    function mb_entry_meta() {
        $category_list = get_the_category_list(', ');
        echo '<div class="entry-cat"><em>'.$category_list.'</em></div>';
    }
endif;

if(!function_exists('mb_comments_entry_meta')):
    function mb_comments_entry_meta() {
        ob_start();
        comments_popup_link(__( 'No Comments', 'mb' ),
                            __( '1 Comment', 'mb' ),
                            __( '% Comments', 'mb' ), 'comments-link', '' );
        echo ob_get_clean();
    }
endif;

if(!function_exists('mb_cat_entry_meta')) :
    function mb_cat_entry_meta() {
        echo '<div class="entry-byline-date">
                <time>' .get_the_date().'</time>
            </div>';
    }
endif;

if(!function_exists('mb_entry_date_auth')):
    function mb_entry_date_auth(){
        ob_start();
        the_author_posts_link();
        echo '<div class="entry-date-auth">
            <time class="updated" datetime="'. get_the_time('c') .'">'. sprintf(__('%s', 'mb'), get_the_date()) .'</time>'.__( ' By ', 'responsive-brix' ) . ob_get_clean()
            .'</div>';
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
