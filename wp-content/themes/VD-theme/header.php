

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="robots" content="index,follow"/>
   
    <title>
        <?php
        global $page, $paged;
        wp_title('|', true, 'right');
        // Add the blog name.
        bloginfo('name');
        //Add the blog description for the home/fron page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
            echo " | $site_description";
        }
        ?>
    </title>
    <?php wp_head(); ?>

   
</head>



<header class="header ">
   
        <div class="header-wrapper">

            <div class="header-logo">
                <a href="<?= get_home_url() ?>">
                    <img src="<?= get_template_directory_uri() ?>/images/sports-car.png" alt="">
                </a>
            </div>
            <div class="nav-items">
                <?php
                echo wp_nav_menu( array(
                    'menu'   => 'Primary',
                ));
                ?>
            </div>
        </div>
    

</header>
