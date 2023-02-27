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
        <div class="topnav">
            <img src="<?php echo get_template_directory_uri() . '/screenshot.png' ?>" alt="Logo du site" class="logo" />
            <div id="myLinks">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'Menu principal',
                        'container' => 'nav'
                    )
                );
                ?>
            </div>
            <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <script>
            /* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
            function myFunction() {
                var x = document.getElementById("myLinks");
                if (x.style.display === "block") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }
            }
        </script>
    </header>