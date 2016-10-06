<?php 
/* SUPORTE PARA IMAGENS DESTACADAS */
function add_suport_theme(){
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','add_suport_theme');

/* REGISTRAR LOCAL DO MENU */
register_nav_menus( array(
    'primary' => 'primary',
) );

/* SCRIPTS / CSS */
function wp_seduce_scripts() {
  // Carregando CSS header
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  
  // Carregando Scripts header
  wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery') );

  //Carregando no footer
  //wp_enqueue_script('functions-js', get_template_directory_uri().'/assets/js/functions.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'wp_seduce_scripts' );


/* REGISTRAR SLIDER */
add_action('init', 'slider_registrer');
function slider_registrer(){
     $labels = array(
        'name' => _x('Slider', 'post type general name'),
        'singular_name' => _x('Slider', 'post type singular name'),
        'add_new' => _x('Adicionar slider', 'slider'),
        'add_new_item' => __('Adicionar slider'),
        'edit_item' => __('Editar slider'),
        'new_item' => __('Novo slider'),
        'view_item' => __('Ver slider'),
        'search_items' => __('Procurar slider'),
        'not_found' =>  __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado no lixo'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-code',
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array('title','thumbnail'),
      );
    register_post_type('slider',$args);
}


/* PERSONALIZAÇÃO DO LOGIN */
function cutom_login_logo() {
echo "<style type=\"text/css\">
body.login div#login h1 a {
    position: relative;
    top: 63px;
    background-image: url(".get_bloginfo('template_directory')."/img/logo-seduce-wp.png);
    -webkit-background-size: auto;
    background-size: auto;
    margin: 1px auto 0 auto;
    width: 320px;
}
body.login div#login {
    position: relative;
    width: 500px;
    height: 500px;
    padding: 0;
    margin: auto;
    background: #fff;
    top: 15%;
    border-radius: 100%;
}
body.login form {
    position: relative;
    top: 73px;
    margin-top: 20px;
    width: 269px;
    margin-left: 0;
    padding: 26px 24px 46px;
    background: #fff;
    margin: 0 auto;
    -webkit-box-shadow: none;
    box-shadow: none;
}
body.login #nav {
    margin: 24px 0 0;
    text-align: center;
    position: relative;
    top: 30px;
}
body.login #backtoblog {
	display: none;
}
</style>";
}
add_action( 'login_enqueue_scripts', 'cutom_login_logo' );