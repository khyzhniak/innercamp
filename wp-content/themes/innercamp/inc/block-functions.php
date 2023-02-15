<?php
/**
 * Acf Register Block Type
 */
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types() {

    // Home page
    acf_register_block_type(
        array(
            'name' => 'Home section 1',
            'title' => __('Home section 1'),
            'render_template' => 'ACF/home-page/home_1.php',
            'icon' => 'block-default',
            'keywords' => array('home-1'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Home section 2',
            'title' => __('Home section 2'),
            'render_template' => 'ACF/home-page/home_2.php',
            'icon' => 'block-default',
            'keywords' => array('home-2'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Home section 3',
            'title' => __('Home section 3'),
            'render_template' => 'ACF/home-page/home_3.php',
            'icon' => 'block-default',
            'keywords' => array('home-3'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Home section 4',
            'title' => __('Home section 4'),
            'render_template' => 'ACF/home-page/home_4.php',
            'icon' => 'block-default',
            'keywords' => array('home-4'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Home section 5',
            'title' => __('Home section 5'),
            'render_template' => 'ACF/home-page/home_5.php',
            'icon' => 'block-default',
            'keywords' => array('home-5'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Home section 6',
            'title' => __('Home section 6'),
            'render_template' => 'ACF/home-page/home_6.php',
            'icon' => 'block-default',
            'keywords' => array('home-6'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Home section 7',
            'title' => __('Home section 7'),
            'render_template' => 'ACF/home-page/home_7.php',
            'icon' => 'block-default',
            'keywords' => array('home-7'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Home section 8',
            'title' => __('Home section 8'),
            'render_template' => 'ACF/home-page/home_8.php',
            'icon' => 'block-default',
            'keywords' => array('home-8'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Home section 9',
            'title' => __('Home section 9'),
            'render_template' => 'ACF/home-page/home_9.php',
            'icon' => 'block-default',
            'keywords' => array('home-9'),
        )
    );

    // FAQ page
    acf_register_block_type(
        array(
            'name' => 'FAQ section 1',
            'title' => __('FAQ section 1'),
            'render_template' => 'ACF/faq-page/faq_1.php',
            'icon' => 'block-default',
            'keywords' => array('faq-1'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'FAQ section 2',
            'title' => __('FAQ section 2'),
            'render_template' => 'ACF/faq-page/faq_2.php',
            'icon' => 'block-default',
            'keywords' => array('faq-2'),
        )
    );

    // About page
    acf_register_block_type(
        array(
            'name' => 'About section 1',
            'title' => __('About section 1'),
            'render_template' => 'ACF/about-us-page/about_1.php',
            'icon' => 'block-default',
            'keywords' => array('about-1'),
        )
    );

    // Testimonials page
    acf_register_block_type(
        array(
            'name' => 'Testimonial section 1',
            'title' => __('Testimonial section 1'),
            'render_template' => 'ACF/testimonials-page/testimonial_1.php',
            'icon' => 'block-default',
            'keywords' => array('testimonial-1'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Testimonial section 2',
            'title' => __('Testimonial section 2'),
            'render_template' => 'ACF/testimonials-page/testimonial_2.php',
            'icon' => 'block-default',
            'keywords' => array('testimonial-2'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Testimonial section 3',
            'title' => __('Testimonial section 3'),
            'render_template' => 'ACF/testimonials-page/testimonial_3.php',
            'icon' => 'block-default',
            'keywords' => array('testimonial-3'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Testimonial section 4',
            'title' => __('Testimonial section 4'),
            'render_template' => 'ACF/testimonials-page/testimonial_4.php',
            'icon' => 'block-default',
            'keywords' => array('testimonial-4'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Testimonial section 5',
            'title' => __('Testimonial section 5'),
            'render_template' => 'ACF/testimonials-page/testimonial_5.php',
            'icon' => 'block-default',
            'keywords' => array('testimonial-5'),
        )
    );


    //VR govnocode
    acf_register_block_type(
        array(
            'name' => 'Team section 1',
            'title' => __('Team section 1'),
            'render_template' => 'ACF/team/team_1.php',
            'icon' => 'block-default',
            'keywords' => array('Team-1'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Team section 2',
            'title' => __('Team section 2'),
            'render_template' => 'ACF/team/team_2.php',
            'icon' => 'block-default',
            'keywords' => array('Team-2'),
        )
    );
    //APP SECTIONS
    acf_register_block_type(
        array(
            'name' => 'App section 1',
            'title' => __('App section 1'),
            'render_template' => 'ACF/app-page/app_1.php',
            'icon' => 'block-default',
            'keywords' => array('App-1'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'App section 2',
            'title' => __('App section 2'),
            'render_template' => 'ACF/app-page/app_2.php',
            'icon' => 'block-default',
            'keywords' => array('App-2'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'App section 3',
            'title' => __('App section 3'),
            'render_template' => 'ACF/app-page/app_3.php',
            'icon' => 'block-default',
            'keywords' => array('App-3'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'App section 4',
            'title' => __('App section 4'),
            'render_template' => 'ACF/app-page/app_4.php',
            'icon' => 'block-default',
            'keywords' => array('App-4'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'App section 5',
            'title' => __('App section 5'),
            'render_template' => 'ACF/app-page/app_5.php',
            'icon' => 'block-default',
            'keywords' => array('App-5'),
        )
    );
}

