<div class="share-buttons">
    <div class="btn-group" role="group" aria-label="Basic example"> <a class="btn btn-lg btn-outline-primary" href="<?php echo esc_url( tribe_get_events_link() ); ?>">
                        <?php printf( '<i class="fa fa-chevron-left"></i> ' . esc_html_x( 'All %s', '%s Events plural label', 'the-events-calendar' ), $events_label_plural ); ?>
                    </a><a href="<?php echo tribe_get_single_ical_link ();?>" class="btn btn-lg btn-outline-primary"><i class="fa fa-rss"></i> iCal</a></div>
</div>