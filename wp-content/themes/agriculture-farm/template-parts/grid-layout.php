<?php
/**
 * The template part for displaying grid post
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
<div class="col-lg-4 col-md-4">
  <article class="page-box p-3 my-3">
    <?php if( get_theme_mod( 'agriculture_farm_show_featured_image_post',true) != '') { ?>
      <div class="box-img mb-3">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php } ?>
      <div class="metabox">
        <?php if( get_theme_mod( 'agriculture_farm_grid_post_date',true) != '') { ?>
          <span class="entry-date me-2"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_grid_post_date_icon','fa fa-calendar')); ?> me-2"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html( get_theme_mod('agriculture_farm_metabox_separator_grid_post','|') ); ?></span>
        <?php } ?>
        <?php if( get_theme_mod( 'agriculture_farm_grid_post_author',true) != '') { ?>
          <span class="entry-author mx-2"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_grid_post_author_icon','fa fa-user')); ?> me-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html( get_theme_mod('agriculture_farm_metabox_separator_grid_post','|') ); ?></span>
        <?php } ?>
        <?php if( get_theme_mod( 'agriculture_farm_grid_post_comment',true) != '') { ?>
          <span class="entry-comments mx-2"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_grid_post_comment_icon','fas fa-comments')); ?> me-2"></i><?php comments_number( __('0 Comments','agriculture-farm'), __('0 Comments','agriculture-farm'), __('% Comments','agriculture-farm') ); ?></span><span><?php echo esc_html( get_theme_mod('agriculture_farm_metabox_separator_grid_post','|') ); ?></span>
        <?php } ?>
        <?php if( get_theme_mod( 'agriculture_farm_grid_post_time',true) != '') { ?>
          <span class="entry-time mx-2"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_grid_post_time_icon','fas fa-clock')); ?> me-1"></i><?php echo esc_html( get_the_time() ); ?></span>
        <?php }?>
      </div>
    <div class="new-text">
      <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <div class="entry-content"><p class="mt-3"><?php $agriculture_farm_excerpt = get_the_excerpt(); echo esc_html( agriculture_farm_string_limit_words( $agriculture_farm_excerpt, esc_attr(get_theme_mod('agriculture_farm_grid_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('agriculture_farm_post_suffix_option','...') ); ?></p></div>
      <?php if( get_theme_mod('agriculture_farm_button_text','Read More') != ''){ ?>
        <div class="read-more-btn mt-3">
          <a href="<?php the_permalink(); ?>" class="py-3 px-4"><?php echo esc_html(get_theme_mod('agriculture_farm_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('agriculture_farm_button_text','Read More'));?></span></a>
        </div>
      <?php } ?>
    </div>
    <div class="clearfix"></div>
  </article>
</div>