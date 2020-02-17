<?php
/**
 * @package understrap
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- .entry-header -->

    
    <div class="row">
        <div class="blog-left col-md-4">
        <header class="entry-header">
        <?php
            if($post->post_excerpt):
            echo '<p class="lead">'.$post->post_excerpt.'</p>';
            endif; ?>

    </header>

            <?php get_meta_author(); ?>




            <div class="d-flex flex-row">
                <div class="entry-meta text-muted">
                    <?php
			get_meta_date();
             ?>
                </div>
            </div>
            
            <div class="d-flex flex-row">
<?php get_meta_category(); ?>
<?php get_meta_devolved(); ?>
<?php get_meta_policyarea(); ?>
</div>



            <!-- .entry-meta -->

            <div class="d-flex flex-row">
                <?php get_template_part( 'partials/buttons', 'share' ); ?>
            </div>


            <?php get_sidebar(); ?>

        </div>
        <div class="col-md-8  entry-content">
        <?php if ( has_post_thumbnail() ) { ?>
    <figure class="entry-image">
        <div class="duotone duotone-purple">
            <?php echo get_the_post_thumbnail( $post->ID, '16by9', array( 'class' => 'img-max' ) ); ?>
        </div>
        <figcaption>
            <?php echo get_post(get_post_thumbnail_id())->post_excerpt;?>
        </figcaption>
    </figure>
    <?php };
             $toc_class = (get_field('show_toc') ? 'col-md-8' : '');?>
            <?php the_content();?>
            <?php get_template_part('partials/cta', 'box') ;?>
            <?php get_template_part('partials/show', 'toc') ;?>
            <?php /*
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			) ); */ 
		?>
            <!-- .entry-content -->
            <!-- .entry-footer -->
        </div>
    </div>
</article>
<!-- #post-## -->