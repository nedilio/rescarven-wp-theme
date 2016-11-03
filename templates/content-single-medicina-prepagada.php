<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <div class="entry-content content-medicina-prepagada">
    <header class="menu-med-prep">
      aqui deberia el menu para navegar los singles
    </header>

    <div class="row">
      <div class="col-sm-7">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
      <div class="col-sm-5">
        javier
      </div>
    </div>

    </div>
  </article>
<?php endwhile; ?>
