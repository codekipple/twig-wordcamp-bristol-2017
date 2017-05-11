<?php
$posts = get_posts();

if ($posts): ?>
    <aside class="sidebar">
        <h3>Recent Posts</h3>
        <ul>
            <?php foreach ($posts as $post): setup_postdata($post); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach; wp_reset_postdata(); ?>
        </ul>
    </aside>
<?php endif; ?>
