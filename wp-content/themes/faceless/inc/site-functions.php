<?php


function masteralex_init() {

  // IMAGE SIZES

  add_image_size( 'full', 1320); 
  add_image_size( 'page_image', 750); 
  add_image_size( 'mobile', 500); 

  //SITE TITLE
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'masteralex_init' );


function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

//DISABLE ALL COMMENTS IN SITE

add_action('admin_init', function () {
    // Отключить поддержку комментариев для постов и страниц
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Закрыть комментарии на фронтенде
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Скрыть существующие комментарии
add_filter('comments_array', '__return_empty_array', 10, 2);

// Убрать комментарии из админ-бара
add_action('admin_bar_menu', function ($wp_admin_bar) {
    $wp_admin_bar->remove_node('comments');
}, 999);

// Убрать пункт "Комментарии" из меню админки
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Редирект со страницы комментариев в админке
add_action('admin_init', function () {
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }
});

//HIDE WP VERSION 

remove_action('wp_head', 'wp_generator');

function remove_version_from_scripts_styles($src) {
    if (strpos($src, 'ver=' . get_bloginfo('version'))) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'remove_version_from_scripts_styles', 9999);
add_filter('script_loader_src', 'remove_version_from_scripts_styles', 9999);

// 2. DISABLE XML-RPC (if not use)
add_filter('xmlrpc_enabled', '__return_false');

// 5. DISABLE REST API FOR ALL GUESTS 
// ============================================
add_filter('rest_authentication_errors', function($result) {
    if (!empty($result)) {
        return $result;
    }
    if (!is_user_logged_in()) {
        return new WP_Error(
            'rest_not_logged_in',
            'Доступ к API только для авторизованных пользователей.',
            array('status' => 401)
        );
    }
    return $result;
});