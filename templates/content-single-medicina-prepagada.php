<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <div class="entry-content content-medicina-prepagada">
    <header class="menu-med-prep">

<ul class="list-inline">
    <?php $loop = new WP_Query( array( 'post_type' => 'medicina-prepagada') ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <li><a href="<?php the_permalink(); ?>"><span class="plan-title-menu text-uppercase"><?php the_title(); ?></span></a></li>
  <?php endwhile; wp_reset_query(); ?>
</ul>

    </header>

    <div class="row">
      <div class="col-sm-7">
        <h2><span class="text-uppercase"><?php the_title(); ?></span></h2>
        <div class="wrapper-med-prep"><?php the_content(); ?></div>
        <div class="wrapper-botones text-center">
          <a href="#" class="boton-med-prep">Centros de Salud</a>
          <a href="#" class="boton-med-prep">Cotización Familiar</a>
          <a href="#" class="boton-med-prep">Cotizar Empresa</a>
        </div>
      </div>
      <div class="col-sm-5">
        javier
      </div>
    </div>

    </div>
  </article>
<?php endwhile; ?>
