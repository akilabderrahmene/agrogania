<?php 
$archive_year  = get_the_time('Y'); 
$archive_month = get_the_time('m'); 
$archive_day   = get_the_time('d'); 

$related_posts = agriculture_farm_related_posts();

if(get_theme_mod('agriculture_farm_show_related_post',true)==1){ ?>
<?php if ( $related_posts->have_posts() ): ?>
    <div class="related-posts">
        <?php if ( get_theme_mod('agriculture_farm_related_post_title','Related Posts') != '' ) {?>
            <h3 class="mb-3"><?php echo esc_html( get_theme_mod('agriculture_farm_related_post_title',__('Related Posts','agriculture-farm')) ); ?></h3>
        <?php }?>
        <div class="row">
            <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6 related-content">
                    <div class="related-box mb-3 p-2">
                        <?php if( get_theme_mod( 'agriculture_farm_show_featured_image_related_post',true) != '') { ?>
                            <?php if(has_post_thumbnail()) { ?>
                                <div class="box-image mb-3">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php }?>
                        <?php }?>
                        <h4 class="p-0 text-uppercase my-2"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h4>
                        <div class="metabox mt-3">
                            <span class="entry-date me-2"><i class="fa fa-calendar me-2"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
                        </div>
                        <div class="entry-content"><p class="my-3"><?php $agriculture_farm_excerpt = get_the_excerpt(); echo esc_html( agriculture_farm_string_limit_words( $agriculture_farm_excerpt, esc_attr(get_theme_mod('agriculture_farm_related_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('agriculture_farm_post_suffix_option','...') ); ?></p></div>
                        <?php if( get_theme_mod('agriculture_farm_button_text','Read More') != ''){ ?>
                            <div class="read-more-btn my-3">
                                <a href="<?php the_permalink(); ?>" class="py-3 px-4"><?php echo esc_html(get_theme_mod('agriculture_farm_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('agriculture_farm_button_text','Read More'));?></span></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); }?>