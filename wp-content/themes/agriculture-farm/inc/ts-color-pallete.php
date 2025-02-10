<?php

	/*---------------------------Theme color option-------------------*/
	$agriculture_farm_theme_color_first = get_theme_mod('agriculture_farm_theme_color_first');

	$agriculture_farm_custom_css = '';

	$agriculture_farm_custom_css .='.bradcrumbs a, .bradcrumbs span, .innerlightbox input[type="submit"], .read-moresec a:hover, #slider .carousel-caption .read-btn a, .slider-nex-pre i:hover, .box:hover, .read-more-btn a, #footer input[type="submit"], .copyright, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebar form.woocommerce-product-search button, #sidebar input[type="submit"], #sidebar .tagcloud a:hover, .post-categories li a, .toggle-menu i, #sidebar #block-2 button[type="submit"], #sidebar .widget_block.widget_tag_cloud a:hover, .page-box-single .wp-block-tag-cloud a:hover, .wp-block-woocommerce-cart .wc-block-components-totals-coupon a, .wp-block-woocommerce-cart .wc-block-cart__submit-container a, .wp-block-woocommerce-checkout .wc-block-components-totals-coupon a, .wp-block-woocommerce-checkout .wc-block-checkout__actions_row a{';
		$agriculture_farm_custom_css .='background-color: '.esc_attr($agriculture_farm_theme_color_first).';';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_custom_css .='p.logged-in-as a, .border-rig a:hover, .info-mail:hover, .social-icons a:hover, .primary-navigation li a:hover, .primary-navigation a:focus, #slider .carousel-caption .read-btn a:hover, .metabox i, .page-box-single .metabox, a.showcoupon,.woocommerce-message::before, h2.entry-title,h1.page-title, .pagination a:hover, .pagination .current, .page-links .post-page-numbers.current, .page-links a:hover{';
		$agriculture_farm_custom_css .='color: '.esc_attr($agriculture_farm_theme_color_first).';';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_custom_css .='#comments input[type="submit"].submit, nav.woocommerce-MyAccount-navigation ul li{';
		$agriculture_farm_custom_css .='background-color: '.esc_attr($agriculture_farm_theme_color_first).'!important;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_custom_css .='#sidebar ul li:before{';
		$agriculture_farm_custom_css .='border-color: '.esc_attr($agriculture_farm_theme_color_first).';';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_custom_css .='.page-box .new-text h2:after, .woocommerce-message{';
		$agriculture_farm_custom_css .='border-top-color: '.esc_attr($agriculture_farm_theme_color_first).';';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_custom_css .='@media screen and (max-width: 1000px){';
	$agriculture_farm_custom_css .='.search-box i{';
		$agriculture_farm_custom_css .='background-color: '.esc_attr($agriculture_farm_theme_color_first).';';
	$agriculture_farm_custom_css .='} }';

	/*---------------------------Width Layout -------------------*/
	$agriculture_farm_theme_lay = get_theme_mod( 'agriculture_farm_theme_options','Default');
    if($agriculture_farm_theme_lay == 'Default'){
		$agriculture_farm_custom_css .='body{';
			$agriculture_farm_custom_css .='max-width: 100%;';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_theme_lay == 'Container'){
		$agriculture_farm_custom_css .='body{';
			$agriculture_farm_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$agriculture_farm_custom_css .='}';
		$agriculture_farm_custom_css .='.serach_outer{';
			$agriculture_farm_custom_css .='width: 97.7%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_theme_lay == 'Box Container'){
		$agriculture_farm_custom_css .='body{';
			$agriculture_farm_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$agriculture_farm_custom_css .='}';
		$agriculture_farm_custom_css .='.serach_outer{';
			$agriculture_farm_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0';
		$agriculture_farm_custom_css .='}';
		$agriculture_farm_custom_css .='.page-template-custom-front-page #header{';
			$agriculture_farm_custom_css .='right:0;';
		$agriculture_farm_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$agriculture_farm_theme_lay = get_theme_mod( 'agriculture_farm_slider_image_opacity','0.5');
	if($agriculture_farm_theme_lay == '0'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.1'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.1';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.2'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.2';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.3'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.3';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.4'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.4';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.5'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.5';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.6'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.6';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.7'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.7';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.8'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.8';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.9'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.9';
		$agriculture_farm_custom_css .='}';
	}

	$agriculture_farm_slider_hide = get_theme_mod('agriculture_farm_slider_hide', true);
	if($agriculture_farm_slider_hide == false){
		$agriculture_farm_custom_css .='.page-template-custom-front-page #header{';
			$agriculture_farm_custom_css .='position: static; background: #e3e8e9; padding: 10px 0;';
		$agriculture_farm_custom_css .='}';
		$agriculture_farm_custom_css .='#home-services{';
			$agriculture_farm_custom_css .='position: static; margin: 30px 0 0 0';
		$agriculture_farm_custom_css .='}';
	}

	/*------------- Button Settings option-------------------*/
	$agriculture_farm_button_padding_top_bottom = get_theme_mod('agriculture_farm_button_padding_top_bottom');
	$agriculture_farm_button_padding_left_right = get_theme_mod('agriculture_farm_button_padding_left_right');
	$agriculture_farm_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .read-btn a, #comments .form-submit input[type="submit"],#category .explore-btn a{';
		$agriculture_farm_custom_css .='padding-top: '.esc_attr($agriculture_farm_button_padding_top_bottom).'px !important; padding-bottom: '.esc_attr($agriculture_farm_button_padding_top_bottom).'px !important; padding-left: '.esc_attr($agriculture_farm_button_padding_left_right).'px !important; padding-right: '.esc_attr($agriculture_farm_button_padding_left_right).'px !important; display:inline-block;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_button_border_radius = get_theme_mod('agriculture_farm_button_border_radius');
	$agriculture_farm_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .read-btn a, #comments .form-submit input[type="submit"], #category .explore-btn a{';
		$agriculture_farm_custom_css .='border-radius: '.esc_attr($agriculture_farm_button_border_radius).'px;';
	$agriculture_farm_custom_css .='}';

	/*------------------ Skin Option  -------------------*/
	$agriculture_farm_theme_lay = get_theme_mod( 'agriculture_farm_background_skin_mode','Transparent Background');
    if($agriculture_farm_theme_lay == 'With Background'){
		$agriculture_farm_custom_css .='.page-box, #sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .noresult-content{';
			$agriculture_farm_custom_css .='background-color: #fff;';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_theme_lay == 'Transparent Background'){
		$agriculture_farm_custom_css .='.page-box-single{';
			$agriculture_farm_custom_css .='background-color: transparent;';
		$agriculture_farm_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$agriculture_farm_top_bottom_product_button_padding = get_theme_mod('agriculture_farm_top_bottom_product_button_padding', 10);
	$agriculture_farm_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$agriculture_farm_custom_css .='padding-top: '.esc_attr($agriculture_farm_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($agriculture_farm_top_bottom_product_button_padding).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_left_right_product_button_padding = get_theme_mod('agriculture_farm_left_right_product_button_padding', 16);
	$agriculture_farm_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$agriculture_farm_custom_css .='padding-left: '.esc_attr($agriculture_farm_left_right_product_button_padding).'px; padding-right: '.esc_attr($agriculture_farm_left_right_product_button_padding).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_product_button_border_radius = get_theme_mod('agriculture_farm_product_button_border_radius', 0);
	$agriculture_farm_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$agriculture_farm_custom_css .='border-radius: '.esc_attr($agriculture_farm_product_button_border_radius).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_show_related_products = get_theme_mod('agriculture_farm_show_related_products',true);
	if($agriculture_farm_show_related_products == false){
		$agriculture_farm_custom_css .='.related.products{';
			$agriculture_farm_custom_css .='display: none;';
		$agriculture_farm_custom_css .='}';
	}

	$agriculture_farm_show_wooproducts_border = get_theme_mod('agriculture_farm_show_wooproducts_border', false);
	if($agriculture_farm_show_wooproducts_border == true){
		$agriculture_farm_custom_css .='.products li{';
			$agriculture_farm_custom_css .='border: 1px solid #767676;';
		$agriculture_farm_custom_css .='}';
	}

	$agriculture_farm_top_bottom_wooproducts_padding = get_theme_mod('agriculture_farm_top_bottom_wooproducts_padding',0);
	$agriculture_farm_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$agriculture_farm_custom_css .='padding-top: '.esc_attr($agriculture_farm_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($agriculture_farm_top_bottom_wooproducts_padding).'px !important;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_left_right_wooproducts_padding = get_theme_mod('agriculture_farm_left_right_wooproducts_padding',0);
	$agriculture_farm_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$agriculture_farm_custom_css .='padding-left: '.esc_attr($agriculture_farm_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($agriculture_farm_left_right_wooproducts_padding).'px !important;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_wooproducts_border_radius = get_theme_mod('agriculture_farm_wooproducts_border_radius',0);
	$agriculture_farm_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$agriculture_farm_custom_css .='border-radius: '.esc_attr($agriculture_farm_wooproducts_border_radius).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_wooproducts_box_shadow = get_theme_mod('agriculture_farm_wooproducts_box_shadow',0);
	$agriculture_farm_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$agriculture_farm_custom_css .='box-shadow: '.esc_attr($agriculture_farm_wooproducts_box_shadow).'px '.esc_attr($agriculture_farm_wooproducts_box_shadow).'px '.esc_attr($agriculture_farm_wooproducts_box_shadow).'px #e4e4e4;';
	$agriculture_farm_custom_css .='}';

	/*-------------- Footer Text -------------------*/

	$agriculture_farm_footer_heading = get_theme_mod( 'agriculture_farm_footer_heading','Left');
    if($agriculture_farm_footer_heading == 'Left'){
		$agriculture_farm_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$agriculture_farm_custom_css .='text-align: left !important;';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_footer_heading == 'Center'){
		$agriculture_farm_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$agriculture_farm_custom_css .='text-align: center !important;';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_footer_heading == 'Right'){
		$agriculture_farm_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$agriculture_farm_custom_css .='text-align: right !important;';
		$agriculture_farm_custom_css .='}';
	}

	$agriculture_farm_footer_content = get_theme_mod( 'agriculture_farm_footer_content','Left');
    if($agriculture_farm_footer_content == 'Left'){
		$agriculture_farm_custom_css .='#footer .widget{';
		$agriculture_farm_custom_css .='text-align: left;';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_footer_content == 'Center'){
		$agriculture_farm_custom_css .='#footer .widget{';
			$agriculture_farm_custom_css .='text-align: center;';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_footer_content == 'Right'){
		$agriculture_farm_custom_css .='#footer .widget{';
			$agriculture_farm_custom_css .='text-align: right;';
		$agriculture_farm_custom_css .='}';
	}

	// Footer Heading Font Size
	$agriculture_farm_footer_font_size = get_theme_mod('agriculture_farm_footer_font_size',24);
	$agriculture_farm_custom_css .='#footer h3{';
		$agriculture_farm_custom_css .='font-size: '.esc_attr($agriculture_farm_footer_font_size).'px;';
	$agriculture_farm_custom_css .='}';

	// Footer Heading Text Transform
	$agriculture_farm_theme_lay = get_theme_mod( 'agriculture_farm_footer_text_tranform','Capitalize');
    if($agriculture_farm_theme_lay == 'Uppercase'){
		$agriculture_farm_custom_css .='#footer h3{';
			$agriculture_farm_custom_css .='text-transform: uppercase;';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_theme_lay == 'Lowercase'){
		$agriculture_farm_custom_css .='#footer h3{';
			$agriculture_farm_custom_css .='text-transform: lowercase;';
		$agriculture_farm_custom_css .='}';
	}
	else if($agriculture_farm_theme_lay == 'Capitalize'){
		$agriculture_farm_custom_css .='#footer h3{';
			$agriculture_farm_custom_css .='text-transform: capitalize;';
		$agriculture_farm_custom_css .='}';
	}

	$agriculture_farm_copyright_content_align = get_theme_mod('agriculture_farm_copyright_content_align');
	if($agriculture_farm_copyright_content_align != false){
		$agriculture_farm_custom_css .='.copyright{';
			$agriculture_farm_custom_css .='text-align: '.esc_attr($agriculture_farm_copyright_content_align).'!important;';
		$agriculture_farm_custom_css .='}';
		$agriculture_farm_custom_css .='
		@media screen and (max-width:575px) {
			.copyright{';
			$agriculture_farm_custom_css .='text-align: center !important;} }';
	}

	$agriculture_farm_footer_content_font_size = get_theme_mod('agriculture_farm_footer_content_font_size', 16);
	$agriculture_farm_custom_css .='.copyright p{';
		$agriculture_farm_custom_css .='font-size: '.esc_attr($agriculture_farm_footer_content_font_size).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_copyright_padding = get_theme_mod('agriculture_farm_copyright_padding', 15);
	$agriculture_farm_custom_css .='.copyright{';
		$agriculture_farm_custom_css .='padding-top: '.esc_attr($agriculture_farm_copyright_padding).'px; padding-bottom: '.esc_attr($agriculture_farm_copyright_padding).'px;';
	$agriculture_farm_custom_css .='}';

	/*------ copyright text color -------*/
	$agriculture_farm_footer_text_color = get_theme_mod('agriculture_farm_footer_text_color');
	if($agriculture_farm_footer_text_color != false){
		$agriculture_farm_custom_css .='.copyright p, .copyright p a{';
			$agriculture_farm_custom_css .='color: '.esc_attr($agriculture_farm_footer_text_color).'!important;';
		$agriculture_farm_custom_css .='}';
	}

	/*------ copyright background css -------*/
	$agriculture_farm_footer_text_bg_color = get_theme_mod('agriculture_farm_footer_text_bg_color');
	if($agriculture_farm_footer_text_bg_color != false){
		$agriculture_farm_custom_css .='.copyright{';
			$agriculture_farm_custom_css .='background-color: '.esc_attr($agriculture_farm_footer_text_bg_color).';';
		$agriculture_farm_custom_css .='}';
	}

	$agriculture_farm_footer_widget_bg_color = get_theme_mod('agriculture_farm_footer_widget_bg_color');
	$agriculture_farm_custom_css .='#footer{';
		$agriculture_farm_custom_css .='background-color: '.esc_attr($agriculture_farm_footer_widget_bg_color).';';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_footer_widget_bg_image = get_theme_mod('agriculture_farm_footer_widget_bg_image');
	if($agriculture_farm_footer_widget_bg_image != false){
		$agriculture_farm_custom_css .='#footer{';
			$agriculture_farm_custom_css .='background: url('.esc_attr($agriculture_farm_footer_widget_bg_image).'); background-size: cover;';
		$agriculture_farm_custom_css .='}';
	}

	// scroll to top bg color
	$agriculture_farm_back_to_top_bg_color = get_theme_mod('agriculture_farm_back_to_top_bg_color');
	$agriculture_farm_custom_css .='#scroll-top{';
		$agriculture_farm_custom_css .='background-color: '.esc_attr($agriculture_farm_back_to_top_bg_color).';';
		$agriculture_farm_custom_css .='border-color: '.esc_attr($agriculture_farm_back_to_top_bg_color).';';
	$agriculture_farm_custom_css .='}';

	// scroll to top bg hover color
	$agriculture_farm_back_to_top_bg_hover_color = get_theme_mod('agriculture_farm_back_to_top_bg_hover_color');
	$agriculture_farm_custom_css .='#scroll-top:hover{';
		$agriculture_farm_custom_css .='background-color: '.esc_attr($agriculture_farm_back_to_top_bg_hover_color).';';
		$agriculture_farm_custom_css .='border-color: '.esc_attr($agriculture_farm_back_to_top_bg_hover_color).';';
	$agriculture_farm_custom_css .='}';

	// scroll to top
	$agriculture_farm_scroll_font_size_icon = get_theme_mod('agriculture_farm_scroll_font_size_icon', 22);
	$agriculture_farm_custom_css .='#scroll-top i{';
		$agriculture_farm_custom_css .='font-size: '.esc_attr($agriculture_farm_scroll_font_size_icon).'px;';
	$agriculture_farm_custom_css .='}';

	// Slider Height 
	$agriculture_farm_slider_image_height = get_theme_mod('agriculture_farm_slider_image_height');
	$agriculture_farm_custom_css .='#slider img{';
		$agriculture_farm_custom_css .='height: '.esc_attr($agriculture_farm_slider_image_height).'px;';
	$agriculture_farm_custom_css .='}';

	// button font size
	$agriculture_farm_button_font_size = get_theme_mod('agriculture_farm_button_font_size');
	$agriculture_farm_custom_css .='.page-box .new-text .read-more-btn a{';
		$agriculture_farm_custom_css .='font-size: '.esc_attr($agriculture_farm_button_font_size).'px;';
	$agriculture_farm_custom_css .='}';

	// font weight
	$agriculture_farm_btn_font_weight = get_theme_mod('agriculture_farm_btn_font_weight');{
	$agriculture_farm_custom_css .='.page-box .new-text .read-more-btn a{';
	$agriculture_farm_custom_css .='font-weight: '.esc_attr($agriculture_farm_btn_font_weight).';';
	$agriculture_farm_custom_css .='}';
	}

	// Button Text Transform
	$agriculture_farm_theme_lay = get_theme_mod( 'agriculture_farm_button_text_transform','Uppercase');
    if($agriculture_farm_theme_lay == 'Uppercase'){
		$agriculture_farm_custom_css .='.page-box .new-text .read-more-btn a{';
			$agriculture_farm_custom_css .='text-transform: uppercase;';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_theme_lay == 'Lowercase'){
		$agriculture_farm_custom_css .='.page-box .new-text .read-more-btn a{';
			$agriculture_farm_custom_css .='text-transform: lowercase;';
		$agriculture_farm_custom_css .='}';
	}
	else if($agriculture_farm_theme_lay == 'Capitalize'){
		$agriculture_farm_custom_css .='.page-box .new-text .read-more-btn a{';
			$agriculture_farm_custom_css .='text-transform: capitalize;';
		$agriculture_farm_custom_css .='}';
	}

	// Display Blog Post 
	$agriculture_farm_display_blog_page_post = get_theme_mod( 'agriculture_farm_display_blog_page_post','In Box');
    if($agriculture_farm_display_blog_page_post == 'Without Box'){
		$agriculture_farm_custom_css .='.page-box{';
			$agriculture_farm_custom_css .='border:none; margin:25px 0;';
		$agriculture_farm_custom_css .='}';
	}

	// Pagination Alignment
	$agriculture_farm_blog_post_alignment = get_theme_mod( 'agriculture_farm_blog_post_alignment','Left');
    if($agriculture_farm_blog_post_alignment == 'Left'){
		$agriculture_farm_custom_css .='.our-services .page-box .new-text{';
		$agriculture_farm_custom_css .='text-align: left';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_blog_post_alignment == 'Center'){
		$agriculture_farm_custom_css .='.our-services .page-box .new-text{';
			$agriculture_farm_custom_css .='text-align: center;';
		$agriculture_farm_custom_css .='}';
		$agriculture_farm_custom_css .='.page-box .new-text h2:after{';
			$agriculture_farm_custom_css .='margin: 15px auto 0;';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_blog_post_alignment == 'Right'){
		$agriculture_farm_custom_css .='.our-services .page-box .new-text{';
			$agriculture_farm_custom_css .='text-align: right;';
		$agriculture_farm_custom_css .='}';
		$agriculture_farm_custom_css .='.page-box .new-text h2{';
			$agriculture_farm_custom_css .='position: relative;';
		$agriculture_farm_custom_css .='}';
		$agriculture_farm_custom_css .='.page-box .new-text h2:after{';
			$agriculture_farm_custom_css .='position: absolute; right: 0;';
		$agriculture_farm_custom_css .='}';
	}

	// Pagination Alignment
	$agriculture_farm_pagination_alignment = get_theme_mod( 'agriculture_farm_pagination_alignment','Left');
    if($agriculture_farm_pagination_alignment == 'Left'){
		$agriculture_farm_custom_css .='.pagination, .nav-links{';
		$agriculture_farm_custom_css .='float: left;';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_pagination_alignment == 'Center'){
		$agriculture_farm_custom_css .='.pagination, .nav-links{';
			$agriculture_farm_custom_css .='justify-content: center; float: none;';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_pagination_alignment == 'Right'){
		$agriculture_farm_custom_css .='.pagination, .nav-links{';
			$agriculture_farm_custom_css .='float: right;';
		$agriculture_farm_custom_css .='}';
	}

	//slider button bg color
	$agriculture_farm_slider_btn_bg_color = get_theme_mod('agriculture_farm_slider_btn_bg_color');
	$agriculture_farm_custom_css .='#slider .carousel-caption .read-btn a{';
		$agriculture_farm_custom_css .='background-color: '.esc_attr($agriculture_farm_slider_btn_bg_color).';';
	$agriculture_farm_custom_css .='}';

	// slider overlay
	$agriculture_farm_slider_overlay = get_theme_mod('agriculture_farm_slider_overlay', true);
	if($agriculture_farm_slider_overlay == false){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:1;';
		$agriculture_farm_custom_css .='}';
	} 
	$agriculture_farm_slider_image_overlay_color = get_theme_mod('agriculture_farm_slider_image_overlay_color', true);
	if($agriculture_farm_slider_overlay != false){
		$agriculture_farm_custom_css .='#slider{';
			$agriculture_farm_custom_css .='background-color: '.esc_attr($agriculture_farm_slider_image_overlay_color).';';
		$agriculture_farm_custom_css .='}';
	}

	// site title and tagline font size option
	$agriculture_farm_site_title_size_option = get_theme_mod('agriculture_farm_site_title_size_option', 30);{
	$agriculture_farm_custom_css .='.logo h1 a, .logo p a{';
	$agriculture_farm_custom_css .='font-size: '.esc_attr($agriculture_farm_site_title_size_option).'px;';
		$agriculture_farm_custom_css .='}';
	}

	$agriculture_farm_site_tagline_size_option = get_theme_mod('agriculture_farm_site_tagline_size_option', 12);{
	$agriculture_farm_custom_css .='.logo p{';
	$agriculture_farm_custom_css .='font-size: '.esc_attr($agriculture_farm_site_tagline_size_option).'px !important;';
		$agriculture_farm_custom_css .='}';
	}

	// woocommerce product sale settings
	$agriculture_farm_border_radius_product_sale = get_theme_mod('agriculture_farm_border_radius_product_sale',0);
	$agriculture_farm_custom_css .='.woocommerce span.onsale {';
		$agriculture_farm_custom_css .='border-radius: '.esc_attr($agriculture_farm_border_radius_product_sale).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_align_product_sale = get_theme_mod('agriculture_farm_align_product_sale', 'Right');
	if($agriculture_farm_align_product_sale == 'Right' ){
		$agriculture_farm_custom_css .='.woocommerce ul.products li.product .onsale{';
			$agriculture_farm_custom_css .=' left:auto; right:0;';
		$agriculture_farm_custom_css .='}';
	}elseif($agriculture_farm_align_product_sale == 'Left' ){
		$agriculture_farm_custom_css .='.woocommerce ul.products li.product .onsale{';
			$agriculture_farm_custom_css .=' left:0; right:auto;';
		$agriculture_farm_custom_css .='}';
	}

	$agriculture_farm_product_sale_font_size = get_theme_mod('agriculture_farm_product_sale_font_size',14);
	$agriculture_farm_custom_css .='.woocommerce span.onsale{';
		$agriculture_farm_custom_css .='font-size: '.esc_attr($agriculture_farm_product_sale_font_size).'px;';
	$agriculture_farm_custom_css .='}';

	// product sale padding top /bottom
	$agriculture_farm_sale_padding_top = get_theme_mod('agriculture_farm_sale_padding_top', '');
	$agriculture_farm_custom_css .='.woocommerce ul.products li.product .onsale{';
	$agriculture_farm_custom_css .='padding-top: '.esc_attr($agriculture_farm_sale_padding_top).'px; padding-bottom: '.esc_attr($agriculture_farm_sale_padding_top).'px !important;';
	$agriculture_farm_custom_css .='}';

	// product sale padding left/right
	$agriculture_farm_sale_padding_left = get_theme_mod('agriculture_farm_sale_padding_left', '');
	$agriculture_farm_custom_css .='.woocommerce ul.products li.product .onsale{';
	$agriculture_farm_custom_css .='padding-left: '.esc_attr($agriculture_farm_sale_padding_left).'px; padding-right: '.esc_attr($agriculture_farm_sale_padding_left).'px;';
	$agriculture_farm_custom_css .='}';

	// preloader background image
	$agriculture_farm_preloader_bg_image = get_theme_mod('agriculture_farm_preloader_bg_image');
	if($agriculture_farm_preloader_bg_image != false){
		$agriculture_farm_custom_css .='#loader-wrapper .loader-section, #loader-wrapper{';
			$agriculture_farm_custom_css .='background: url('.esc_attr($agriculture_farm_preloader_bg_image).'); background-size: cover;';
		$agriculture_farm_custom_css .='}';
	}

	// preloader background option 
	$agriculture_farm_loader_background_color_first = get_theme_mod('agriculture_farm_loader_background_color_first');
	$agriculture_farm_custom_css .='#loader-wrapper .loader-section, #loader-wrapper{';
		$agriculture_farm_custom_css .='background-color: '.esc_attr($agriculture_farm_loader_background_color_first).';';
	$agriculture_farm_custom_css .='} ';

	// breadcrumb color
	$agriculture_farm_breadcrumb_color = get_theme_mod('agriculture_farm_breadcrumb_color');
	$agriculture_farm_custom_css .='.bradcrumbs a, .bradcrumbs span{';
	$agriculture_farm_custom_css .='color: '.esc_attr($agriculture_farm_breadcrumb_color).';';
	$agriculture_farm_custom_css .='} ';

	// breadcrumb bg color
	$agriculture_farm_breadcrumb_bg_color = get_theme_mod('agriculture_farm_breadcrumb_bg_color');
	$agriculture_farm_custom_css .='.bradcrumbs a, .bradcrumbs span{';
	$agriculture_farm_custom_css .='background-color: '.esc_attr($agriculture_farm_breadcrumb_bg_color).';';
	$agriculture_farm_custom_css .='} ';

	// woocommerce Product Navigation
	$agriculture_farm_products_navigation = get_theme_mod('agriculture_farm_products_navigation', 'Yes');
	if($agriculture_farm_products_navigation == 'No'){
		$agriculture_farm_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$agriculture_farm_custom_css .='display: none;';
		$agriculture_farm_custom_css .='}';
	}

	// featured image setting
	$agriculture_farm_featured_img_border_radius = get_theme_mod('agriculture_farm_featured_img_border_radius', 0);
	$agriculture_farm_custom_css .='.our-services img{';
		$agriculture_farm_custom_css .='border-radius: '.esc_attr($agriculture_farm_featured_img_border_radius).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_featured_img_box_shadow = get_theme_mod('agriculture_farm_featured_img_box_shadow',0);
	$agriculture_farm_custom_css .='.our-services img{';
		$agriculture_farm_custom_css .='box-shadow: '.esc_attr($agriculture_farm_featured_img_box_shadow).'px '.esc_attr($agriculture_farm_featured_img_box_shadow).'px '.esc_attr($agriculture_farm_featured_img_box_shadow).'px #ccc;';
	$agriculture_farm_custom_css .='}';

	//First Cap (Blog Post)
	$agriculture_farm_show_first_caps = get_theme_mod('agriculture_farm_show_first_caps', 'false');
	if($agriculture_farm_show_first_caps == 'true' ){
	$agriculture_farm_custom_css .='.page-box .entry-content p:nth-of-type(1)::first-letter{';
	$agriculture_farm_custom_css .=' font-size: 55px; font-weight: 600;';
	$agriculture_farm_custom_css .=' margin-right: 6px;';
	$agriculture_farm_custom_css .=' line-height: 1;';
	$agriculture_farm_custom_css .='}';
	}elseif($agriculture_farm_show_first_caps == 'false' ){
	$agriculture_farm_custom_css .='.page-box .entry-content p:nth-of-type(1)::first-letter {';
	$agriculture_farm_custom_css .='display: none;';
	$agriculture_farm_custom_css .='}';
	}

	//First Cap (Single Post)
	$agriculture_farm_single_post_first_caps = get_theme_mod('agriculture_farm_single_post_first_caps', 'false');
	if($agriculture_farm_single_post_first_caps == 'true' ){
	$agriculture_farm_custom_css .='.page-box-single .new-text .entry-content p:nth-of-type(1)::first-letter{';
	$agriculture_farm_custom_css .=' font-size: 55px; font-weight: 600;';
	$agriculture_farm_custom_css .=' margin-right: 6px;';
	$agriculture_farm_custom_css .=' line-height: 1;';
	$agriculture_farm_custom_css .='}';
	}elseif($agriculture_farm_single_post_first_caps == 'false' ){
	$agriculture_farm_custom_css .='.page-box-single .new-text .entry-content p:nth-of-type(1)::first-letter {';
	$agriculture_farm_custom_css .='display: none;';
	$agriculture_farm_custom_css .='}';
	}

	// slider top and bottom padding
	$agriculture_farm_top_bottom_slider_content_space = get_theme_mod('agriculture_farm_top_bottom_slider_content_space');
	$agriculture_farm_left_right_slider_content_space = get_theme_mod('agriculture_farm_left_right_slider_content_space');
	$agriculture_farm_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .know-btn{';
		$agriculture_farm_custom_css .='top: '.esc_attr($agriculture_farm_top_bottom_slider_content_space).'%; bottom: '.esc_attr($agriculture_farm_top_bottom_slider_content_space).'%;left: '.esc_attr($agriculture_farm_left_right_slider_content_space).'%;right: '.esc_attr($agriculture_farm_left_right_slider_content_space).'%;';
	$agriculture_farm_custom_css .='}';

	// responsive menu button 
	$agriculture_farm_button_alignment = get_theme_mod('agriculture_farm_button_alignment');
	if($agriculture_farm_button_alignment != false){
		$agriculture_farm_custom_css .='.toggle-menu.mobile-menu{';
			$agriculture_farm_custom_css .='text-align: '.esc_attr($agriculture_farm_button_alignment).';';
		$agriculture_farm_custom_css .='}';
	} 

	// responsive media
	$agriculture_farm_slider = get_theme_mod( 'agriculture_farm_responsive_slider',true);
	if($agriculture_farm_slider == true && get_theme_mod( 'agriculture_farm_slider_hide', true) == false){
    	$agriculture_farm_custom_css .='#slider{';
			$agriculture_farm_custom_css .='display:none;';
		$agriculture_farm_custom_css .='} ';
	}
    if($agriculture_farm_slider == true){
    	$agriculture_farm_custom_css .='@media screen and (max-width:575px) {';
		$agriculture_farm_custom_css .='#slider{';
			$agriculture_farm_custom_css .='display:block;';
		$agriculture_farm_custom_css .='} }';
	}else if($agriculture_farm_slider == false){
		$agriculture_farm_custom_css .='@media screen and (max-width:575px) {';
		$agriculture_farm_custom_css .='#slider{';
			$agriculture_farm_custom_css .='display:none;';
		$agriculture_farm_custom_css .='} }';
	}

	$agriculture_farm_slider = get_theme_mod( 'agriculture_farm_responsive_scroll',true);
	if($agriculture_farm_slider == true && get_theme_mod( 'agriculture_farm_enable_disable_scroll', true) == false){
    	$agriculture_farm_custom_css .='#scroll-top{';
			$agriculture_farm_custom_css .='visibility: hidden !important;';
		$agriculture_farm_custom_css .='} ';
	}
    if($agriculture_farm_slider == true){
    	$agriculture_farm_custom_css .='@media screen and (max-width:575px) {';
		$agriculture_farm_custom_css .='#scroll-top{';
			$agriculture_farm_custom_css .='visibility: visible !important;';
		$agriculture_farm_custom_css .='} }';
	}else if($agriculture_farm_slider == false){
		$agriculture_farm_custom_css .='@media screen and (max-width:575px) {';
		$agriculture_farm_custom_css .='#scroll-top{';
			$agriculture_farm_custom_css .='visibility: hidden !important;';
		$agriculture_farm_custom_css .='} }';
	}

	// preloader
	$agriculture_farm_loader = get_theme_mod( 'agriculture_farm_responsive_preloader', true);
	if($agriculture_farm_loader == true && get_theme_mod( 'agriculture_farm_preloader_option', true) == false){
    	$agriculture_farm_custom_css .='#loader-wrapper{';
			$agriculture_farm_custom_css .='display:none;';
		$agriculture_farm_custom_css .='} ';
	}

	// single post image settings
	$agriculture_farm_single_img_border_radius = get_theme_mod('agriculture_farm_single_img_border_radius', 0);
	$agriculture_farm_custom_css .='.page-box-single .box-img img{';
		$agriculture_farm_custom_css .='border-radius: '.esc_attr($agriculture_farm_single_img_border_radius).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_single_img_box_shadow = get_theme_mod('agriculture_farm_single_img_box_shadow',0);
	$agriculture_farm_custom_css .='.page-box-single .box-img img{';
		$agriculture_farm_custom_css .='box-shadow: '.esc_attr($agriculture_farm_single_img_box_shadow).'px '.esc_attr($agriculture_farm_single_img_box_shadow).'px '.esc_attr($agriculture_farm_single_img_box_shadow).'px #ccc;';
	$agriculture_farm_custom_css .='}';

	/*---- Comment form ----*/
	$agriculture_farm_comment_width = get_theme_mod('agriculture_farm_comment_width', '100');
	$agriculture_farm_custom_css .='#comments textarea{';
	$agriculture_farm_custom_css .=' width:'.esc_attr($agriculture_farm_comment_width).'%;';
	$agriculture_farm_custom_css .='}';

	/*----Comment title text----*/
	$agriculture_farm_title_comment_form = get_theme_mod('
		agriculture_farm_title_comment_form', 'Leave a Reply');
	if($agriculture_farm_title_comment_form == ''){
	$agriculture_farm_custom_css .='#comments h2#reply-title {';
	$agriculture_farm_custom_css .='display: none;';
	$agriculture_farm_custom_css .='}';
	}

	/*----Comment button text----*/
	$agriculture_farm_comment_form_button_content = get_theme_mod('agriculture_farm_comment_form_button_content', 'Post Comment');
	if($agriculture_farm_comment_form_button_content == ''){
	$agriculture_farm_custom_css .='#comments p.form-submit {';
	$agriculture_farm_custom_css .='display: none;';
	$agriculture_farm_custom_css .='}';
	}

	// Menu Text Transform
	$agriculture_farm_theme_lay = get_theme_mod( 'agriculture_farm_text_tranform_menu','Uppercase');
    if($agriculture_farm_theme_lay == 'Uppercase'){
		$agriculture_farm_custom_css .='.primary-navigation a{';
			$agriculture_farm_custom_css .='text-transform: uppercase;';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_theme_lay == 'Lowercase'){
		$agriculture_farm_custom_css .='.primary-navigation a{';
			$agriculture_farm_custom_css .='text-transform: lowercase;';
		$agriculture_farm_custom_css .='}';
	}
	else if($agriculture_farm_theme_lay == 'Capitalize'){
		$agriculture_farm_custom_css .='.primary-navigation a{';
			$agriculture_farm_custom_css .='text-transform: capitalize;';
		$agriculture_farm_custom_css .='}';
	}

	// menu font size
	$agriculture_farm_menus_font_size = get_theme_mod('agriculture_farm_menus_font_size',12);
	$agriculture_farm_custom_css .='.primary-navigation a, .primary-navigation ul ul a, .sf-arrows .sf-with-ul:after, #menu-sidebar .primary-navigation a{';
		$agriculture_farm_custom_css .='font-size: '.esc_attr($agriculture_farm_menus_font_size).'px;';
	$agriculture_farm_custom_css .='}';

	// menu padding
	$agriculture_farm_menus_padding = get_theme_mod('agriculture_farm_menus_padding');
	$agriculture_farm_custom_css .='.primary-navigation ul li{';
		$agriculture_farm_custom_css .='padding: '
		.esc_attr($agriculture_farm_menus_padding).'px;';
	$agriculture_farm_custom_css .='}';

	// Menu hover effect
	$agriculture_farm_menus_item = get_theme_mod( 'agriculture_farm_menus_item_style','None');
    if($agriculture_farm_menus_item == 'None'){
		$agriculture_farm_custom_css .='.primary-navigation ul a{';
			$agriculture_farm_custom_css .='';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_menus_item == 'Zoom In'){
		$agriculture_farm_custom_css .='.primary-navigation ul a:hover{';
			$agriculture_farm_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$agriculture_farm_custom_css .='}';
	}

	// font weight
	$agriculture_farm_menu_weight = get_theme_mod('agriculture_farm_menu_weight');{
		$agriculture_farm_custom_css .='.primary-navigation a, .primary-navigation ul ul a, .sf-arrows .sf-with-ul:after, #menu-sidebar .primary-navigation a{';
			$agriculture_farm_custom_css .='font-weight: '.esc_attr($agriculture_farm_menu_weight).';';
		$agriculture_farm_custom_css .='}';
	}

	// Menu Color Option
	$agriculture_farm_menu_color_settings = get_theme_mod('agriculture_farm_menu_color_settings');
	$agriculture_farm_custom_css .='.primary-navigation ul li a{';
		$agriculture_farm_custom_css .='color: '.esc_attr($agriculture_farm_menu_color_settings).';';
	$agriculture_farm_custom_css .='} ';

	// Menu Hover Color Option
	$agriculture_farm_menu_hover_color_settings = get_theme_mod('agriculture_farm_menu_hover_color_settings');
	$agriculture_farm_custom_css .='.primary-navigation ul li a:hover {';
		$agriculture_farm_custom_css .='color: '.esc_attr($agriculture_farm_menu_hover_color_settings).';';
	$agriculture_farm_custom_css .='} ';

	// Submenu Color Option
	$agriculture_farm_submenu_color_settings = get_theme_mod('agriculture_farm_submenu_color_settings');
	$agriculture_farm_custom_css .='.primary-navigation ul.sub-menu li a, .primary-navigation ul.children li a {';
		$agriculture_farm_custom_css .='color: '.esc_attr($agriculture_farm_submenu_color_settings).';';
	$agriculture_farm_custom_css .='} ';

	// Submenu Hover Color Option
	$agriculture_farm_submenu_hover_color_settings = get_theme_mod('agriculture_farm_submenu_hover_color_settings');
	$agriculture_farm_custom_css .='.primary-navigation ul.sub-menu li a:hover, .primary-navigation ul.children li a:hover{';
	$agriculture_farm_custom_css .='color: '.esc_attr($agriculture_farm_submenu_hover_color_settings).';';
	$agriculture_farm_custom_css .='} ';

	//Toggle Button Color Option
	$agriculture_farm_toggle_button_color_settings = get_theme_mod('agriculture_farm_toggle_button_color_settings');
	$agriculture_farm_custom_css .='.toggle-menu i  {';
		$agriculture_farm_custom_css .='color: '.esc_attr($agriculture_farm_toggle_button_color_settings).';';
	$agriculture_farm_custom_css .='} ';

	// site tagline color
	$agriculture_farm_site_tagline_color = get_theme_mod('agriculture_farm_site_tagline_color');
	$agriculture_farm_custom_css .='.logo p {';
		$agriculture_farm_custom_css .='color: '.esc_attr($agriculture_farm_site_tagline_color).' !important;';
	$agriculture_farm_custom_css .='}';

	// site title color
	$agriculture_farm_site_title_color = get_theme_mod('agriculture_farm_site_title_color');
	$agriculture_farm_custom_css .='.site-title a{';
		$agriculture_farm_custom_css .='color: '.esc_attr($agriculture_farm_site_title_color).' !important;';
	$agriculture_farm_custom_css .='}';

	// site top-bottom logo padding 
	$agriculture_farm_logo_padding_top = get_theme_mod('agriculture_farm_logo_padding_top', '');
	$agriculture_farm_custom_css .='.logo{';
	$agriculture_farm_custom_css .='padding-top: '.esc_attr($agriculture_farm_logo_padding_top).'px; padding-bottom: '.esc_attr($agriculture_farm_logo_padding_top).'px;';
	$agriculture_farm_custom_css .='}';

	// site left-right logo padding 
	$agriculture_farm_logo_padding_left = get_theme_mod('agriculture_farm_logo_padding_left', '');
	$agriculture_farm_custom_css .='.logo{';
	$agriculture_farm_custom_css .='padding-left: '.esc_attr($agriculture_farm_logo_padding_left).'px; padding-right: '.esc_attr($agriculture_farm_logo_padding_left).'px;';
	$agriculture_farm_custom_css .='}';

	// site top-bottom logo margin 
	$agriculture_farm_logo_margin_top = get_theme_mod('agriculture_farm_logo_margin_top', '');
	$agriculture_farm_custom_css .='.logo{';
	$agriculture_farm_custom_css .='margin-top: '.esc_attr($agriculture_farm_logo_margin_top).'px; margin-bottom: '.esc_attr($agriculture_farm_logo_margin_top).'px;';
	$agriculture_farm_custom_css .='}';

	// site left-right logo margin
	$agriculture_farm_logo_margin_left = get_theme_mod('agriculture_farm_logo_margin_left', '');
	$agriculture_farm_custom_css .='.logo{';
	$agriculture_farm_custom_css .='margin-left: '.esc_attr($agriculture_farm_logo_margin_left).'px; margin-right: '.esc_attr($agriculture_farm_logo_margin_left).'px;';
	$agriculture_farm_custom_css .='}';
