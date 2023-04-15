    <?php
    get_header()
    ?>

    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div id="primary" class="col-xs-12 col-md-9">
                        <article>
                            <img src="<?php the_post_thumbnail_url(); ?>" />
                            <h1 class="title"><?php the_title(); ?></h1>
                            <ul class="meta">
                                <li>
                                    <i class="fa fa-calendar"></i><?php echo get_the_date(); ?>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author_meta('display_name', 1) ?></a>
                                </li>
                                <li>
                                    <i class="fa fa-tag"></i> <?php the_tags(''); ?>
                                </li>
                            </ul>
                            <?php the_content(); ?>
                        </article>
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