<?php if(get_field('contact_person_internal_id') || get_field('contact_person_external')): ?>
    <div class="card mb-3">
        <div class="card-header">
            <h5>For more information</h5></div>
        <?php if( get_field('contact_person_description') ): ?>
            <div class="card-body">
                <p class="card-text">
                    <?php the_field('contact_person_description');?>
                </p>
            </div>
            <?php endif;?>
                <?php if(get_field('contact_person_external')){ ?>
                    <a class="btn btn-danger ml-auto" href="mailto:<?php echo get_field('contact_person_external_email');?>"> <i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i>
                        <?php echo get_field('contact_person_external_name');?>
                    </a>
                    <?php  } else{
            $contact_id = get_field('contact_person_internal_id');
            ?>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item"> <strong><?php echo get_the_title($contact_id) ;?></strong>
                                <p class="small mb-0">
                                    <?php echo get_the_excerpt($contact_id);?>
                                </p>
                            </div>
                            <?php if( get_field('email') ): ?> <a class="list-group-item small" href="mailto:<?php echo get_field('email',$contact_id) ;?>"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i><?php echo get_field('email',$contact_id) ;?></a>
                                <?php endif;
    if( get_field('phone_number') ): ?> <a class="list-group-item small" href="tel:<?php echo get_field('phone_number',$contact_id) ;?>"><i class="fa fa-phone fa-fw" aria-hidden="true"></i><?php echo get_field('phone_number',$contact_id) ;?></a>
                                    <?php endif;?>
                        </div>
                        <?php };?>
    </div>
    <?php endif;?>