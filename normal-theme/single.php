<?php get_header(); ?>

<?php
$posts = get_posts();
?>
<div class="main-content <?php echo ($posts) ? 'has-sidebar' : ''; ?>">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="content-wrapper">
            <article class="post-type-{{post.post_type}}" id="post-{{post.ID}}">
                <section class="article-content">
                    <?php echo the_title( '<h1 class="article-h1">', '</h1>' ); ?>
                    <p class="blog-author">
                        <span>By</span> <a href="<?php the_author_link(); ?>"><?php the_author() ?></a> <span>&bull;</span> <?php the_date() ?>
                    </p>
                    <div class="article-body">
                        <?php the_content(); ?>
                    </div>
                </section>
            </article>
        </div><!-- /content-wrapper -->
    <?php endwhile; ?>
</div>

<?php
get_sidebar();
get_footer();
