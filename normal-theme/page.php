<?php get_header(); ?>

<div class="main-content">
    <?php while ( have_posts() ) : the_post(); ?>
        <article class="post-type-{{post.post_type}}" id="post-{{post.ID}}">
            <section class="article-content">
                <?php the_title( '<h1 class="article-h1">', '</h1>' ); ?>

                <div class="article-body">

                    <div class="page-section">
                        <div class="o-layout c-widgets">
                            <div class="o-layout__item u-1/2">
                                <div class="c-widgets__item u-set-4">
                                    <h3>Widget title</h3>
                                    <p>Centrally aligned widget.</p>
                                </div>
                            </div><!--
                            --><div class="o-layout__item u-1/2">
                                <div class="c-widgets__item u-set-5">
                                    <h3>Widget title</h3>
                                    <p>Centrally aligned widget.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php the_content(); ?>
                </div>
            </section>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>

