	</main>

    <footer class="page-foot">
        <div class="u-constrict u-clearfix">
            <div class="footer-text">
                <p>The footer contains tweets but only when on the homepage.</p>
    			<p>Copyright <?php echo date('Y'); ?></p>
            </div>

            <?php if (is_home()): ?>
                <div class="tweets">
                    <h3>Tweets</h3>
                    <?php
                    $tweets = array(
                        array(
                            'link' => 'http://twitter.com/stubbornella',
                            'avi' => get_bloginfo('stylesheet_directory') . '/images/groot.jpg',
                            'tweet' => 'I am Groot.',
                            'time' => '@groot 12 minutes ago'
                        ),
                        array(
                            'link' => 'http://twitter.com/stubbornella',
                            'avi' => get_bloginfo('stylesheet_directory') . '/images/groot.jpg',
                            'tweet' => 'I am Groot.',
                            'time' => '@groot 13 minutes ago'
                        ),
                        array(
                            'link' => 'http://twitter.com/stubbornella',
                            'avi' => get_bloginfo('stylesheet_directory') . '/images/groot.jpg',
                            'tweet' => 'I am Groot.',
                            'time' => '@groot 14 minutes ago'
                        )
                    );
                    ?>

                    <?php foreach ($tweets as $tweet): ?>
                        <div class="o-media u-clearfix">
                            <a href="<?php echo $tweet['link']; ?>" class="o-media__img">
                                <img src="<?php echo $tweet['avi']; ?>" alt="" />
                            </a>

                            <div class="o-media__body">
                                <?php echo $tweet['tweet']; ?> <div><?php echo $tweet['time']; ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>
    </footer>

	<?php wp_footer(); ?>
</body>
</html>
