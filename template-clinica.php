<?php
/**
 * Template Name: Clinica
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'clinica'); ?>
<?php endwhile; ?>
