<article id="post-<?php the_ID(); ?>" class="post">
    <header class="post__header">
        <?php the_title( '<h1 class="post__title">', '</h1>' ); ?>
        <div class="post__meta">
            <?php
            nstheme_posted_on();
            nstheme_posted_by();
            ?>
        </div><!-- .post__meta -->
    </header>

    <div class="post__content">
        <?php 
            the_content();
        ?>
    </div>
</article><!-- .post -->