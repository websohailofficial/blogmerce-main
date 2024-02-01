<?php
function blogmerce_enqueue_styles()
{
    wp_enqueue_style('blogmerce-style', get_stylesheet_uri());

    $custom_css = '
        h1 {
            font-size: ' . get_theme_mod('h1_font_size', '24px') . ';
            font-weight: ' . get_theme_mod('h1_font_weight', 'normal') . ';
            color: ' . get_theme_mod('h1_color', '#404040') . ';
            letter-spacing: ' . get_theme_mod('h1_letter_spacing', 'normal') . ';
            line-height: ' . get_theme_mod('h1_line_height', '1.5') . ';
            font-style: ' . get_theme_mod('h1_font_style)', 'normal') . ';
            text-decoration: ' . get_theme_mod('h1_text_decoration', 'none') . ';

        }

        h2 {
            font-size: ' . get_theme_mod('h2_font_size', '24px') . ';
            font-weight: ' . get_theme_mod('h2_font_weight', 'normal') . ';
            color: ' . get_theme_mod('h2_color', '#404040') . ';
            letter-spacing: ' . get_theme_mod('h2_letter_spacing', 'normal') . ';
            line-height: ' . get_theme_mod('h2_line_height', '1.5') . ';
            font-style: ' . get_theme_mod('h2_font_style)', 'normal') . ';
            text-decoration: ' . get_theme_mod('h2_text_decoration', 'none') . ';

        }

        h3 {
            font-size: ' . get_theme_mod('h3_font_size', '24px') . ';
            font-weight: ' . get_theme_mod('h3_font_weight', 'normal') . ';
            color: ' . get_theme_mod('h3_color', '#404040') . ';
            letter-spacing: ' . get_theme_mod('h3_letter_spacing', 'normal') . ';
            line-height: ' . get_theme_mod('h3_line_height', '1.5') . ';
            font-style: ' . get_theme_mod('h3_font_style)', 'normal') . ';
            text-decoration: ' . get_theme_mod('h3_text_decoration', 'none') . ';

        }
        h4 {
            font-size: ' . get_theme_mod('h4_font_size', '24px') . ';
            font-weight: ' . get_theme_mod('h4_font_weight', 'normal') . ';
            color: ' . get_theme_mod('h4_color', '#404040') . ';
            letter-spacing: ' . get_theme_mod('h4_letter_spacing', 'normal') . ';
            line-height: ' . get_theme_mod('h4_line_height', '1.5') . ';
            font-style: ' . get_theme_mod('h4_font_style)', 'normal') . ';
            text-decoration: ' . get_theme_mod('h4_text_decoration', 'none') . ';

        }
        h5 {
            font-size: ' . get_theme_mod('h5_font_size', '24px') . ';
            font-weight: ' . get_theme_mod('h5_font_weight', 'normal') . ';
            color: ' . get_theme_mod('h5_color', '#404040') . ';
            letter-spacing: ' . get_theme_mod('h5_letter_spacing', 'normal') . ';
            line-height: ' . get_theme_mod('h5_line_height', '1.5') . ';
            font-style: ' . get_theme_mod('h5_font_style)', 'normal') . ';
            text-decoration: ' . get_theme_mod('h5_text_decoration', 'none') . ';

        }
        h6 {
            font-size: ' . get_theme_mod('h6_font_size', '24px') . ';
            font-weight: ' . get_theme_mod('h6_font_weight', 'normal') . ';
            color: ' . get_theme_mod('h6_color', '#404040') . ';
            letter-spacing: ' . get_theme_mod('h6_letter_spacing', 'normal') . ';
            line-height: ' . get_theme_mod('h6_line_height', '1.5') . ';
            font-style: ' . get_theme_mod('h6_font_style)', 'normal') . ';
            text-decoration: ' . get_theme_mod('h6_text_decoration', 'none') . ';

        }



        body{
            background-color:' . get_theme_mod('body_bg', '#f0f0f1') . ';

        }

        a{
            color:' . get_theme_mod('link_color', '#4169e1') . ';
        }
        }
        a:hover{
            color:' . get_theme_mod('body_bg', '#191970') . ';
        }


        .blog-section .single-blog .blog-content{
            background-color: ' . get_theme_mod('content_bg_color', '#fffff') . ';
        }
        .entry-title a{
            color: ' . get_theme_mod('content_title_color', '#081828') . ';
        }
        .entry-title a:hover{
            color: ' . get_theme_mod('content_title_hover', '#224a72') . ';
        }
        .blog-section .single-blog .blog-content p{
            color: ' . get_theme_mod('content_excerpt_color', '#888') . ';
        }
        .post-categories li a{
            color: ' . get_theme_mod('article_meta_color', '#723FE4') . ';
        }
        .post-categories li a:hover{
            color: ' . get_theme_mod('article_meta_hover', '#081828') . ';
        }


       .sidebar .widget{
            background-color: ' . get_theme_mod('sidebar_widget_bg_color', '#fff') . '!important;
        }
        .sidebar .widget-title{
            color: ' . get_theme_mod('sidebar_widget_title_color', '#81d742') . ';
        }
        .sidebar .widget p{
            color: ' . get_theme_mod('sidebar_widget_text_color', '#00000') . ';
        }
        .sidebar .widget a{
            color: ' . get_theme_mod('sidebar_widget_link_color', '#4169e1') . ';
        }
        .sidebar .widget a:hover{
            color: ' . get_theme_mod('sidebar_widget_link_hover', '#ffff') . ';
        }

         .footer .footer-top{
            background-color: ' . get_theme_mod('footer_bg_color', '#081828') . ';
        }
        .footer .single-footer h3{
            color: ' . get_theme_mod('footer_title_color', '#D2D6DC') . ';
        }
        .footer-top a{
            color: ' . get_theme_mod('footer_link_color', '#4169e1') . ';
        }
        .footer-top a:hover{
            color: ' . get_theme_mod('footer_link_hover', '#ffff') . ';
        }

        .header{
            background-color: ' . get_theme_mod('header_bg_color', '#723fe4') . ';
        }


        .footer-bottom{
            background-color: ' . get_theme_mod('footer_btm_bg_color', '#723fe4') . ';
        }
        .footer-bottom a.customize-unpreviewable{
            color: ' . get_theme_mod('footer_btm_link_color', '#ffff') . ';
        }
    ';


    wp_add_inline_style('blogmerce-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'blogmerce_enqueue_styles');
