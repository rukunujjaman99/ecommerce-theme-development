<?php

function organi_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(


        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
 
    ));

   register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'organi' ),
    'secondary' => __( 'Secondary Menu', 'organi' ),
    'category' => __( 'Category Menu', 'organi'),
    'footer' => __( 'Footer Menu', 'organi'),
     
   ) );

}
add_action( 'after_setup_theme', 'organi_setup' );






function organi_enqueue_styles() {
    
       wp_enqueue_style(
        'bootstrap-css',                                // Handle
        get_template_directory_uri() . '/assets/css/bootstrap.min.css', // File URL
        array(),                                        // Dependencies
        '5.0',                                          // Version
        'all'                                           // Media
       );
         wp_enqueue_style(
          'font-awesome-css',
          get_template_directory_uri() . '/assets/css/font-awesome.min.css',
          array(),
          '4.7.0',
          'all'
         );
            wp_enqueue_style(
            'elegant-icons-css',
            get_template_directory_uri() . '/assets/css/elegant-icons.css',
            array(),
            '1.0',
            'all'
            );
                wp_enqueue_style(
                 'nice-select-css',
                 get_template_directory_uri() . '/assets/css/nice-select.css',
                 array(),
                 '1.0',
                 'all'
                );
                    wp_enqueue_style(
                     'jquery-ui-css',
                     get_template_directory_uri() . '/assets/css/jquery-ui.min.css',
                     array(),
                     '1.12.1',
                     'all'
                    );
                        wp_enqueue_style(
                         'owl-carousel-css',
                         get_template_directory_uri() . '/assets/css/owl.carousel.min.css',
                         array(),
                         '2.3.4',
                         'all'
                        );
                            wp_enqueue_style(
                             'slicknav-css',
                             get_template_directory_uri() . '/assets/css/slicknav.min.css',
                             array(),
                             '1.0',
                             'all'
                            );
                            wp_enqueue_style(
                             'main-style-css',
                             get_template_directory_uri() . '/assets/css/style.css',
                             array(),
                             '1.0',
                             'all'
                            );



                            
  wp_enqueue_script(
                             'jquery-js',
                             get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js',
                             array(),
                             '1.0',
                             'all'
                            );
    wp_enqueue_script(
                                 'bootstrap-js',
                                 get_template_directory_uri() . '/assets/js/bootstrap.min.js',
                                 array(),
                                 '1.0',
                                 'all'
                                );
        wp_enqueue_script(
                                         'nice-select-js',
                                         get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js',
                                         array(),
                                         '1.0',
                                         'all'
                                        );
            wp_enqueue_script(
                                             'jquery-ui-js',
                                             get_template_directory_uri() . '/assets/js/jquery-ui.min.js',
                                             array(),
                                             '1.0',
                                             'all'
                                            );
                wp_enqueue_script(
                                                 'slicknav-js',
                                                 get_template_directory_uri() . '/assets/js/jquery.slicknav.js',
                                                 array(),
                                                 '1.0',
                                                 'all'
                                                );
                    wp_enqueue_script(
                                                     'mixitup-js',
                                                     get_template_directory_uri() . '/assets/js/mixitup.min.js',
                                                     array(),
                                                     '1.0',
                                                     'all'
                                                    );
                        wp_enqueue_script(
                                                         'owl-carousel-js',
                                                         get_template_directory_uri() . '/assets/js/owl.carousel.min.js',
                                                         array(),
                                                         '1.0',
                                                         'all'
                                                        );
                            wp_enqueue_script(
                                                             'main-js',
                                                             get_template_directory_uri() . '/assets/js/main.js',
                                                             array(),
                                                             '1.0',
                                                             'all'
                                                            );




                            


}   

add_action( 'wp_enqueue_scripts', 'organi_enqueue_styles' );











function organi_widget_setup() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'organi' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Main Sidebar', 'organi' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'organi_widget_setup' );








?>


