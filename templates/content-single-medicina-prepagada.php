<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <div class="entry-content content-medicina-prepagada">
    <header class="menu-med-prep">

<ul class="list-inline">
    <?php $loop = new WP_Query( array( 'post_type' => 'medicina-prepagada', 'order' => 'ASC') );?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); 
  
  $slug = get_post_field( 'post_name', get_post() ); ?>
  <li class="boton-plan"><a href="<?php the_permalink();?>"><span class="plan">Plan </span><span class="plan-title-menu text-uppercase <?php echo $slug; ?>"><?php the_title(); ?></span></a></li>
  <?php endwhile; wp_reset_query(); ?>
</ul>

    </header>
<?php $slug = get_post_field( 'post_name', get_post() ); ?>
    <div class="row">
      <div class="col-sm-7">
        <div class="title-bar">
          <h2><span class="titulo-plan-big">Plan </span><span class="text-uppercase titulo-plan <?php echo $slug; ?>"><?php the_title(); ?></span></h2>
        </div>
        <div class="wrapper-med-prep"><?php the_content(); ?></div>
        <div class="wrapper-botones text-center">
          <a href="#" class="boton-med-prep">Centros de Salud</a>
          <a href="#" class="boton-med-prep">Cotización Familiar</a>
          <a href="#" class="boton-med-prep">Cotizar Empresa</a>
        </div>
      </div> 
      <div class="col-sm-5" style="background: url(<?php the_post_thumbnail_url('large'); ?> ); background-size: cover; height: 700px;">
        
      </div>
    </div>

    </div>
  </article>
<?php endwhile; ?>
