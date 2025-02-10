<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ts">
 *
 * @package Agriculture Farm
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <header role="banner">
     <!-- preloader -->
    <?php if(get_theme_mod('agriculture_farm_preloader_option',false)!= '' || get_theme_mod('agriculture_farm_responsive_preloader', false) != ''){ ?>
      <?php if(get_theme_mod('agriculture_farm_preloader_type_options', 'Preloader 1')  == 'Preloader 1') {?>
        <div id="loader-wrapper" class="w-100 h-100">
          <div id="loader" class="rounded-circle"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div>
      <?php } else if(get_theme_mod('agriculture_farm_preloader_type_options', 'Preloader 1') ==  'Preloader 2') {?>
        <div id="loader-wrapper" class="w-100 h-100">
          <div class="loader">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      <?php }?>
    <?php }?>
  <!-- preloader end -->
    <a class="screen-reader-text skip-link" href="#maincontent" ><?php esc_html_e( 'Skip to content', 'agriculture-farm' ); ?></a>    
    <div id="header">
      <div class="container">
        <div class="info-header">
          <div class="row mx-md-0">
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center">
              <div class="top-left py-2">
                <div class="row">
                  <div class="col-lg-6 col-md-6 align-slef-center">
                    <?php if( get_theme_mod('agriculture_farm_mail1') != ''){ ?>
                      <a href="mailto:<?php echo esc_attr( get_theme_mod('agriculture_farm_mail1','') ); ?>" class="info-mail"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_mail_icon','fas fa-envelope')); ?> me-2"></i><?php echo esc_html('Email:', 'agriculture-farm'); ?> <?php echo esc_html( get_theme_mod('agriculture_farm_mail1','')); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('agriculture_farm_mail1','')); ?></span></a>
                    <?php } ?>
                  </div>
                  <div class="col-lg-6 col-md-6 align-slef-center">
                    <?php if( get_theme_mod('agriculture_farm_phone1') != ''){ ?>
                      <a href="tel:<?php echo esc_attr( get_theme_mod('agriculture_farm_phone1','') ); ?>" class="info-mail"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_phone_icon','fas fa-phone')); ?> me-2"></i><?php echo esc_html('Phone:', 'agriculture-farm'); ?> <?php echo esc_html( get_theme_mod('agriculture_farm_phone1','')); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('agriculture_farm_phone1','')); ?></span></a>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div id="menu-sidebar" class="nav sidebar left-menu">
                <nav id="primary-site-navigation" class="primary-navigation ps-0 text-start" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'agriculture-farm' ); ?>">
                  <?php
                    wp_nav_menu( array( 
                      'theme_location' => 'left-menu',
                      'container_class' => 'main-menu-navigation clearfix' ,
                      'menu_class' => 'main-menu-navigation clearfix',
                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                      'fallback_cb' => 'wp_page_menu',
                    ) );
                  ?>
                </nav>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12 px-md-0 align-self-center">
              <div class="logo">
                <?php if ( has_custom_logo() ) : ?>
                  <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
                <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                  <?php if( get_theme_mod('agriculture_farm_site_title',true) != ''){ ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                      <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-start pt-0" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                      <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-start pt-0"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif; ?>
                  <?php }?>
                <?php endif; ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                  ?>
                  <?php if( get_theme_mod('agriculture_farm_tagline',false) != ''){ ?>
                    <p class="site-description mb-0">
                      <?php echo esc_html($description); ?>
                    </p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center">
              <div class="top-right">
                <div class="row py-2">
                  <div class="col-lg-11 col-md-10 col-sm-10">
                    <?php if( get_theme_mod('agriculture_farm_topbar_text') != ''){ ?>
                      <p class="topbar-text mb-0"><?php echo esc_html( get_theme_mod('agriculture_farm_topbar_text','')); ?></p>
                    <?php } ?>
                  </div>
                  <div class="col-lg-1 col-md-2 col-sm-2">
                    <?php if( class_exists('woocommerce')){ ?>
                      <a href="<?php esc_url(the_permalink((get_option('woocommerce_cart_page_id')))); ?>"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_cart_icon','fas fa-shopping-cart')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Cart Icon','agriculture-farm' );?></span></a>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-11 col-md-6 col-sm-10 col-6 align-self-center">
                  <div id="menu-sidebar" class="nav sidebar right-menu">
                    <nav id="primary-site-navigation" class="primary-navigation ps-0 text-start" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'agriculture-farm' ); ?>">
                      <?php
                        wp_nav_menu( array( 
                          'theme_location' => 'right-menu',
                          'container_class' => 'main-menu-navigation clearfix' ,
                          'menu_class' => 'main-menu-navigation clearfix',
                          'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                          'fallback_cb' => 'wp_page_menu',
                        ) );
                      ?>
                    </nav>
                  </div>
                  <div class="main-menu">
                    <div class="toggle-menu mobile-menu text-md-end">
                      <button class="mobiletoggle responsive-toggle"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_open_menu_icon','fas fa-bars')); ?> p-3 my-3 mx-0"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','agriculture-farm'); ?></span></button>
                    </div>
                    <div id="menu-sidebar" class="nav sidebar sidebar-responsive text-center">
                      <nav id="primary-site-navigation" class="primary-navigation ps-0 text-start" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'agriculture-farm' ); ?>">
                        <?php
                          wp_nav_menu( array(
                            'theme_location' => 'resp-menu',
                            'container_class' => 'main-menu-navigation responsive-menu clearfix' ,
                            'menu_class' => 'clearfix',
                            'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                            'fallback_cb' => 'wp_page_menu',
                          ) );
                        ?>
                        <a href="javascript:void(0)" class="closebtn mobile-menu"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_close_menu_icon','far fa-times-circle')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','agriculture-farm'); ?></span></a>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-2 col-6 align-self-center">
                  <div class="search-box my-md-2 mx-0 align-self-center">
                    <button type="button" class="search-open"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_search_icon','fas fa-search')); ?> p-3 p-lg-0"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="search-outer">
          <div class="serach_inner w-100 h-100">
            <?php get_search_form(); ?>
          </div>
          <button type="button" class="search-close">X</span></button>
        </div>
      </div>      
    </div>
  </header>