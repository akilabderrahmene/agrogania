<div class="demo-content">
	<?php 
    // Check if the demo import has been completed
    $agriculture_farm_demo_import_completed = get_option('agriculture_farm_demo_import_completed', false);

    // If the demo import is completed, display the "View Site" button
    if ($agriculture_farm_demo_import_completed) {
      echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'agriculture-farm') . '</p>';
      echo '<a href="' . esc_url(home_url()) . '" class="view-btn" target="_blank">' . esc_html__('VIEW SITE', 'agriculture-farm') . '</a>';
    }

    if (isset($_POST['submit'])) {

    // Check if woocommerce is installed and activated
    if (!is_plugin_active('woocommerce/woocommerce.php')) {
        // Install the plugin if it doesn't exist
        $agriculture_farm_plugin_slug = 'woocommerce';
        $agriculture_farm_plugin_file = 'woocommerce/woocommerce.php';

        // Check if plugin is installed
        $agriculture_farm_installed_plugins = get_plugins();
        if (!isset($agriculture_farm_installed_plugins[$agriculture_farm_plugin_file])) {
        include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
        include_once(ABSPATH . 'wp-admin/includes/file.php');
        include_once(ABSPATH . 'wp-admin/includes/misc.php');
        include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

        // Install the plugin
        $agriculture_farm_upgrader = new Plugin_Upgrader();
        $agriculture_farm_upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
        }
        // Activate the plugin
        activate_plugin($agriculture_farm_plugin_file);
    }

    // --- Menu 1: Left Menu ---
    $agriculture_farm_left_menu_name = 'Main Menu Left';
    $agriculture_farm_left_menu_location = 'left-menu';
    $agriculture_farm_left_menu_exists = wp_get_nav_menu_object($agriculture_farm_left_menu_name);

    if (!$agriculture_farm_left_menu_exists) {
        // Create the left menu
        $agriculture_farm_left_menu_id = wp_create_nav_menu($agriculture_farm_left_menu_name);

        // Create and assign the Home page
        $agriculture_farm_home_page_id = wp_insert_post(array(
            'post_type'     => 'page',
            'post_title'    => 'Home',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'home'
        ));
        // Assign template and set as front page
        add_post_meta($agriculture_farm_home_page_id, '_wp_page_template', 'page-template/custom-front-page.php');
        update_option('page_on_front', $agriculture_farm_home_page_id);
        update_option('show_on_front', 'page');

        // Add Home page to the left menu
        wp_update_nav_menu_item($agriculture_farm_left_menu_id, 0, array(
            'menu-item-title'     => __('Home', 'agriculture-farm'),
            'menu-item-classes'   => 'home',
            'menu-item-url'       => home_url('/'),
            'menu-item-status'    => 'publish',
            'menu-item-object-id' => $agriculture_farm_home_page_id,
            'menu-item-object'    => 'page',
            'menu-item-type'      => 'post_type',
        ));

        // Create and assign the About Us page
        $agriculture_farm_about_us_page_id = wp_insert_post(array(
            'post_type'     => 'page',
            'post_title'    => 'About Us',
            'post_content'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'about-us'
        ));

        // Add About Us page to the left menu
        wp_update_nav_menu_item($agriculture_farm_left_menu_id, 0, array(
            'menu-item-title'     => __('About Us', 'agriculture-farm'),
            'menu-item-classes'   => 'about-us',
            'menu-item-url'       => home_url('/about-us/'),
            'menu-item-status'    => 'publish',
            'menu-item-object-id' => $agriculture_farm_about_us_page_id,
            'menu-item-object'    => 'page',
            'menu-item-type'      => 'post_type',
        ));

        // Assign left menu to its location
        $agriculture_farm_locations = get_theme_mod('nav_menu_locations', array());
        $agriculture_farm_locations[$agriculture_farm_left_menu_location] = $agriculture_farm_left_menu_id;
        set_theme_mod('nav_menu_locations', $agriculture_farm_locations);
    }

    // --- Menu 2: Right Menu ---
    $agriculture_farm_right_menu_name = 'Main Menu Right';
    $agriculture_farm_right_menu_location = 'right-menu';
    $agriculture_farm_right_menu_exists = wp_get_nav_menu_object($agriculture_farm_right_menu_name);

    if (!$agriculture_farm_right_menu_exists) {
        // Create the right menu
        $agriculture_farm_right_menu_id = wp_create_nav_menu($agriculture_farm_right_menu_name);

        // Create and assign the Blog page
        $agriculture_farm_blog_page_id = wp_insert_post(array(
            'post_type'     => 'page',
            'post_title'    => 'Blog',
            'post_content'  => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy.',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'blog'
        ));

        // Add Blog page to the right menu
        wp_update_nav_menu_item($agriculture_farm_right_menu_id, 0, array(
            'menu-item-title'     => __('Blog', 'agriculture-farm'),
            'menu-item-classes'   => 'blog',
            'menu-item-url'       => home_url('/blog/'),
            'menu-item-status'    => 'publish',
            'menu-item-object-id' => $agriculture_farm_blog_page_id,
            'menu-item-object'    => 'page',
            'menu-item-type'      => 'post_type',
        ));

        // Create and assign the Contact Us page
        $contact_us_page_id = wp_insert_post(array(
            'post_type'     => 'page',
            'post_title'    => 'Contact Us',
            'post_content'  => 'This is the Contact Us page content.',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'contact-us'
        ));

        // Add Contact Us page to the right menu
        wp_update_nav_menu_item($agriculture_farm_right_menu_id, 0, array(
            'menu-item-title'     => __('Contact Us', 'agriculture-farm'),
            'menu-item-classes'   => 'contact-us',
            'menu-item-url'       => home_url('/contact-us/'),
            'menu-item-status'    => 'publish',
            'menu-item-object-id' => $contact_us_page_id,
            'menu-item-object'    => 'page',
            'menu-item-type'      => 'post_type',
        ));

        // Assign right menu to its location
        $agriculture_farm_locations = get_theme_mod('nav_menu_locations', array());
        $agriculture_farm_locations[$agriculture_farm_right_menu_location] = $agriculture_farm_right_menu_id;
        set_theme_mod('nav_menu_locations', $agriculture_farm_locations);
    }    

    // Set the demo import completion flag
    update_option('agriculture_farm_demo_import_completed', true);

    // Display success message and "View Site" button
    echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'agriculture-farm') . '</p>';
    echo '<span><a href="' . esc_url(home_url()) . '" class="view-btn" target="_blank">' . esc_html__('VIEW SITE', 'agriculture-farm') . '</a></span>';

    //end

    // Topbar Section
    set_theme_mod( 'agriculture_farm_mail1', 'xyz@example.com' );
    set_theme_mod( 'agriculture_farm_phone1', '(+00)888.666.88' );    
    set_theme_mod( 'agriculture_farm_topbar_text', 'Welcome to Agriculture Farm' );

    // slider section start // 
    set_theme_mod( 'agriculture_farm_slider_small_title', 'farming with new nature' );
    
    for($agriculture_farm_i=1;$agriculture_farm_i<=4;$agriculture_farm_i++){
       $agriculture_farm_slider_title = 'bringing growth to agriculture farm';
       $agriculture_farm_slider_content = 'Promoting them continuous improvement of human and technological resources generating competitive.';
          // Create post object
       $my_post = array(
       'post_title'    => wp_strip_all_tags( $agriculture_farm_slider_title ),
       'post_content'  => $agriculture_farm_slider_content,
       'post_status'   => 'publish',
       'post_type'     => 'page',
       );

       // Insert the post into the database
       $agriculture_farm_post_id = wp_insert_post( $my_post );

       if ($agriculture_farm_post_id) {
         // Set the theme mod for the slider page
         set_theme_mod('agriculture_farm_slider_page' . $agriculture_farm_i, $agriculture_farm_post_id);

          $agriculture_farm_image_url = get_template_directory_uri().'/images/slider'.$agriculture_farm_i.'.png';

        $agriculture_farm_image_id = media_sideload_image($agriculture_farm_image_url, $agriculture_farm_post_id, null, 'id');

            if (!is_wp_error($agriculture_farm_image_id)) {
                // Set the downloaded image as the post's featured image
                set_post_thumbnail($agriculture_farm_post_id, $agriculture_farm_image_id);
            }
        }
    }

    // Our Services Settings
    set_theme_mod( 'agriculture_farm_services_title', 'our services' );
    set_theme_mod( 'agriculture_farm_services_text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry' );
    set_theme_mod( 'agriculture_farm_cate_tab', 'category1' );

    // Define post category names and post titles
    $agriculture_farm_category_names = array('category1', 'category2', 'category3');
    $agriculture_farm_title_array = array(
        array("Organic Product", "Dairy Products", "Fresh Vegetable"),
        array("Organic Product", "Dairy Products", "Fresh Vegetable"),
        array("Organic Product", "Dairy Products", "Fresh Vegetable")
    );

    foreach ($agriculture_farm_category_names as $agriculture_farm_index => $agriculture_farm_category_name) {
        // Create or retrieve the post category term ID
        $agriculture_farm_term = term_exists($agriculture_farm_category_name, 'category');
        if ($agriculture_farm_term === 0 || $agriculture_farm_term === null) {
            // If the term does not exist, create it
            $agriculture_farm_term = wp_insert_term($agriculture_farm_category_name, 'category');
        }
        if (is_wp_error($agriculture_farm_term)) {
            error_log('Error creating category: ' . $agriculture_farm_term->get_error_message());
            continue; // Skip to the next iteration if category creation fails
        }

        for ($agriculture_farm_i = 0; $agriculture_farm_i < 3; $agriculture_farm_i++) {
            // Create post content
            $agriculture_farm_title = $agriculture_farm_title_array[$agriculture_farm_index][$agriculture_farm_i];
            $agriculture_farm_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting.';

            // Create post post object
            $agriculture_farm_my_post = array(
                'post_title'    => wp_strip_all_tags($agriculture_farm_title),
                'post_content'  => $agriculture_farm_content,
                'post_status'   => 'publish',
                'post_type'     => 'post', // Post type set to 'post'
            );

            // Insert the post into the database
            $agriculture_farm_post_id = wp_insert_post($agriculture_farm_my_post);

            if (is_wp_error($agriculture_farm_post_id)) {
                error_log('Error creating post: ' . $agriculture_farm_post_id->get_error_message());
                continue; // Skip to the next post if creation fails
            }

            // Assign the category to the post
            wp_set_post_categories($agriculture_farm_post_id, array((int)$agriculture_farm_term['term_id']));

            // Handle the featured image using media_sideload_image
            $agriculture_farm_image_url = get_template_directory_uri() . '/images/image' . ($agriculture_farm_i + 1) . '.png';
            $agriculture_farm_image_id = media_sideload_image($agriculture_farm_image_url, $agriculture_farm_post_id, null, 'id');

            if (is_wp_error($agriculture_farm_image_id)) {
                error_log('Error downloading image: ' . $agriculture_farm_image_id->get_error_message());
                continue; // Skip to the next post if image download fails
            }
            // Assign featured image to post
            set_post_thumbnail($agriculture_farm_post_id, $agriculture_farm_image_id);
        }
    }           
    }
    ?>

	<p><strong><?php esc_html_e('Reminder : ', 'agriculture-farm'); ?></strong><?php esc_html_e('Backup your site before importing. This process will overwrite existing Agriculture Farm settings.', 'agriculture-farm'); ?></p>

    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=agriculture_farm_guide" method="POST" onsubmit="return validate(this);">
    <?php if (!get_option('agriculture_farm_demo_import_completed')) : ?>
        <form method="post">
            <input class= "run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer','agriculture-farm'); ?>" class="button button-primary button-large">
        </form>
    <?php endif; ?>
    </form>
	<script type="text/javascript">
		function validate(valid) {
			 if(confirm("Do you really want to import the theme demo content?")){
			    document.forms[0].submit();
			}
		    else {
			    return false;
		    }
		}
	</script>
</div>
