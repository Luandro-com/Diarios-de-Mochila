<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="post-voltar glyphicon glyphicon-arrow-left"> voltar</span></a>
<div class="page-content">
	<?php the_content(); ?>
	<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
</div>