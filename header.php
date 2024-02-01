<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BlogMerce
 */

?>
<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head();?>

</head>

<body <?php body_class();?>>
    <?php wp_body_open();?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'blogmerce');?></a>
        <!-- Start Header Area -->
        <header class="header navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="nav-inner">
                            <!-- Start Navbar -->
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                                     <?php if (is_front_page() && is_home() && the_custom_logo()): ?>
                                            <?php the_custom_logo();?>
                                    <?php else: ?>
                                        <h1 class="site-title">
                                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?>   
                                            </a>
                                        </h1>
                                    <?php endif; ?>
                                    <?php                                    
                                        $blogmerce_description = get_bloginfo('description', 'display');
                                        if ($blogmerce_description || is_customize_preview()):
                                    ?>
                                    <p class="site-description">
                                        <?php echo $blogmerce_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped   ?>
                                    </p>
                                    <?php endif;?>
                                </a>
                                <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"><?php esc_html_e('Menu', 'blogmerce');?></span>
                                </button>
                                <div class=" nav collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                        <?php
                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => 'primary-menu',
                                                    'container'      => 'false',
                                                )
                                            );
                                        ?>
                                </div> <!-- navbar collapse -->
                            </nav>
                            <!-- End Navbar -->
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </header>
        <!-- End Header Area -->