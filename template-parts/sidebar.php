<?php
/**
 * Sidebar template part.
 *
 * @package CassetteBrutalGrid
 */
?>
<aside id="sidebar" class="sidebar">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php endif; ?>
</aside>
