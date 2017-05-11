<?php the_title( '<h2 class="h2"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>

<?php
the_content( sprintf(
    /* translators: %s: Name of current post. */
    wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', '_s' ), array( 'span' => array( 'class' => array() ) ) ),
    the_title( '<span class="screen-reader-text">"', '"</span>', false )
) );
?>
