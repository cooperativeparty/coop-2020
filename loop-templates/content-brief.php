<?php
/**
 * @package understrap
 */
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row">
            <!-- .entry-header -->
            <header class="entry-header col pb-2">
                <?php 
                $icon = get_field('title_fa_icon');
                the_title( '<h2 class="entry-title display-4"> <div class="briefing-type"><i class="fa ' . $icon . '"></i>  Briefing:</div><span class="balance-text">', '</span></h2>' ); ?>
                    <div class="d-flex flex-column flex-md-row">
                        <dl class="briefing-meta"> <dt>From:</dt>
                            <dd>
                                <?php 	the_author(); ?>
                            </dd> <dt>For attention of:</dt>
                            <dd>
                                <?php the_terms( $post->ID, 'audience', '', ', ' ); ?>
                            </dd> <dt>Published:</dt>
                            <dd>
                                <?php the_date();?>
                            </dd> <dt>Last updated:</dt>
                            <dd>
                                <?php the_modified_date(); ?>
                            </dd>
                            <?php if( has_term( 'parliamentarians', 'audience' ) ): ?> <dt class="col-4">Business Type:</dt>
                                <dd>
                                    <?php the_terms( $post->ID, 'intervention', '', ', ' ); ?>
                                </dd>
                                <?php if( get_field('prepared_for') ): ?> <dt class="col-4">Prepared for:</dt>
                                    <dd>
                                        <?php echo get_field('prepared_for');?>
                                    </dd>
                                    <?php endif;?>
                                        <?php endif;?> <dt class="d-none d-print-block">Printed:</dt>
                                            <dd class="d-none d-print-block">
                                                <?php echo date(get_option('date_format')); ?>
                                            </dd> <dt class="hidden-print">Other formats:</dt>
                                            <dd class="d-print-none"><a class="pl-2" href="javascript:window.print()"><i class="fa fa-print" aria-hidden="true"></i> Print</a> </dd>
                        </dl>
                        <!-- .entry-meta -->
                    </div>
                    <hr/>
                    <?php
            if($post->post_excerpt):
            echo '<p class="lead">'.$post->post_excerpt.'</p>';
            endif;
            ?>
            </header>
        </div>
        <div class="row">
            <div class="entry-content col-12 col-md-7">
                <?php the_content();?>
                    <?php
                global $post;
                if ( !has_shortcode( $post->post_content, 'display-accordion' ) ) {  
                get_template_part( 'partials/acf', 'accordion' );
                };
                ?>
            </div>
            <div class="entry-ancillary col-md-5 col-lg-4 mx-auto">
                <?php get_template_part( 'partials/action', 'points' );?>
                    <?php get_template_part( 'partials/contact', 'person' );?>
                        <?php get_template_part( 'partials/attached', 'resources' );?>
                            <?php if(get_field('show_toc')):?>
                                <?php echo '<div class="toc-container"><h3 class="toc-title">'.get_the_title().'</h3><ul class="toc-body">' . toc_get_index(get_the_content()) . '</ul></div></h3>';?>
                                    <?php endif;?>
            </div>
            <?php /*
			wp_link_pages( array(
				'before' => '<div class="page-links ">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			) ); */ 
		?>
                <div class="fb-quote "></div>
                <!-- .entry-content -->
                <!-- .entry-footer -->
        </div>
    </article>
    <!-- #post-## -->