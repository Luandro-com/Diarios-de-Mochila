<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <div class="titulo-categoria">
      <?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'Diarios' ) ); ?>
    </div>  
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="post-voltar glyphicon glyphicon-arrow-left"> voltar</span></a>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
