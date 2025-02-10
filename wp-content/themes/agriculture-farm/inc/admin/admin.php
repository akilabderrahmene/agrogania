<?php
//about theme info
add_action( 'admin_menu', 'agriculture_farm_abouttheme' );
function agriculture_farm_abouttheme() {    	
	add_theme_page( esc_html__('About Agriculture Farm Theme', 'agriculture-farm'), esc_html__('About Agriculture Farm Theme', 'agriculture-farm'), 'edit_theme_options', 'agriculture_farm_guide', 'agriculture_farm_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function agriculture_farm_admin_theme_style() {
   wp_enqueue_style('agriculture-farm-custom-admin-style', esc_url(get_template_directory_uri()) .'/inc/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'agriculture_farm_admin_theme_style');

//guidline for about theme
function agriculture_farm_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>

<div class="wrapper-info">
	<div class="header">
	 	<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/logo.png" alt="<?php the_title(); ?> post thumbnail image">
	 	<h2><?php esc_html_e('Welcome to Advance Agriculture Farm Theme', 'agriculture-farm'); ?></h2>
 		<p><?php esc_html_e('Most of our outstanding theme is elegant, responsive, multifunctional, SEO friendly has amazing features and functionalities that make them highly demanding for designers and bloggers, who ought to excel in web development domain. Our Themeshopy has got everything that an individual and group need to be successful in their venture.', 'agriculture-farm'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( AGRICULTURE_FARM_BUY_NOW ); ?>" target='_blank'><?php esc_html_e('Buy Now', 'agriculture-farm'); ?></a>
			<a href="<?php echo esc_url( AGRICULTURE_FARM_LIVE_DEMO ); ?>" target='_blank'><?php esc_html_e('Live Demo', 'agriculture-farm'); ?></a>
			<a href="<?php echo esc_url( AGRICULTURE_FARM_PRO_DOC ); ?>" target='_blank'><?php esc_html_e('Pro Documentation', 'agriculture-farm'); ?></a>
		</div>
	</div>
	<div class="button-bg">
		<button role="tab" class="tablink" onclick="openPage('Demo', this, '')"><?php esc_html_e('Demo Import', 'agriculture-farm'); ?></button>
		<button role="tab" class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'agriculture-farm'); ?></button>
		<button role="tab" class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'agriculture-farm'); ?></button>
	</div>
	<div id="Demo" class="tabcontent tab1">
		<div class="demo-info">
			<h3><?php esc_html_e( 'To import demo content, click the "Run Importer" button below.', 'agriculture-farm' ); ?></h3>
			<?php 
			/* Get Started. */ 
			require get_parent_theme_file_path( '/inc/admin/demo-import.php' );
			 ?>
		</div>
	</div>
	<div id="Home" class="tabcontent">
	  	<h3><?php esc_html_e('How to set up homepage', 'agriculture-farm'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( AGRICULTURE_FARM_FREE_DOC ); ?>" target='_blank'><?php esc_html_e('Documentation', 'agriculture-farm'); ?></a>
			<a href="<?php echo esc_url( AGRICULTURE_FARM_CONTACT ); ?>" target='_blank'><?php esc_html_e('Support', 'agriculture-farm'); ?></a>
			<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" target='_blank'><?php esc_html_e('Start Customizing', 'agriculture-farm'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'agriculture-farm'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'agriculture-farm'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'agriculture-farm'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'agriculture-farm'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/home-page-template.png" alt="<?php the_title(); ?> post thumbnail image">	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/set-front-page.png" alt="<?php the_title(); ?> post thumbnail image">	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'agriculture-farm'); ?></b> <?php esc_html_e('Set the front page: Go to Setting -> Reading --> Set the front page display static page to home page', 'agriculture-farm'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>
	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'agriculture-farm'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( AGRICULTURE_FARM_BUY_NOW ); ?>" target='_blank'><?php esc_html_e('Buy Now', 'agriculture-farm'); ?></a>
			<a href="<?php echo esc_url( AGRICULTURE_FARM_LIVE_DEMO ); ?>" target='_blank'><?php esc_html_e('Live Demo', 'agriculture-farm'); ?></a>
			<a href="<?php echo esc_url( AGRICULTURE_FARM_PRO_DOC ); ?>" target='_blank'><?php esc_html_e('Pro Documentation', 'agriculture-farm'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/screenshot.jpg" alt="<?php the_title(); ?> post thumbnail image">
	  			<p><?php esc_html_e( 'Are you planning to promote your agriculture and farming business? What could be better than a theme that is exclusively designed for such a business? Yes, you got it right. This Agriculture Farm WordPress Theme has been exclusively designed for giving the desired web presence to farming and agriculture-related businesses and products. It gives you a highly professional web presence that convinces your target audience and potential clients about the quality products you are ringing to the market. As your website has a role to play in establishing a sense of reliability in your business and services, this theme provides a lot of content spaces that can help you do so. This Agriculture Farm WordPress Theme not only shows the business details and contact info but apart from that, your visitors will get to know about your past experience in the business and how many clients you have served. Through the Testimonial section, you can go a step ahead and share the genuine experiences and thoughts of your clients and what all they have to say about your farm products and service. On the wonderful full-screen slider of this Agriculture Farm WordPress Theme, you can show amazing pictures and images of your farm and catch the attention of the visitors. If you want to customize the design, you can use the drag and drop page builder tool or customization options provided in the theme options panel. As the demand for organic farm products is more, you can bring in more business for you by getting more organic products to sell online. For that, the Woocommerce compatibility of this theme is going to help you a lot. It will let you push the organic farm products for selling them online through your website and earn more profit. For enhancing your website further, there are many Shortcodes, widgets, and plugin support features is included in this Agriculture Farm WordPress Theme.', 'agriculture-farm' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'agriculture-farm' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Slider with a Number of Slider Images Upload Option Available.', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'agriculture-farm' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Feature', 'agriculture-farm' ); ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<script>
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;
	}
</script>

<?php } ?>