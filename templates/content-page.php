<div class="col-sm-12 wrapper-custom">
	<h3 class="texto-azul text-uppercase"><?php the_title(); ?></h3>
	<?php the_content(); ?>
		
</div>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
