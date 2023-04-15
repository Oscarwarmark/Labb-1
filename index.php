    <?php
    get_header()
    ?>

    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div id="primary" class="col-xs-12 col-md-9">
                        <h1><?php wp_title(""); ?></h1>

                        <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                get_template_part('template-parts/content', 'archive');
                            }
                        }
                        ?>

                        <nav class="navigation pagination">

                            <?php
                            echo paginate_links();
                            ?>
                        </nav>

                    </div>
                    <?php
                    get_sidebar();
                    ?>
                </div>
            </div>
        </section>
    </main>

    <?php
    get_footer();
    ?>