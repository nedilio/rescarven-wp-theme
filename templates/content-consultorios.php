<style>

    h3.page-title {
    font-weight: 900;
    text-transform: uppercase;
    color: #0069aa;
    font-family: 'Open Sans', sans-serif;
    margin: 25px 45px;
    letter-spacing: -1px;
}
    
.page-intro {
    background: #0163a0;
    color: #fff;
    padding: 15px 25px;
    font-size: 16px;
    font-weight: 300;
}

</style>

<h3 class="page-title"><?php the_title() ?></h3>

<div class="page-intro">
    <p><b>RESCARVEN</b> cuenta con más de 272 consultorios en diferentes sedes, para proveer a sus afiliados los mejores
servicios de salud preventiva a través de excelentes profesionales médicos en más de 35 diferentes especialidades </p>
</div>
<div class="">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
<?php 
$active="";
$count=0;
$consultorios = new WP_Query(array('post_type'=>'consultorio'));
    while ($consultorios->have_posts()){
        $consultorios->the_post();
        if ($count==0){
            $active='active';
        } else {
            $active='';
        }

    ?>
    <div class="item <?php echo $active ?>">
        <div class="">
        <div class="col-md-12">
            <h1><?php the_title(); ?></h1>
            <div class="container-direccion">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin iaculis eget nisl ultrices tristique. Suspendisse condimentum efficitur dolor. Ut vulputate malesuada erat eget aliquet. Sed consectetur ac arcu id rhoncus.</p>   
            </div>
        </div>
        </div>
        <div class="col-md-12">
     <div class="col-md-10 col-md-offset-1">
      <div class="col-md-6">
        <div class="consultorio-thumb">
                <img src="http://www.emexpress.co/img/lightbox/cons1-LB3.jpg" class="img-responsive">
        </div>
      </div>
      <div class="col-md-6">
        <?php the_content(); ?>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin iaculis eget nisl ultrices tristique. Suspendisse condimentum efficitur dolor. Ut vulputate malesuada erat eget aliquet. Sed consectetur ac arcu id rhoncus.</p>
      </div>
     </div>
    </div>
              </div>
    <?php
        $count++;
    }
    wp_reset_postdata();

?>
        </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
</div>