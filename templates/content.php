<article class="col-xs-12" <?php post_class(); ?>>
  <header>
  	<div class="titulo-categoria">
  		<?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'Diarios' ) ); ?>
  	</div>	
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_content(); ?>
  </div>
  <div class="content-bot">
    <?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
  </div>  
</article>