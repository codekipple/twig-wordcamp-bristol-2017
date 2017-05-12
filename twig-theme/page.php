<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/views/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 */

$context = Timber::get_context();
$post = new TimberPost(); // Gets post retrieved from WordPress
$context['post'] = $post;

$context['widgets'] = array(
    array(
        'title' => 'Page Widget 1',
        'body' => 'Centrally aligned widget.',
    ),
    array(
        'title' => 'Page Widget 2',
        'body' => 'Centrally aligned widget.',
    ),
);

Timber::render( array( 'page-' . $post->post_name . '.twig', 'page.twig' ), $context );
