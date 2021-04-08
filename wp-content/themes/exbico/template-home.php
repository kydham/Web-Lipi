<?php
/**
 * Template Name: FrontPage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package exbico
 */
get_header();
?>

<?php get_template_part('includes/theme-sections/exbico','hero-slider'); ?>
<?php get_template_part('includes/theme-sections/exbico','services'); ?>
<?php get_template_part('includes/theme-sections/exbico','team'); ?>
<?php get_template_part('includes/theme-sections/exbico','cta'); ?>
<?php get_template_part('includes/theme-sections/exbico','achivements'); ?>
<?php get_template_part('includes/theme-sections/exbico','blog'); ?>

<?php get_footer();
