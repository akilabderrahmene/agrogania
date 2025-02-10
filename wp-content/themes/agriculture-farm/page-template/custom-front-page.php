<?php
/**
 * Template Name: Custom home
 */

get_header(); ?>

<main role="main" id="maincontent">
  <?php do_action( 'agriculture_farm_above_slider' ); ?>

  <?php if( get_theme_mod( 'agriculture_farm_slider_hide', true) != '' || get_theme_mod( 'agriculture_farm_responsive_slider', true) != '') { ?>
    <section id="slider" class="mw-100 m-auto p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('agriculture_farm_slider_speed_option', 3000)); ?>"> 
        <?php $agriculture_farm_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'agriculture_farm_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $agriculture_farm_slider_pages[] = $mod;
            }
          }
          if( !empty($agriculture_farm_slider_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $agriculture_farm_slider_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/theme-block-pattern/images/banner.png" alt="" />
              <?php } ?>
              <div class="carousel-caption">
                <?php if( get_theme_mod('agriculture_farm_slider_small_title') != '' ){ ?>
                  <div class="mb-1">
                    <span class="slider-badge mb-1"><?php echo esc_html(get_theme_mod('agriculture_farm_slider_small_title',''));?></span>
                  </div>
                <?php }?>
                <?php if( get_theme_mod('agriculture_farm_slider_title_Show_hide',true) != ''){ ?>
                  <h1 class="m-0"><?php the_title(); ?></h1>
                <?php } ?>
                <?php if( get_theme_mod('agriculture_farm_slider_content_Show_hide',true) != ''){ ?>
                  <p class="py-2"><?php $agriculture_farm_excerpt = get_the_excerpt(); echo esc_html( agriculture_farm_string_limit_words( $agriculture_farm_excerpt, esc_attr(get_theme_mod('agriculture_farm_slider_excerpt_length','20')))); ?></p>
                <?php } ?>
                <?php if( get_theme_mod('agriculture_farm_slider_button_show_hide',true) != ''){ ?>
                <?php if( get_theme_mod('agriculture_farm_slider_button','Discover') != '' || get_theme_mod('agriculture_farm_slider_button_url') != ''){ ?>
                  <div class="read-btn mt-4">
                    <a href="<?php echo esc_url(get_theme_mod('agriculture_farm_slider_button_url')!= '') ? esc_url(get_theme_mod('agriculture_farm_slider_button_url')) : esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('agriculture_farm_slider_button','Discover'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('agriculture_farm_slider_button','Discover'));?></span></a>
                  </div>
                <?php } ?>
                <?php }?>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <div class="slider-nex-pre">
          <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
            <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-long-arrow-alt-left"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous','agriculture-farm' );?></span>
          </a>
          <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
            <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-long-arrow-alt-right"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Next','agriculture-farm' );?></span>
          </a>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php } ?>

  <?php do_action( 'agriculture_farm_below_slider' ); ?>

  <?php if( get_theme_mod( 'agriculture_farm_services_title') || get_theme_mod( 'agriculture_farm_services_text') || get_theme_mod( 'agriculture_farm_cate_tab')) { ?>
    <section id="services" class="py-5 text-center">
      <div class="container">
        <div class="services_title">
          <?php if(get_theme_mod('agriculture_farm_services_title') != ''){?>
            <h3><?php echo esc_html(get_theme_mod('agriculture_farm_services_title')); ?></h3>
          <?php } ?>
           <?php if(get_theme_mod('agriculture_farm_services_text') != ''){?>
            <p><?php echo esc_html(get_theme_mod('agriculture_farm_services_text')); ?></p>
          <?php } ?>
        </div>
        <div class="row mt-5">
          <?php
          $agriculture_farm_cat_tab = get_theme_mod('agriculture_farm_cate_tab');
          if($agriculture_farm_cat_tab){
          $loop = new WP_Query(
            array( 
              'posts_per_page' => get_theme_mod('agriculture_farm_tab_category_limit'),
              'category_name' => esc_html( $agriculture_farm_cat_tab ,'agriculture-farm')
            )
          );
          while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="box mb-4">
              <?php if(has_post_thumbnail()){?>
                <div class="box-image mb-3">
                  <?php the_post_thumbnail(); ?>
                </div>
              <?php }?>
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <hr>
              <p><?php $agriculture_farm_excerpt = get_the_excerpt(); echo esc_html(agriculture_farm_string_limit_words($agriculture_farm_excerpt,20)); ?></p>
              <a href="<?php the_permalink() ?>"><?php esc_html_e('Read More','agriculture-farm'); ?></a>
            </div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_query(); } ?>
        </div>
      </div>
    </section>
  <?php }?>

  <div id="content">
    <div class="container entry-content">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>