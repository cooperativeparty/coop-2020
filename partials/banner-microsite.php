<?php
$queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy; $term_id = $queried_object->term_id; $term = get_queried_object();
if(get_field('show_banner', $queried_object) && get_field('show_banner', $queried_object) == true ) : 
$image = wp_get_attachment_image_src(get_field('banner_image', $queried_object), 'hidef'); ?>
    <header id="banner" class="banner bg-primary">
        <div class="duotone duotone-purple"><img class="banner-bg-img" src="<?php echo $image[0]; ?>" /></div>
        <div class="container banner-overlay">
            <div class="row">
                <div class="col">
                    <?php if(get_field('banner_headline', $queried_object)) { echo '<h2 class="display-3 page-title">' . get_field('banner_headline', $queried_object) . '</h2>'; }
                    else {
                        echo '<h2 class="entry-title balance-text">' . get_the_archive_title() . '</h2>';
                    }
                    ?>
                        <div class="lead">
                            <?php if(get_field('banner_content')) { echo get_field('banner_content', $queried_object); 
                                                                  } else {
                            echo '<p class="lead">'. term_description() . '</p>';
} ?>
                        </div>
                </div>
                <div class="float-right hidden-sm-down">
                    <?php /* get_template_part( 'partials/buttons', 'share' ); */ ?>
                </div>
            </div>
        </div>
    </header>
    <?php else: ?>
        <header class="jumbotron jumbotron-fluid bg-primary text-white">
            <div class="container">
                <?php echo '<h2 class="page-title display-3 balance-text">' . $term->name . '</h2>';
      the_archive_description( '<div class="lead affix-hide">', '</div>' );?> </div>
            <div class="pull-right">
                <?php get_template_part( 'partials/buttons', 'archive' ); ?>
            </div>
        </header>
        <?php endif; ?>