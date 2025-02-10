<?php
/**
 * The template part for displaying post 
 *
 * @package Agriculture Farm
 * @subpackage agriculture-farm
 * @since agriculture-farm 1.0
 */
?>  
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>

<article class="row page-box p-4 mb-4">
    <?php if(has_post_thumbnail() && get_theme_mod( 'agriculture_farm_show_featured_image_post',true) != '') { ?>
      <div class="box-img post-thumb col-lg-5 col-md-5">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php } ?>
  <div class="new-text <?php if(has_post_thumbnail() && get_theme_mod( 'agriculture_farm_show_featured_image_post',true) != '') { ?>col-lg-7 col-md-7<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
    <div class="metabox mb-2">
      <?php if( get_theme_mod( 'agriculture_farm_date_hide',true) != '') { ?>
        <span class="entry-date me-2"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_date_icon','fa fa-calendar')); ?> me-2"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html( get_theme_mod('agriculture_farm_metabox_separator_blog_post','|') ); ?></span>
      <?php } ?>
      <?php if( get_theme_mod( 'agriculture_farm_author_hide',true) != '') { ?>
        <span class="entry-author mx-2"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_author_icon','fa fa-user')); ?> me-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html( get_theme_mod('agriculture_farm_metabox_separator_blog_post','|') ); ?></span>
      <?php } ?>
      <?php if( get_theme_mod( 'agriculture_farm_comment_hide',true) != '') { ?>
        <span class="entry-comments mx-2"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_comment_icon','fas fa-comments')); ?> me-2"></i><?php comments_number( __('0 Comments','agriculture-farm'), __('0 Comments','agriculture-farm'), __('% Comments','agriculture-farm') ); ?></span><span><?php echo esc_html( get_theme_mod('agriculture_farm_metabox_separator_blog_post','|') ); ?></span>
      <?php } ?>
      <?php if( get_theme_mod( 'agriculture_farm_time_hide',true) != '') { ?>
        <span class="entry-time mx-2"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_time_icon','fas fa-clock')); ?> me-1"></i><?php echo esc_html( get_the_time() ); ?></span>
      <?php }?>
    </div>
    <h2 class="my-4 p-0"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>" class="text-uppercase"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
    <?php if(get_theme_mod('agriculture_farm_blog_post_description_option') == 'Full Content'){ ?>
      <div class="entry-content"><?php the_content();?></div>
    <?php }
    if(get_theme_mod('agriculture_farm_blog_post_description_option', 'Excerpt Content') == 'Excerpt Content'){ ?>
      <?php if(get_the_excerpt()) { ?>
        <div class="entry-content"><p class="my-3 mx-0"><?php $agriculture_farm_excerpt = get_the_excerpt(); echo esc_html( agriculture_farm_string_limit_words( $agriculture_farm_excerpt, esc_attr(get_theme_mod('agriculture_farm_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('agriculture_farm_post_suffix_option','...') ); ?></p></div>
      <?php }?>
    <?php }?>
    <?php if( get_theme_mod('agriculture_farm_button_text','Read More') != ''){ ?>
      <div class="read-more-btn my-3 mx-0">
        <a href="<?php the_permalink(); ?>" class="py-3 px-4"><?php echo esc_html(get_theme_mod('agriculture_farm_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('agriculture_farm_button_text','Read More'));?></span></a>
      </div>
    <?php } ?>
  </div>
  <div class="clearfix"></div>
</article>
