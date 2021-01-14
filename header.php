<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="nav-container nav-open">
        <a class="burger-btn">
            <img src="<?php echo get_template_directory_uri(); ?>./resources/icons/burger-icon.svg">
        </a>

        <header>
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'header-menu-left',
                    'menu_class' => 'navigation navigation-open-left'
                )
            ); ?>
            <div class="logo">
                Cheery-Cards
            </div>
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'header-menu-right',
                    'menu_class' => 'navigation navigation-open-right'
                )
            ); ?>
        </header>
    </div>

    <div class="nav-container nav-closed">
        <a class="close-btn">
            <img src="<?php echo get_template_directory_uri(); ?>./resources/icons/close-icon.svg">
        </a>

        <header>
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'header-menu-left',
                    'menu_class' => 'navigation navigation-closed-left'
                )
            ); ?>
            <div class="logo">
                Cheery-Cards
            </div>
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'header-menu-right',
                    'menu_class' => 'navigation navigation-closed-right'
                )
            ); ?>
        </header>
    </div>