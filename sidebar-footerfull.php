<?php
/**
 * Sidebar setup for footer full.
 *
 * @package understrap
 */
?>
    <?php if ( is_active_sidebar( 'footerfull' ) ) : ?>
        <!-- ******************* The Footer Full-width Widget Area ******************* -->
        <footer class="footer-main" id="wrapper-footer-full">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar( 'footerfull' ); ?>
                </div>
            </div>
        </footer>
        <!-- #wrapper-footer-full -->
        <?php endif; ?>