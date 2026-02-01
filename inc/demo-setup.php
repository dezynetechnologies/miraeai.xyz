<?php

// File Security Check

if (!defined('ABSPATH')) {
	exit;
}

/* Theme demo data setup */
function masco_import_files()

{
    return array(
        array(

            'import_file_name' => 'Initial Setup',
            'categories' => array('Inner Pages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/initial-setup.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/Initial-setup.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco',
        ),

        // Home
        array(
            'import_file_name' => 'Home',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/digital-agency.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/digital-agency.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco',

        ),

        // Fitness App
        array(
            'import_file_name' => 'Fitness App',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/fitness-app.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/fitness-app.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco/fitness-app',

        ),

        // Chat software
        array(
            'import_file_name' => 'Chat software',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/chat-software.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/chat-software.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco/chat-software',

        ),

        // Online Courses
        array(
            'import_file_name' => 'Online Courses',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/online-courses.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/online-courses.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco/online-courses',

        ),

        // SEO Agency
        array(
            'import_file_name' => 'SEO Agency',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/seo-agency.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/seo-agency.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco/seo-agency',

        ),

        // Cold Email
        array(
            'import_file_name' => 'Cold Email',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/cold-email.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/cold-email.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco/cold-email',

        ),

        // Web Hosting
        array(
            'import_file_name' => 'Web Hosting',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/web-hosting.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/web-hosting.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco/web-hosting',

        ),

        // Startup
        array(
            'import_file_name' => 'Startup',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/startup.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/startup.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco/startup',

        ),

        // Tracking Software
        array(
            'import_file_name' => 'Tracking Software',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/tracking-software.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/tracking-software.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco/tracking-software',

        ),

        // Ai Writing Tool
        array(
            'import_file_name' => 'Ai Writing Tool',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/ai-writing-tool.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/ai-writing-tool.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco/ai-writing-tool',
        ),

        // Website Builder
        array(
            'import_file_name' => 'Website Builder',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/website-builder.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/website-builder.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco/website-builder',
        ),

        // Al Photo Editor
        array(
            'import_file_name' => 'Al Photo Editor',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/ai-photo-editor.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/ai-photo-editor.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco-dev/al-photo-editor',
        ),

        // Initial Coin Offering 
        array(
            'import_file_name' => 'Initial Coin Offering',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/coin-offering.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/coin-offering.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco-dev/initial-coin-offering',
        ),

        // Al Content Generator
        array(
            'import_file_name' => 'Al Content Generator',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/ai-content-generator.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/ai-content-generator.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco-dev/al-content-generator',
        ),

        // It Service
        array(
            'import_file_name' => 'It Service',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/it-service.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'masco',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/masco/inc/demo-contents/previews/it-service.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'masco'),
            'preview_url' => 'https://mthemeus.com/demos/wp/masco-dev/it-service',
        ),




    );
}
add_filter('pt-ocdi/import_files', 'masco_import_files');



function ocdi_after_import($selected_import)

{
    if ('Home' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home');
    } elseif ('Fitness App' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Fitness App');
    } elseif ('Chat software' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Chat software');
    } elseif ('Online Courses' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Online Courses');
    } elseif ('SEO Agency' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('SEO Agency');
    } elseif ('Cold Email' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Cold Email');
    } elseif ('Web Hosting' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Web Hosting');
    } elseif ('Startup' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Startup');
    } elseif ('Tracking Software' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Tracking Software');
    } elseif ('Ai Writing Tool' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Ai Writing Tool');
    } elseif ('Website Builder' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Website Builder');
    } elseif ('Al Photo Editor' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Al Photo Editor');
    } elseif ('Initial Coin Offering' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Initial Coin Offering');
    } elseif ('Al Content Generator' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Al Content Generator');
    } elseif ('It Service' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('It Service');
    } else{
        $front_page_id = get_page_by_title('Home');
    }

    $main_menu = get_term_by('name', 'Demo Menu', 'nav_menu');

    set_theme_mod('nav_menu_locations', array(
        'main-menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
    ));

    $blog_page_id  = get_page_by_title('Blog');
    update_option('show_on_front', 'page');
    update_option('page_on_front', $front_page_id->ID);
    update_option('page_for_posts', $blog_page_id->ID);

    $elem_clear_cache = new \Elementor\Core\Files\Manager();
    $elem_clear_cache->clear_cache();
}
add_action('pt-ocdi/after_import', 'ocdi_after_import');

