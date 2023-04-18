<!DOCTYPE html>
<html>
<!-- hämtar info om sidans head  -->

<head>
    <meta charset="UTF-8" />
    <?php
    wp_head();
    ?>
</head>


<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-sm-6">
                <!-- visar titel med länk -->
                <a class="logo" href="<?php get_option('siteurl'); ?>"><?php echo get_bloginfo('name'); ?></a>
            </div>
            <div class="col-sm-6 hidden-xs">
                <form id="searchform" class="searchform">
                    <div>
                        <!-- visar sökfält -->
                        <?php get_search_form() ?>
                    </div>
                </form>
            </div>
            <div class="col-xs-4 text-right visible-xs">
                <div class="mobile-menu-wrap">
                    <i class="fa fa-search"></i>
                    <i class="fa fa-bars menu-icon"></i>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-search">
    <form id="searchform" class="searchform">
        <div>
            <!-- visar sökfält för mobilmeny -->
            <?php get_search_form() ?>
        </div>
    </form>
</div>






<nav id="nav">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="menu">
                    <!-- visar menyn i toppen av sidan  -->
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                        )
                    )
                    ?>
                </ul>
            </div>
        </div>
    </div>
</nav>