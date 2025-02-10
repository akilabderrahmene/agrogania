<?php
/**
 * The template part for displaying single post
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
<article class="page-box-single p-3">
  <div class="new-text">
    <h1><?php the_title(); ?></h1>
    <?php if( get_theme_mod( 'agriculture_farm_show_featured_image_single_post',true) != '') { ?>
      <div class="box-img">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php } ?>
    <div class="metabox my-3 mx-0 text-start">
      <?php if( get_theme_mod( 'agriculture_farm_single_post_date_hide',true) != '') { ?>
        <span class="entry-date me-2"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_single_post_date_icon','fa fa-calendar')); ?> me-2"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span class="me-1"><?php echo esc_html( get_theme_mod('agriculture_farm_single_post_meta_seperator','|') ); ?></span>
      <?php } ?>
      <?php if( get_theme_mod( 'agriculture_farm_single_post_author_hide',true) != '') { ?>
        <span class="entry-author me-2"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_single_post_author_icon','fa fa-user')); ?> me-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span class="me-1"><?php echo esc_html( get_theme_mod('agriculture_farm_single_post_meta_seperator','|') ); ?></span>
      <?php } ?>
      <?php if( get_theme_mod( 'agriculture_farm_single_post_comment_hide',true) != '') { ?>
        <span class="entry-comments me-2"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_single_post_comment_icon','fas fa-comments')); ?> me-2"></i><?php comments_number( __('0 Comments','agriculture-farm'), __('0 Comments','agriculture-farm'), __('% Comments','agriculture-farm') ); ?></span><span class="me-1"><?php echo esc_html( get_theme_mod('agriculture_farm_single_post_meta_seperator','|') ); ?></span>
      <?php } ?>
      <?php if( get_theme_mod( 'agriculture_farm_single_post_time_hide',true) != '') { ?>
        <span class="entry-time me-2"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_single_post_time_icon','fas fa-clock')); ?> me-1"></i> <?php echo esc_html( get_the_time() ); ?></span><span class="me-1"><?php echo esc_html( get_theme_mod('agriculture_farm_single_post_meta_seperator','|') ); ?></span>
      <?php }?>
      <?php echo esc_html (agriculture_farm_edit_link()); ?>
    </div>
    <?php if( get_theme_mod('agriculture_farm_category_show_hide',true) != ''){ ?>
      <div class="category-sec">
        <span class="category"><?php esc_html_e('Categories:','agriculture-farm'); ?></span>
        <?php the_category(); ?>
      </div>
    <?php } ?>
    <div class="entry-content">
      <div class="entry-content"><?php the_content();?></div>
    </div>
    <?php if( get_theme_mod( 'agriculture_farm_tags_hide',true) != '') { ?>
      <div class="tags"><p class="text-start"><?php
        if( $tags = get_the_tags() ) {
          echo '<i class="fas fa-tags"></i>';
          echo '<span class="meta-sep"></span>';
          foreach( $tags as $content_tag ) {
            $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
            echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '">' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
          }
        } ?></p>
      </div>
    <?php } ?>

    <?php if( get_theme_mod( 'agriculture_farm_show_single_post_pagination',true) != '') { ?>
      <?php
      the_post_navigation( array(
        'next_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __( 'Next <i class="far fa-long-arrow-alt-right"></i> ', 'agriculture-farm' ) . '</span> ' .
          '<span class="screen-reader-text">' . __( 'Next post:', 'agriculture-farm' ) . '</span> ',
        'prev_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __( '<i class="far fa-long-arrow-alt-left"></i> Previous', 'agriculture-farm' ) . '</span> ' .
          '<span class="screen-reader-text">' . __( 'Previous post:', 'agriculture-farm' ) . '</span> ',
      ) );
      echo '<div class="clearfix"></div>';?>
    <?php } ?>  
  </div>

  <?php if( get_theme_mod( 'agriculture_farm_post_comment',true) != '') { 
    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) {
      comments_template();}
  }?>

  <?php get_template_part('template-parts/related-posts'); ?>
</article>
