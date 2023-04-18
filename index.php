<!-- Hämtar header -->
<?php
get_header()
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <!-- Hämtar sida titel -->
                    <h1><?php wp_title(""); ?></h1>
                    <!-- loopar ut posts -->
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/content', 'archive');
                        }
                    }
                    ?>

                    <nav class="navigation pagination">
                        <!-- visar sidnummer länkar -->
                        <?php
                        echo paginate_links();
                        ?>
                    </nav>

                </div>
                <!-- hämtar sidokulumnen med widgets -->
                <?php
                get_sidebar();
                ?>
            </div>
        </div>
    </section>
</main>
<!-- hämtar footer -->
<?php
get_footer();
?>