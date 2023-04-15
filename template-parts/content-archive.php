<article>
    <img src="<?php the_post_thumbnail_url(); ?>" />
    <h2 class="title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <ul class="meta">
        <li>
            <i class="fa fa-calendar"></i><?php echo get_the_date(); ?>
        </li>
        <li>
            <i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author_meta('display_name', 1) ?></a>
        </li>
        <li>
            <i class="fa fa-tag"></i> <a href="kategori.html"><?php the_tags(''); ?></a>
        </li>
    </ul>
    <?php
    the_excerpt()
    ?>
</article>