<?php

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
    return;
}

?>

<aside id="images-grid" class="widget-area images-grid" role="complementary">
    <?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside><!-- #secondary -->
