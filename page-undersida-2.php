<?php
get_header()
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
                    <h1><?php the_title() ?></h1>
                    <?php the_content(); ?>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
                    <ul class="side-menu">
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