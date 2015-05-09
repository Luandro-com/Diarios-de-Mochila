<div class="sub-titulo">
	<span class="glyphicon glyphicon-calendar"></span>
	<time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
	<span><?php $u_time = get_the_time('U');
			$u_modified_time = get_the_modified_time('U');
			if ($u_modified_time >= $u_time + 86400) {
			echo '<span class="glyphicon glyphicon-refresh"></span> ';
			echo '<span class="update-meta">atualizado ';
			the_modified_time('j F Y');
			echo '</span>';
			} ?>
	</span>
	<span class="glyphicon glyphicon-comment"></span>
	<span class="comments-link"><?php comments_popup_link( __( 'Deixar comentário', 'Diarios' ), __( '1 Comentário', 'Diarios' ), __( '% Comentários', 'Diarios' ) ); ?> </span>
	<?php edit_post_link('editar', ' <span class="glyphicon glyphicon-pencil">', '</span>'); ?>
	<!-- <p class="byline author vcard"><?php echo __('Por', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></p> -->
</div>