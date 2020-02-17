<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1657544437824326');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1657544437824326&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="hfeed site" id="page">
            <!-- ******************* The Navbar Area ******************* -->
            <header id="wrapper-head" class="position-relative" itemscope itemtype="http://schema.org/WebSite">
                <div class="container-semi-fluid">
                    <a class="skip-link sr-only" href="#content">
                        <?php esc_html_e( 'Skip to content', 'understrap' ); ?>
                    </a>
                    <!-- end custom logo -->
                    <?php  get_template_part( 'partials/login', 'form' );?>
                        <nav class="nav-primary">
                            <div class="top-row">
                                <h1 class="navbar-brand"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
                                    <?php 
                                $queried_object = get_queried_object();
                                $custom_logo = get_field('microsite_logo', $queried_object);
                                if($custom_logo) {
                                    echo '<img src="'.  $custom_logo['url'] .'" alt="Logo" class="img-max my-3 hidden-lg-down"/>';
                                } else {
    get_template_part( 'partials/dyn', 'logo' );
                                } ?>                                   
                                    
                                    </a></h1>
                                <?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container' => false,
						'menu_class'      => 'navbar-nav',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new coopparty_WP_Bootstrap_Navwalker(),
					)
				); ?>
                                    <button class="btn" data-toggle="collapse" data-target="#hiddenlinks" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> More</button>
                            </div>
                            <div class="collapse bottom-row" id="hiddenlinks">
                                <ul class='hidden-links hidden'></ul>
                            </div>
                        </nav>
                        <!-- .site-navigation -->
                </div>
                <!-- .container -->
            </header>
            <!-- #wrapper-navbar end -->