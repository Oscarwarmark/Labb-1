<?php
get_header()
?>



<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <!-- hämtar titel  -->
                    <h1><?php the_title() ?></h1>
                    <!-- hämtar innehåll på sidan  -->
                    <?php the_content(); ?>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <ul class="side-menu">
                        <!-- lägger till meny till de andra undersidorna -->
                        <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'secondary',
                                'container' => '',
                                'items_wrap' => '%3$s',
                                'theme_location' => 'secondary',
                            )
                        )
                        ?>
                    </ul>
                </aside>
            </div>
        </div>
    </section>
</main>


<?php
get_footer();
?>