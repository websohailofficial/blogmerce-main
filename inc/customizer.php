<?php
/**
 * BlogMerce Theme Customizer
 *
 * @package BlogMerce
 */

/**
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
/**
 * Add color panel to Customizer API
 */
function blogmerce_customize_register($wp_customize)
{

    $wp_customize->add_panel('typography_panel', array(
        'title'       => __('Typography', 'blogmerce'),
        'description' => __('Customize the typography of your website', 'blogmerce'),
        'priority'    => 30,
    ));

    $headings = array('h1', 'h2', 'h3', 'h4', 'h5', 'h6');

    foreach ($headings as $heading) {

        // Create a section for the current heading tag
        $wp_customize->add_section($heading . '_section', array(
            'title'    => sprintf(__('%s Settings', 'blogmerce'), strtoupper($heading)),
            'priority' => 10,
            'panel'    => 'typography_panel',
        ));

        // Add Color setting for the current heading section
        $wp_customize->add_setting($heading . '_color', array(
            'default'           => '#404040',
            'transport'         => 'refresh', //or postMessage
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_hex_color',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $heading . '_color', array(
            'label'    => __('Color', 'blogmerce'),
            'section'  => $heading . '_section',
            'settings' => $heading . '_color',
            'type'     => 'color',
        )));

        // Add font size setting for the current heading section
        $wp_customize->add_setting($heading . '_font_size', array(
            'default'           => '24px',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control($heading . '_font_size', array(
            'label'   => __('Font Size', 'blogmerce'),
            'section' => $heading . '_section',
            'type'    => 'text',
        ));

        // Add font weight setting for the current heading section
        $wp_customize->add_setting($heading . '_font_weight', array(
            'default'           => 'normal',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control($heading . '_font_weight', array(
            'label'   => __('Font Weight', 'blogmerce'),
            'section' => $heading . '_section',
            'type'    => 'select',
            'choices' => array(
                'normal' => __('Normal', 'blogmerce'),
                'bold'   => __('Bold', 'blogmerce'),
                '100'    => __('100', 'blogmerce'),
                '200'    => __('200', 'blogmerce'),
                '300'    => __('300', 'blogmerce'),
                '400'    => __('400', 'blogmerce'),
                '500'    => __('500', 'blogmerce'),
                '600'    => __('600', 'blogmerce'),
                '700'    => __('700', 'blogmerce'),
                '800'    => __('800', 'blogmerce'),
            ),
        ));

        // Add Line Height setting for the current heading section
        $wp_customize->add_setting($heading . '_line_height', array(
            'default'           => '1.5',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control($heading . '_line_height', array(
            'label'    => __('Line Height', 'blogmerce'),
            'section'  => $heading . '_section',
            'settings' => $heading . '_line_height',
            'type'     => 'text',
        ));

        // Add Letter Spacing setting for the current heading section
        $wp_customize->add_setting($heading . '_letter_spacing', array(
            'default'           => 'normal',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control($heading . '_letter_spacing', array(
            'label'    => __('Letter Spacing', 'blogmerce'),
            'section'  => $heading . '_section',
            'settings' => $heading . '_letter_spacing',
            'type'     => 'text',
        ));

        // Add font Style setting for the current heading section
        $wp_customize->add_setting($heading . '_font_style', array(
            'default'           => 'normal',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control($heading . '_font_style', array(
            'label'   => __('Font Style', 'blogmerce'),
            'section' => $heading . '_section',
            'type'    => 'select',
            'choices' => array(
                'inherit' => __('Inherit', 'blogmerce'),
                'initial' => __('Initial', 'blogmerce'),
                'italic'  => __('Italic', 'blogmerce'),
                'normal'  => __('Normal', 'blogmerce'),
                'oblique' => __('Oblique', 'blogmerce'),
                'revert'  => __('Revert', 'blogmerce'),
                'unset'   => __('Unset', 'blogmerce'),

            ),
        ));

        // Add Text Decoration setting for the current heading section
        $wp_customize->add_setting($heading . '_text_decoration', array(
            'default'           => 'none',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control($heading . '_text_decoration', array(
            'label'   => __('Text Decoration', 'blogmerce'),
            'section' => $heading . '_section',
            'type'    => 'select',
            'choices' => array(
                'none'         => __('None', 'blogmerce'),
                'dashed'       => __('Dashed', 'blogmerce'),
                'line-through' => __('Line Through', 'blogmerce'),
                'overline'     => __('Overline', 'blogmerce'),
                'underline'    => __('Under-Line', 'blogmerce'),
                'unset'        => __('Unset', 'blogmerce'),

            ),
        ));

    }

    // Create a section for the body tag
    $wp_customize->add_section('body_section', array(
        'title'    => 'Body Settings',
        'priority' => 10,
        'panel'    => 'typography_panel',
    ));
    // Add Color setting for the current heading section
    $wp_customize->add_setting('body_bg', array(
        'default'           => '#f0f0f1',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_bg', array(
        'label'    => __('Background Color', 'blogmerce'),
        'section'  => 'body_section',
        'settings' => 'body_bg',
        'type'     => 'color',
    )));

    // Add Color setting for the body section
    $wp_customize->add_setting('text_color', array(
        'default'           => '#00000',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'text_color', array(
        'label'    => __('Text Color', 'blogmerce'),
        'section'  => 'body_section',
        'settings' => 'body_text',
        'type'     => 'color',
    )));

    // Add Color setting for the body section
    $wp_customize->add_setting('link_color', array(
        'default'           => '#4169e1',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => __('Link Color', 'blogmerce'),
        'section'  => 'body_section',
        'settings' => 'link_color',
        'type'     => 'color',
    )));
    // Add Color setting for the body section
    $wp_customize->add_setting('link_hover_color', array(
        'default'           => '#191970',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_hover_color', array(
        'label'    => __('Link Hover Color', 'blogmerce'),
        'section'  => 'body_section',
        'settings' => 'link_hover_color',
        'type'     => 'color',
    )));

    // Create a section for the blog content section
    $wp_customize->add_section('blog_content', array(
        'title'    => 'Content Settings',
        'priority' => 10,
        'panel'    => 'typography_panel',
    ));
    // Add Color setting for the current heading section
    $wp_customize->add_setting('content_bg_color', array(
        'default'           => '#ffff',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'content_bg_color', array(
        'label'    => __('Content Background Color', 'blogmerce'),
        'section'  => 'blog_content',
        'settings' => 'content_bg_color',
        'type'     => 'color',
    )));

    // Add Color setting for the current heading section
    $wp_customize->add_setting('content_title_color', array(
        'default'           => '#081828',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'content_title_color', array(
        'label'    => __('Content Title Color', 'blogmerce'),
        'section'  => 'blog_content',
        'settings' => 'content_title_color',
        'type'     => 'color',
    )));

    // Add Color setting for the current heading section
    $wp_customize->add_setting('content_title_hover', array(
        'default'           => '#ffff',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'content_title_hover', array(
        'label'    => __('Content Title Hover Color', 'blogmerce'),
        'section'  => 'blog_content',
        'settings' => 'content_title_hover',
        'type'     => 'color',
    )));
    // Add Color setting for the current heading section
    $wp_customize->add_setting('content_excerpt_color', array(
        'default'           => '#888',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'content_excerpt_color', array(
        'label'    => __('Content Excerpt Color', 'blogmerce'),
        'section'  => 'blog_content',
        'settings' => 'content_excerpt_color',
        'type'     => 'color',
    )));
    // Add Color setting for the current heading section
    $wp_customize->add_setting('article_meta_color', array(
        'default'           => '#ffff',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'article_meta_color', array(
        'label'    => __('Archive Meta Color', 'blogmerce'),
        'section'  => 'blog_content',
        'settings' => 'article_meta_color',
        'type'     => 'color',
    )));
    // Add Color setting for the current heading section
    $wp_customize->add_setting('article_meta_hover', array(
        'default'           => '#ffff',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'article_meta_hover', array(
        'label'    => __('Archive Meta Hover Color', 'blogmerce'),
        'section'  => 'blog_content',
        'settings' => 'article_meta_hover',
        'type'     => 'color',
    )));

    // Create a section for the Sidebar widget section
    $wp_customize->add_section('sidebar_widget', array(
        'title'    => 'Sidebar Widget Settings',
        'priority' => 10,
        'panel'    => 'typography_panel',
    ));
    // Add Color setting for the current heading section
    $wp_customize->add_setting('sidebar_widget_bg_color', array(
        'default'           => '#ffff',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_widget_bg_color', array(
        'label'    => __('Widget Background Color', 'blogmerce'),
        'section'  => 'sidebar_widget',
        'settings' => 'sidebar_widget_bg_color',
        'type'     => 'color',
    )));
    // Add Color setting for the current heading section
    $wp_customize->add_setting('sidebar_widget_title_color', array(
        'default'           => '#81d742',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_widget_title_color', array(
        'label'    => __('Widget Title Color', 'blogmerce'),
        'section'  => 'sidebar_widget',
        'settings' => 'sidebar_widget_title_color',
        'type'     => 'color',
    )));
    // Add Color setting for the current heading section
    $wp_customize->add_setting('sidebar_widget_text_color', array(
        'default'           => '#00000',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_widget_text_color', array(
        'label'    => __('Widget Text Color', 'blogmerce'),
        'section'  => 'sidebar_widget',
        'settings' => 'sidebar_widget_text_color',
        'type'     => 'color',
    )));
    // Add Color setting for the current heading section
    $wp_customize->add_setting('sidebar_widget_link_color', array(
        'default'           => '#4169e1',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_widget_link_color', array(
        'label'    => __('Widget Link Color', 'blogmerce'),
        'section'  => 'sidebar_widget',
        'settings' => 'sidebar_widget_link_color',
        'type'     => 'color',
    )));
    // Add Color setting for the current heading section
    $wp_customize->add_setting('sidebar_widget_link_hover', array(
        'default'           => '#ffff',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_widget_link_hover', array(
        'label'    => __('Widget Link Hover Color', 'blogmerce'),
        'section'  => 'sidebar_widget',
        'settings' => 'sidebar_widget_link_hover',
        'type'     => 'color',
    )));

    // Header Settings
 
    // Create a section for the Header Section
    $wp_customize->add_section('header_section', array(
        'title'    => 'Header Settings',
        'priority' => 20,
        'panel'    => 'typography_panel',
    ));
    // Add Color setting for the current heading section
    $wp_customize->add_setting('header_bg_color', array(
        'default'           => '#723fe4',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_bg_color', array(
        'label'    => __('Header Background Color', 'blogmerce'),
        'section'  => 'header_section',
        'settings' => 'header_bg_color',
        'type'     => 'color',
    )));

    // Footer Settings

    // Create a section for the Footer tag
    $wp_customize->add_section('footer_section', array(
        'title'    => 'Footer Top Settings',
        'priority' => 20,
        'panel'    => 'typography_panel',
    ));
    // Add Color setting for the current heading section
    $wp_customize->add_setting('footer_bg_color', array(
        'default'           => '#081828',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_bg_color', array(
        'label'    => __('Footer Background Color', 'blogmerce'),
        'section'  => 'footer_section',
        'settings' => 'footer_bg_color',
        'type'     => 'color',
    )));

    // Add Footer widget title color for Footer section
    $wp_customize->add_setting('footer_title_color', array(
        'default'           => '#DCDCDC',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_title_color', array(
        'label'    => __('Footer Widget Title Color', 'blogmerce'),
        'section'  => 'footer_section',
        'settings' => 'footer_title_color',
        'type'     => 'color',
    )));
    // Add Footer widget title color for Footer section
    $wp_customize->add_setting('footer_text_color', array(
        'default'           => '#0000',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_text_color', array(
        'label'    => __('Footer Widget Text Color', 'blogmerce'),
        'section'  => 'footer_section',
        'settings' => 'footer_text_color',
        'type'     => 'color',
    )));
    // Add Footer widget title color for Footer section
    $wp_customize->add_setting('footer_link_color', array(
        'default'           => '#4169e1',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_link_color', array(
        'label'    => __('Footer Link Color', 'blogmerce'),
        'section'  => 'footer_section',
        'settings' => 'footer_link_color',
        'type'     => 'color',
    )));
    // Add Footer widget title color for Footer section
    $wp_customize->add_setting('footer_link_hover', array(
        'default'           => '#ffff',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_link_hover', array(
        'label'    => __('Footer Link HoverColor', 'blogmerce'),
        'section'  => 'footer_section',
        'settings' => 'footer_link_hover',
        'type'     => 'color',
    )));

// Footer Bottom Settings

    // Create a section for the Footer tag
    $wp_customize->add_section('footer_btm_section', array(
        'title'    => 'Footer Bottom Settings',
        'priority' => 40,
        'panel'    => 'typography_panel',
    ));
    // Add Color setting for the Footer Bottom section
    $wp_customize->add_setting('footer_btm_bg_color', array(
        'type'             => 'theme_mod',
        'default'           => '#081828',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_btm_bg_color', array(
        'label'    => __('Footer Bottom Background Color', 'blogmerce'),
        'section'  => 'footer_btm_section',
        'settings' => 'footer_btm_bg_color',
        'type'     => 'color',
    )));

     // Add Color setting for the Footer Bottom Links
     $wp_customize->add_setting('footer_btm_link_color', array(
        'type'             => 'theme_mod',
        'default'           => '#723fe4',
        'transport'         => 'refresh', //or postMessage
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_btm_link_color', array(
        'label'    => __('Footer Bottom Link Color', 'blogmerce'),
        'section'  => 'footer_btm_section',
        'settings' => 'footer_btm_link_color',
        'type'     => 'color',
    )));


}

add_action('customize_register', 'blogmerce_customize_register');
