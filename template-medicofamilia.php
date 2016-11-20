<?php
/**
 * Template Name: Medico de Familia
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/header', 'header'); ?>
  <?php get_template_part('templates/content', 'medicofamilia'); ?>
<?php endwhile; ?>
