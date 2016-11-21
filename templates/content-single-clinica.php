<style>
a.big-link {
    color: #0163a0;
    font-weight: 800;
    text-transform: uppercase;
    font-size: 21px;
    margin-top: 45px;
}
    
    a.big-link span {
    margin: 0px 5px;
    font-family: monospace;
    font-size: 32px;
}
    
    header.header-clinica span {
    margin-left: 15px;
    font-size: 16px;
    font-weight: 300;
    float: right;
    width: 50%;
    text-align: left;
}
    
    .header-clinica b {
    text-transform: uppercase;
    font-size: 25px;
    font-weight: 800;
    margin-right: 20px;
}
    
    
</style>

<h3 class="page-title">Clínicas</h3>

<?php while (have_posts()) : the_post(); ?>

<article <?php post_class(); ?>>
    <header class="header-clinica">
        <b>Clinica Rescarvén <?php the_title(); ?></b><span><?php echo get_post_meta(get_the_ID(), 'direccion', true) ?></span>
    </header>
    <div class="map-wrap">
        <div class="overlay-map" onclick="style.pointerEvents='none'"></div>
        <?php echo get_post_meta(get_the_ID(), 'mapa', true) ?>
    </div>
    <div class="entry-content row">
        <div class="col-md-4 col-md-offset-1">
            <?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?>
        </div>
        <div class="col-md-6">
      <?php the_content(); ?>
        </div>
    </div>
</article>
<a class="big-link pull-left" href="<?php echo home_url() ?>/clinicas"><span><</span> Volver</a>
    
    <?php $next_post = get_adjacent_post(false,'',false);
    //print_r($next_post);    
    
    ?>
    
    <a class="big-link pull-right" href="<?php echo get_permalink($next_post->ID); ?>">Siguiente <span>></span></a>    
<?php endwhile; ?>
