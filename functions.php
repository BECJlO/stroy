<?php

	/**********************************************************************
	***********************************************************************
	SHOPICO FUNCTIONS
	**********************************************************************/
$taxonomy = '';
load_theme_textdomain('shopico', get_template_directory() . '/languages');
include( get_template_directory().'/includes/class-tgm-plugin-activation.php' );
include( get_template_directory().'/includes/widgets.php' );
include( get_template_directory().'/includes/fonts.php' );
include( get_template_directory().'/includes/shortcodes.php' );
include( get_template_directory().'/includes/font-icons.php' );
include( get_template_directory().'/includes/menu-extender.php' );
include( get_template_directory().'/includes/classes/shopico_walker_menu.php' );
include( get_template_directory().'/includes/gallery.php' );
include( get_template_directory().'/includes/theme-options.php' );
foreach ( glob( get_template_directory().'/includes/shortcodes/*.php' ) as $filename ){
    require_once( get_template_directory().'/includes/shortcodes/'.basename( $filename ) );
}
add_action( 'tgmpa_register', 'shopico_requred_plugins' );
function shopico_requred_plugins(){
    $plugins = array(
        array(
            'name'                 => 'Redux Options',
            'slug'                 => 'redux-framework',
            'source'               => get_stylesheet_directory() . '/lib/plugins/redux-framework.zip',
            'required'             => true,
            'version'              => '',
            'force_activation'     => false,
            'force_deactivation'   => false,
            'external_url'         => '',
            ),	
        // array(
        //     'name'                 => 'Smeta',
        //     'slug'                 => 'smeta',
        //     'source'               => get_stylesheet_directory() . '/lib/plugins/smeta.zip',
        //     'required'             => true,
        //     'version'              => '',
        //     'force_activation'     => false,
        //     'force_deactivation'   => false,
        //     'external_url'         => '',
        //     ),
        // array(
        //     'name'                 => 'User Avatar',
        //     'slug'                 => 'wp-user-avatar',
        //     'source'               => get_stylesheet_directory() . '/lib/plugins/wp-user-avatar.zip',
        //     'required'             => true,
        //     'version'              => '',
        //     'force_activation'     => false,
        //     'force_deactivation'   => false,
        //     'external_url'         => '',
        //     ),
        // array(
        //     'name'                 => 'Visual Composer',
        //     'slug'                 => 'js_composer',
        //     'source'               => get_stylesheet_directory() . '/lib/plugins/js_composer.zip',
        //     'required'             => true,
        //     'version'              => '',
        //     'force_activation'     => false,
        //     'force_deactivation'   => false,
        //     'external_url'         => '',
        //     ),
        // array(
        //     'name'                 => 'Shopico CPT',
        //     'slug'                 => 'shopico-cpt',
        //     'source'               => get_stylesheet_directory() . '/lib/plugins/shopico-cpt.zip',
        //     'required'             => true,
        //     'version'              => '',
        //     'force_activation'     => false,
        //     'force_deactivation'   => false,
        //     'external_url'         => '',
        //     ),		
        );
    /**
     * 	 * Array of configuration settings. Amend each line as needed.
     * 	 * If you want the default strings to be available under your own theme domain,
     * 	 * leave the strings uncommented.
     * 	 * Some of the strings are added into a sprintf, so see the comments at the
     * 	 * end of each line for what each argument will be.
     * 	 */
    $config = array(
        'domain'           => 'shopico',
        'default_path'     => '',
        'menu'             => 'install-required-plugins',
        'has_notices'      => true,
        'is_automatic'     => false,
        'message'          => '',
        'strings'          => array(
            'page_title'                      => __( 'Install Required Plugins', 'shopico' ),
            'menu_title'                      => __( 'Install Plugins', 'shopico' ),
            'installing'                      => __( 'Installing Plugin: %s', 'shopico' ),
            'oops'                            => __( 'Something went wrong with the plugin API.', 'shopico' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'shopico' ),
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'shopico' ),
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'shopico' ),
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'shopico' ),
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'shopico' ),
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'shopico' ),
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'shopico' ),
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'shopico' ),
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'shopico' ),
            'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'shopico' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'shopico' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'shopico' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'shopico' ),
            'nag_type'                        => 'updated'
        )
    );
    tgmpa( $plugins, $config );
}
if (!isset($content_width))
{
    $content_width = 1920;
}

/* do shortcodes in the excerpt */
add_filter('the_excerpt', 'do_shortcode');


/* include custom made widgets */
function shopico_widgets_init(){
	register_sidebar(array(
		'name' => __('Колонка фильтров'),
		'id' => 'filters',
		'before_widget' => '<div class="widget clearfix %2$s" >',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title-wrap"><h5 class="widget-title">',
		'after_title' => '</h5></div>',
		'description' => __('Колонка для фільтрів', 'shopico')
	));
	register_sidebar(array(
		'name' => __('Катигоризатор в колонке фильтров'),
		'id' => 'catalog_filters',
		'before_widget' => '<div class="widgetds clearfix %2$s" >',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title-wrap"><h5 class="widget-title">',
		'after_title' => '</h5></div>',
		'description' => __('Катигоризатор в колонке фильтров', 'shopico')
	));
	// register_sidebar(array(
	// 		'name' => __('Blog Sidebar', 'shopico') ,
	// 		'id' => 'blog',
	// 		'before_widget' => '<div class="widget clearfix %2$s" >',
	// 		'after_widget' => '</div>',
	// 		'before_title' => '<div class="widget-title-wrap"><h5 class="widget-title">',
	// 		'after_title' => '</h5></div>',
	// 		'description' => __('Appears on the right side of the blog single page.', 'shopico')
	// ));
	// register_sidebar(array(
	// 		'name' => __('Page Left Sidebar', 'shopico') ,
	// 		'id' => 'left',
	// 		'before_widget' => '<div class="widget clearfix %2$s" >',
	// 		'after_widget' => '</div>',
	// 		'before_title' => '<div class="widget-title-wrap"><h5 class="widget-title">',
	// 		'after_title' => '</h5></div>',
	// 		'description' => __('Appears on the left side of the page.', 'shopico')
	// ));	
	
	// register_sidebar(array(
	// 	'name' => __('Page Right Sidebar', 'shopico') ,
	// 	'id' => 'right',
	// 	'before_widget' => '<div class="widget clearfix %2$s" >',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<div class="widget-title-wrap"><h5 class="widget-title">',
	// 	'after_title' => '</h5></div>',
	// 	'description' => __('Appears on the right side of the page.', 'shopico')
	// ));

	// register_sidebar(array(
	// 	'name' => __('Bottom Sidebar 1', 'shopico') ,
	// 	'id' => 'bottom-1',
	// 	'before_widget' => '<div class="widget clearfix %2$s" >',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<div class="widget-title-wrap"><h5 class="widget-title">',
	// 	'after_title' => '</h5></div>',
	// 	'description' => __('Appears on the right side of the page.', 'shopico')
	// ));	

	// register_sidebar(array(
	// 	'name' => __('Bottom Sidebar 2', 'shopico') ,
	// 	'id' => 'bottom-2',
	// 	'before_widget' => '<div class="widget clearfix %2$s" >',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<div class="widget-title-wrap"><h5 class="widget-title">',
	// 	'after_title' => '</h5></div>',
	// 	'description' => __('Appears on the right side of the page.', 'shopico')
	// ));	

	// register_sidebar(array(
	// 	'name' => __('Bottom Sidebar 3', 'shopico') ,
	// 	'id' => 'bottom-3',
	// 	'before_widget' => '<div class="widget clearfix %2$s" >',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<div class="widget-title-wrap"><h5 class="widget-title">',
	// 	'after_title' => '</h5></div>',
	// 	'description' => __('Appears on the right side of the page.', 'shopico')
	// ));	


	// register_sidebar(array(
	// 	'name' => __('Bottom Sidebar 4', 'shopico') ,
	// 	'id' => 'bottom-4',
	// 	'before_widget' => '<div class="widget clearfix %2$s" >',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<div class="widget-title-wrap"><h5 class="widget-title">',
	// 	'after_title' => '</h5></div>',
	// 	'description' => __('Appears on the right side of the page.', 'shopico')
	// ));

	// register_sidebar(array(
	// 	'name' => 'Search Sidebar',
	// 	'id' => 'search',
	// 	'before_widget' => '<div class="widget clearfix %2$s" >',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<div class="widget-title-wrap"><h5 class="widget-title">',
	// 	'after_title' => '</h5></div>',
	// 	'description' => __('Appears on the left side of the search page.', 'shopico')
	// ));
}
add_action('widgets_init', 'shopico_widgets_init');



/* total_defaults */
function shopico_defaults( $id ){	
	$defaults = array(
		'show_top_bar' => 'no',
		'top_bar_message' => 'no',
		'header_style' => 'style1',
		'site_width' => 'normal',
		'site_logo' => array( 'url' => '' ),
		'site_favicon' => array( 'url' => '' ),
		'header_support' => '',
		'header_suport_subtitle' => '',
		'enable_share' => 'yes',
		'facebook_share' => 'yes',
		'twitter_share' => 'yes',
		'google_share' => 'yes',
		'linkedin_share' => 'yes',
		'tumblr_share' => 'yes',
		'shop_sidebar' => 'left',
		'mail_chimp_api' => '',
		'mail_chimp_list_id' => '',
		'top_bar_bg_color' => '',
		'top_bar_font' => '#555555',
		'top_bar_link' => '#1BA39C',
		'top_bar_link_hover' => '#18938C',
		'navigation_bg_color' => '#1BA39C',
		'navigation_bg_color_hvr' => '#18938C',
		'navigation_font_color' => '#ffffff',
		'navigation_font_color_hvr' => '#ffffff',
		'navigation_font_size' => '13px',
		'text_font' => 'PT+Sans',
		'text_font_size' => '14px',
		'text_line_height' => '24px',
		'title_font' => 'Raleway',
		'h1_font_size' => '38px',
		'h1_line_height' => '1.25',
		'h2_font_size' => '32px',
		'h2_line_height' => '1.25',
		'h3_font_size' => '28px',
		'h3_line_height' => '1.25',
		'h4_font_size' => '22px',
		'h4_line_height' => '1.25',
		'h5_font_size' => '18px',
		'h5_line_height' => '1.25',
		'h6_font_size' => '13px',
		'h6_line_height' => '1.25',
		'body_bg_image' => array( 'url' => '' ),
		'body_bg_color' => '#202020',
		'wrap_bg_color' => '#f5f5f5',
		'main_color' => '#1BA39C',
		'main_font_color' => '#ffffff',
		'secondary_color' => '#18938C',
		'secondary_font_color' => '#ffffff',
		'copyrigths_bg_color' => '#1BA39C',
		'copyrigths_font_color' => '#ffffff',
		'contact_form_email' => '',
		'contact_form_map' => '',
		'copyrights' => '',
		'copyrights-image' => array( 'url' ),
	);
	
	if( isset( $defaults[$id] ) ){
		return $defaults[$id];
	}
	else{
		
		return '';
	}
}

// add_filter('show_admin_bar', '__return_false');

/* get option from theme options */
function shopico_get_option($id){
	global $shopico_options;
	if( isset( $shopico_options[$id] ) ){
		$value = $shopico_options[$id];
		if( isset( $value ) ){
			return $value;
		}
		else{
			return '';
		}
	}
	else{
		return shopico_defaults( $id );
	}
}

	/* setup neccessary theme support, add image sizes */
function shopico_setup(){
	add_theme_support('automatic-feed-links');
	add_theme_support( "title-tag" );
	add_theme_support('html5', array(
		'comment-form',
		'comment-list'
	));

	// register_nav_menu('main-navigation', __('Main Navigation', 'shopico'));
	register_nav_menu('hn1-navigation', __('Меню "Информация" колонка 1', 'shopico'));
	register_nav_menu('hn2-navigation', __('Меню "Информация" колонка 2', 'shopico'));
	register_nav_menu('hn3-navigation', __('Меню "Информация" колонка 3', 'shopico'));
	register_nav_menu('prod-navigation', __('Меню "Каталог товаров"', 'shopico'));
	

	
	add_theme_support('post-thumbnails',array( 'post', 'page', 'Maingalery', 'testimonial', 'client', 'portfolio', 'team' ));
	add_theme_support('post-formats',array( 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ));
	add_theme_support('woocommerce');
	
	// set_post_thumbnail_size( 848, 477, true );
	if (function_exists('add_image_size')){
		add_image_size( 'box-thumb', 500, 280, true );
		add_image_size( 'qw-image', 500, 650 );
		add_image_size( 'clients', 174, 174 );
		// set_post_thumbnail_size( 300, 300, false);
 	}
set_post_thumbnail_size( 300, 300, false);
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	add_editor_style();
}
add_action('after_setup_theme', 'shopico_setup');


function shopico_enqueue_font( $font_family ) {
	$font_family = str_replace( '+', ' ', $font_family );
    $font_url = '';
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'studio' ) ) {
        $font_url = add_query_arg( 'family', urlencode( $font_family.':400,300,500,600&subset=all' ), "https://fonts.googleapis.com/css" );
    }
    return $font_url;
}


function art_sites__footer_style(){

	wp_enqueue_style( 'shopico-bootstrap-select', get_template_directory_uri() . '/css/bootstrap-select.min.css' );
	wp_enqueue_style( 'shopico-nice', get_template_directory_uri() . '/js/jquery-nice-select-1.0/css/nice-select.css' );
	wp_enqueue_style( 'shopico-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'shopico-animate', get_template_directory_uri() . '/css/animate.css' );
	// wp_enqueue_style( 'shopico-owl-css', get_template_directory_uri() . '/css/owl.carousel.css' );
	// wp_enqueue_style( 'shopico-owl-theme-css', get_template_directory_uri() . '/css/owl.theme.css' );
	wp_enqueue_style( 'aSendForm5', get_template_directory_uri() . '/js/aSendForm/assets/a-valid.css' );
	wp_enqueue_style( 'shopico-magnific-css', get_template_directory_uri() . '/css/magnific-popup.css');
	// wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/myCustomStyle.css');
	// wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/styles.css' );
	wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/styles.responsive.css' );
}
add_action( 'get_footer', 'art_sites__footer_style' );

/* setup neccessary styles and scripts */
function shopico_scripts_styles(){
	/* bootstrap */
	wp_enqueue_style( 'shopico-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_script('shopico-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
	wp_enqueue_style( 'shopico-owl-css', get_template_directory_uri() . '/css/owl.carousel.css', array('shopico-bootstrap') );
	wp_enqueue_style( 'shopico-owl-theme-css', get_template_directory_uri() . '/css/owl.theme.css', array('shopico-bootstrap', 'shopico-owl-css' ) );
	wp_enqueue_script('shopico-nice', get_template_directory_uri() . '/js/jquery-nice-select-1.0/js/jquery.nice-select.js', array('jquery'), false, true);
	wp_enqueue_script('shopico-bootstrap-select', get_template_directory_uri() . '/js/bootstrap-select.min.js', array('jquery'), false, true);



	/*load selected fonts*/
	$title_font = shopico_get_option( 'title_font' );
	if( !empty( $title_font ) ){
		wp_enqueue_style( 'shopico-title-font', shopico_enqueue_font( $title_font ), array(), '1.0.0' );
	}
	$navigation_font = shopico_get_option( 'navigation_font' );
	if( !empty( $navigation_font ) ){
		wp_enqueue_style( 'shopico-navigation-font', shopico_enqueue_font( $navigation_font ), array(), '1.0.0' );
	}
	$text_font = shopico_get_option( 'text_font' );
	if( !empty( $text_font ) ){
		wp_enqueue_style( 'shopico-text-font', shopico_enqueue_font( $text_font ), array(), '1.0.0' );
	}
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	  if(current_user_can('administrator')) {
		wp_enqueue_script( 'comment-reply' );
	  }
	}

	/* responsiveslides */
	wp_enqueue_script( 'shopico-responsiveslides',  get_template_directory_uri() . '/js/responsiveslides.min.js', array('jquery'), false, true);
	wp_enqueue_script( 'shopico-modernizr',  get_template_directory_uri() . '/js/modernizr.js', array('jquery'), false, true);

	/* OWL SLIDER */
	wp_enqueue_script('shopico-owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), false, true);

	/* custom */
	wp_enqueue_script('aSendForm1', get_template_directory_uri() . '/js/aSendForm/assets/jquery.validate.min.js', array('jquery'), false, true);
	wp_enqueue_script('aSendForm2', get_template_directory_uri() . '/js/aSendForm/assets/additional-methods.min.js', array('jquery'), false, true);
	wp_enqueue_script('aSendForm3', get_template_directory_uri() . '/js/aSendForm/assets/jquery.bpopup.min.js', array('jquery'), false, true);
	wp_enqueue_script('aSendForm4', get_template_directory_uri() . '/js/aSendForm/assets/jquery.send.form.min.js', array('jquery'), false, true);
	wp_enqueue_script('shopico-magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), false, true);
	
	/* enlarge on product single */
	wp_enqueue_script('shopico-enlarge', get_template_directory_uri() . '/js/jquery.mlens-1.5.min.js', array('jquery'), false, true);
	
	/* parallax */
	wp_enqueue_script('shopico-stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array('jquery'), false, true);

	/* quick view */
	wp_enqueue_script('shopico-quick-view', get_template_directory_uri() . '/js/quick-view.js', array('jquery'), false, true);

	wp_enqueue_script('shopico-countdown', get_template_directory_uri() . '/js/countdown.js', array('jquery'), false, true);

    wp_enqueue_script('shopico-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), false, true);
    wp_enqueue_script('shopico-customv2', get_template_directory_uri() . '/js/customv2.js', array('jquery'), false, true);
    wp_enqueue_script('ajax-loader', get_template_directory_uri() . '/js/ajax-loader.js', array('jquery'), '1.0.2', true);
}
add_action('wp_enqueue_scripts', 'shopico_scripts_styles', 2 );



add_action('wp_enqueue_scripts', 'shopico_scripts_jqueryui_touch_punch', 999 );

function shopico_scripts_jqueryui_touch_punch(){
	// wp_enqueue_script('jqueryui_touch_punch', '//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js', array('jquery'), false, true);
	wp_enqueue_script('jqueryui_touch_punch', get_template_directory_uri() . '/js/jquery.ui.touch-punch.min.js', array('jquery'), false, true);
}




function shopico_admin_scripts_styles(){
	wp_enqueue_style('shopico-shortcodes-style', get_template_directory_uri() . '/css/admin.css' );
	wp_enqueue_style( 'shopico-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
}
add_action('admin_enqueue_scripts', 'shopico_admin_scripts_styles', 1);


/* add main css dynamically so it can support changing collors */
function shopico_add_main_style(){
	ob_start();
	include( get_template_directory().'/css/main-color.css.php' );
	$custom_css = ob_get_contents();
	ob_end_clean();
	wp_enqueue_style('shopico-style', get_stylesheet_uri() , array('dashicons'));
	wp_add_inline_style( 'shopico-style', $custom_css );	
}
add_action('wp_enqueue_scripts', 'shopico_add_main_style', 10);

function shopico_uc_enqueue_scripts() {
	wp_enqueue_script('update-cart', get_template_directory_uri().'/js/update-cart.js', array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'shopico_uc_enqueue_scripts' );



/* add admin-ajax */
function shopico_custom_head(){
	echo '<script type="text/javascript">var ajaxurl = \'' . admin_url('admin-ajax.php') . '\';</script>';
}
add_action('wp_head', 'shopico_custom_head');

function shopico_smeta_images( $meta_key, $post_id, $default ){
	if(class_exists('SM_Frontend')){
		global $sm;
		return $result = $sm->sm_get_meta($meta_key, $post_id);
	}
	else{		
		return $default;
	}
}

/* check if smeta plugin is installed */
function shopico_get_smeta( $meta_key, $post_data = '', $default ){
	if( !empty( $post_data[$meta_key] ) ){
		return $post_data[$meta_key][0];
	}
	else{
		return $default;
	}
}	


/* add custom meta fields using smeta to post types. */
function shopico_custom_meta(){

	$post_meta_standard = array(
		array(
			'id' => 'iframe_standard',
			'name' => __( 'Input url to be embeded', 'shopico' ),
			'type' => 'text',
		),
	);

	$meta_boxes[] = array(
		'title' => __( 'Standard Post Information', 'shopico' ),
		'pages' => 'post',
		'fields' => $post_meta_standard,
	);

	$post_meta_gallery = array(
		array(
			'id' => 'gallery_images',
			'name' => __( 'Add images for the gallery', 'shopico' ),
			'type' => 'image',
			'repeatable' => 1
		)
	);

	$meta_boxes[] = array(
		'title' => __( 'Gallery Post Information', 'shopico' ),
		'pages' => 'post',
		'fields' => $post_meta_gallery,
	);


	$post_meta_audio = array(
		array(
			'id' => 'iframe_audio',
			'name' => __( 'Input URL for the audio', 'shopico' ),
			'type' => 'text',
		),

		array(
			'id' => 'audio_type',
			'name' => __( 'Select type of the audio', 'shopico' ),
			'type' => 'select',
			'options' => array(
				'embed' => __( 'Embed', 'shopico' ),
				'direct' => __( 'Direct Link', 'shopico' )
			)
		),
	);

	$meta_boxes[] = array(
		'title' => __( 'Audio Post Information', 'shopico' ),
		'pages' => 'post',
		'fields' => $post_meta_audio,
	);

	$post_meta_video = array(
		array(
			'id' => 'video',
			'name' => __( 'Input video URL', 'shopico' ),
			'type' => 'text',
		),
		array(
			'id' => 'video_type',
			'name' => __( 'Select video type', 'shopico' ),
			'type' => 'select',
			'options' => array(
				'self' => __( 'Self Hosted', 'shopico' ),
				'remote' => __( 'Embed', 'shopico' ),
			)
		),
	);

	$meta_boxes[] = array(
		'title' => __( 'Video Post Information', 'shopico' ),
		'pages' => 'post',
		'fields' => $post_meta_video,
	);

	$post_meta_quote = array(
		array(
			'id' => 'blockquote',
			'name' => __( 'Input the quotation', 'shopico' ),
			'type' => 'textarea',
		),
		array(
			'id' => 'cite',
			'name' => __( 'Input the quoted person\'s name', 'shopico' ),
			'type' => 'text',
		),
	);

	$meta_boxes[] = array(
		'title' => __( 'Quote Post Information', 'shopico' ),
		'pages' => 'post',
		'fields' => $post_meta_quote,
	);

	$post_meta_link = array(
		array(
			'id' => 'link',
			'name' => __( 'Input link', 'shopico' ),
			'type' => 'text',
		),
	);

	$meta_boxes[] = array(
		'title' => __( 'Link Post Information', 'shopico' ),
		'pages' => 'post',
		'fields' => $post_meta_link,
	);

	$client_meta = array(
		array(
			'id' => 'client_url',
			'name' => __( 'Client URL', 'shopico' ),
			'type' => 'text',
		),
	);

	$meta_boxes[] = array(
		'title' => __( 'Client Details', 'shopico' ),
		'pages' => 'client',
		'fields' => $client_meta,
	);


	$slider_meta = array(
		array(
			'id' => 'slides',
			'name' => __( 'Images', 'shopico' ),
			'type' => 'group',
			'fields' => array(
				array(
					'id' => 'slide_image',
					'name' => __( 'Slide Image', 'shopico' ),
					'type' => 'image',
				),
				array(
					'id' => 'slide_url',
					'name' => __( 'Slide URL', 'shopico' ),
					'type' => 'text',
				),
			),
			'repeatable' => 1
		),
	);

	$meta_boxes[] = array(
		'title' => __( 'Slider Data', 'brava' ),
		'pages' => 'slider',
		'fields' => $slider_meta,
	);

	$mega_menu_meta = array(
		array(
			'id' => 'column_full',
			'name' => __( 'Make This Full Width', 'shopico' ),
			'type' => 'select',
			'options' => array(
				'no' => __( 'No', 'shopico' ),
				'yes' => __( 'Yes', 'shopico' )
			)
		),
		array(
			'id' => 'mega_menu_width',
			'name' => __( 'Mega Menu Width', 'shopico' ),
			'desc'=> __( 'Input width of the mega menu if it is not set to be full width. (number only)', 'shopico' ),
			'type' => 'text',
		),
	);

	$meta_boxes[] = array(
		'title' => __( 'Mega Menu Information', 'shopico' ),
		'pages' => 'mega_menu',
		'fields' => $mega_menu_meta,
	);

	return $meta_boxes;
}

add_filter('sm_meta_boxes', 'shopico_custom_meta');


class shopico_walker extends Walker_Nav_Menu {

	/**
	* @see Walker::start_lvl()
	* @since 3.0.0
	*
	* @param string $output Passed by reference. Used to append additional content.
	* @param int $depth Depth of page. Used for padding.
	*/
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul role=\"menu\" class=\" dropdown-menu\">\n";
	}

	/**
	* @see Walker::start_el()
	* @since 3.0.0
	*
	* @param string $output Passed by reference. Used to append additional content.
	* @param object $item Menu item data object.
	* @param int $depth Depth of menu item. Used for padding.
	* @param int $current_page Menu item ID.
	* @param object $args
	*/
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$mega_menu_content = get_post_meta( $item->ID, 'mega_menu_content', true );
		/**
		* Dividers, Headers or Disabled
		* =============================
		* Determine whether the item is a Divider, Header, Disabled or regular
		* menu item. To prevent errors we use the strcasecmp() function to so a
		* comparison that is not case sensitive. The strcasecmp() function returns
		* a 0 if the strings are equal.
		*/
		if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider">';
		}
		else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider">';
		}
		else if ( strcasecmp( $item->attr_title, 'dropdown-header') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );
		}
		else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
			$output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
		}
		else {
			$class_names = $value = '';
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;
			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
			
			if ( $args->has_children || !empty($mega_menu_content) ){
				$class_names .= ' dropdown';
			}
			
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

			$output .= $indent . '<li' . $id . $value . $class_names .'>';

			$atts = array();
			$atts['title'] = ! empty( $item->title )	? $item->title	: '';
			$atts['target'] = ! empty( $item->target )	? $item->target	: '';
			$atts['rel'] = ! empty( $item->xfn )	? $item->xfn	: '';

			// If item has_children add atts to a.
			$atts['href'] = ! empty( $item->url ) ? $item->url : '';
			if ( $args->has_children || !empty( $mega_menu_content ) ) {
				$atts['data-toggle']	= 'dropdown';
				$atts['class']	= 'dropdown-toggle';
				$atts['data-hover']	= 'dropdown';
				$atts['aria-haspopup']	= 'true';
			}

			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( ! empty( $value ) ) {
					$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}

			$item_output = $args->before;

			/*
			* Glyphicons
			* ===========
			* Since the the menu item is NOT a Divider or Header we check the see
			* if there is a value in the attr_title property. If the attr_title
			* property is NOT null we apply it as the class name for the glyphicon.
			*/
			
			$item_output .= '<a'. $attributes .'>';

			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			if( ( $args->has_children && 0 === $depth ) || !empty( $mega_menu_content ) ){
				$item_output .= ' <i class="fa fa-angle-down"></i>';
			}
			$item_output .= '</a>';
			if( !empty( $mega_menu_content ) ){
				$mega_menu = get_post( $mega_menu_content );
				$is_full = get_post_meta( $mega_menu_content, 'column_full', true );
				if( $is_full == 'no' ){
					$mega_menu_width = get_post_meta( $mega_menu_content, 'mega_menu_width', true );
				}
				$item_output .= '<div class="mega_menu_dropdown dropdown-menu '.( $is_full == 'yes' ? esc_attr( 'mega_menu_dropdown_full' ) : '' ).'" style="'.( $is_full == 'no' ? 'width:'.esc_attr( $mega_menu_width ).'px;' : '' ).'">'.apply_filters( 'the_content', $mega_menu->post_content ).'</div>';
			}
			$item_output .= $args->after;
			
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}

	/**
	* Traverse elements to create list from elements.
	*
	* Display one element if the element doesn't have any children otherwise,
	* display the element and its children. Will only traverse up to the max
	* depth and no ignore elements under that depth.
	*
	* This method shouldn't be called directly, use the walk() method instead.
	*
	* @see Walker::start_el()
	* @since 2.5.0
	*
	* @param object $element Data object
	* @param array $children_elements List of elements to continue traversing.
	* @param int $max_depth Max depth to traverse.
	* @param int $depth Depth of current element.
	* @param array $args
	* @param string $output Passed by reference. Used to append additional content.
	* @return null Null on failure with no changes to parameters.
	*/
	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
		if ( ! $element )
			return;

		$id_field = $this->db_fields['id'];

		// Display this element.
		if ( is_object( $args[0] ) ){
		   $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );
		}

		parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}

	/**
	* Menu Fallback
	* =============
	* If this function is assigned to the wp_nav_menu's fallback_cb variable
	* and a manu has not been assigned to the theme location in the WordPress
	* menu manager the function with display nothing to a non-logged in user,
	* and will add a link to the WordPress menu manager if logged in as an admin.
	*
	* @param array $args passed from the wp_nav_menu function.
	*
	*/
	public static function fallback( $args ) {
		if ( current_user_can( 'manage_options' ) ) {

			extract( $args );

			$fb_output = null;

			if ( $container ) {
				$fb_output = '<' . $container;

				if ( $container_id ){
					$fb_output .= ' id="' . $container_id . '"';
				}

				if ( $container_class ){
					$fb_output .= ' class="' . $container_class . '"';
				}

				$fb_output .= '>';
			}

			$fb_output .= '<ul';

			if ( $menu_id ){
				$fb_output .= ' id="' . $menu_id . '"';
			}

			if ( $menu_class ){
				$fb_output .= ' class="' . $menu_class . '"';
			}

			$fb_output .= '>';
			$fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a menu</a></li>';
			$fb_output .= '</ul>';

			if ( $container ){
				$fb_output .= '</' . $container . '>';
			}

			echo  $fb_output;
		}
	}
}

/*generate random password*/
function shopico_random_string( $length = 10 ) {
	$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$random = '';
	for ($i = 0; $i < $length; $i++) {
		$random .= $characters[rand(0, strlen($characters) - 1)];
	}
	return $random;
}

/* format wp_link_pages so it has the right css applied to it */
function shopico_link_pages( $post_pages ){
	/* format pages that are not current ones */
	$post_pages = str_replace( '<a', '<a class="btn btn-default" ', $post_pages );
	$post_pages = str_replace( '</span></a>', '</a>', $post_pages );
	$post_pages = str_replace( '><span>', '>', $post_pages );
	
	/* format current page */
	$post_pages = str_replace( '<span>', '<a href="javascript:;" class="btn btn-default active">', $post_pages );
	$post_pages = str_replace( '</span>', '</a>', $post_pages );
	
	return $post_pages;
	
}
/* create tags list */
function shopico_the_tags(){
	$tags = get_the_tags();
	$list = array();
	if( !empty( $tags ) ){
		foreach( $tags as $tag ){
			$list[] = '<a href="'.esc_url( get_tag_link( $tag->term_id ) ).'">'.$tag->name.'</a>';
		}
	}
	
	return join( ", ", $list );
}

function shopico_custom_tax( $tax, $post_id = '' ){
	if( empty( $post_id ) ){
		$post_id = get_the_ID();
	}
	$search = shopico_get_permalink_by_tpl( 'page-tpl_search' );
	$terms = get_the_terms( $post_id, $tax );
	$list = array();
	if( !empty( $terms ) ){
		foreach( $terms as $term ){
			$list[] = '<a href="'.esc_url( add_query_arg( array( $tax => $term->slug ), $search ) ).'">'.$term->name.'</a>';
		}
	}
	
	return join( ", ", $list );
}

function shopico_cloud_sizes($args) {
	$args['smallest'] = 13;
	$args['largest'] = 13;
	$args['unit'] = 'px';
	return $args;
}
add_filter('widget_tag_cloud_args','shopico_cloud_sizes');
add_filter('woocommerce_product_tag_cloud_widget_args','shopico_cloud_sizes');

function shopico_the_category(){
	$list = '';
	$categories = get_the_category();
	if( !empty( $categories ) ){
		foreach( $categories as $category ){
			$list .= '<a href="'.esc_url( get_category_link( $category->term_id ) ).'">'.$category->name.'</a> ';
		}
	}
	
	return $list;
}

/* check if the blog has any media */
function shopico_has_media(){
	$post_format = get_post_format();
	switch( $post_format ){
		case 'aside' :
			return has_post_thumbnail() ? true : false; break;
			
		case 'audio' :
			$post_meta = get_post_custom();
			$iframe_audio = shopico_get_smeta( 'iframe_audio', $post_meta, '' );
			if( !empty( $iframe_audio ) ){
				return true;
			}
			else if( has_post_thumbnail() ){
				return true;
			}
			else{
				return false;
			}
			break;
			
		case 'chat' :
			return has_post_thumbnail() ? true : false; break;
		
		case 'gallery' :
			$post_meta = get_post_custom();
			$gallery_images = shopico_smeta_images( 'gallery_images', get_the_ID(), array() );		
			if( !empty( $gallery_images ) ){
				return true;
			}
			else if( has_post_thumbnail() ){
				return true;
			}			
			else{
				return false;
			}
			break;
			
		case 'image':
			return has_post_thumbnail() ? true : false; break;
			
		case 'link' :
			$post_meta = get_post_custom();
			$link = shopico_get_smeta( 'link', $post_meta, '' );
			if( !empty( $link ) ){
				return true;
			}
			else{
				return false;
			}
			break;
			
		case 'quote' :
			$post_meta = get_post_custom();
			$blockquote = shopico_get_smeta( 'blockquote', $post_meta, '' );
			$cite = shopico_get_smeta( 'cite', $post_meta, '' );
			if( !empty( $blockquote ) || !empty( $cite ) ){
				return true;
			}
			else if( has_post_thumbnail() ){
				return true;
			}
			else{
				return false;
			}
			break;
		
		case 'status' :
			return has_post_thumbnail() ? true : false; break;
	
		case 'video' :
			$post_meta = get_post_custom();
			$video_url = shopico_get_smeta( 'video', $post_meta, '' );
			if( !empty( $video_url ) ){
				return true;
			}
			else if( has_post_thumbnail() ){
				return true;
			}
			else{
				return false;
			}
			break;
			
		default:
			$post_meta = get_post_custom();
			$iframe_standard = shopico_get_smeta( 'iframe_standard', $post_meta, '' );		
			if( !empty( $iframe_standard ) ){
				return true;
			}
			else if( has_post_thumbnail() ){
				return true;
			}
			else{
				return false;
			}
			break;
	}	
}

/* format pagination so it has correct style applied to it */
function shopico_format_pagination( $page_links ){
	$list = '';
	if( !empty( $page_links ) ){
		foreach( $page_links as $page_link ){
			$page_link = str_replace( "<span class='page-numbers current'>", '<a href="javascript:;" class="active">', $page_link );
			$page_link = str_replace( "<span class=\"page-numbers dots\">", '<a href="javascript:;">', $page_link );
			$page_link = str_replace( '</span>', '</a>', $page_link );
			$page_link = str_replace( array( 'class="', "class='" ), array( 'class="btn btn-default ', "class='btn btn-default " ), $page_link );
			$list .= $page_link." ";
		}
	}
	
	return $list;
}


/*======================CONTACT FUNCTIONS==============*/
function shopico_send_contact(){
	$errors = array();
	$name = esc_sql( $_POST['name'] );	
	$email = esc_sql( $_POST['email'] );
	$subject = esc_sql( $_POST['subject'] );
	$message = esc_sql( $_POST['message'] );
	if( empty( $name ) || empty( $subject ) || empty( $email ) || empty( $message ) ){
		$response = array(
			'error' => __( 'All fields are required.', 'shopico' ),
		);
	}
	else if( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
		$response = array(
			'error' => __( 'E-mail address is not valid.', 'shopico' ),
		);	
	}
	else{
		$email_to = shopico_get_option( 'contact_form_email' );
		$message = "
			".__( 'Name: ', 'shopico' )." {$name} \n			
			".__( 'Email: ', 'shopico' )." {$email} \n
			".__( 'Message: ', 'shopico' )."\n {$message} \n
		";
		
		$info = @wp_mail( $email_to, $subject, $message );
		if( $info ){
			$response = array(
				'success' => __( 'Your message was successfully submitted.', 'shopico' ),
			);
		}
		else{
			$response = array(
				'error' => __( 'Unexpected error while attempting to send e-mail.', 'shopico' ),
			);
		}
		
	}
	
	echo json_encode( $response );
	die();	
}
add_action('wp_ajax_contact', 'shopico_send_contact');
add_action('wp_ajax_nopriv_contact', 'shopico_send_contact');

/*======================Order help==============*/
function shopico_send_order(){
	$errors = array();
	$phone = esc_sql( $_POST['phone'] );
	$order = esc_sql( $_POST['order'] );	
	if( empty( $phone )){
		$response = array(
			'error' => __( 'All fields are required.', 'shopico' ),
		);
	}
	else{
		$email_to = shopico_get_option( 'contact_form_email' );
		$message = "
			".__( 'Phone: ', 'shopico' ).": {$phone} \n	
			Заказ: {$order} \n			
		";
		
		$info = @wp_mail( $email_to, $subject, $message );
		if( $info ){
			$response = array(
				'success' => "Ваши контактные данные были переданы. В ближайшее время с Вами свяжутся наши сотрудники!",
			);
		}
		else{
			$response = array(
				'error' => __( 'Unexpected error while attempting to send e-mail.', 'shopico' ),
			);
		}
		
	}
	
	echo json_encode( $response );
	die();	
}
add_action('wp_ajax_order', 'shopico_send_order');
add_action('wp_ajax_nopriv_order', 'shopico_send_order');

/* =======================================================SUBSCRIPTION FUNCTIONS */
function shopico_send_subscription( $email = '' ){
	$email = !empty( $email ) ? $email : $_POST["email"];
	$response = array();	
	if( filter_var( $email, FILTER_VALIDATE_EMAIL ) ){
		require_once( get_template_directory().'/includes/mailchimp.php' );
		$chimp_api = shopico_get_option("mail_chimp_api");
		$chimp_list_id = shopico_get_option("mail_chimp_list_id");
		if( !empty( $chimp_api ) && !empty( $chimp_list_id ) ){
			$mc = new MailChimp( $chimp_api );
			$result = $mc->call('lists/subscribe', array(
				'id'                => $chimp_list_id,
				'email'             => array( 'email' => $email )
			));
			
			if( $result === false) {
				$response['error'] = __( 'There was an error contacting the API, please try again.', 'shopico' );
			}
			else if( isset($result['status']) && $result['status'] == 'error' ){
				$response['error'] = json_encode($result);
			}
			else{
				$response['success'] = __( 'You have successuffly subscribed to the newsletter.', 'shopico' );
			}
			
		}
		else{
			$response['error'] = __( 'API data are not yet set.', 'shopico' );
		}
	}
	else{
		$response['error'] = __( 'Email is empty or invalid.', 'shopico' );
	}
	
	echo json_encode( $response );
	die();
}
add_action('wp_ajax_subscribe', 'shopico_send_subscription');
add_action('wp_ajax_nopriv_subscribe', 'shopico_send_subscription');

function shopico_hex2rgb( $hex ){
	$hex = str_replace("#", "", $hex);

	$r = hexdec(substr($hex,0,2));
	$g = hexdec(substr($hex,2,2));
	$b = hexdec(substr($hex,4,2));
	return $r.", ".$g.", ".$b;
}

function shopico_get_avatar_url($get_avatar){
    preg_match("/src='(.*?)'/i", $get_avatar, $matches);
	if( empty( $matches[1] ) ){
		preg_match("/src=\"(.*?)\"/i", $get_avatar, $matches);
	}
    return $matches[1];
}

function shopico_comments( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	$add_below = '';
	?>
	<!-- comment -->
	<div class="row comment-row <?php echo $comment->comment_parent != '0' ? esc_attr( 'comment-margin-left' ) : ''; ?> " id="comment-<?php comment_ID() ?>">
		<!-- comment media -->
		<div class="col-sm-12">
			<div class="comment-avatar">
<!-- 				<?php
				$avatar = shopico_get_avatar_url( get_avatar( $comment, 150 ) );
				if( !empty( $avatar ) ): ?>
					<img src="<?php echo esc_url( $avatar ); ?>" class="img-responsive" title="" alt="">
				<?php endif; ?> -->
				<div style="background-color: <?php echo rColor::generate() ?>">
					<?php
						$autor = get_comment_author();
						echo mb_strtoupper(mb_substr($autor, 0, 1));
					?>
				</div>
			</div>
			<div class="comment-content-wrap">
				<div class="comment-name">
					<div class="pull-left">
						<h5>
							<?php comment_author(); ?>
						</h5>					
						<p><?php comment_time( 'F j, Y в H:i' ); ?> </p>
					</div>
					<span class="pull-right">
					<?php if( is_singular( 'shopico' ) ): ?>
						<?php
						$rate = get_comment_meta( $comment->comment_ID, 'review', true );
						$percentage = round( $rate / 5, 2 ) * 100;
						echo shopico_rating_display( $percentage, $rate, '' );
						?>
					<?php endif; ?>
					<?php
					if (current_user_can('administrator')){
						if( !is_singular( 'shopico' ) || current_user_can( 'manage_options' ) ){
							comment_reply_link(
								array_merge(
									$args,
									array(
										'reply_text' => '<i class="fa fa-share"></i> <small>'.__( 'Reply', 'shopico' ).'</small>',
										'add_below' => $add_below,
										'depth' => $depth,
										'max_depth' => $args['max_depth']
									)
								)
							);
						}
					}?>				
					</span>				
					<div class="clearfix"></div>
				</div>
				<?php
				if ($comment->comment_approved != '0'){
				?>
					<?php comment_text(); ?>
				<?php
				}
				else{ ?>
					<p><?php echo '<span style="color: red; ">' . __('Ваш отзыв скоро будет опубликован на сайте', 'shopico'). '</span>'; ?></p>				
				<?php
				}
				?>	
			</div>		
		</div><!-- .comment media -->
	</div><!-- .comment -->
	<?php
}

function shopico_end_comments(){
	return "";
}

function shopico_embed_html( $html ) {
    return '<div class="video-container">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'shopico_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'shopico_embed_html' ); // Jetpack

function shopico_password_form() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$form = '<form class="protected-post-form" action="' . site_url() . '/wp-login.php?action=postpass" method="post">
				' . __( "This post is password protected. To view it please enter your password below:", "shopico" ) . '
				<label for="' . $label . '">' . __( "Password:", "shopico" ) . ' </label><div class="shopico-form"><input name="post_password" class="form-control" id="' . $label . '" type="password" /><a class="btn btn-default submit-live-form"><i class="fa fa-sign-in"></i></a></div>
			</form>
	';
	return $form;
}
add_filter( 'the_password_form', 'shopico_password_form' );

function shopico_shortcode_style( $style_css ){
 return '<script>jQuery(document).ready( function($){ $("head").append( \''.str_replace( array( "\n", "\r" ), " ", $style_css).'\' ); });</script>';
}


function shopico_get_custom_list( $post_type, $args = array(), $direction = 'right' ){
	$post_array = array();
	$args = array( 'post_type' => $post_type, 'post_status' => 'publish', 'posts_per_page' => -1 ) + $args;
	$posts = get_posts( $args );
	
	foreach( $posts as $post ){
		if( $direction == 'right' ){
			$post_array[$post->ID] = $post->post_title;
		}
		else{
			$post_array[$post->post_title] = $post->ID;	
		}
	}
	
	return $post_array;
}

function shopico_get_image_sizes(){
	$sizes = get_intermediate_image_sizes();
	$sizes_right = array();
	foreach( $sizes as $size ){
		$sizes_right[$size] = $size;
	}

	return $sizes_right;
}

function shopico_get_taxonomy_list( $taxonomy, $direction = 'right', $id = true ){
	global $wpdb;
	$terms = $wpdb->get_results(
		$wpdb->prepare(
			"SELECT term.term_id, term.name, term.slug FROM {$wpdb->prefix}terms AS term LEFT JOIN {$wpdb->prefix}term_taxonomy AS tax ON  term.term_id = tax.term_id WHERE tax.taxonomy = %s",
			$taxonomy
		)
	);
	$terms_array = array();
	if( !empty( $terms ) ){
		foreach( $terms as $term ){
			if( $direction == 'right' ){
				if( $id ){
					$terms_array[$term->term_id] = $term->name;
				}
				else{
					$terms_array[$term->slug] = $term->name;	
				}
			}
			else{
				if( $id ){
					$terms_array[$term->name] = $term->term_id;
				}
				else{
					$terms_array[$term->name] = $term->slug;	
				}
			}
		}
	}

	return $terms_array;
}

function shopico_count_custom_post( $post_type, $args = array(), $post_status = 'publish' ){
	$post_array = array();
	$args = array( 'post_type' => $post_type, 'post_status' => $post_status, 'posts_per_page' => -1 ) + $args;
	$posts = get_posts( $args );
	
	return count( $posts );
}

/* get url by page template */
function shopico_get_permalink_by_tpl( $template_name ){
	$page = get_pages(array(
		'meta_key' => '_wp_page_template',
		'meta_value' => $template_name . '.php'
	));
	if(!empty($page)){
		return get_permalink( $page[0]->ID );
	}
	else{
		return "javascript:;";
	}
}


function shopico_parse_video_url( $url ){
	if( stristr( $url, 'tube' ) ){
		$temp = explode( '?v=', $url );
		$url = 'https://www.youtube.com/embed/'.$temp[1].'?rel=0';
	}
	else if( stristr( $url, 'vimeo' ) ){
		$temp = explode( '/', $url );
		$url = 'https://player.vimeo.com/video/'.$temp[sizeof($temp)-1];
	}
	return $url;
}

function shopico_product_loop_images(){
	global $post;
	global $product;
	
	$attachment_ids = $product->get_gallery_image_ids();
	$images = '<div class="post-slider">';

	if ( has_post_thumbnail() ) {
		$images .= get_the_post_thumbnail( $post->ID, 'shop_catalog' );
	}

	if ( $attachment_ids ) {
		foreach( $attachment_ids as $id ){
			$images .= wp_get_attachment_image( $id, 'shop_catalog' );
		}
	}

	if ( !has_post_thumbnail() && !$attachment_ids && wc_placeholder_img_src() ) {
		$images .= wc_placeholder_img( 'shop_catalog' );
	}
	$images .= '</div>';
	//var_dump(in_array(get_body_class(), 'home'));
	if(in_array('home',get_body_class())){
		$images = str_replace("src=\"", "class=\"owl-lazy\" data-src=\"", $images);
		$images = str_replace("srcset", "data-srcset", $images);
	}
	

	$images .= shopico_favourites_link( $post->ID );

	$images .= '<a href="javascript:;" class="quick-view" data-permalink="'.get_permalink( $post->ID ).'"><i class="fa fa-eye"></i></a>';	
	$sale_end_date = get_post_meta( $post->ID, '_sale_price_dates_to', true );
	if( !empty( $sale_end_date ) ){
		$images .= '<div class="sale-countdown animation" data-time="'.esc_attr( $sale_end_date ).'" data-days_txt="'.__( 'DAYS', 'shopico' ).'" data-day_txt="'.__( 'DAY', 'shopico' ).'" data-hours_txt="'.__( 'HOURS', 'shopico' ).'" data-minutes_txt="'.__( 'MINS', 'shopico' ).'" data-seconds_txt="'.__( 'SECS', 'shopico' ).'"></div>';
	}
	echo  $images;
}
add_action( 'woocommerce_before_shop_loop_item_title', 'shopico_product_loop_images', 10 );

function shopico_favourites_link( $post_id ){
	$favourites = '';
	if( !is_user_logged_in() ){
		$favourites = '<a href="javascript:;" class="favourites not-logged" data-error="'.__( 'You are not logged in', 'shopico' ).'"><i class="fa fa-heart-o"></i></a>';
	}
	else{
		$user_favourites = get_user_meta( get_current_user_id(), 'user_favourites', true );
		$user_favourites = explode( ",", $user_favourites );
		if( in_array( $post_id, $user_favourites ) ){
			$favourites = '<a href="javascript:;" class="favourites remove-fav" data-id="'.esc_attr( $post_id ).'"><i class="fa fa-heart"></i></a>';		
		}
		else{
			$favourites = '<a href="javascript:;" class="favourites add-fav" data-id="'.esc_attr( $post_id ).'"><i class="fa fa-heart-o"></i></a>';
		}
	}	

	return $favourites;
}

function shopico_favourites(){
	$manage = $_POST['manage'];
	$post_id = $_POST['post_id'];
	$user_favourites = get_user_meta( get_current_user_id(), 'user_favourites', true );
	$user_favourites = explode( ",", $user_favourites );
	if( $manage == 'add' ){
		$user_favourites[] = $post_id;
	}
	else{
		if( ( $key = array_search( $post_id, $user_favourites ) ) !== false ) {
		    unset( $user_favourites[$key] );
		}
	}
	update_user_meta( get_current_user_id(), 'user_favourites', join( ",", $user_favourites ) );
}
add_action('wp_ajax_favourites', 'shopico_favourites');
add_action('wp_ajax_nopriv_favourites', 'shopico_favourites');

function shopico_wishlist_url(){
	$edit_account_url = wc_get_endpoint_url( 'edit-account', '', wc_get_page_permalink( 'myaccount' ) );	
}

function shopico_add_endpoints(){
	add_rewrite_endpoint( 'wishlist', EP_ROOT | EP_PAGES );
	add_rewrite_endpoint( 'orders', EP_ROOT | EP_PAGES );
	add_rewrite_endpoint( 'downloads', EP_ROOT | EP_PAGES );
}
add_action( 'init', 'shopico_add_endpoints' );


function shopico_get_products( $extra_args = array() ){
	$args = array(
		'post_type' => 'product',
		'post_status' => 'publish',
		'posts_per_page' => '-1',
	);
	$args = $args + $extra_args;
	$products = get_posts( $args );	
	$products_array = array();
	if( !empty( $products ) ){
		foreach( $products as $product ){
			$products_array[$product->post_title] = $product->ID;
		}
	}

	return $products_array;
}

function shopico_breadcrumbs(){
	global $offer_type, $offer_cat, $location;
	$breadcrumb = '';
	if( is_front_page() || ( is_home() && !class_exists('ReduxFramework') ) ){
		return '';
	}
	$breadcrumb .= '<ul class="breadcrumb">';
	if( !is_front_page() ){
		$breadcrumb .= '<li><a href="'.esc_url( home_url('/') ).'">'.__( 'Home', 'shopico' ).'</a></li>';
	}
	if( is_home() ){
		$breadcrumb .= '<li>'.__( 'Blog', 'shopico' ).'</li>';
	}
	else if( is_category() ){
		$breadcrumb .= '<li>'.single_cat_title( '', false ).'</li>';
	}
	else if( is_404() ){
		$breadcrumb .= '<li>'.__( '404 Page Doesn\'t exists', 'shopico' ).'</li>';
	}
	else if( is_tag() ){
		$breadcrumb .= '<li>'.__('Search by tag: ', 'shopico'). get_query_var('tag').'</li>';
	}
	else if( is_author() ){
		$breadcrumb .= '<li>'.__('Posts by', 'shopico').'</li>';
	}
	else if( is_archive() ){
		$breadcrumb .= '<li>'.__('Archive for:', 'shopico'). single_month_title(' ',false).'</li>';
	}
	else if( is_search() ){
		$breadcrumb .= '<li>'.__('Search results for: ', 'shopico').' '. get_search_query().'</li>';
	}
	else if( is_singular('post') ){
		$terms = get_the_category();
		if( !empty( $terms ) ){
			$last = array_pop( $terms );
			$breadcrumb .= '<li><a href="'.get_category_link( $last->term_id ).'">'.$last->name.'</a></li>';
		}
		$breadcrumb .= '<li>'.get_the_title().'</li>';
	}
	else{
		$breadcrumb .= '<li>'.get_the_title().'</li>';
	}
	$breadcrumb .= '</ul>';

	return $breadcrumb;
}

add_filter( 'woocommerce_output_related_products_args', 'shopico_related_products_args' );
  function shopico_related_products_args( $args ) {

	$args['posts_per_page'] = 10; // 4 related products
	$args['columns'] = 1; // arranged in 2 columns
	return $args;
}


add_filter( 'woocommerce_currencies', 'add_my_currency' );

function add_my_currency( $currencies ) {
     $currencies['ABC'] = __( 'Гривна', 'woocommerce' );
     return $currencies;
}

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'ABC': $currency_symbol = ' грн.'; break;
     }
     return $currency_symbol;
}






function get_url_var($name){
    $strURL = $_SERVER['REQUEST_URI'];
    $arrVals = explode("/",$strURL);
    $found = 0;
    foreach ($arrVals as $index => $value)
    {
        if($value == $name) $found = $index;
    }
    $place = $found + 1;
    return $arrVals[$place];
}



add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'galery',
    array(
      'labels' => array(
        'name' => __( 'Галереи' ),
        'singular_name' => __( 'Галерея' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}


function array_insert_after($key, array &$array, $new_key, $new_value) {
  if (array_key_exists($key, $array)) {
    $new = array();
    foreach ($array as $k => $value) {
      $new[$k] = $value;
      if ($k === $key) {
        $new[$new_key] = $new_value;
      }
    }
    return $new;
  }
  return FALSE;
}


// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
add_filter( 'woocommerce_cart_needs_payment' , 'payments' );
function payments(){
	return false;
}



add_filter('woocommerce_admin_billing_fields', 'build_d');

	function build_d( $fields)	{
		 /*$fields["kiyv1"] = array(
				'label' => "По Киеву ",
				'show'  => true
			);
		 $fields["kiyv2"] = array(
				'label' => "По Киеву бесплатно",
				'show'  => true
			);*/
		 $fields["kiyv3"] = array(
				'label' => "Самовывоз в Киеве",
				'show'  => true
			);
		 $fields["adress_1"] = array(
				'label' => "Адерс",
				'show'  => true
			);
		 $fields["outher1"] = array(
				'label' => "Платная доставка ",
				'show'  => true
			);
		 $fields["outher2"] = array(
				'label' => "Бесплатная доставка",
				'show'  => true
			);
		 $fields["outher_type"] = array(
				'label' => "Служба доставки",
				'show'  => true
			);
		 $fields["outher_wherehouse"] = array(
				'label' => "Способ доставки",
				'show'  => true
			);
		 $fields["outher_pay"] = array(
				'label' => "Способ оплаты",
				'show'  => true
			);
		 $fields["outher_num"] = array(
				'label' => "Номер склада",
				'show'  => true
			);
		 $fields["outher_adress"] = array(
				'label' => "Адрес",
				'show'  => true
			);
		 $fields["outher_home_adress"] = array(
				'label' => "Домашний адрес",
				'show'  => true
			);
		 $fields["outher_index"] = array(
				'label' => "Почтовый индекс",
				'show'  => true
			);
		//  $fields["third_name"] = array(
		// 		'label' => "Отчество",
		// 		'show'  => true
		// 	);



		 $fields["law_payment_fiz"] = array(
				'label' => "Физ лицо",
				'show'  => true
			);

		 $fields["law_payment_yr"] = array(
				'label' => "Юр лицо",
				'show'  => true
			);

		 $fields["law_payment_yr_detail"] = array(
				'label' => "Наименование Юр лица",
				'show'  => true
			);
		 
		 /*$fields['billing_law_payment'] = [
		 	'label' => "Отчество",
			'show'  => true
		 ]*/

		return  $fields;
	};

add_filter( 'woocommerce_email_order_meta_fields', 'custom_woocommerce_email_order_meta_fields', 10, 3 );

function custom_woocommerce_email_order_meta_fields( $fields, $sent_to_admin, $order ) {
		$fields["kiyv3"] = array(
				'label' => "Самовывоз в Киеве",
				'value'   => get_post_meta( $order->id, "_billing_"."kiyv3", true ),
			);
		 $fields["adress_1"] = array(
				'label' => "Адерс",
				'value'   => get_post_meta( $order->id, "_billing_"."adress_1", true ),
			);
		 $fields["outher1"] = array(
				'label' => "Платная доставка ",
				'value'   => get_post_meta( $order->id, "_billing_"."outher1", true ),
			);
		 $fields["outher2"] = array(
				'label' => "Бесплатная доставка",
				'value'   => get_post_meta( $order->id, "_billing_"."outher2", true ),
			);
		 $fields["outher_type"] = array(
				'label' => "Служба доставки",
				'value'   => get_post_meta( $order->id, "_billing_"."outher_type", true ),
			);
		 $fields["outher_wherehouse"] = array(
				'label' => "Способ доставки",
				'value'   => get_post_meta( $order->id, "_billing_"."outher_wherehouse", true ),
			);
		 $fields["outher_pay"] = array(
				'label' => "Способ оплаты",
				'value'   => get_post_meta( $order->id, "_billing_"."outher_pay", true ),
			);
		 $fields["outher_num"] = array(
				'label' => "Номер склада",
				'value'   => get_post_meta( $order->id, "_billing_"."outher_num", true ),
			);
		 $fields["outher_adress"] = array(
				'label' => "Адрес",
				'value'   => get_post_meta( $order->id, "_billing_"."outher_adress", true ),
			);
		 $fields["outher_home_adress"] = array(
				'label' => "Домашний адрес",
				'value'   => get_post_meta( $order->id, "_billing_"."outher_home_adress", true ),
			);
		 $fields["outher_index"] = array(
				'label' => "Почтовый индекс",
				'value'   => get_post_meta( $order->id, "_billing_"."outher_index", true ),
			);
		//  $fields["third_name"] = array(
		// 		'label' => "Отчество",
		// 		'value'   => get_post_meta( $order->id, "_billing_"."third_name", true ),
		// 	);



		 $fields["law_payment_fiz"] = array(
				'label' => "Физ лицо",
				'value'   => get_post_meta( $order->id, "_billing_"."law_payment_fiz", true ),
			);

		 $fields["law_payment_yr"] = array(
				'label' => "Юр лицо",
				'value'   => get_post_meta( $order->id, "_billing_"."law_payment_yr", true ),
			);

		 $fields["law_payment_yr_detail"] = array(
				'label' => "Наименование Юр лица",
				'value'   => get_post_meta( $order->id, "_billing_"."law_payment_yr_detail", true ),
			);

    return $fields;
}


// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
	unset($fields['billing']["billing_company"]);
	$fields['billing']["billing_email"]["required"] = false;
	$fields['billing']["billing_country"]["label"] = "Город";
	$fields['billing']["billing_country"]["type"] = "text";
	$fields['order']["order_comments"]["label"] = "";
	$fields['order']["order_comments"]["placeholder"] = "Напишите дополнительную информацию касающуюся Вашего заказа. а также Ваши предложения. Мы всегда идем на компромисс и рассмотрим любую Вашу просьбу!";
	$fields['billing']["billing_first_name"]["placeholder"] = "Ваше имя";
	$fields['billing']["billing_last_name"]["placeholder"] = "Ваша фамилия";
	$fields['billing']["billing_email"]["label"] = "Email-адрес";
	$fields['billing']["billing_email"]["placeholder"] = "Ваш E-mail";
	$fields['billing']["billing_email"]["class"][0] = "form-row-first";
	$fields['billing']["billing_phone"]["placeholder"] = "Ваш номер телефона";
	$fields['billing']["billing_phone"]["class"][0] = "form-row-last";

	unset($fields['billing']["billing_country"]);
	unset($fields['billing']["billing_city"]);
	unset($fields['billing']["billing_address_1"]);
	unset($fields['billing']["billing_address_2"]);
	unset($fields['billing']["billing_state"]);
	unset($fields['billing']["billing_postcode"]);
	unset($fields['billing']["createaccount"]);
	
	$fields['order']["order_comments"]["label"] = " ";
	
	// $fields['billing']['billing_third_name'] = array(
	// 		"type"	=> "text",
	// 		"label"	=> "Отчество",
	// 		"class"	=> ["form-row-first clear"],
	// 		"clear" => true,
	// 		"placeholder"	=> "Ваше отчество"
	// 	);
		
	include( get_template_directory().'/includes/city_baase.php' );
	$fields['billing']['billing_city'] = array(
			"type"	=> "select",
			"options"	=> $city,
			"label"	=> "Город",
			"required"	=> true,
			"placeholder"	=> "Введите название города",
			"class"	=> ["form-row-wide","update_totals_on_change", "city_select2"],
		);
	
	$fields['billing']['billing_outher2'] = array(
			"type"	=> "checkbox",
			"label"	=> "Бесплатная доставка <a href='http://dev.acoustics.icu/dostavka/' target='_blank'><span class='i-nfo'></span></a>",
			"class"	=> ["outher_checkbox checkbox col-lg-4 col-md-12 col-xs-12 hide"],
		);
	$fields['billing']['billing_outher1'] = array(
			"type"	=> "checkbox",
			"label"	=> "Платная доставка <a href='http://dev.acoustics.icu/ekspress-dostavka/' target='_blank'><span class='i-nfo'></span></a>",
			"class"	=> ["outher_checkbox checkbox col-lg-4 col-md-12 col-xs-12 hide"],
		);
	$fields['billing']['billing_kiyv3'] = array(
			"type"	=> "checkbox",
			"label"	=> "Самовывоз в Киеве <a href='#' data-text='3' class='outher_info'><span class='i-nfo'></span></a>",
			"class"	=> ["outher_checkbox checkbox col-lg-4 col-md-12 col-xs-12 hide"],
		);
	
	$fields['billing']['billing_outher_type'] = array(
			"type"	=> "select",
			"options"	=> [
				"Новая Почта" => "Новая Почта",
				"In Time" => "Ин Тайм",
				/*"Delivery" => "Деливери",
				"Meest Express" => "Мист Экспресс",*/
			],
			"label"	=> "Служба доставки<abbr class='required' title='обязательно'>*</abbr>",
			"class"	=> ["styleselect col-lg-6 col-md-12 col-xs-12 hide"],
		);

	$fields['billing']['billing_outher_wherehouse'] = array(
			"type"	=> "select",
			"options"	=> [
				"Доставка на отделение" => "Доставка на отделение",
				"Адресная доставка" => "Адресная доставка",
			],
			"label"	=> "Способ доставки<abbr class='required' title='обязательно'>*</abbr>",
			"class"	=> ["styleselect col-lg-6 col-md-12 col-xs-12 hide"],
		);

	$fields['billing']['billing_outher_pay'] = array(
			"type"	=> "select",
			"options"	=> [
				"Оплата на карту" => "Оплата на карту",
				"Наложенный платёж" => "Наложенный платёж",
				"Выставить счет" => "Выставить счет",
			],
			"label"	=> "Способ оплаты<abbr class='required' title='обязательно'>*</abbr>",
			"class"	=> ["styleselect col-lg-6 col-md-12 col-xs-12 hide"],
		);
	$fields['billing']['billing_outher_num'] = array(
			"type"	=> "text",
			"label"	=> "Номер отделения<abbr class='required' title='обязательно'>*</abbr>",
			"placeholder"	=> "Введите номер отделения",
			"class"	=> [" col-lg-6 col-md-12 col-xs-12 hide"],
			"clear"	=> true
		);
	$fields['billing']['billing_outher_adress'] = array(
			"type"	=> "text",
			"label"	=> "Адрес<abbr class='required' title='обязательно'>*</abbr>",
			"placeholder"	=> "Введите необходимый адрес для доставки Вашего заказа",
			"class"	=> ["col-lg-6 col-md-12 col-xs-12 hide"],
		);
		
	// ---------------------------
	$fields['billing']['billing_law_payment_fiz'] = array(
			"type"	=> "checkbox",
			"label"	=> "Физ. лицо",
			"class"	=> ["clr-left law_checkbox_s checkbox col-md-6 col-xs-12 hide"],
		);
	$fields['billing']['billing_law_payment_yr'] = array(
			"type"	=> "checkbox",
			"label"	=> "Юр. лицо",
			"class"	=> ["law_checkbox_s checkbox col-md-6 col-xs-12 hide"]
		);
	$fields['billing']['billing_law_payment_yr_detail'] = array(
			"type"	=> "text",
			"label"	=> "Наименование юр. лица и код ЄДРПОУ<abbr class='required' title='обязательно'>*</abbr>",
			"class"	=> ["col-md-6 col-xs-12 hide"],
			"placeholder"	=> "Наименование юр. ",
		);
	// ---------------------------
		
	$fields['billing']['billing_first_name']['priority'] = 10;
	$fields['billing']['billing_last_name']['priority'] = 20;
	// $fields['billing']['billing_third_name']['priority'] = 30;
	$fields['billing']['billing_email']['priority'] = 40;
	$fields['billing']['billing_phone']['priority'] = 50;
	$fields['billing']['billing_city']['priority'] = 60;	
	$fields['billing']['billing_outher2']['priority'] = 70;
	$fields['billing']['billing_outher1']['priority'] = 80;
	$fields['billing']['billing_kiyv3']['priority'] = 90;
	$fields['billing']['billing_outher_type']['priority'] = 100;
	$fields['billing']['billing_outher_wherehouse']['priority'] = 110;
	$fields['billing']['billing_outher_pay']['priority'] = 120;
	$fields['billing']['billing_outher_num']['priority'] = 130;
	$fields['billing']['billing_outher_adress']['priority'] = 140;	
	$fields['billing']['billing_law_payment_fiz']['priority'] = 150;
	$fields['billing']['billing_law_payment_yr']['priority'] = 160;
	$fields['billing']['billing_law_payment_yr_detail']['priority'] = 170;
		
	



	/*$fields['billing'] = array_insert_after("billing_city", $fields['billing'], "billing_kiyv1", [
			"type"	=> "checkbox",
			"label"	=> "По Киеву <a href='#' data-text='1' class='kiyv_a'><span class='i-nfo'></span></a>",
			"class"	=> ["kiyv_checkbox checkbox col-md-4 col-xs-12 hide"],
		]);
	$fields['billing'] = array_insert_after("billing_kiyv1", $fields['billing'], "billing_kiyv2", [
			"type"	=> "checkbox",
			"label"	=> "По Киеву бесплатно <a href='#' data-text='2' class='kiyv_a'><span class='i-nfo'></span></a>",
			"class"	=> ["kiyv_checkbox checkbox col-md-4 col-xs-12 hide"],
		]);*/
	/*$fields['billing'] = array_insert_after("billing_kiyv3", $fields['billing'], "billing_adress_1", [
			"type"	=> "textarea",
			"label"	=> "Адрес и другие реквизиты для доставки <abbr class='required' title='обязательно'>*</abbr>",
			"placeholder"	=> "Введите точный адрес вашего проживания",
			"class"	=> ["  kiyv_addres hide"],
		]);*/
		// var_dump($fields);

	


	
	/*$fields['billing'] = array_insert_after("billing_outher_adress", $fields['billing'], "billing_outher_home_adress", [
			"type"	=> "text",
			"label"	=> "Домашний адрес<abbr class='required' title='обязательно'>*</abbr>",
			"placeholder"	=> "Введите точный адрес вашего проживания",
			"class"	=> ["hide col-xs-12"],
		]);

	$fields['billing'] = array_insert_after("billing_outher_home_adress", $fields['billing'], "billing_outher_index", [
			"type"	=> "text",
			"label"	=> "Почтовый индекс<a href='#' class='outher_index'><span class='i-nfo'></span></a>",
			"placeholder"	=> "",
			"class"	=> ["col-xs-4 hide"],
		]);*/

     return $fields;
}

add_filter( 'woocommerce_catalog_orderby', "catalogOrderby");
function catalogOrderby(){
	return array(
			'menu_order' => __( 'Default sorting', 'woocommerce' ),
			'popularity' => __( 'Sort by popularity', 'woocommerce' ),
			'date'       => __( 'Sort by newness', 'woocommerce' ),
			'price'      => __( 'Sort by price: low to high', 'woocommerce' ),
			'price-desc' => __( 'Sort by price: high to low', 'woocommerce' )
		);
}

class rColor
{
    protected static $hue;
    protected static $initiated = false;

    protected static function initiate()
    {
        if (!rColor::$initiated)
        {
            rColor::$hue = mt_rand() / mt_getrandmax();
            rColor::$initiated = true;
        }
    }

    protected static function HSVtoRGB($hue, $saturation, $v)
    {
            $h_i = floor($hue * 6);
            $f   = $hue * 6 - $h_i;
            $p   = $v * (1 - $saturation);
            $q   = $v * (1 - $f * $saturation);
            $t   = $v * (1 - (1 - $f) * $saturation);
            $r   = 255;
            $g   = 255;
            $b   = 255;

        switch($h_i)
        {
            case 0: $r = $v ; $g = $t ; $b = $p;        break;
            case 1: $r = $q ; $g = $v ; $b = $p;        break;
            case 2: $r = $p ; $g = $v ; $b = $t;        break;
            case 3: $r = $p ; $g = $q ; $b = $v;        break;
            case 4: $r = $t ; $g = $p ; $b = $v;        break;
            case 5: $r = $v ; $g = $p ; $b = $q;        break;
        }

        return array(floor($r * 256),
                     floor($g * 256),
                     floor($b * 256));
    }

    protected static function padHEX($str)
    {
        $hexwidth = 2;

        if(strlen($str) > $hexwidth)
            return $str;
        else
            return str_pad($str, $hexwidth, '0', STR_PAD_LEFT);
    }

    public static function generate($hex = true, $saturation = 0.7, $value = 0.95)
    {
        rColor::initiate();

        $goldenRatio = 0.618033988749895;

        rColor::$hue += $goldenRatio;
        rColor::$hue = fmod(rColor::$hue, 1);

        if(!is_numeric($saturation))
            $saturation = 0.5;

        if(!is_numeric($value))
            $value = 0.95;

        $rgb = rColor::HSVtoRGB(rColor::$hue , $saturation, $value);

        if($hex)
            return "#" . rColor::padHex(dechex($rgb[0]))
                       . rColor::padHex(dechex($rgb[1]))
                       . rColor::padHex(dechex($rgb[2]));
        else
            return $rgb;
    }

}

function kia_email_order_meta_fields( $fields, $sent_to_admin, $order ) {
    $fields['billing_kiyv1'] = array(
                'label' => "По Киеву",
                'value' => get_post_meta( $order->id, 'billing_kiyv1', true ),
            );
    $fields['billing_kiyv2'] = array(
                'label' => "По Киеву бесплатно",
                'value' => get_post_meta( $order->id, 'billing_kiyv2', true ),
            );
    $fields['billing_kiyv3'] = array(
                'label' => "Самовывоз в Киеве",
                'value' => get_post_meta( $order->id, 'billing_kiyv3', true ),
            );
    $fields['billing_outher1'] = array(
                'label' => "Платная доставка",
                'value' => get_post_meta( $order->id, 'billing_outher1', true ),
            );
    $fields['billing_outher2'] = array(
                'label' => "Бесплатная доставка",
                'value' => get_post_meta( $order->id, 'billing_outher2', true ),
            );
    return $fields;
}
add_filter('woocommerce_email_order_meta_fields', 'kia_email_order_meta_fields', 10, 3 );

function remove_menus () {
   //remove_menu_page( 'themes.php' );
    global $menu;
    $restricted = array(
    //__('Links'),
    //__('Tools'),
    //__('Plugins'),
    ///__('Группы полей'),
    //__('Переводчик Loco'),
    //__('Visual Composer'),
 );
    end ($menu);
    while (prev($menu)){
        $value = explode(' ',$menu[key($menu)][0]);
        if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
    }
}
add_action('admin_menu', 'remove_menus');

add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
    unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
//    unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
//    unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
    return $enqueue_styles;
}

// function kia_display_email_order_meta( $order, $sent_to_admin, $plain_text ) {
//     $some_field = get_post_meta( $order->id, '_some_field', true );
//     $another_field = get_post_meta( $order->id, '_another_field', true );
//     if( $plain_text ){
//         echo 'The value for some field is ' . $some_field . ' while the value of another field is ' . $another_field;
//     } else {
//         echo '<p>The value for <strong>some field</strong> is ' . $some_field. ' while the value of <strong>another field</strong> is ' . $another_field . '</p>';
//     }
// }
// add_action('woocommerce_email_customer_details', 'kia_display_email_order_meta', 30, 3 );

// add_filter( 'comment_moderation_recipients' , 'moderation', 'moderation' );
// function moderation($value)
// {
// 	print_r($value);
// 	die();
// }

// helpers (Delete)

function get_pr($var, $die = true){
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	if($die){
		die();
	}
}


/* Обработчик ajaxLoadMore */

function ajaxLoadMore_callback(){
    
	remove_all_filters('posts_orderby');
	
	$term_id = $_POST['term_id'];
	$page = $_POST['page']+1;
	$custom_posts_per_page = absint( get_option( 'woocommerce_catalog_rows', 4 ) * get_option( 'woocommerce_catalog_columns', 4 ) );
	
	if($term_id == 'articles'){
			$posts = query_posts([
					'posts_per_page'   => $custom_posts_per_page,
					'post_status' => 'publish',
					'orderby'     => 'date',
					'order'       => 'DESC',
					'post_type'   => 'post',
					'suppress_filters' => false,
					'paged' => $page
			]);

			echo '<div class="row">';

			if(have_posts()){
					$counter = 1;
					while(have_posts()){ the_post();?>
							
									<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
											<div class="product-item">
													<div class="product-media">
															<a href="<?php the_permalink(); ?>">
																	<div class="post-slider rslides">
																			<?php 
																					if(get_the_post_thumbnail_url()):
																							the_post_thumbnail([300,300]);
																					else:
																							echo '<img src="'.get_template_directory_uri().'/images/no-image.jpg"/>';
																					endif;
																			?>
																	</div>
															</a>

															<div class="product-item-content blog">
																	<a href="<?php the_permalink(); ?>" class="blog-title <?php echo esc_attr( $extra_class ); ?>">
																			<h4 class="animation"><?php the_title(); ?></h4>
																	</a>
																	<div class="text-left">
																			<?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
																	</div>
															</div>
													</div>
											</div>
									</div>

									<?php if ($counter == 4) $counter = 0; ?> <?php if ($counter == 0): ?> </div><div class="row"> <?php endif ?> <?php $counter++; ?>

							<?php
					}
			}
			
			die();
	}
	
	
	
$args = [
			'post_type'             => 'product',
			'post_status'           => 'publish',
			'posts_per_page'        => $custom_posts_per_page,
			'orderby'   => 'meta_value_num ID',
			'meta_key'  => 'total_sales',
			'order' => 'desc',
			'paged' => $page
	];
	
	if(!empty($term_id)){
			$args['tax_query'] = [[
					'taxonomy'      => 'product_cat',
					'field'         => 'term_id',
					'terms'         => $term_id,
					'operator'      => 'IN'
			]];
			
			
	}

	query_posts($args);

	if(have_posts()):
			while(have_posts()): the_post();
					get_template_part('woocommerce/content-product', get_post_format());
			endwhile;
	endif;
	
die();
}


add_action('wp_ajax_loadmore', 'ajaxLoadMore_callback');
add_action('wp_ajax_nopriv_loadmore', 'ajaxLoadMore_callback');

/* Обработчик ajaxLoadMore */


//refresh fix
add_action('woocommerce_add_to_cart_redirect', 'resolve_dupes_add_to_cart_redirect');

function resolve_dupes_add_to_cart_redirect($url = false) {
	if($_SERVER['REQUEST_METHOD']) 
		$resultURL = (array_key_exists ('HTTP_ORIGIN', $_SERVER ))? $_SERVER['HTTP_ORIGIN'] . $_SERVER['REQUEST_URI'] : $_SERVER['REQUEST_URI'];
		return $resultURL;
	return false;
}
include_once("wc-fun.php");


// CHANGE RELATED PRODUCTS TEXT
function my_text_strings( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
        case 'Related products' :
            $translated_text = __( 'You may also like...', 'woocommerce' );
            break;
    }
    return $translated_text;
}
add_filter( 'gettext', 'my_text_strings', 20, 3 );





add_action("{$taxonomy}_edit_form_fields", 'add_form_fields_example', 10, 2);

function add_form_fields_example($term, $taxonomy){
    ?>
    <tr valign="top">
        <th scope="row">Description</th>
        <td>
            <?php wp_editor(html_entity_decode($term->description), 'description', array('media_buttons' => false)); ?>
            <script>
                jQuery(window).ready(function(){
                    jQuery('label[for=description]').parent().parent().remove();
                });
            </script>
        </td>
    </tr>
    <?php
}



add_filter('wp_list_categories','style_current_cat_single_post');
// filter to add the .current-cat class to categories list in single post
function style_current_cat_single_post($output) {
	if( is_single() ) :
		global $post;
		$categories = wp_get_post_categories($post->ID);
		
		foreach($categories as $value) {
			if(preg_match('#item-' . $value . '">#', $output)) {
				$output = str_replace('item-' . $value . '">', 'item-' . $value . ' current-cat">', $output);
			}
		}
	endif;
	return $output;
}

// Добавление старой цены для вариативного товара и изменение отображения без "от"
function wc_wc20_variation_price_format( $price, $product ) {
// Main Price
$prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
$price_min = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
$price_max = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[1] ) ) : wc_price( $prices[1] );
// Sale Price
$prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
sort( $prices );
$saleprice_min = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
$saleprice_max = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[1] ) ) : wc_price( $prices[1] );
if ( $price_min !== $price_max ) {
$price = '<del>' . $saleprice_min . '&ndash;'. $saleprice_max . '</del> <ins>' . $price_min . '&ndash;'. $price_max . '</ins>';
}
return $price;
}
add_filter( 'woocommerce_variable_sale_price_html', 'wc_wc20_variation_price_format', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'wc_wc20_variation_price_format', 10, 2 );


// PHP: Remove "(optional)" from our non required fields
add_filter( 'woocommerce_form_field' , 'remove_checkout_optional_fields_label', 10, 4 );
function remove_checkout_optional_fields_label( $field, $key, $args, $value ) {
    // Only on checkout page
    if( is_checkout() && ! is_wc_endpoint_url() ) {
        $optional = '&nbsp;<span class="optional">(' . esc_html__( 'optional', 'woocommerce' ) . ')</span>';
        $field = str_replace( $optional, '', $field );
    }
    return $field;
}

// Show Product variations attributes
add_filter( 'woocommerce_product_variation_title_include_attributes', '__return_false' );



// GPS Register image size for main galery
add_image_size( 'Main galery', 1110, 420, true );


add_filter('woocommerce_placeholder_img_src', 'custom_woocommerce_placeholder_img_src');

function custom_woocommerce_placeholder_img_src( $src ) {
	$upload_dir = wp_upload_dir();
	$uploads = untrailingslashit( $upload_dir['baseurl'] );
	// replace with path to your image
	$src = $uploads . '/woocommerce-placeholder.jpg';
	 
	return $src;
}

// GPS AJAX change quantity in cart in header
add_action( 'header_cart', 'shopico_header_card' );
function shopico_header_card() {
	global $woocommerce;
	$count = $woocommerce->cart->get_cart_contents_count();
	if($count != 0):?>
		<span class='header-cart-count cartCount'></span>
	<?php else: ?>
		<span class='cartCount'></span>
	<?php endif;
}

add_filter( 'woocommerce_add_to_cart_fragments', 'shopico_header_add_to_cart_fragment' );
function shopico_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	ob_start();
	$count = $woocommerce->cart->get_cart_contents_count();
	if($count != 0):?>
		<span class='header-cart-count cartCount' ><?php echo esc_html( $count ); ?></span>
	<?php else: ?>
		<span class='cartCount'></span>
	<?php endif;
	$fragments['span.cartCount'] = ob_get_clean();
	return $fragments;
}


// GPS Change button text "Add to cart"
add_filter( 'woocommerce_product_single_add_to_cart_text', 'shopico_single_add_to_cart_text' );
function shopico_single_add_to_cart_text(){
    return __( 'Купить', 'shopico' );
}

add_filter( 'woocommerce_product_add_to_cart_text', 'shopico_product_add_to_cart_text' );
function shopico_product_add_to_cart_text() {
	global $product;
	if($product->is_type( 'variable' )){
		return __( 'Выбрать', 'shopico' );
	}
	else{
		return __( 'Купить', 'shopico' );
	}
}


// GPS Add custrom validation
add_action ('woocommerce_after_checkout_validation' , 'shopico_validate_checkout_fileds' , 10 , 2 );
function shopico_validate_checkout_fileds ($fields , $errors) {
	if(($fields['billing_outher1'] == '1') || ($fields['billing_outher2'] == '1')){
		if($fields['billing_outher_type'] == "empty"){ 
				$errors -> add('validation', '<strong>'. __('Поле','shopico').' '. __('Служба доставки','shopico') . '</strong> '. __('является обязательным для заполнения','shopico'));
		}
		if($fields['billing_outher_wherehouse'] == 'empty'){ 
				$errors -> add('validation', '<strong>'. __('Поле','shopico').' '. __('Способ доставки','shopico') . '</strong> '. __('является обязательным для заполнения','shopico'));
		}
		if($fields['billing_outher_pay'] == 'empty'){ 
				$errors -> add('validation', '<strong>'. __('Поле','shopico').' '. __('Способ оплаты','shopico') . '</strong> '. __('является обязательным для заполнения','shopico'));
		}
		if($fields['billing_outher_num'] == '' && $fields['billing_outher_wherehouse'] != 'Адресная доставка'){ 
				$errors -> add('validation', '<strong>'. __('Поле','shopico').' '. __('Номер отделения','shopico') . '</strong> '. __('является обязательным для заполнения','shopico'));
		}
		if(($fields['billing_outher_wherehouse'] == 'Адресная доставка') && ($fields['billing_outher_adress'] == '')){ 
				$errors -> add('validation', '<strong>'. __('Поле','shopico').' '. __('Адрес','shopico') . '</strong> '. __('является обязательным для заполнения','shopico'));
		}
		if(($fields['billing_outher_pay'] == 'Выставить счет') && (($fields['billing_law_payment_fiz'] != '1') && $fields['billing_law_payment_yr'] != '1')){ 
			$errors -> add('validation', '<strong>'. __('Поле','shopico').' '. __('Лицо','shopico') . '</strong> '. __('является обязательным для заполнения','shopico'));
		}
		if(($fields['billing_law_payment_yr'] == '1') && ($fields['billing_law_payment_yr_detail'] == '')){ 
				$errors -> add('validation', '<strong>'. __('Поле','shopico').' '. __('Наименование юр. лица и код ЄДРПОУ','shopico') . '</strong> '. __('является обязательным для заполнения','shopico'));
		}
	}
	if(!($fields['billing_outher1'] == '1') && !($fields['billing_outher2'] == '1') && !($fields['billing_kiyv3'] == '1')){ 
		$errors -> add('validation', '<strong>'. __('Выберите доставку','shopico') . '</strong> ');
	}
}


function shopico_lm_footer_scripts() {  
	wp_enqueue_script( 'artabr_lm_ajax', get_template_directory_uri() . '/js/ajax.js', true );
	wp_enqueue_script( 'historyjs', get_template_directory_uri() . '/js/history.js', true );

			
			// Add parameters for the JS
			global $wp_query;
			$max = $wp_query->max_num_pages;
			$cuscom_row_item = absint( get_option( 'woocommerce_catalog_rows', 4 ) * get_option( 'woocommerce_catalog_columns', 4 ) );
			$count_loading_product = $cuscom_row_item;
			$maxpost = $wp_query->found_posts;
			$count_loading_product_last = $maxpost - $cuscom_row_item * ($max - 1);
			if ($wp_query->max_num_pages > 1): 
				if((get_query_var( 'paged' ) + 1 == $max) || ($max == 2) ){
					$maxpost = $wp_query->found_posts;
					$count_loading_product = $maxpost - $cuscom_row_item * ($max - 1);
				}
			endif;
			$maxprod = $count_loading_product;
			$paged = ( get_query_var( 'paged' ) > 1 ) ? get_query_var( 'paged' ) : 1;
			if(is_page('statii')){
				$args = array(
					'post_status' => 'publish',
					'numberposts' => $cuscom_row_item,
					'category'    => 0,
					'posts_per_page' => $cuscom_row_item,
					'paged' => $paged,
					'orderby'     => 'date',
					'order'       => 'DESC',
					'post_type'   => 'post',
					'suppress_filters' => true,
				);
				$query = new WP_Query($args);
				$max = $query->max_num_pages;
				$count_loading_product = $cuscom_row_item;
				if ($query->max_num_pages > 1): 
					if((get_query_var( 'paged' ) + 1 == $max) || ($max == 2) ){
						$maxpost = $query->found_posts;
						$count_loading_product = $maxpost - $cuscom_row_item * ($max - 1);
					}
				endif;
				$maxprod = $count_loading_product;
			}
			wp_localize_script(
				'artabr_lm_ajax',
				'mts_ajax_loadposts',
				array(
					'startPage' => $paged,
					'maxPages' => $max,
					'maxProd' => $maxprod,
					'maxProdlast' => $count_loading_product_last,
					'nextLink' => next_posts( $max, false ),
					'i18n_loadmore' => __( ' Показать еще', 'shopico' ),
					'i18n_nomore' => __( ' Больше нет', 'shopico' ),
					'i18n_loading' => __(' Загрузка...', 'shopico')
				 )
			);
	
}  
add_action( 'wp_footer', 'shopico_lm_footer_scripts' );




add_action( 'wp_enqueue_scripts', 'shopico_add_follow_meta' );

function shopico_add_follow_meta(){
	if(!empty(get_query_var('paged') && !is_product_category() && !is_filtered())){
		echo '<meta name="robots" content="index, follow" count="2/>';
	}
	$url_zapros = urldecode($_SERVER['REQUEST_URI']);
	// if (!!strstr($url_zapros, '?filter')){
	// 	$canonical = 'dfdf';
	// }
	if((!empty(get_query_var('orderby')) && (get_query_var('orderby') != get_option( 'woocommerce_default_catalog_orderby', '' )) && !wc_get_loop_prop( 'is_search' )) || !!strstr($url_zapros, '?filter')){
		echo '<meta name="robots" content="noindex, nofollow" count="n1"/>';
	}
}




add_filter( 'wpseo_canonical', 'shopico_add_canonical_link', 10, 2 );

function shopico_add_canonical_link($canonical){
	// if(doing_filter('premmerce_filter_rule_found')){
	// 	$canonical = "srab";
	// }
	// if (){
	// 	$canonical = 'dfdfd';
	// }
	if(!empty(get_query_var('paged'))){
		$canonical = preg_replace('/(\/?)page(\/|d=)[0-9]+/', '', $canonical);
	}
	// if(!empty(get_query_var('min_price')) || !empty(get_query_var('max_price'))){
	// 	$canonical = "price";
	// }
	return $canonical;
}

add_filter( 'wpseo_title', 'shopico_translate_title_searchpage', 10, 2 );

function shopico_translate_title_searchpage($page_title){
  if ( is_search() ) {
		$page_title = str_replace('You searched for', __('Вы ищите','shopico'), $page_title);
  }

  return $page_title;
}



function get_rating_html( $rating = null ) {
	wc_deprecated_function( 'WC_Product::get_rating_html', '3.0', 'wc_get_rating_html' );
	return wc_get_rating_html( $rating );
}







add_filter( 'posts_results', 'cache_meta_data', 9999, 2 );
function cache_meta_data( $posts, $object ) {
    $posts_to_cache = array();
    // this usually makes only sense when we have a bunch of posts
    if ( empty( $posts ) || is_wp_error( $posts ) || is_single() || is_page() || count( $posts ) < 3 )
        return $posts;

    foreach( $posts as $post ) {
        if ( isset( $post->ID ) && isset( $post->post_type ) ) {
            $posts_to_cache[$post->ID] = 1;
        }
    }

    if ( empty( $posts_to_cache ) )
        return $posts;

    update_meta_cache( 'post', array_keys( $posts_to_cache ) );
    unset( $posts_to_cache );

    return $posts;
}




// ADD-ON 
//  for
// Premmerce Product Filter for WooCommerce
// Author: GPS Devolp


add_action('premmerce_filter_rule_not_found', 'noidex_for_rule_not_found');

function noidex_for_rule_not_found(){
	// // If instaled Yoast SEO
	remove_action('premmerce_filter_rule_not_found', 'ruleNotFound');
	if (defined('WPSEO_VERSION')) {
		remove_action('wpseo_head', array(\WPSEO_Frontend::get_instance(), 'canonical'), 20);
		remove_action('wpseo_head', array(\WPSEO_Frontend::get_instance(), 'metadesc'), 6);
	}

	// If you need add custom canonical landing page(посадочная страница)
	add_action('wp_head', function (){
		$term = get_queried_object();
			if ($term instanceof \WP_Term) {
				$canonical = get_term_link($term);
				if (is_string($canonical)) {
					// printf('<link rel="canonical" href="%s" />', 'my canonical'); //  esc_url($canonical, null, null)
					echo('<meta name="robots" content="noindex, nofollow" count="n2"/>');
				}
			}
	},-1);
}





// Adding canonical links to pages with a SEO rule
function add_canonical_for_rule(){
	add_action('wp_head', function (){
		$url = get_option( 'home' );
		$parts = wp_parse_url( $url );
		$base_url = trailingslashit( $parts['scheme'] . '://' . $parts['host'] );
		$base_url = mb_substr($base_url, 0, -1);
		$canonical = $base_url.$_SERVER['REQUEST_URI'];
		$canonical = preg_replace('/(\/?)page(\/|d=)[0-9]+/', '', $canonical);
		echo('<meta name="robots" content="index, follow" count="1" />');
		printf('<link rel="canonical" href="%s" />', $canonical);
	},2);
}

add_action('premmerce_filter_rule_found', 'add_canonical_for_rule', 5);

// Templates Override Premmerce Product Filter for WooCommerce (Premium)
function shopico_tmp_checkbox_override_premmerce_filter(){
	// Remove default rendering action
	remove_action('premmerce_filter_render_item_checkbox', array(Premmerce\Filter\Filter\Container::getInstance()->getItemRenderer() ,'renderCheckbox'), 10);
	// remove_action('premmerce_filter_render_item_radio', array(Premmerce\Filter\Filter\Container::getInstance()->getItemRenderer() ,'renderRadio'), 10);
	// remove_action('premmerce_filter_render_item_radio', array(Premmerce\Filter\Filter\Container::getInstance()->getItemRenderer() ,'renderSelect'), 10);
	// remove_action('premmerce_filter_render_item_label', array(Premmerce\Filter\Filter\Container::getInstance()->getItemRenderer() ,'renderLabel'), 10);
	// remove_action('premmerce_filter_render_item_color', array(Premmerce\Filter\Filter\Container::getInstance()->getItemRenderer() ,'renderColor'), 10);
	// remove_action('premmerce_filter_render_item_slider', array(Premmerce\Filter\Filter\Container::getInstance()->getItemRenderer() ,'renderSlider'), 10);
	// remove_action('premmerce_filter_render_item_after_title', array(Premmerce\Filter\Filter\Container::getInstance()->getItemRenderer() ,'renderAfterTitle'), 10);
	// if($res){
	// 	get_pr($res."вававава", false);
	// }

	// Add custom rendering action
	// /includes/premmerce-woocommerce-product-filter/views/frontend/types
	add_action('premmerce_filter_render_item_checkbox', 'newRenderCheckbox',10);
	// add_action('premmerce_filter_render_item_radio', 'newRenderRadio',10);
	// add_action('premmerce_filter_render_item_radio', 'newRenderSelect',10);
	// add_action('premmerce_filter_render_item_label', 'newRenderLabel',10);
	// add_action('premmerce_filter_render_item_color', 'newRenderColor',10);
	// add_action('premmerce_filter_render_item_slider', 'newRenderSlider',10);
	// add_action('premmerce_filter_render_item_after_title', 'newRenderAfterTitle',10);
}
add_action('premmerce_filter_render_item_checkbox', 'shopico_tmp_checkbox_override_premmerce_filter', 1);

function shopico_tmp_slider_override_premmerce_filter(){
	// Remove default rendering action;
	remove_action('premmerce_filter_render_item_slider', array(Premmerce\Filter\Filter\Container::getInstance()->getItemRenderer() ,'renderSlider'), 10);

	// Add custom rendering action
	add_action('premmerce_filter_render_item_slider', 'newRenderSlider',10);
}
add_action('premmerce_filter_render_item_slider', 'shopico_tmp_slider_override_premmerce_filter', 1);

// Color
function shopico_tmp_color_override_premmerce_filter(){
	// Remove default rendering action;
	remove_action('premmerce_filter_render_item_color', array(Premmerce\Filter\Filter\Container::getInstance()->getItemRenderer() ,'renderColor'), 10);

	// Add custom rendering action
	add_action('premmerce_filter_render_item_color', 'newRenderColor',10);
}
add_action('premmerce_filter_render_item_color', 'shopico_tmp_color_override_premmerce_filter', 1);

// Radio
function shopico_tmp_radio_override_premmerce_filter(){
	// Remove default rendering action;
	remove_action('premmerce_filter_render_item_radio', array(Premmerce\Filter\Filter\Container::getInstance()->getItemRenderer() ,'renderRadio'), 10);

	// Add custom rendering action
	add_action('premmerce_filter_render_item_radio', 'newRenderRadio',10);
}
add_action('premmerce_filter_render_item_radio', 'shopico_tmp_radio_override_premmerce_filter', 1);

// Label
function shopico_tmp_label_override_premmerce_filter(){
	// Remove default rendering action;
	remove_action('premmerce_filter_render_item_label', array(Premmerce\Filter\Filter\Container::getInstance()->getItemRenderer() ,'renderRadio'), 10);

	// Add custom rendering action
	add_action('premmerce_filter_render_item_label', 'newRenderLabel',10);
}
add_action('premmerce_filter_render_item_label', 'shopico_tmp_label_override_premmerce_filter', 1);



/** * @param $attribute */
function newRenderCheckbox($attribute){
	$__variables = array('attribute' => $attribute);
	extract($__variables);
	include get_template_directory().'/includes/premmerce-woocommerce-product-filter/views/frontend/types/checkbox.php';
}

/** * @param $attribute */
function newRenderRadio($attribute){
	$__variables = array('attribute' => $attribute);
	extract($__variables);
	include get_template_directory().'/includes/premmerce-woocommerce-product-filter/views/frontend/types/radio.php';
}

/** * @param $attribute */
function newRenderSelect($attribute){
	$__variables = array('attribute' => $attribute);
	extract($__variables);
	include get_template_directory().'/includes/premmerce-woocommerce-product-filter/views/frontend/types/select.php';
}

/** * @param $attribute */
function newRenderColor($attribute){
	$__variables = array('attribute' => $attribute);
	extract($__variables);
	include get_template_directory().'/includes/premmerce-woocommerce-product-filter/views/frontend/types/color.php';
}

/** * @param $attribute */
function newRenderSlider($attribute){
	$__variables = array('attribute' => $attribute);
	extract($__variables);
	include get_template_directory().'/includes/premmerce-woocommerce-product-filter/views/frontend/types/slider.php';
}

/** * @param $attribute */
function newRenderLabel($attribute){
	$__variables = array('attribute' => $attribute);
	extract($__variables);
	include get_template_directory().'/includes/premmerce-woocommerce-product-filter/views/frontend/types/label.php';
}

/** * @param $attribute */
function newRenderAfterTitle($attribute){
	$__variables = array('attribute' => $attribute);
	extract($__variables);
	include get_template_directory().'/includes/premmerce-woocommerce-product-filter/views/frontend/types/dropdown-handle.php';
}

// Check checking for unnecessary attributes
function checkEmtyItem($items){
	$result = false;
	if($items->getSlug() == 'price'){
		return true;
	}
	foreach($items->terms as $item){
		if($item->count >=1 && $result){
			return true;
		}
		elseif($item->count >=1){
			$result = true;
		}
	}
	return false;
}


$pf_rule = '';

add_filter('premmerce_filter_rule_found','set_in_global_rule');

function set_in_global_rule($atr){
	global $pf_rule;
	$pf_rule = $atr;
	if(is_paged()){
		remove_all_actions('woocommerce_archive_description');
	}
	return $atr;
}

// Get parammeters for ajax pagination in response
// ATTENTION: 
//			- only with ajax-loading premmerce filters
function shopico_lm_premmerce_filter_ajax_scripts(){
	global $pf_rule;
	global $wp_query;
	$max = $wp_query->max_num_pages;
	$cuscom_row_item = absint( get_option( 'woocommerce_catalog_rows', 4 ) * get_option( 'woocommerce_catalog_columns', 4 ) );
	$count_loading_product = $cuscom_row_item;
	$maxpost = $wp_query->found_posts;
	$count_loading_product_last = $maxpost - $cuscom_row_item * ($max - 1);
	if ($wp_query->max_num_pages > 1): 
			if((get_query_var( 'paged' ) + 1 == $max) || ($max == 2) ){
					$maxpost = $wp_query->found_posts;
					$count_loading_product = $maxpost - $cuscom_row_item * ($max - 1);
			}
	endif;
	$SeoListener = new Premmerce\Filter\Seo\SeoListener;
	$h1 = (!empty($pf_rule))? $pf_rule['rule']['h1'] : $wp_query->queried_object->name;
	$SeoListener = new Premmerce\Filter\Seo\SeoListener;
	$h1 = $SeoListener->parseVariables($h1);
	$description = (!empty($pf_rule))? $pf_rule['rule']['description'] : $wp_query->queried_object->description;
	$description = $SeoListener->parseVariables($description);
	$h1_html = array(
		'selector' => 'h1',
		'callback' => 'replaceWith',
		'html' => '<h1>'.$h1.'</h1>',
	);
	$description_html = array(
		'selector' => '.white-block-content',
		'callback' => 'replaceWith',
		'html' => '<div class="white-block-content"><div class="term-description">'.wpautop($description).'</div></div>',
	);

	$maxprod = $count_loading_product;
	$paged = ( get_query_var( 'paged' ) > 1 ) ? get_query_var( 'paged' ) : 1;
	$result = array( 
		'pagination' => array(
		'startPage' => $paged,
		'maxPages' => $max,
		'maxProd' => $maxprod,
		'maxProdlast' => $count_loading_product_last,
		'nextLink' => next_posts( $max, false ),
		'custom' => get_option( 'woocommerce_shop_page_display' ),
		'custom2' => get_option( 'woocommerce_category_archive_display' ),
		));
	if(!is_search()){
		$result[] = $h1_html;
		$result[] = $description_html;
	}
	return $result;
}
add_action( 'premmerce_filter_ajax_response_reload', 'shopico_lm_premmerce_filter_ajax_scripts' );


// Open custom container for ajax pagination for premmerce ajax filter
// ATTENTION: 
//			- This tag should после <div class="premmerce-filter-ajax-container">' (priority <= 1)
//			- only with ajax-loading premmerce filters
function shopico_add_parameters_premmerce_filter_ajax_woocommerce_before_shop_loop(){
	if(doing_filter('premmerce_filter_ajax_response_reload')){
		add_action('woocommerce_before_shop_loop', function(){
			// echo '<div class="row">';
		},1);
	}
}
add_action('woocommerce_before_shop_loop','shopico_add_parameters_premmerce_filter_ajax_woocommerce_before_shop_loop', -1);

// Close custom container for ajax pagination for premmerce ajax filter
// ATTENTION: 
//			- This closing tag should be at the end (priority = 999)
//			- only with ajax-loading premmerce filters
function shopico_add_parameters_premmerce_filter_ajax_woocommerce_after_shop_loop(){
	if(doing_filter('premmerce_filter_ajax_response_reload')){
		add_action('woocommerce_after_shop_loop', function(){
			// echo '</div>';
		},999);
	}
}
add_action('woocommerce_after_shop_loop','shopico_add_parameters_premmerce_filter_ajax_woocommerce_after_shop_loop', 999);


function filter_wc_add_to_cart_params( $array ) {
	$array['cart_url'] = esc_url( wc_get_cart_url() );
	return $array;
}; 

add_filter( 'wc_add_to_cart_params', 'filter_wc_add_to_cart_params', 10, 1 );
add_action('woocommerce_before_shop_loop','shopico_open_block_ordering', 29);
function shopico_open_block_ordering(){
	echo '<div class="row order-line"><div class="col">';
}
add_action('woocommerce_before_shop_loop','shopico_close_block_ordering', 31);
function shopico_close_block_ordering(){
	echo '</div></div>';
}


add_filter( 'woocommerce_catalog_ordering', 'shopico_woocommerce_catalog_ordering' );
function shopico_woocommerce_catalog_ordering(){
	
}

add_filter('woocommerce_catalog_orderby', 'wc_customize_product_sorting');

function wc_customize_product_sorting($sorting_options){
    $sorting_options['date'] = __('По дате добавления', 'woocommerce' );
    return $sorting_options;
}


// off remove_wpseo_head

// remove_action('premmerce_filter_rule_found', 'removeSeoActionsForRule');

// get_pr();

// function remove_filters_with_method_name( $hook_name = '', $method_name = '', $priority = 0 ) {
// 	global $wp_filter;
// 	// Take only filters on right hook name and priority
// 	if ( ! isset( $wp_filter[ $hook_name ][ $priority ] ) || ! is_array( $wp_filter[ $hook_name ][ $priority ] ) ) {
// 		return false;
// 	}
// 	// Loop on filters registered
// 	foreach ( (array) $wp_filter[ $hook_name ][ $priority ] as $unique_id => $filter_array ) {
// 		// Test if filter is an array ! (always for class/method)
// 		if ( isset( $filter_array['function'] ) && is_array( $filter_array['function'] ) ) {
// 			// Test if object is a class and method is equal to param !
// 			if ( is_object( $filter_array['function'][0] ) && get_class( $filter_array['function'][0] ) && $filter_array['function'][1] == $method_name ) {
// 				// Test for WordPress >= 4.7 WP_Hook class (https://make.wordpress.org/core/2016/09/08/wp_hook-next-generation-actions-and-filters/)
// 				if ( is_a( $wp_filter[ $hook_name ], 'WP_Hook' ) ) {
// 					unset( $wp_filter[ $hook_name ]->callbacks[ $priority ][ $unique_id ] );
// 				} else {
// 					unset( $wp_filter[ $hook_name ][ $priority ][ $unique_id ] );
// 				}
// 			}
// 		}
// 	}
// 	return false;
// }





// add_action('premmerce_filter_rule_found', 'addWPSeoCanonical');

// function addWPSeoCanonical(){
// 	// remove_filters_with_method_name( 'premmerce_filter_rule_found', 'removeSeoActionsForRule');
// 	// remove_filters_for_anonymous_class( 'premmerce_filter_rule_found', 'SeoListener', 'removeSeoActionsForRule');
// 	// remove_action('premmerce_filter_rule_found', 'removeSeoActionsForRule');
// 	// remove_filter('premmerce_filter_rule_found', 'removeSeoActionsForRule');

// 	// add_filter( 'wpseo_canonical', 'filter_canonical_link' , 21 , 1);


// 	// add_action('wpseo_head','canonical', 20);
// 	// add_filter( 'wpseo_canonical', function($canomical){
// 	// 	$canomical = 'test pos page';
// 	// 	return $canomical;
// 	// }
// 	// , 10, 2 );


// 	// $url = get_option( 'home' );

// 	// $parts = wp_parse_url( $url );

// 	// $base_url = trailingslashit( $parts['scheme'] . '://' . $parts['host'] );

// 	// if ( ! is_null( $path ) ) {
// 	// 	$base_url .= ltrim( $path, '/' );
// 	// }

// 	// return $base_url;
// }

// function filter_canonical_link($canonical){
// 	$canonical = 'dfdf';
// 	return $canonical;
// }




// function translate_woocommerce_search_result_title( $page_title ) {
//   if ( is_search() ) {
//     if ( !get_search_query() ) {
//       $page_title = sprintf( pll__( 'Search Results: “All Products”', 'woocommerce' ), get_search_query() );
//     } else {
//       $page_title = sprintf( pll__( 'Search Results: ', 'woocommerce' ), get_search_query() );
//     }
//   }

//   return $page_title;
// }

// // add the filter
// add_filter( 'woocommerce_page_title', 'translate_woocommerce_search_result_title', 10, 1 );



// function comment_form_change_cookies_consent( $fields ) {
// 	$commenter = wp_get_current_commenter();
// 	$consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
// 	$fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
// 					 '<label for="wp-comment-cookies-consent">Your modified text here</label></p>';
// 	return $fields;
// }
// add_filter( 'comment_form_default_fields', 'comment_form_change_cookies_consent' );

// function comment_form_hide_cookies_consent($fields) {
// 	unset( $fields['cookies'] );
// 	get_pr($fields);
// 	return $fields;
// }
// add_filter( 'comment_form_default_fields', 'comment_form_hide_cookies_consent' );