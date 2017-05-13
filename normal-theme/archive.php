<?php get_header(); ?>

<div class="main-content">
    <div class="main-content">
    <?php if ( have_posts() ) : ?>
        <h1><?php the_archive_title(); ?></h1>
        <?php the_archive_description(); ?>

        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>
    <?php else: ?>
        <p>No posts.</p>
    <?php endif; ?>
    </div>
</div>

<?php
get_sidebar();
get_footer();
