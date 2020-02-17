<?php
$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();
 if(is_singular()):
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy; 
$term_id = $queried_object->term_id; 
$term = get_queried_object();
if(get_field('show_banner', $queried_object) && get_field('show_banner', $queried_object) == true ) : 
?>
    <header id="banner" class="banner bg-primary">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php the_title( '<h2 class="entry-title balance-text">', '</h2>' );
                ?> </div>
                <?php get_template_part( 'partials/buttons', 'event' ); ?>
            </div>
        </div>
    </header>
    <?php 
endif;
else:

?>
        <header id="banner" class="banner bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="entry-title balance-text">Events</h2></div>
                    <?php get_template_part( 'partials/buttons', 'share' ); ?>
                </div>
            </div>
        </header>
        <?php 
endif;?>