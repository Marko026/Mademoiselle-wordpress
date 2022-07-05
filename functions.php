<?php

function mademoiselle_style()
{
    wp_enqueue_style('owl carousel', get_template_directory_uri() . "./Frontend/css/owl.carousel.css", array(), "v.2.3.4");
    wp_enqueue_style('owl theme default', get_template_directory_uri() . "./Frontend/css/owl.theme.default.css", array("owl carousel"), "v.2.3.4");
    wp_enqueue_style('theme css', get_template_directory_uri() . "./Frontend/css/theme.css", array(), "v.2.3.4");
    wp_enqueue_style('style css', get_template_directory_uri() . "./style.css", array(), "v1.0");
}
add_action('wp_enqueue_scripts', 'mademoiselle_style');

function mademoiselle_script()
{
    wp_enqueue_script('Jquery', get_template_directory_uri() . "./Frontend/js/jquery.min.js", array(), "v.3.6.0", true);
    wp_enqueue_script('Bootstrap', get_template_directory_uri() . "./Frontend/js/bootstrap.bundle.min.js", array("jquery"), "v.4.3.1", true);
    wp_enqueue_script('fontawesome', "https://kit.fontawesome.com/a4560c323c.js", array(), "v.5.0", true);
    wp_enqueue_script('Owl carousel', get_template_directory_uri() . "./Frontend/js/owl.carousel.min.js", array("jquery"), "v.2.3.4", true);
    wp_enqueue_script('validate', get_template_directory_uri() . "./Frontend/js/jquery.validate.min.js", array("jquery"), "v.2.3.4", true);
    wp_enqueue_script('main js', get_template_directory_uri() . "./Frontend/js/main.js", array("jquery"), "v.3.6.0", true);
}
add_action('wp_enqueue_scripts', "mademoiselle_script");

function mademoiselle_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', array(
        "height" => 28.5,
        "width" => 223.6,
        "flex-width" => false
    ));
    add_image_size("blog-list", 367, 244, true);
    add_image_size("blog-single", 558, 315, true);
    add_image_size("team-small", 368, 343, true);
    add_image_size("team-single", 463, 644, true);
    add_image_size("service-images", 564, 455, true);
}
add_action('after_setup_theme', "mademoiselle_support");

function mademoiselle_menus()
{
    register_nav_menus([
        "main-menu" => "Main Menu",
        "social-menu" => "Social Menu"
    ]);
}
add_action('init', "mademoiselle_menus");


function mademoiselle_create_post_type()
{
    register_post_type("testimonials_members", array(
        "labels" => array(
            "name" => "Testimonials ",
            "singular_name" => "Testimonial ",
            "plural_name" => "Testimonials ",
            "all_items" => "All testimonials ",
            "add_new" => "Add New testimonial ",
            "add_new_item" => "Add New testimonial  Item",
            "new_item" => "New testimonial ",
            "edit" => "Edit",
            "edit_item" => "Edit testimonial Item",
            "view" => "View testimonials ",
            "view_item" => "View Item",
            "featured_image" => "Featured Image for testimonials "
        ),
        "public" => true,
        "hierarchical" => false,
        "show_in_menu" => true,
        "menu_icon" =>  "dashicons-groups",
        "menu_position" => 16,
        "supports" => array(
            "title",
            "thumbnail",
            "editor"
        ),
    ));
    register_post_type("our_services", array(
        "labels" => array(
            "name" => "Services",
            "singular_name" => "Service",
            "plural_name" => "Services",
            "all_items" => "All Services",
            "add_new" => "Add New Service",
            "add_new_item" => "Add New Service Item",
            "new_item" => "New Service",
            "edit" => "Edit",
            "edit_item" => "Edit Service Item",
            "view" => "View Service",
            "view_item" => "View Item",
            "featured_image" => "Featured Image for Service"
        ),
        "public" => true,
        "hierarchical" => false,
        "show_in_menu" => true,
        "menu_icon" =>  "dashicons-admin-generic",
        "menu_position" => 17,
        "supports" => array(
            "title",
            "thumbnail",
            "editor"
        ),
    ));
};
add_action('init', "mademoiselle_create_post_type");

function mademoiselle_init_sidebar()
{
    register_sidebar(array(
        'name'          => __("Primary-sidebar"),
        'id'            => 'sidebar_1',
        'description'   => __('Page Sidebar'),
        'before_widget' => '<div id="%1$s" class="widget mb-5 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
}
add_action("widgets_init", "mademoiselle_init_sidebar");
require get_template_directory() . "./inc/options.php";
require get_template_directory() . "./inc/widgets.php";
