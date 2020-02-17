<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
?>
    <?php get_sidebar( 'footerfull' ); ?>
        <div class="footer-end">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <footer class="site-footer" id="colophon">
                            <p>Promoted by Joe Fortune on behalf of the Co-operative Party, both at Unit 13, 83 Crampton Street, London, SE17 3BQ, United Kingdom</p>
                            <p>Co-operative Party Limited is a registered Society under the Co-operative and Community Benefit Societies Act 2014. Registered no. 30027R </p>
                            <!-- .site-info -->
                        </footer>
                        <!-- #colophon -->
                    </div>
                    <!--col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- wrapper end -->
        </div>
        <!-- #page -->
        <?php wp_footer(); ?>
            </body>

            </html>