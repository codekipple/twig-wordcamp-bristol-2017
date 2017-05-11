<?php get_header(); ?>

<div class="main-content">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Invidiosum nomen est, infame, suspectum.</p>

    <section class="page-section">
        <h2>Widgets</h2>

        <div class="o-layout c-widgets">
            <div class="o-layout__item u-1/3">
                <div class="c-widgets__item u-set-1 u-text--left">
                    <h3>Widget title</h3>
                    <p>Left aligned widget.</p>
                </div>
            </div><!--
            --><div class="o-layout__item u-1/3">
                <div class="c-widgets__item u-set-2">
                    <h3>Widget title</h3>
                    <p>Centrally aligned widget.</p>
                </div>
            </div><!--
            --><div class="o-layout__item u-1/3">
                <div class="c-widgets__item u-set-3 u-text--right">
                    <h3>Widget title</h3>
                    <p>Right aligned widget.</p>
                </div>
            </div>
        </div>
    </section>

	<?php if ( have_posts() ) : ?>
	    <section class="page-section">
	        <h2>Latest posts</h2>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'templates/tease', get_post_format() ); ?>
			<?php endwhile; ?>
    	</section>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
