<!DOCTYPE html>

<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        <?php the_title(); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <img src="<?php echo get_template_directory_uri() . '/screenshot.png' ?>" alt="Logo du site" class="logo" />
        <nav>
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'Menu principal',
                    'container' => 'nav'
                )
            );
            ?>
        </nav>
    </header>