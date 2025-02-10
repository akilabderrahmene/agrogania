<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Agriculture Farm
 */
?>

<footer role="contentinfo">
  <?php if (get_theme_mod('agriculture_farm_show_hide_footer', true)){ ?>
    <?php //Set widget areas classes based on user choice
      $agriculture_farm_widget_areas = get_theme_mod('agriculture_farm_footer_widget_areas', '4');
      if ($agriculture_farm_widget_areas == '3') {
        $agriculture_farm_cols = 'col-lg-4 col-md-4';
      } elseif ($agriculture_farm_widget_areas == '4') {
        $agriculture_farm_cols = 'col-lg-3 col-md-3';
      } elseif ($agriculture_farm_widget_areas == '2') {
        $agriculture_farm_cols = 'col-lg-6 col-md-6';
      } else {
        $agriculture_farm_cols = 'col-lg-12 col-md-12';
      }
    ?>
    <div id="footer" class="copyright-wrapper">
      <div class="container">
        <div class="row">
          <!-- Footer Column 1 -->
          <div class="sidebar-column <?php echo esc_attr($agriculture_farm_cols); ?>">
            <?php if (is_active_sidebar('footer-1')) : ?>
              <?php dynamic_sidebar('footer-1'); ?>
            <?php else : ?>
              <aside id="calendar" role="complementary" aria-label="firstsidebar" class="widget">
                <h3 class="widget-title"><?php esc_html_e('Calendar', 'agriculture-farm'); ?></h3>
                <?php get_calendar(); ?>
              </aside>
            <?php endif; ?>
          </div>

            <!-- Footer Column 2 -->
            <div class="sidebar-column <?php echo esc_attr($agriculture_farm_cols); ?>">
              <?php if (is_active_sidebar('footer-2')) : ?>
                <?php dynamic_sidebar('footer-2'); ?>
              <?php else : ?>
                <aside id="categories" role="complementary" aria-label="secondsidebar" class="widget">
                  <h3 class="widget-title"><?php esc_html_e('Categories', 'agriculture-farm'); ?></h3>
                  <ul>
                    <?php wp_list_categories(array('title_li' => '')); ?>
                  </ul>
                </aside>
              <?php endif; ?>
            </div>

            <!-- Footer Column 3 -->
            <div class="sidebar-column <?php echo esc_attr($agriculture_farm_cols); ?>">
              <?php if (is_active_sidebar('footer-3')) : ?>
                <?php dynamic_sidebar('footer-3'); ?>
              <?php else : ?>
                <aside id="search" role="complementary" aria-label="thirdsidebar" class="widget">
                  <h3 class="widget-title"><?php esc_html_e('Search', 'agriculture-farm'); ?></h3>
                  <?php get_search_form(); ?>
                </aside>
              <?php endif; ?>
            </div>

            <!-- Footer Column 4 -->
            <div class="sidebar-column <?php echo esc_attr($agriculture_farm_cols); ?>">
              <?php if (is_active_sidebar('footer-4')) : ?>
                <?php dynamic_sidebar('footer-4'); ?>
              <?php else : ?>
                <aside id="meta" role="complementary" aria-label="fourthsidebar" class="widget">
                  <h3 class="widget-title"><?php esc_html_e('Meta', 'agriculture-farm'); ?></h3>
                  <ul>
                    <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                  </ul>
                </aside>
              <?php endif; ?>
            </div>
        </div>
      </div>
    </div>
  <?php }?>
  <?php if (get_theme_mod('agriculture_farm_show_hide_copyright', true)) {?>    
      <div class="copyright p-3 text-center">
        <div class="container">
          <p class="mb-0"><?php agriculture_farm_credit();?> <?php echo esc_html(get_theme_mod('agriculture_farm_footer_copy', __('By Themeshopy', 'agriculture-farm')));?></p>
        </div>
      </div>    
  <?php }?>
</footer>
<?php if( get_theme_mod( 'agriculture_farm_enable_disable_scroll',true) != '' || get_theme_mod( 'agriculture_farm_responsive_scroll',true) != '') { ?>
  <?php $agriculture_farm_theme_lay = get_theme_mod( 'agriculture_farm_scroll_setting','Right');
    if($agriculture_farm_theme_lay == 'Left'){ ?>
      <button id="scroll-top" class="left-align" title="<?php esc_attr_e('Scroll to Top','agriculture-farm'); ?>"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_back_to_top_icon','fas fa-chevron-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'agriculture-farm'); ?></span></button>
    <?php }else if($agriculture_farm_theme_lay == 'Center'){ ?>
      <button id="scroll-top" class="center-align" title="<?php esc_attr_e('Scroll to Top','agriculture-farm'); ?>"><i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_back_to_top_icon','fas fa-chevron-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'agriculture-farm'); ?></span></button>
    <?php }else{ ?>
      <button id="scroll-top" title="<?php esc_attr_e('Scroll to Top','agriculture-farm'); ?>">
      <i class="<?php echo esc_attr(get_theme_mod('agriculture_farm_back_to_top_icon','fas fa-chevron-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'agriculture-farm'); ?></span></button>
  <?php }?>
<?php }?>

<?php wp_footer();?>
</body>
</html>