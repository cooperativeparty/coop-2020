<div class="login-form">
    <?php if(is_user_logged_in()) :
            $current_user = wp_get_current_user(); ?>
        <div class="btn-group"><a class="btn" href="<?php echo get_page_link('4252'); ?>"><i class="fa fa-phone fa-fw"></i> Support</a> <a href="<?php if (function_exists('bp_loggedin_user_domain')) { echo bp_loggedin_user_domain();} ?>" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="d-none d-md-inline fa fa-lock fa-fw" aria-hidden="true"></i> <span class="d-none d-md-inline">Hi <?php echo $current_user->display_name ?></span></a>
            <div class="dropdown-menu dropdown-menu-right">
                <h6 class="dropdown-header">Members</h6>
                <?php bootstrap_dropdowns('logged-in-user'); ?>
                    <h6 class="dropdown-header">Officers</h6>
                    <?php bootstrap_dropdowns('logged-in-officer'); ?>
                        <div class="dropdown-divider"></div>
                        <div class="p-2"> <a href="<?php echo wp_logout_url( home_url() ); ?>" class="btn btn-logout"> Logout</a></div>
            </div>
        </div>
        <?php else :?>
            <div class="btn-group pull-right mr-2 mr-sm-0"> <a class="btn mr-1 d-none d-md-inline" href="<?php echo get_page_link('4252');?>"><i class="fa fa-phone fa-fw"></i><span class="d-none d-lg-inline">Contact us</span></a> <a class="btn mr-2 d-none d-md-inline" href="<?php echo get_page_link('11217');?>"><i class="fa fa-plus fa-fw"></i> Join <span class="d-none d-lg-inline">the Party</span></a> <a href="#" id="login-button" class="btn btn-login" data-toggle="modal" data-target="#login-form"><i class="fa fa-user fa-fw "></i><span class="d-none d-lg-inline"> Sign in</span></a> </div>
            <div class="modal fade" id="login-form" tabindex="-1" role="dialog" aria-labelledby="login-button" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-purple text-white">
                            <h5 class="modal-title" id="exampleModalLabel">Member &amp; Officer Log in</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <form action="<?php bloginfo( 'url' ); ?>/wp-login.php" method="post" name="loginform">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="sr-only" for="login-username">Username:</label>
                                    <input type="text" class="login-username form-control" name="log" placeholder="Username" /> </div>
                                <div class="form-group">
                                    <label class="sr-only" for="login-password">Password:</label>
                                    <input type="password" class="login-password form-control" name="pwd" placeholder="Password" /> </div>
                                <div class="form-check small">
                                    <label for="rememberme" class="form-check-label">
                                        <input name="rememberme" id="rememberme" type="checkbox" class="form-check-input" checked="checked" value="forever"> Remember me </label>
                                </div>
                            </div>
                            <div class="modal-footer"><a class="btn" href="<?php echo wp_lostpassword_url( get_permalink() ); ?>" title="Lost Password">Lost Password</a> <a href="<?php bloginfo( 'url' ); ?>/officers/register" class="btn btn-default btn-secondary">Register</a>
                                <button type="submit" name="wp-submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php endif;?>
</div>