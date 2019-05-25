<?php

function sc2coop_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'sc2coop_post_thumbnails' );

?>