<?php
/**
 * Agriculture Farm Theme Customizer
 *
 * @package Agriculture Farm
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function agriculture_farm_customize_register($wp_customize) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );
	
	//add home page setting pannel
	$wp_customize->add_panel('agriculture_farm_panel_id', array(
		'priority'       => 12,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Settings', 'agriculture-farm'),
		'description'    => __('Description of what this panel does.', 'agriculture-farm'),
	));	

	// font array
	$agriculture_farm_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'agriculture_farm_typography', array(
    	'title'      => __( 'Typography', 'agriculture-farm' ),
		'priority'   => 30,
		'panel' => 'agriculture_farm_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'agriculture_farm_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_paragraph_color', array(
		'label' => __('Paragraph Color', 'agriculture-farm'),
		'section' => 'agriculture_farm_typography',
		'settings' => 'agriculture_farm_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('agriculture_farm_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control(
	    'agriculture_farm_paragraph_font_family', array(
	    'section'  => 'agriculture_farm_typography',
	    'label'    => __( 'Paragraph Fonts','agriculture-farm'),
	    'type'     => 'select',
	    'choices'  => $agriculture_farm_font_array,
	));

	$wp_customize->add_setting('agriculture_farm_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','agriculture-farm'),
		'section'	=> 'agriculture_farm_typography',
		'setting'	=> 'agriculture_farm_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'agriculture_farm_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_atag_color', array(
		'label' => __('"a" Tag Color', 'agriculture-farm'),
		'section' => 'agriculture_farm_typography',
		'settings' => 'agriculture_farm_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('agriculture_farm_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control(
	    'agriculture_farm_atag_font_family', array(
	    'section'  => 'agriculture_farm_typography',
	    'label'    => __( '"a" Tag Fonts','agriculture-farm'),
	    'type'     => 'select',
	    'choices'  => $agriculture_farm_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'agriculture_farm_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_li_color', array(
		'label' => __('"li" Tag Color', 'agriculture-farm'),
		'section' => 'agriculture_farm_typography',
		'settings' => 'agriculture_farm_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('agriculture_farm_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control(
	    'agriculture_farm_li_font_family', array(
	    'section'  => 'agriculture_farm_typography',
	    'label'    => __( '"li" Tag Fonts','agriculture-farm'),
	    'type'     => 'select',
	    'choices'  => $agriculture_farm_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'agriculture_farm_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_h1_color', array(
		'label' => __('H1 Color', 'agriculture-farm'),
		'section' => 'agriculture_farm_typography',
		'settings' => 'agriculture_farm_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('agriculture_farm_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control(
	    'agriculture_farm_h1_font_family', array(
	    'section'  => 'agriculture_farm_typography',
	    'label'    => __( 'H1 Fonts','agriculture-farm'),
	    'type'     => 'select',
	    'choices'  => $agriculture_farm_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('agriculture_farm_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_h1_font_size',array(
		'label'	=> __('H1 Font Size','agriculture-farm'),
		'section'	=> 'agriculture_farm_typography',
		'setting'	=> 'agriculture_farm_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'agriculture_farm_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_h2_color', array(
		'label' => __('h2 Color', 'agriculture-farm'),
		'section' => 'agriculture_farm_typography',
		'settings' => 'agriculture_farm_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('agriculture_farm_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control(
	    'agriculture_farm_h2_font_family', array(
	    'section'  => 'agriculture_farm_typography',
	    'label'    => __( 'h2 Fonts','agriculture-farm'),
	    'type'     => 'select',
	    'choices'  => $agriculture_farm_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('agriculture_farm_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_h2_font_size',array(
		'label'	=> __('h2 Font Size','agriculture-farm'),
		'section'	=> 'agriculture_farm_typography',
		'setting'	=> 'agriculture_farm_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'agriculture_farm_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_h3_color', array(
		'label' => __('h3 Color', 'agriculture-farm'),
		'section' => 'agriculture_farm_typography',
		'settings' => 'agriculture_farm_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('agriculture_farm_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control(
	    'agriculture_farm_h3_font_family', array(
	    'section'  => 'agriculture_farm_typography',
	    'label'    => __( 'h3 Fonts','agriculture-farm'),
	    'type'     => 'select',
	    'choices'  => $agriculture_farm_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('agriculture_farm_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_h3_font_size',array(
		'label'	=> __('h3 Font Size','agriculture-farm'),
		'section'	=> 'agriculture_farm_typography',
		'setting'	=> 'agriculture_farm_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'agriculture_farm_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_h4_color', array(
		'label' => __('h4 Color', 'agriculture-farm'),
		'section' => 'agriculture_farm_typography',
		'settings' => 'agriculture_farm_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('agriculture_farm_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control(
	    'agriculture_farm_h4_font_family', array(
	    'section'  => 'agriculture_farm_typography',
	    'label'    => __( 'h4 Fonts','agriculture-farm'),
	    'type'     => 'select',
	    'choices'  => $agriculture_farm_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('agriculture_farm_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_h4_font_size',array(
		'label'	=> __('h4 Font Size','agriculture-farm'),
		'section'	=> 'agriculture_farm_typography',
		'setting'	=> 'agriculture_farm_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'agriculture_farm_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_h5_color', array(
		'label' => __('h5 Color', 'agriculture-farm'),
		'section' => 'agriculture_farm_typography',
		'settings' => 'agriculture_farm_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('agriculture_farm_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control(
	    'agriculture_farm_h5_font_family', array(
	    'section'  => 'agriculture_farm_typography',
	    'label'    => __( 'h5 Fonts','agriculture-farm'),
	    'type'     => 'select',
	    'choices'  => $agriculture_farm_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('agriculture_farm_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_h5_font_size',array(
		'label'	=> __('h5 Font Size','agriculture-farm'),
		'section'	=> 'agriculture_farm_typography',
		'setting'	=> 'agriculture_farm_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'agriculture_farm_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_h6_color', array(
		'label' => __('h6 Color', 'agriculture-farm'),
		'section' => 'agriculture_farm_typography',
		'settings' => 'agriculture_farm_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('agriculture_farm_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control(
	    'agriculture_farm_h6_font_family', array(
	    'section'  => 'agriculture_farm_typography',
	    'label'    => __( 'h6 Fonts','agriculture-farm'),
	    'type'     => 'select',
	    'choices'  => $agriculture_farm_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('agriculture_farm_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_h6_font_size',array(
		'label'	=> __('h6 Font Size','agriculture-farm'),
		'section'	=> 'agriculture_farm_typography',
		'setting'	=> 'agriculture_farm_h6_font_size',
		'type'	=> 'text'
	));

  	$wp_customize->add_setting('agriculture_farm_background_skin_mode',array(
        'default' => 'Transparent Background',
        'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control('agriculture_farm_background_skin_mode',array(
        'type' => 'select',
        'label' => __('Background Type','agriculture-farm'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','agriculture-farm'),
            'Transparent Background' => __('Transparent Background','agriculture-farm'),
        ),
	) );

	// woocommerce section
	$wp_customize->add_section('agriculture_farm_woocommerce_settings', array(
		'title'    => __('WooCommerce Settings', 'agriculture-farm'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting( 'agriculture_farm_shop_page_sidebar',array(
		'default' => false,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ) );
    $wp_customize->add_control('agriculture_farm_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Shop Page Sidebar','agriculture-farm'),
		'section' => 'agriculture_farm_woocommerce_settings'
    ));

    // shop page sidebar alignment
    $wp_customize->add_setting('agriculture_farm_shop_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'agriculture_farm_sanitize_choices',
	));
	$wp_customize->add_control('agriculture_farm_shop_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Shop Page layout', 'agriculture-farm'),
		'section'        => 'agriculture_farm_woocommerce_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'agriculture-farm'),
			'Right Sidebar' => __('Right Sidebar', 'agriculture-farm'),
		),
	));

	$wp_customize->add_setting( 'agriculture_farm_wocommerce_single_page_sidebar',array(
		'default' => false,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ) );
    $wp_customize->add_control('agriculture_farm_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','agriculture-farm'),
		'section' => 'agriculture_farm_woocommerce_settings'
    ));
    
    // single product page sidebar alignment
    $wp_customize->add_setting('agriculture_farm_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'agriculture_farm_sanitize_choices',
	));
	$wp_customize->add_control('agriculture_farm_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single product Page layout', 'agriculture-farm'),
		'section'        => 'agriculture_farm_woocommerce_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'agriculture-farm'),
			'Right Sidebar' => __('Right Sidebar', 'agriculture-farm'),
		),
	));

	$wp_customize->add_setting('agriculture_farm_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','agriculture-farm'),
       'section' => 'agriculture_farm_woocommerce_settings',
    ));

	$wp_customize->add_setting('agriculture_farm_show_wooproducts_border',array(
       'default' => false,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','agriculture-farm'),
       'section' => 'agriculture_farm_woocommerce_settings',
    ));

    $wp_customize->add_setting( 'agriculture_farm_wooproducts_per_columns' , array(
		'default'           => 4,
		'transport'         => 'refresh',
		'sanitize_callback' => 'agriculture_farm_sanitize_choices',
	) );
	$wp_customize->add_control( 'agriculture_farm_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'agriculture-farm' ),
		'section'  => 'agriculture_farm_woocommerce_settings',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	)  );

	$wp_customize->add_setting('agriculture_farm_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));	
	$wp_customize->add_control('agriculture_farm_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','agriculture-farm'),
		'section'	=> 'agriculture_farm_woocommerce_settings',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'agriculture_farm_top_bottom_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control( 'agriculture_farm_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','agriculture-farm' ),
		'section' => 'agriculture_farm_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'agriculture_farm_left_right_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control( 'agriculture_farm_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','agriculture-farm' ),
		'section' => 'agriculture_farm_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'agriculture_farm_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_number_range',
	));
	$wp_customize->add_control('agriculture_farm_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','agriculture-farm' ),
		'section' => 'agriculture_farm_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'range'
	));

	$wp_customize->add_setting( 'agriculture_farm_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_number_range',
	));
	$wp_customize->add_control('agriculture_farm_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','agriculture-farm' ),
		'section' => 'agriculture_farm_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting('agriculture_farm_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'agriculture_farm_sanitize_choices'
    ));
    $wp_customize->add_control('agriculture_farm_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','agriculture-farm'),
       'choices' => array(
            'Yes' => __('Yes','agriculture-farm'),
            'No' => __('No','agriculture-farm'),
        ),
       'section' => 'agriculture_farm_woocommerce_settings',
    ));

	$wp_customize->add_setting( 'agriculture_farm_top_bottom_product_button_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control('agriculture_farm_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','agriculture-farm' ),
		'section' => 'agriculture_farm_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',
	));

	$wp_customize->add_setting( 'agriculture_farm_left_right_product_button_padding',array(
		'default' => 16,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control('agriculture_farm_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','agriculture-farm' ),
		'section' => 'agriculture_farm_woocommerce_settings',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'agriculture_farm_product_button_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_number_range',
	));
	$wp_customize->add_control('agriculture_farm_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','agriculture-farm' ),
		'section' => 'agriculture_farm_woocommerce_settings',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('agriculture_farm_align_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control('agriculture_farm_align_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Button Alignment','agriculture-farm'),
        'section' => 'agriculture_farm_woocommerce_settings',
        'choices' => array(
            'Right' => __('Right','agriculture-farm'),
            'Left' => __('Left','agriculture-farm'),
        ),
	) );

	$wp_customize->add_setting( 'agriculture_farm_border_radius_product_sale',array(
		'default' => 0,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control('agriculture_farm_border_radius_product_sale', array(
        'label'  => __('Product Sale Button Border Radius','agriculture-farm'),
        'section'  => 'agriculture_farm_woocommerce_settings',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('agriculture_farm_product_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float'
	));
	$wp_customize->add_control('agriculture_farm_product_sale_font_size',array(
		'label'	=> __('Product Sale Button Font Size','agriculture-farm'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'agriculture_farm_woocommerce_settings',
		'type'=> 'number'
	));

	// sale button padding
	$wp_customize->add_setting( 'agriculture_farm_sale_padding_top',array(
		'default' => 0,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control( 'agriculture_farm_sale_padding_top',	array(
		'label' => esc_html__( ' Product Sale Top Bottom Padding','agriculture-farm' ),
		'section' => 'agriculture_farm_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'agriculture_farm_sale_padding_left',array(
		'default' => 0,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control( 'agriculture_farm_sale_padding_left',	array(
		'label' => esc_html__( ' Product Sale Left Right Padding','agriculture-farm' ),
		'section' => 'agriculture_farm_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'agriculture_farm_theme_color_option', array( 
		'panel' => 'agriculture_farm_panel_id', 
		'title' => esc_html__( 'Theme Color Option', 'agriculture-farm' ) )
	);

  	$wp_customize->add_setting( 'agriculture_farm_theme_color_first', array(
	    'default' => '#50d430',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_theme_color_first', array(
  		'label' => __( 'Color Option', 'agriculture-farm' ),
  		'description' => __('One can change complete theme color on just one click.', 'agriculture-farm'),
	    'section' => 'agriculture_farm_theme_color_option',
	    'settings' => 'agriculture_farm_theme_color_first',
  	)));

	//Top Bar
	$wp_customize->add_section('agriculture_farm_topbar',array(
		'title'	=> __('Topbar Section','agriculture-farm'),
		'description'	=> __('Add topbar content','agriculture-farm'),
		'priority'	=> null,
		'panel' => 'agriculture_farm_panel_id',
	));

	$wp_customize->add_setting('agriculture_farm_mail_icon',array(
		'default'	=> 'fas fa-envelope',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_mail_icon',array(
		'label'	=> __('Mail Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('agriculture_farm_mail1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email',
	));
	$wp_customize->add_control('agriculture_farm_mail1',array(
		'label'	=> __('Mail Address','agriculture-farm'),
		'section'	=> 'agriculture_farm_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('agriculture_farm_phone_icon',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_phone_icon',array(
		'label'	=> __('Phone Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('agriculture_farm_phone1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'agriculture_farm_sanitize_phone_number',
	));
	$wp_customize->add_control('agriculture_farm_phone1',array(
		'label'	=> __('Phone Number','agriculture-farm'),
		'section'	=> 'agriculture_farm_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('agriculture_farm_topbar_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('agriculture_farm_topbar_text',array(
		'label'	=> __('Add Topbar Text','agriculture-farm'),
		'section'	=> 'agriculture_farm_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('agriculture_farm_cart_icon',array(
		'default'	=> 'fas fa-shopping-cart',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_cart_icon',array(
		'label'	=> __('Cart Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('agriculture_farm_search_icon',array(
		'default'	=> 'fas fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_search_icon',array(
		'label'	=> __('Search Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_topbar',
		'type'		=> 'icon'
	)));

	//Menus Settings
	$wp_customize->add_section('agriculture_farm_menu_settings',array(
		'title'	=> __('Menus Settings','agriculture-farm'),
		'priority'	=> null,
		'panel' => 'agriculture_farm_panel_id',
	));

	$wp_customize->add_setting('agriculture_farm_text_tranform_menu',array(
		'default' => 'Uppercase',
		'sanitize_callback' => 'agriculture_farm_sanitize_choices'
 	));
 	$wp_customize->add_control('agriculture_farm_text_tranform_menu',array(
		'type' => 'radio',
		'label' => __('Menu Text Transform','agriculture-farm'),
		'section' => 'agriculture_farm_menu_settings',
		'choices' => array(
		   'Uppercase' => __('Uppercase','agriculture-farm'),
		   'Lowercase' => __('Lowercase','agriculture-farm'),
		   'Capitalize' => __('Capitalize','agriculture-farm'),
		),
	) );

	$wp_customize->add_setting('agriculture_farm_menus_font_size',array(
		'default'=> 12,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float'
	));
	$wp_customize->add_control('agriculture_farm_menus_font_size',array(
		'label'	=> __('Menus Font Size','agriculture-farm'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'agriculture_farm_menu_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting('agriculture_farm_menu_weight',array(
		'default'=> '',
		'sanitize_callback'	=> 'agriculture_farm_sanitize_choices',
	));
	$wp_customize->add_control('agriculture_farm_menu_weight',array(
		'label'	=> __('Menus Font Weight','agriculture-farm'),
		'section'=> 'agriculture_farm_menu_settings',
		'type' => 'select',
		'choices' => array(
            '100' => __('100','agriculture-farm'),
            '200' => __('200','agriculture-farm'),
            '300' => __('300','agriculture-farm'),
            '400' => __('400','agriculture-farm'),
            '500' => __('500','agriculture-farm'),
            '600' => __('600','agriculture-farm'),
            '700' => __('700','agriculture-farm'),
            '800' => __('800','agriculture-farm'),
            '900' => __('900','agriculture-farm'),
        ),
	));

	$wp_customize->add_setting('agriculture_farm_menus_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float'
	));
	$wp_customize->add_control('agriculture_farm_menus_padding',array(
		'label'	=> __('Menus Padding','agriculture-farm'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'agriculture_farm_menu_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting('agriculture_farm_menus_item_style',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control('agriculture_farm_menus_item_style',array(
		'type' => 'select',
		'section' => 'agriculture_farm_menu_settings',
		'label' => __('Menu Hover Effect','agriculture-farm'),
		'choices' => array(
			'None' => __('None','agriculture-farm'),
			'Zoom In' => __('Zoom In','agriculture-farm'),
		),
	) );

	$wp_customize->add_setting( 'agriculture_farm_menu_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_menu_color_settings', array(
  		'label' => __('Menu Color', 'agriculture-farm'),
	    'section' => 'agriculture_farm_menu_settings',
	    'settings' => 'agriculture_farm_menu_color_settings',
  	)));

  	$wp_customize->add_setting( 'agriculture_farm_menu_hover_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_menu_hover_color_settings', array(
  		'label' => __('Menu Hover Color', 'agriculture-farm'),
	    'section' => 'agriculture_farm_menu_settings',
	    'settings' => 'agriculture_farm_menu_hover_color_settings',
  	)));
  

  	$wp_customize->add_setting( 'agriculture_farm_submenu_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_submenu_color_settings', array(
  		'label' => __('Sub-menu Color', 'agriculture-farm'),
	    'section' => 'agriculture_farm_menu_settings',
	    'settings' => 'agriculture_farm_submenu_color_settings',
  	)));

  	$wp_customize->add_setting( 'agriculture_farm_submenu_hover_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_submenu_hover_color_settings', array(
  		'label' => __('Sub-menu Hover Color', 'agriculture-farm'),
	    'section' => 'agriculture_farm_menu_settings',
	    'settings' => 'agriculture_farm_submenu_hover_color_settings',
  	)));

	//Slider
	$wp_customize->add_section( 'agriculture_farm_slider' , array(
    	'title'      => __( 'Slider Settings', 'agriculture-farm' ),
		'priority'   => null,
		'panel' => 'agriculture_farm_panel_id'
	) );

	$wp_customize->add_setting('agriculture_farm_slider_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_slider_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','agriculture-farm'),
		'description' => "<ul><li>". esc_html__('You can change how many slides there are.','agriculture-farm') ."</li><li>". esc_html__('You can change the font family and the colours of headings and subheadings.','agriculture-farm') ."</li><li>". esc_html__('And so on...','agriculture-farm') ."</li></ul><a target='_blank' href='". esc_url(AGRICULTURE_FARM_BUY_NOW) ." '>". esc_html__('Upgrade to Pro','agriculture-farm') ."</a>",
		'section'=> 'agriculture_farm_slider'
	));

	$wp_customize->add_setting('agriculture_farm_slider_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','agriculture-farm'),
       'section' => 'agriculture_farm_slider'
    ));

    $wp_customize->add_setting('agriculture_farm_slider_title_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_slider_title_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','agriculture-farm'),
       'section' => 'agriculture_farm_slider'
    ));

    $wp_customize->add_setting('agriculture_farm_slider_content_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_slider_content_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','agriculture-farm'),
       'section' => 'agriculture_farm_slider'
    ));

    $wp_customize->add_setting('agriculture_farm_slider_button_show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_slider_button_show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','agriculture-farm'),
       'section' => 'agriculture_farm_slider'
    ));

	$wp_customize->add_setting( 'agriculture_farm_slider_small_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'agriculture_farm_slider_small_title', array(
		'label'    => __( 'Add Slider Small Text', 'agriculture-farm' ),
		'section'  => 'agriculture_farm_slider',
		'type'     => 'text'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'agriculture_farm_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'agriculture_farm_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'agriculture_farm_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'agriculture-farm' ),
			'description'	=> __('Size of image should be 1600 x 633','agriculture-farm'),
			'section'  => 'agriculture_farm_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	//Slider excerpt
	$wp_customize->add_setting( 'agriculture_farm_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'    => 'absint',
	) );
	$wp_customize->add_control( 'agriculture_farm_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','agriculture-farm' ),
		'section'     => 'agriculture_farm_slider',
		'type'        => 'number',
		'settings'    => 'agriculture_farm_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('agriculture_farm_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Home Page Slider Overlay','agriculture-farm'),
		'description'    => __('This option will add colors over the slider.','agriculture-farm'),
       'section' => 'agriculture_farm_slider'
    ));

    $wp_customize->add_setting('agriculture_farm_slider_image_overlay_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'agriculture_farm_slider_image_overlay_color', array(
		'label'    => __('Home Page Slider Overlay Color', 'agriculture-farm'),
		'section'  => 'agriculture_farm_slider',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','agriculture-farm'),
		'settings' => 'agriculture_farm_slider_image_overlay_color',
	)));

	//Opacity
	$wp_customize->add_setting('agriculture_farm_slider_image_opacity',array(
      'default'              => 0.7,
      'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control( 'agriculture_farm_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','agriculture-farm' ),
	'section'     => 'agriculture_farm_slider',
	'type'        => 'select',
	'settings'    => 'agriculture_farm_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr__('0','agriculture-farm'),
		'0.1' =>  esc_attr__('0.1','agriculture-farm'),
		'0.2' =>  esc_attr__('0.2','agriculture-farm'),
		'0.3' =>  esc_attr__('0.3','agriculture-farm'),
		'0.4' =>  esc_attr__('0.4','agriculture-farm'),
		'0.5' =>  esc_attr__('0.5','agriculture-farm'),
		'0.6' =>  esc_attr__('0.6','agriculture-farm'),
		'0.7' =>  esc_attr__('0.7','agriculture-farm'),
		'0.8' =>  esc_attr__('0.8','agriculture-farm'),
		'0.9' =>  esc_attr__('0.9','agriculture-farm')
	),
	));

	$wp_customize->add_setting( 'agriculture_farm_slider_speed_option',array(
		'default' => 3000,
		'sanitize_callback'=> 'agriculture_farm_sanitize_number_range',
	));
	$wp_customize->add_control( 'agriculture_farm_slider_speed_option',array(
		'label' => esc_html__( 'Slider Speed Option','agriculture-farm' ),
		'section' => 'agriculture_farm_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('agriculture_farm_slider_image_height',array(
		'default'=> __('','agriculture-farm'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_slider_image_height',array(
		'label'	=> __('Slider Image Height','agriculture-farm'),
		'section'=> 'agriculture_farm_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('agriculture_farm_slider_button',array(
		'default'=> __('Discover','agriculture-farm'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_slider_button',array(
		'label'	=> __('Slider Button Text','agriculture-farm'),
		'section'=> 'agriculture_farm_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('agriculture_farm_slider_button_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('agriculture_farm_slider_button_url',array(
		'label'	=> esc_html__('Add Button Link','agriculture-farm'),
		'section'=> 'agriculture_farm_slider',
		'type'=> 'url'
	));

	$wp_customize->add_setting('agriculture_farm_slider_btn_bg_color', array(
		'default'           => '#50d430',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'agriculture_farm_slider_btn_bg_color', array(
		'label'    => __('Slider Button Background Color', 'agriculture-farm'),
		'section'  => 'agriculture_farm_slider',
	)));

	$wp_customize->add_setting('agriculture_farm_top_bottom_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control('agriculture_farm_top_bottom_slider_content_space',array(
		'label'	=> __('Top Bottom Slider Content Space','agriculture-farm'),
		'section'=> 'agriculture_farm_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('agriculture_farm_left_right_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control('agriculture_farm_left_right_slider_content_space',array(
		'label'	=> __('Left Right Slider Content Space','agriculture-farm'),
		'section'=> 'agriculture_farm_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	// Our Services Settings
	$wp_customize->add_section('agriculture_farm_services',array(
		'title' => __("Our Services Settings",'agriculture-farm'),
		'panel' => 'agriculture_farm_panel_id',
    ));

	$wp_customize->add_setting('agriculture_farm_product_sec_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_product_sec_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','agriculture-farm'),
		'description' => "<ul><li>". esc_html__('Includes settings to set section title.','agriculture-farm') ."</li><li>". esc_html__('Contains settings for the background colour.','agriculture-farm') ."</li><li>". esc_html__('Contains options for background images.','agriculture-farm') ."</li><li>". esc_html__('You can change the font family and colours of heading.','agriculture-farm') ."</li><li>". esc_html__('And so on...','agriculture-farm') ."</li></ul><a target='_blank' href='". esc_url(AGRICULTURE_FARM_BUY_NOW) ." '>". esc_html__('Upgrade to Pro','agriculture-farm') ."</a>",
		'section'=> 'agriculture_farm_services'
	));

    $wp_customize->add_setting('agriculture_farm_services_title',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('agriculture_farm_services_title',array(
        'label' => __('Section Title','agriculture-farm'),
        'section'=> 'agriculture_farm_services',
        'setting'=> 'agriculture_farm_services_title',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('agriculture_farm_services_text',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('agriculture_farm_services_text',array(
        'label' => __('Section Text','agriculture-farm'),
        'section'=> 'agriculture_farm_services',
        'setting'=> 'agriculture_farm_services_text',
        'type'=> 'text'
    ));

    $categories = get_categories();
    $cats = array();
    $i = 0;
    $cats[]='Select';	
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cats[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('agriculture_farm_cate_tab',array(
    	'default'	=> 'select',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('agriculture_farm_cate_tab',array(
        'type'    => 'select',
        'choices' => $cats,
        'label' => __('Select Services category','agriculture-farm'),
        'section' => 'agriculture_farm_services',
    ));

	//Blog Post
	$wp_customize->add_section('agriculture_farm_blog_post',array(
		'title'	=> __('Blog Post Settings','agriculture-farm'),
		'panel' => 'agriculture_farm_panel_id',
	));	

	$wp_customize->add_setting('agriculture_farm_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','agriculture-farm'),
       'section' => 'agriculture_farm_blog_post'
    ));

	$wp_customize->add_setting('agriculture_farm_date_icon',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_date_icon',array(
		'label'	=> __('Post Date Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('agriculture_farm_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','agriculture-farm'),
       'section' => 'agriculture_farm_blog_post'
    ));

	$wp_customize->add_setting('agriculture_farm_author_icon',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_author_icon',array(
		'label'	=> __('Author Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('agriculture_farm_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','agriculture-farm'),
       'section' => 'agriculture_farm_blog_post'
    ));

	$wp_customize->add_setting('agriculture_farm_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_comment_icon',array(
		'label'	=> __('Comments Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('agriculture_farm_time_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Time','agriculture-farm'),
       'section' => 'agriculture_farm_blog_post'
    ));

	$wp_customize->add_setting('agriculture_farm_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_time_icon',array(
		'label'	=> __('Time Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('agriculture_farm_show_featured_image_post',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_show_featured_image_post',array(
       'type' => 'checkbox',
       'label' => __('Blog Post Image','agriculture-farm'),
       'section' => 'agriculture_farm_blog_post'
    ));

    $wp_customize->add_setting( 'agriculture_farm_featured_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	) );
	$wp_customize->add_control( 'agriculture_farm_featured_img_border_radius', array(
		'label'       => esc_html__( 'Blog Post Image Border Radius','agriculture-farm' ),
		'section'     => 'agriculture_farm_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'agriculture_farm_featured_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control('agriculture_farm_featured_img_box_shadow',array(
		'label' => esc_html__( 'Blog Post Image Shadow','agriculture-farm' ),
		'section' => 'agriculture_farm_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

	$wp_customize->add_setting('agriculture_farm_show_first_caps',array(
        'default' => false,
        'sanitize_callback' => 'agriculture_farm_sanitize_checkbox',
    ));
	$wp_customize->add_control( 'agriculture_farm_show_first_caps',array(
		'label' => esc_html__('First Cap (First Capital Letter)', 'agriculture-farm'),
		'type' => 'checkbox',
		'section' => 'agriculture_farm_blog_post',
	));

	$wp_customize->add_setting('agriculture_farm_blog_post_description_option',array(
    	'default'   => 'Excerpt Content', 
        'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control('agriculture_farm_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','agriculture-farm'),
        'section' => 'agriculture_farm_blog_post',
        'choices' => array(
            'No Content' => __('No Content','agriculture-farm'),
            'Excerpt Content' => __('Excerpt Content','agriculture-farm'),
            'Full Content' => __('Full Content','agriculture-farm'),
        ),
	) );

    $wp_customize->add_setting( 'agriculture_farm_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'absint',
	) );
	$wp_customize->add_control( 'agriculture_farm_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','agriculture-farm' ),
		'section'     => 'agriculture_farm_blog_post',
		'type'        => 'number',
		'settings'    => 'agriculture_farm_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'agriculture_farm_post_suffix_option', array(
		'default'   => __('...','agriculture-farm'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'agriculture_farm_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','agriculture-farm' ),
		'section'     => 'agriculture_farm_blog_post',
		'type'        => 'text',
		'settings'    => 'agriculture_farm_post_suffix_option',
	) );

	$wp_customize->add_setting( 'agriculture_farm_metabox_separator_blog_post', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'agriculture_farm_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','agriculture-farm' ),
		'input_attrs' => array(
            'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'agriculture-farm' ),
        ),
		'section'     => 'agriculture_farm_blog_post',
		'type'        => 'text',
		'settings'    => 'agriculture_farm_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('agriculture_farm_display_blog_page_post',array(
        'default' => 'In Box',
        'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control('agriculture_farm_display_blog_page_post',array(
        'type' => 'radio',
        'label' => __('Display Blog Page Post :','agriculture-farm'),
        'section' => 'agriculture_farm_blog_post',
        'choices' => array(
            'In Box' => __('In Box','agriculture-farm'),
            'Without Box' => __('Without Box','agriculture-farm'),
        ),
	) );

    $wp_customize->add_setting('agriculture_farm_blog_post_alignment',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control('agriculture_farm_blog_post_alignment',array(
	    'type' => 'select',
	    'label' => __('Blog Post Alignment','agriculture-farm'),
	    'section' => 'agriculture_farm_blog_post',
	    'choices' => array(
	    	'Left' => __('Left','agriculture-farm'),
	        'Center' => __('Center','agriculture-farm'),
	        'Right' => __('Right','agriculture-farm')
	    ),
	) );

	$wp_customize->add_setting('agriculture_farm_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','agriculture-farm'),
       'section' => 'agriculture_farm_blog_post'
    ));

	$wp_customize->add_setting( 'agriculture_farm_pagination_settings', array(
        'default'			=> 'Numeric Pagination',
        'sanitize_callback'	=> 'agriculture_farm_sanitize_choices'
    ));
    $wp_customize->add_control( 'agriculture_farm_pagination_settings', array(
        'section' => 'agriculture_farm_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'agriculture-farm' ),
        'choices'		=> array(
            'Numeric Pagination'  => __( 'Numeric Pagination', 'agriculture-farm' ),
            'next-prev' => __( 'Next / Previous', 'agriculture-farm' ),
    )));

    $wp_customize->add_setting('agriculture_farm_pagination_alignment',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control('agriculture_farm_pagination_alignment',array(
	    'type' => 'select',
	    'label' => __('Pagination Alignment','agriculture-farm'),
	    'section' => 'agriculture_farm_blog_post',
	    'choices' => array(
	    	'Left' => __('Left','agriculture-farm'),
	        'Center' => __('Center','agriculture-farm'),
	        'Right' => __('Right','agriculture-farm')
	    ),
	) );

	// Button
	$wp_customize->add_section( 'agriculture_farm_theme_button', array(
		'title' => __('Button Option','agriculture-farm'),
		'panel' => 'agriculture_farm_panel_id',
	));

	$wp_customize->add_setting('agriculture_farm_button_text',array(
		'default'=> __('Read More','agriculture-farm'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_button_text',array(
		'label'	=> __('Add Button Text','agriculture-farm'),
		'section'=> 'agriculture_farm_theme_button',
		'type'=> 'text'
	));

	$wp_customize->add_setting('agriculture_farm_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float'
	));
	$wp_customize->add_control('agriculture_farm_button_font_size',array(
		'label'	=> __('Button Font Size','agriculture-farm'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'agriculture_farm_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('agriculture_farm_btn_font_weight',array(
		'default'=> '',
		'sanitize_callback'	=> 'agriculture_farm_sanitize_choices',
	));
	$wp_customize->add_control('agriculture_farm_btn_font_weight',array(
		'label'	=> __('Button Font Weight','agriculture-farm'),
		'section'=> 'agriculture_farm_theme_button',
		'type' => 'select',
		'choices' => array(
            '100' => __('100','agriculture-farm'),
            '200' => __('200','agriculture-farm'),
            '300' => __('300','agriculture-farm'),
            '400' => __('400','agriculture-farm'),
            '500' => __('500','agriculture-farm'),
            '600' => __('600','agriculture-farm'),
            '700' => __('700','agriculture-farm'),
            '800' => __('800','agriculture-farm'),
            '900' => __('900','agriculture-farm'),
        ),
	));

	$wp_customize->add_setting('agriculture_farm_button_text_transform',array(
		'default' => 'Uppercase',
		'sanitize_callback' => 'agriculture_farm_sanitize_choices'
 	));
 	$wp_customize->add_control('agriculture_farm_button_text_transform',array(
		'type' => 'radio',
		'label' => __('Button Text Transform','agriculture-farm'),
		'section' => 'agriculture_farm_theme_button',
		'choices' => array(
		   'Uppercase' => __('Uppercase','agriculture-farm'),
		   'Lowercase' => __('Lowercase','agriculture-farm'),
		   'Capitalize' => __('Capitalize','agriculture-farm'),
		),
	) );

	$wp_customize->add_setting('agriculture_farm_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control('agriculture_farm_button_padding_top_bottom',array(
		'label'	=> __('Top and Bottom Padding','agriculture-farm'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'agriculture_farm_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('agriculture_farm_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control('agriculture_farm_button_padding_left_right',array(
		'label'	=> __('Left and Right Padding','agriculture-farm'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'agriculture_farm_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'agriculture_farm_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	) );
	$wp_customize->add_control( 'agriculture_farm_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','agriculture-farm' ),
		'section'     => 'agriculture_farm_theme_button',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Single Post Settings
	$wp_customize->add_section('agriculture_farm_single_post',array(
		'title'	=> __('Single Post Settings','agriculture-farm'),
		'panel' => 'agriculture_farm_panel_id',
	));	

	$wp_customize->add_setting('agriculture_farm_single_post_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_single_post_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Date','agriculture-farm'),
       'section' => 'agriculture_farm_single_post'
    ));

	$wp_customize->add_setting('agriculture_farm_single_post_date_icon',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_single_post_date_icon',array(
		'label'	=> __('Single Post Date Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_single_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('agriculture_farm_single_post_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_single_post_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Author','agriculture-farm'),
       'section' => 'agriculture_farm_single_post'
    ));

	$wp_customize->add_setting('agriculture_farm_single_post_author_icon',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_single_post_author_icon',array(
		'label'	=> __('Single Post Author Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_single_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('agriculture_farm_single_post_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_single_post_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Comments','agriculture-farm'),
       'section' => 'agriculture_farm_single_post'
    ));

	$wp_customize->add_setting('agriculture_farm_single_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_single_post_comment_icon',array(
		'label'	=> __('Single Post Comments Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_single_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('agriculture_farm_single_post_time_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_single_post_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Time','agriculture-farm'),
       'section' => 'agriculture_farm_single_post'
    ));

	$wp_customize->add_setting('agriculture_farm_single_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_single_post_time_icon',array(
		'label'	=> __('Single Post Time Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_single_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('agriculture_farm_category_show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_category_show_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Category','agriculture-farm'),
       'section' => 'agriculture_farm_single_post'
    ));

	$wp_customize->add_setting('agriculture_farm_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','agriculture-farm'),
       'section' => 'agriculture_farm_single_post'
    ));

    $wp_customize->add_setting('agriculture_farm_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','agriculture-farm'),
       'section' => 'agriculture_farm_single_post'
    ));

    $wp_customize->add_setting( 'agriculture_farm_single_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	) );
	$wp_customize->add_control( 'agriculture_farm_single_img_border_radius', array(
		'label'       => esc_html__( 'Single Post Image Border Radius','agriculture-farm' ),
		'section'     => 'agriculture_farm_single_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'agriculture_farm_single_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control('agriculture_farm_single_img_box_shadow',array(
		'label' => esc_html__( 'Single Post Image Shadow','agriculture-farm' ),
		'section' => 'agriculture_farm_single_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

	$wp_customize->add_setting('agriculture_farm_single_post_first_caps',array(
        'default' => false,
        'sanitize_callback' => 'agriculture_farm_sanitize_checkbox',
    ));
	$wp_customize->add_control( 'agriculture_farm_single_post_first_caps',array(
		'label' => esc_html__('First Cap (First Capital Letter)', 'agriculture-farm'),
		'type' => 'checkbox',
		'section' => 'agriculture_farm_single_post',
	));

    $wp_customize->add_setting( 'agriculture_farm_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
		) );
	$wp_customize->add_control('agriculture_farm_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Single Post Comment Box','agriculture-farm'),
		'section' => 'agriculture_farm_single_post'
		));

	$wp_customize->add_setting( 'agriculture_farm_single_post_breadcrumb',array(
		'default' => false,
		'transport' => 'refresh',
      	'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ) );
    $wp_customize->add_control('agriculture_farm_single_post_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Post Breadcrumb','agriculture-farm' ),
        'section' => 'agriculture_farm_single_post'
    ));

    // show/hide single post pagination
    $wp_customize->add_setting('agriculture_farm_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Pagination','agriculture-farm'),
       'section' => 'agriculture_farm_single_post'
    ));

    //Comment Textarea Width
    $wp_customize->add_setting( 'agriculture_farm_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'agriculture_farm_comment_width', array(
		'label'  => __('Comment Textarea Width','agriculture-farm'),
		'section'  => 'agriculture_farm_single_post',
		'description' => __('Measurement is in %.','agriculture-farm'),
		'input_attrs' => array(
		   'step'=> 1,
		   'min' => 0,
		   'max' => 100,
		),
		'type'		=> 'number'
    ));

    $wp_customize->add_setting( 'agriculture_farm_single_post_meta_seperator', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'agriculture_farm_single_post_meta_seperator', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','agriculture-farm' ),
		'section'     => 'agriculture_farm_single_post',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','agriculture-farm'),
		'type'        => 'text',
		'settings'    => 'agriculture_farm_single_post_meta_seperator',
	) );

	$wp_customize->add_setting('agriculture_farm_title_comment_form',array(
       'default' => __('Leave a Reply','agriculture-farm'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('agriculture_farm_title_comment_form',array(
       'type' => 'text',
       'label' => __('Comment Form Heading Text','agriculture-farm'),
       'section' => 'agriculture_farm_single_post'
    ));

    $wp_customize->add_setting('agriculture_farm_comment_form_button_content',array(
       'default' => __('Post Comment','agriculture-farm'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('agriculture_farm_comment_form_button_content',array(
       'type' => 'text',
       'label' => __('Comment Form Button Text','agriculture-farm'),
       'section' => 'agriculture_farm_single_post'
    ));

    //Grid Post Settings
	$wp_customize->add_section('agriculture_farm_grid_post',array(
		'title'	=> __('Grid Post Settings','agriculture-farm'),
		'panel' => 'agriculture_farm_panel_id',
	));

	$wp_customize->add_setting('agriculture_farm_grid_post_date',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_grid_post_date',array(
       'type' => 'checkbox',
       'label' => __('Post Date','agriculture-farm'),
       'section' => 'agriculture_farm_grid_post'
    ));

	$wp_customize->add_setting('agriculture_farm_grid_post_date_icon',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_grid_post_date_icon',array(
		'label'	=> __('Post Date Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_grid_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('agriculture_farm_grid_post_author',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_grid_post_author',array(
       'type' => 'checkbox',
       'label' => __('Post Author','agriculture-farm'),
       'section' => 'agriculture_farm_grid_post'
    ));

	$wp_customize->add_setting('agriculture_farm_grid_post_author_icon',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_grid_post_author_icon',array(
		'label'	=> __('Post Date Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_grid_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('agriculture_farm_grid_post_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_grid_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Post Comment','agriculture-farm'),
       'section' => 'agriculture_farm_grid_post'
    ));

	$wp_customize->add_setting('agriculture_farm_grid_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_grid_post_comment_icon',array(
		'label'	=> __('Post Date Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_grid_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('agriculture_farm_grid_post_time',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_grid_post_time',array(
       'type' => 'checkbox',
       'label' => __('Post Time','agriculture-farm'),
       'section' => 'agriculture_farm_grid_post'
    ));

	$wp_customize->add_setting('agriculture_farm_grid_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_grid_post_time_icon',array(
		'label'	=> __('Post Date Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_grid_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'agriculture_farm_grid_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'absint',
	) );
	$wp_customize->add_control( 'agriculture_farm_grid_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','agriculture-farm' ),
		'section'     => 'agriculture_farm_grid_post',
		'type'        => 'number',
		'settings'    => 'agriculture_farm_grid_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'agriculture_farm_metabox_separator_grid_post', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'agriculture_farm_metabox_separator_grid_post', array(
		'label'       => esc_html__( 'Meta Box Separator','agriculture-farm' ),
		'input_attrs' => array(
            'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'agriculture-farm' ),
        ),
		'section'     => 'agriculture_farm_grid_post',
		'type'        => 'text',
		'settings'    => 'agriculture_farm_metabox_separator_grid_post',
	) );

    //Related Post Settings
	$wp_customize->add_section('agriculture_farm_related_post',array(
		'title'	=> __('Related Post Settings','agriculture-farm'),
		'panel' => 'agriculture_farm_panel_id',
	));

    $wp_customize->add_setting( 'agriculture_farm_show_related_post',array(
		'default' => true,
      	'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ) );
    $wp_customize->add_control('agriculture_farm_show_related_post',array(
    	'type' => 'checkbox',
        'label' => __( 'Related Post','agriculture-farm' ),
        'section' => 'agriculture_farm_related_post'
    ));

    $wp_customize->add_setting('agriculture_farm_related_posts_taxanomies_options',array(
        'default' => 'categories',
        'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control('agriculture_farm_related_posts_taxanomies_options',array(
        'type' => 'radio',
        'label' => __('Related Post Taxonomies','agriculture-farm'),
        'section' => 'agriculture_farm_related_post',
        'choices' => array(
            'categories' => __('Categories','agriculture-farm'),
            'tags' => __('Tags','agriculture-farm'),
        ),
	) );

	$wp_customize->add_setting('agriculture_farm_related_post_title',array(
		'default'=> __('Related Posts','agriculture-farm'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_related_post_title',array(
		'label'	=> __('Related Post Title','agriculture-farm'),
		'section'=> 'agriculture_farm_related_post',
		'type'=> 'text'
	));

    $wp_customize->add_setting('agriculture_farm_show_featured_image_related_post',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_show_featured_image_related_post',array(
       'type' => 'checkbox',
       'label' => __('Related Post Image','agriculture-farm'),
       'section' => 'agriculture_farm_related_post'
    ));

   	$wp_customize->add_setting('agriculture_farm_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control('agriculture_farm_related_posts_number',array(
		'label'	=> __('Related Post Number','agriculture-farm'),
		'section'=> 'agriculture_farm_related_post',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	$wp_customize->add_setting('agriculture_farm_related_post_excerpt_number',array(
		'default'=> 20,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control('agriculture_farm_related_post_excerpt_number',array(
		'label'	=> __('Related Post Content Limit','agriculture-farm'),
		'section'=> 'agriculture_farm_related_post',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//Layouts
	$wp_customize->add_section('agriculture_farm_left_right', array(
		'title'    => __('Layout Settings', 'agriculture-farm'),
		'priority' => null,
		'panel'    => 'agriculture_farm_panel_id',
	));

	$wp_customize->add_setting('agriculture_farm_theme_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control('agriculture_farm_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','agriculture-farm'),
        'description' => __('Here you can change the Width layout. ','agriculture-farm'),
        'section' => 'agriculture_farm_left_right',
        'choices' => array(
            'Default' => __('Default','agriculture-farm'),
            'Container' => __('Container','agriculture-farm'),
            'Box Container' => __('Box Container','agriculture-farm'),
        ),
	) );

	$wp_customize->add_setting('agriculture_farm_preloader_option',array(
       'default' => false,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','agriculture-farm'),
       'section' => 'agriculture_farm_left_right'
    ));

    $wp_customize->add_setting('agriculture_farm_preloader_type_options', array(
		'default'           => 'Preloader 1',
		'sanitize_callback' => 'agriculture_farm_sanitize_choices',
	));
	$wp_customize->add_control('agriculture_farm_preloader_type_options',array(
		'type'           => 'radio',
		'label'          => __('Preloader Type', 'agriculture-farm'),
		'section'        => 'agriculture_farm_left_right',
		'choices'        => array(
			'Preloader 1'  => __('Preloader 1', 'agriculture-farm'),
			'Preloader 2' => __('Preloader 2', 'agriculture-farm'),
		),
	));

	$wp_customize->add_setting('agriculture_farm_preloader_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'agriculture_farm_preloader_bg_image',array(
        'label' => __('Preloader Background Image','agriculture-farm'),
        'section' => 'agriculture_farm_left_right'
	)));

    $wp_customize->add_setting( 'agriculture_farm_loader_background_color_first', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_loader_background_color_first', array(
  		'label' => __('Background Color for Preloader', 'agriculture-farm'),
	    'section' => 'agriculture_farm_left_right',
	    'settings' => 'agriculture_farm_loader_background_color_first',
  	)));

  	$wp_customize->add_setting( 'agriculture_farm_breadcrumb_color', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_breadcrumb_color', array(
  		'label' => __('Breadcrumb Color', 'agriculture-farm'),
	    'section' => 'agriculture_farm_left_right',
	    'settings' => 'agriculture_farm_breadcrumb_color',
  	)));

  	$wp_customize->add_setting( 'agriculture_farm_breadcrumb_bg_color', array(
	    'default' => '#50d430',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_breadcrumb_bg_color', array(
  		'label' => __('Breadcrumb Background Color', 'agriculture-farm'),
	    'section' => 'agriculture_farm_left_right',
	    'settings' => 'agriculture_farm_breadcrumb_bg_color',
  	)));

    $wp_customize->add_setting( 'agriculture_farm_single_page_breadcrumb',array(
		'default' => false,
      	'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ) );
    $wp_customize->add_control('agriculture_farm_single_page_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Page Breadcrumb','agriculture-farm' ),
        'section' => 'agriculture_farm_left_right'
    ));

	$wp_customize->add_setting('agriculture_farm_layout_options', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'agriculture_farm_sanitize_choices',
	));
	$wp_customize->add_control('agriculture_farm_layout_options',array(
		'type'           => 'radio',
		'label'          => __('Blog Post Layouts', 'agriculture-farm'),
		'section'        => 'agriculture_farm_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'agriculture-farm'),
			'Right Sidebar' => __('Right Sidebar', 'agriculture-farm'),
			'One Column'    => __('One Column', 'agriculture-farm'),
			'Three Columns' => __('Three Columns', 'agriculture-farm'),
			'Four Columns'  => __('Four Columns', 'agriculture-farm'),
			'Grid Layout'   => __('Grid Layout', 'agriculture-farm')
		),
	));

	$wp_customize->add_setting('agriculture_farm_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar', 
		'sanitize_callback' => 'agriculture_farm_sanitize_choices',
	));
	$wp_customize->add_control('agriculture_farm_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'agriculture-farm'),
		'section'        => 'agriculture_farm_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'agriculture-farm'),
			'Right Sidebar' => __('Right Sidebar', 'agriculture-farm'),
			'One Column'    => __('One Column', 'agriculture-farm'),
		),
	));

	$wp_customize->add_setting('agriculture_farm_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'agriculture_farm_sanitize_choices',
	));
	$wp_customize->add_control('agriculture_farm_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'agriculture-farm'),
		'section'        => 'agriculture_farm_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'agriculture-farm'),
			'Right Sidebar' => __('Right Sidebar', 'agriculture-farm'),
			'One Column'    => __('One Column', 'agriculture-farm'),
		),
	));

	//no Result Found
	$wp_customize->add_section('agriculture_farm_noresult_found',array(
		'title'	=> __('No Result Found','agriculture-farm'),
		'panel' => 'agriculture_farm_panel_id',
	));	

	$wp_customize->add_setting('agriculture_farm_nosearch_found_title',array(
		'default'=> __('Nothing Found','agriculture-farm'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','agriculture-farm'),
		'section'=> 'agriculture_farm_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('agriculture_farm_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','agriculture-farm'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','agriculture-farm'),
		'section'=> 'agriculture_farm_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('agriculture_farm_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','agriculture-farm'),
       'section' => 'agriculture_farm_noresult_found'
    ));

	//404 Page Setting
	$wp_customize->add_section('agriculture_farm_404_page_setting',array(
		'title'	=> __('404 Page','agriculture-farm'),
		'panel' => 'agriculture_farm_panel_id',
	));	

	$wp_customize->add_setting('agriculture_farm_title_404_page',array(
		'default'=> __('404 Not Found','agriculture-farm'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_title_404_page',array(
		'label'	=> __('404 Page Title','agriculture-farm'),
		'section'=> 'agriculture_farm_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('agriculture_farm_content_404_page',array(
		'default'=>  __('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','agriculture-farm'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_content_404_page',array(
		'label'	=> __('404 Page Content','agriculture-farm'),
		'section'=> 'agriculture_farm_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('agriculture_farm_button_404_page',array(
		'default'=> __('Back to Home Page','agriculture-farm'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farm_button_404_page',array(
		'label'	=> __('404 Page Button','agriculture-farm'),
		'section'=> 'agriculture_farm_404_page_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('agriculture_farm_responsive_setting',array(
		'title'	=> __('Responsive Settings','agriculture-farm'),
		'panel' => 'agriculture_farm_panel_id',
	));

	$wp_customize->add_setting('agriculture_farm_button_alignment',array(
        'default' => 'Center',
        'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control('agriculture_farm_button_alignment',array(
        'type' => 'select',
        'label' => __('Menu Button Alignment','agriculture-farm'),
        'section' => 'agriculture_farm_responsive_setting',
        'choices' => array(
            'Left' => __('Left','agriculture-farm'),
            'Right' => __('Right','agriculture-farm'),
            'Center' => __('Center','agriculture-farm'),
        ),
	) );

	$wp_customize->add_setting( 'agriculture_farm_toggle_button_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'agriculture_farm_toggle_button_color_settings', array(
  		'label' => __('Toggle Button Color', 'agriculture-farm'),
	    'section' => 'agriculture_farm_responsive_setting',
	    'settings' => 'agriculture_farm_toggle_button_color_settings',
  	)));

	$wp_customize->add_setting('agriculture_farm_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_open_menu_icon',array(
		'label'	=> __('Open Menu Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_responsive_setting',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('agriculture_farm_close_menu_icon',array(
		'default'	=> 'far fa-times-circle',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_close_menu_icon',array(
		'label'	=> __('Close Menu Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_responsive_setting',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('agriculture_farm_responsive_slider',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_responsive_slider',array(
       'type' => 'checkbox',
       'label' => __('Slider','agriculture-farm'),
       'section' => 'agriculture_farm_responsive_setting'
    ));

    $wp_customize->add_setting('agriculture_farm_responsive_scroll',array(
       'default' => true,
       'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
    ));
    $wp_customize->add_control('agriculture_farm_responsive_scroll',array(
       'type' => 'checkbox',
       'label' => __('Scroll To Top','agriculture-farm'),
       'section' => 'agriculture_farm_responsive_setting'
    ));

	//footer
	$wp_customize->add_section('agriculture_farm_footer_section', array(
		'title'       => __('Footer Text', 'agriculture-farm'),
		'priority'    => null,
		'panel'       => 'agriculture_farm_panel_id',
	));

	$wp_customize->add_setting('agriculture_farm_show_hide_footer',array(
		'default' => true,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
	));
	$wp_customize->add_control('agriculture_farm_show_hide_footer',array(
     	'type' => 'checkbox',
      'label' => __('Show / Hide Footer','agriculture-farm'),
      'section' => 'agriculture_farm_footer_section',
	));

	$wp_customize->add_setting('agriculture_farm_footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'agriculture_farm_sanitize_choices',
    ));
    $wp_customize->add_control('agriculture_farm_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'agriculture-farm'),
        'section'     => 'agriculture_farm_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'agriculture-farm'),
        'choices' => array(
            '1'     => __('One', 'agriculture-farm'),
            '2'     => __('Two', 'agriculture-farm'),
            '3'     => __('Three', 'agriculture-farm'),
            '4'     => __('Four', 'agriculture-farm')
        ),
    ));

    $wp_customize->add_setting('agriculture_farm_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'agriculture_farm_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'agriculture-farm'),
		'section'  => 'agriculture_farm_footer_section',
	)));

	$wp_customize->add_setting('agriculture_farm_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'agriculture_farm_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','agriculture-farm'),
        'section' => 'agriculture_farm_footer_section'
	)));

	$wp_customize->add_setting('agriculture_farm_footer_heading',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control('agriculture_farm_footer_heading',array(
	    'type' => 'select',
	    'label' => __('Footer Heading Alignment','agriculture-farm'),
	    'section' => 'agriculture_farm_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','agriculture-farm'),
	        'Center' => __('Center','agriculture-farm'),
	        'Right' => __('Right','agriculture-farm')
	    ),
	) );

	$wp_customize->add_setting('agriculture_farm_footer_content',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control('agriculture_farm_footer_content',array(
	    'type' => 'select',
	    'label' => __('Footer Content Alignment','agriculture-farm'),
	    'section' => 'agriculture_farm_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','agriculture-farm'),
	        'Center' => __('Center','agriculture-farm'),
	        'Right' => __('Right','agriculture-farm')
	    ),
	) );

	$wp_customize->add_setting('agriculture_farm_footer_font_size',array(
		'default'=> 24,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float'
	));
	$wp_customize->add_control('agriculture_farm_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','agriculture-farm'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'agriculture_farm_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('agriculture_farm_footer_text_tranform',array(
		'default' => 'Capitalize',
		'sanitize_callback' => 'agriculture_farm_sanitize_choices'
 	));
 	$wp_customize->add_control('agriculture_farm_footer_text_tranform',array(
		'type' => 'radio',
		'label' => __('Footer Heading Text Transform','agriculture-farm'),
		'section' => 'agriculture_farm_footer_section',
		'choices' => array(
		   'Uppercase' => __('Uppercase','agriculture-farm'),
		   'Lowercase' => __('Lowercase','agriculture-farm'),
		   'Capitalize' => __('Capitalize','agriculture-farm'),
		),
	) );


	$wp_customize->add_setting('agriculture_farm_show_hide_copyright',array(
		'default' => true,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
	));
	$wp_customize->add_control('agriculture_farm_show_hide_copyright',array(
     	'type' => 'checkbox',
        'label' => __('Show / Hide Copyright','agriculture-farm'),
        'section' => 'agriculture_farm_footer_section',
	));

	$wp_customize->add_setting('agriculture_farm_footer_copy', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('agriculture_farm_footer_copy', array(
		'label'   => __('Copyright Text', 'agriculture-farm'),
		'section' => 'agriculture_farm_footer_section',
		'type'    => 'text',
	));

	$wp_customize->add_setting('agriculture_farm_copyright_content_align',array(
        'default' => 'center',
        'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control('agriculture_farm_copyright_content_align',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment ','agriculture-farm'),
        'section' => 'agriculture_farm_footer_section',
        'choices' => array(
            'left' => __('Left','agriculture-farm'),
            'right' => __('Right','agriculture-farm'),
            'center' => __('Center','agriculture-farm'),
        ),
	) );

	$wp_customize->add_setting('agriculture_farm_footer_content_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control('agriculture_farm_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','agriculture-farm' ),
		'section'=> 'agriculture_farm_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('agriculture_farm_copyright_padding',array(
		'default'=> 15,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control('agriculture_farm_copyright_padding',array(
		'label'	=> __('Copyright Padding','agriculture-farm'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'agriculture_farm_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('agriculture_farm_footer_text_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'agriculture_farm_footer_text_color', array(
		'label'    => __('Copyright Text Color', 'agriculture-farm'),
		'section'  => 'agriculture_farm_footer_section',
	)));

	$wp_customize->add_setting('agriculture_farm_footer_text_bg_color', array(
		'default'           => '#50d430',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'agriculture_farm_footer_text_bg_color', array(
		'label'    => __('Copyright Background Color', 'agriculture-farm'),
		'section'  => 'agriculture_farm_footer_section',
	)));

	$wp_customize->add_setting('agriculture_farm_enable_disable_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'agriculture_farm_sanitize_checkbox'
	));
	$wp_customize->add_control('agriculture_farm_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','agriculture-farm'),
      	'section' => 'agriculture_farm_footer_section',
	));

	$wp_customize->add_setting('agriculture_farm_back_to_top_icon',array(
		'default'	=> 'fas fa-chevron-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Agriculture_Farm_Icon_Changer(
        $wp_customize,'agriculture_farm_back_to_top_icon',array(
		'label'	=> __('Scroll Back to Top Icon','agriculture-farm'),
		'transport' => 'refresh',
		'section'	=> 'agriculture_farm_footer_section',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('agriculture_farm_back_to_top_bg_color', array(
		'default'           => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'agriculture_farm_back_to_top_bg_color', array(
		'label'    => __('Back to Top Background Color', 'agriculture-farm'),
		'section'  => 'agriculture_farm_footer_section',
	)));

    $wp_customize->add_setting('agriculture_farm_back_to_top_bg_hover_color', array(
		'default'           => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'agriculture_farm_back_to_top_bg_hover_color', array(
		'label'    => __('Back to Top Background Hover Color', 'agriculture-farm'),
		'section'  => 'agriculture_farm_footer_section',
	)));

	$wp_customize->add_setting('agriculture_farm_scroll_setting',array(
        'default' => 'Right',
        'sanitize_callback' => 'agriculture_farm_sanitize_choices'
	));
	$wp_customize->add_control('agriculture_farm_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','agriculture-farm'),
        'section' => 'agriculture_farm_footer_section',
        'choices' => array(
            'Left' => __('Left','agriculture-farm'),
            'Right' => __('Right','agriculture-farm'),
            'Center' => __('Center','agriculture-farm'),
        ),
	) );

	$wp_customize->add_setting('agriculture_farm_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'	=> 'agriculture_farm_sanitize_float',
	));
	$wp_customize->add_control('agriculture_farm_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','agriculture-farm'),
		'section'=> 'agriculture_farm_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	)	);
	
}
add_action('customize_register', 'agriculture_farm_customize_register');

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Agriculture_Farm_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if (is_null($instance)) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action('customize_register', array($this, 'sections'));

		// Register scripts and styles for the conagriculture_farm_Customizetrols.
		add_action('customize_controls_enqueue_scripts', array($this, 'enqueue_control_scripts'), 0);
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections($manager) {

		// Load custom sections.
		load_template(trailingslashit(get_template_directory()).'/inc/section-pro.php');

		// Register custom section types.
		$manager->register_section_type('Agriculture_Farm_Customize_Section_Pro');

		// Register sections.
		$manager->add_section(
			new Agriculture_Farm_Customize_Section_Pro(
				$manager,
				'agriculture_farm_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__('Agriculture Farm', 'agriculture-farm'),
					'pro_text' => esc_html__('Get Pro', 'agriculture-farm'),
					'pro_url'  => esc_url('https://www.themeshopy.com/themes/agriculture-farm-wordpress-theme/'),
				)
			)
		);

		$manager->add_section(
			new Agriculture_Farm_Customize_Section_Pro(
				$manager,
				'agriculture_farm_doc_link',
				array(
					'priority' => 10,
					'title'    => esc_html__('Guide', 'agriculture-farm'),
					'pro_text' => esc_html__('Documentation', 'agriculture-farm'),
					'pro_url'  => esc_url('https://themeshopy.com/demo/docs/free-agriculture-farm/'),
				)
			)
		);

		$manager->add_section(
			new Agriculture_Farm_Customize_Section_Pro(
				$manager,
				'agriculture_farm_demo_link',
				array(
					'priority' => 11,
					'title'    => esc_html__('Live Demo', 'agriculture-farm'),
					'pro_text' => esc_html__('Preview', 'agriculture-farm'),
					'pro_url'  => esc_url('https://www.themeshopy.com/agriculture-farm-pro/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script('agriculture-farm-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/js/customize-controls.js', array('customize-controls'));
		wp_enqueue_style('agriculture-farm-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');
	}
}

// Doing this customizer thang!
Agriculture_Farm_Customize::get_instance();