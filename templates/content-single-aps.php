<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <div class="entry-content content-medicina-prepagada">
    <header class="menu-med-prep text-center">

<ul class="list-inline">
    <?php $loop = new WP_Query( array( 'post_type' => 'aps', 'order' => 'ASC') );?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); 
  
  $slug = get_post_field( 'post_name', get_post() ); ?>
  <li class="boton-aps"><a href="<?php the_permalink();?>"><span class="aps-title-menu text-uppercase texto<?php echo $slug; ?>"><?php the_title(); ?></span></a></li>
  <?php endwhile; wp_reset_query(); ?>
</ul>

    </header>
<?php $slug = get_post_field( 'post_name', get_post() ); ?>
    <div class="row">
      <div class="col-sm-12">
        <div class="title-big-aps">
          <div class="row">
            <div class="col-sm-6">
              <div class="aps-text-big">
                <h2><span class="titulo-plan-big titulo-aps-big">Plan </span><span class="text-uppercase titulo-plan titulo-aps fondo<?php echo $slug; ?>"><?php the_title(); ?></span></h2>
              </div>
            </div>
            <div class="col-sm-6">
              <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-responsive">
            </div>
          </div>
        </div>
        <div class="wrapper-aps"><?php the_content(); ?></div>
        <div class="wrapper-botones text-center">
          <a href="#" class="boton-med-prep">Cotización Familiar</a>
          <a href="#" class="boton-med-prep">Cotizar Empresa</a>
        </div>
      </div> 
    </div>

    </div>
  </article>
<?php endwhile; ?>
