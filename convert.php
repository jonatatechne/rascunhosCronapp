<?php
function cronapp_script_enqueue() {

  wp_enqueue_style('font-rubik', 'https://fonts.googleapis.com/css?family=Rubik', array(), '1.0.0', 'all');
  wp_enqueue_style('font-rubik-extras', 'https://fonts.googleapis.com/css?family=Rubik:300,400,700', array(), '1.0.0', 'all');

  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
  wp_enqueue_style('home', get_template_directory_uri() . '/home.css', array(), '1.0.0', 'all');
  wp_enqueue_style('headerFooter', get_template_directory_uri() . '/headerFooter.css', array(), '1.0.0', 'all');
  wp_enqueue_style('reset', get_template_directory_uri() . '/reset.css', array(), '1.0.0', 'all');
  wp_enqueue_style('planos', get_template_directory_uri() . '/planos.css', array(), '1.0.0', 'all');
  wp_enqueue_style('faq', get_template_directory_uri() . '/faq.css', array(), '1.0.0', 'all');
  wp_enqueue_style('factory', get_template_directory_uri() . '/factory.css', array(), '1.0.0', 'all');
  wp_enqueue_style('contact-forms', get_template_directory_uri() . '/resources/css/forms.css', array(), '1.0.0', 'all');
  wp_enqueue_style('grid', get_template_directory_uri() . '/resources/css/grid.css', array(), '1.0.0', 'all');
  wp_enqueue_style('videosHome', get_template_directory_uri() . '/resources/css/home-videos-area.css', array(), '1.0.0', 'all');
  wp_enqueue_style('fabrica', get_template_directory_uri() . '/resources/css/fabrica.css', array(), '1.0.0', 'all');
  wp_enqueue_style('criar-conta', get_template_directory_uri() . '/resources/css/create-account.css', array(), '1.0.0', 'all');
  wp_enqueue_style('tutoriais', get_template_directory_uri() . '/tutoriais.css', array(), '1.0.0', 'all');
  wp_enqueue_style('produto', get_template_directory_uri() . '/resources/css/product.css', array(), '1.0.0', 'all');

  wp_enqueue_script('jqueryjs', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true);
  wp_enqueue_script('masker', get_template_directory_uri() . '/resources/js/masker.min.js', array(), '1.0.0', true);
  wp_enqueue_script('faqjs', get_template_directory_uri() . '/js/faq.js', array(), '1.0.0', true);
  wp_enqueue_script('contact-form', get_template_directory_uri() . '/resources/js/contact-form.js', array(), '1.0.0', true);
  wp_enqueue_script('corrections', get_template_directory_uri() . '/resources/js/corrections.js', array(), '1.0.0', true);
  wp_enqueue_script('homejs', get_template_directory_uri() . '/js/home.js', array(), '1.0.0', true);
  wp_enqueue_script('tutoriais', get_template_directory_uri() . '/js/tutoriais.js', array(), '1.0.0', true);
  wp_enqueue_script('create-account', get_template_directory_uri() . '/resources/js/criar-conta.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'cronapp_script_enqueue');

function cronapp_theme_setup() {
  add_theme_support('menus');

  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'cronapp_theme_setup');
 ?>
