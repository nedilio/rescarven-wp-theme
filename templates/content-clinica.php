<style>

    h3.page-title {
    font-weight: 900;
    text-transform: uppercase;
    color: #0069aa;
    font-family: 'Open Sans', sans-serif;
    margin: 25px 45px;
    letter-spacing: -1px;
}
    
    .clinica-thumb{
        border-radius:25px;
    }

</style>

<h3 class="page-title"><?php the_title() ?></h3>
<div class="row">
<?php 
$clinicas = new WP_Query(array('post_type'=>'clinica'));
    while ($clinicas->have_posts()){
        $clinicas->the_post();?>
    <div class="col-md-4">
        <div class="clinica-thumb">
            <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?>
            </a>
        </div>
        <div class="clinica-title">
            <h2>Clínica Rescarven</h2>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
    </div>
    
    <?php
    }
    wp_reset_postdata();

?>
</div>