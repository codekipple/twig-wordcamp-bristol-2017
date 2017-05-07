<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 */

$context = Timber::get_context();
$context['posts'] = Timber::get_posts();
$context['tweets'] = array(
	array(
		'link' => 'http://twitter.com/stubbornella',
		'avi' => 'http://placehold.it/50x50',
		'tweet' => 'I am Groot.',
		'time' => '@groot 12 minutes ago'
	),
	array(
		'link' => 'http://twitter.com/stubbornella',
		'avi' => 'http://placehold.it/50x50',
		'tweet' => 'I am Groot.',
		'time' => '@groot 13 minutes ago'
	),
	array(
		'link' => 'http://twitter.com/stubbornella',
		'avi' => 'http://placehold.it/50x50',
		'tweet' => 'I am Groot.',
		'time' => '@groot 14 minutes ago'
	)
);

$templates = array( 'index.twig' );
if ( is_home() ) {
	array_unshift( $templates, 'home.twig' );
}
Timber::render( $templates, $context );
