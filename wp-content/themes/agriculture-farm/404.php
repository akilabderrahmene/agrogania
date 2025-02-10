<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Agriculture Farm
 */

get_header(); ?>

<main role="main" id="maincontent" class="content-ts">
	<div class="container">
        <div class="py-5">
			<h1><?php echo esc_html(get_theme_mod('agriculture_farm_title_404_page',__('404 Not Found','agriculture-farm')));?></h1>
			<p class="text-404"><?php echo esc_html(get_theme_mod('agriculture_farm_content_404_page',__('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','agriculture-farm')));?></p>
			<?php if( get_theme_mod('agriculture_farm_button_404_page','Back to Home Page') != ''){ ?>
				<div class="read-moresec my-4">
	        		<a href="<?php echo esc_url(home_url()); ?>" class="p-3"><?php echo esc_html(get_theme_mod('agriculture_farm_button_404_page',__('Back to Home Page','agriculture-farm')));?><span class="screen-reader-text"><?php esc_html_e( 'Back to Home Page', 'agriculture-farm' ); ?></span></a>
	        	</div>
        	<?php } ?>
			<div class="clearfix"></div>
        </div>
	</div>
</main>

<?php get_footer(); ?>