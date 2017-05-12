<?php get_header(); ?>

<div class="main-content">
    <?php while ( have_posts() ) : the_post(); ?>
        <article class="post-type-{{post.post_type}}" id="post-{{post.ID}}">
            <section class="article-content">
                <?php the_title( '<h1 class="article-h1">', '</h1>' ); ?>

                <div class="article-body">
                    <div class="page-section">
                        <?php
                        $widgets = array(
                            array(
                                'title' => 'Page Widget 1',
                                'body' => 'Centrally aligned widget.',
                            ),
                            array(
                                'title' => 'Page Widget 2',
                                'body' => 'Centrally aligned widget.',
                            )
                        );
                        ?>
                        <div class="o-layout c-widgets page-widgets">
                            <?php $i =0; foreach ($widgets as $widget): $i++; ?>
                                <?php echo ($i != 1) ? '-->' : ''; ?><div class="o-layout__item u-1/2">
                                    <div class="c-widget">
                                        <h3><?php echo $widget['title']; ?></h3>
                                        <p><?php echo $widget['body']; ?></p>
                                    </div>
                                </div><?php echo ($i != count($widgets)) ? '<!--' : ''; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <?php the_content(); ?>
                </div>
            </section>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>

