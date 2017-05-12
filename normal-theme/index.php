<?php get_header(); ?>

<div class="main-content">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Invidiosum nomen est, infame, suspectum.</p>

    <?php
    $widgets = array(
        array(
            'title' => 'Homepage Widget 1',
            'body' => 'Left aligned widget.',
        ),
        array(
            'title' => 'Homepage Widget 2',
            'body' => 'Centrally aligned widget.',
        ),
        array(
            'title' => 'Homepage Widget 3',
            'body' => 'Right aligned widget.',
        )
    );
    ?>
    <section class="page-section">
        <h2>Widgets</h2>

        <div class="o-layout c-widgets homepage-widgets">
            <?php $i =0; foreach ($widgets as $widget): $i++; ?>
                <?php echo ($i != 1) ? '-->' : ''; ?><div class="o-layout__item u-1/3">
                    <div class="c-widget">
                        <h3><?php echo $widget['title']; ?></h3>
                        <p><?php echo $widget['body']; ?></p>
                    </div>
                </div><?php echo ($i != count($widgets)) ? '<!--' : ''; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <?php if ( have_posts() ) : ?>
        <section class="page-section">
            <h2>Latest posts</h2>

            <?php while ( have_posts() ) : the_post(); ?>
                <h2><a href="<?php echo esc_url( get_permalink() ) ?>"><?php the_title(); ?></a></h2>
                <?php the_content() ?>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
