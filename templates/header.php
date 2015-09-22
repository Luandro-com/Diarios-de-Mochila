<!-- Sidebar -->
<div class="sidebar-overlay">
  <div id="sidebar-wrapper">
    <a href="https://www.facebook.com/diariosdejmochila" target="_blank"><div class="sidebar-social">
    <div class="fb-like-box" data-href="https://www.facebook.com/diariosdejmochila" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>
    </div></a>
      <div class="sidebar-container">
        <a class="page-logo" href="<?php echo esc_url(home_url('/')); ?>">
          <?php if ( get_theme_mod( 'm1_logo' ) ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
              <img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            </a>
          <?php else : ?>
            <hgroup>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <p class="site-description"><?php bloginfo( 'description' ); ?></p>
            </hgroup>
          <?php endif; ?>

          <!-- <h3><?php echo get_bloginfo('description'); ?></h3> -->
        </a>
      <ul class="sidebar-nav">
        <!-- INSCREVA-SE -->
        <?php get_template_part('templates/subscribe'); ?>
        <!-- Categories -->
        <ul>
          <?php wp_list_cats('sort_column=name'); ?>
        </ul>
        <!-- SIDEBAR -->
        <?php dynamic_sidebar('sidebar-primary'); ?>
      </ul>
    </div>
    <div class="menu-footer">
        <h4 class="menu-redacao"><a href="<?php echo esc_url(home_url('/')); ?>/do-faceblog/"><span class="glyphicon glyphicon-pencil"></span> A Equipe</a></h4>
        <a href="mailto:mochiladediarios@gmail.com?Subject=Contato%20Diarios%20de%20Mochila"><h5>mochiladediarios@gmail.com</h5></a>
        <a class="luandro-sig" href="http://luandro.com" target="_blank"><span class="glyphicon glyphicon-flash"></span> Desenvolvido por Luandro <span class="glyphicon glyphicon-flash"></span></a>
      </div>
  </div>
  <!-- /#sidebar-wrapper -->
  <a href="#menu-toggle" id="menu-toggle">
    <span></span>
    <span></span>
    <span></span>
  </a>
  <div class="mobile-banner">
    <a class="navbar-logo" href="<?php echo esc_url(home_url('/')); ?>">
      <?php if ( get_theme_mod( 'm1_logo' ) ) : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="page-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
          <img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
      <?php else : ?>
        <hgroup>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
        </hgroup>
      <?php endif; ?>
    </a>
  </div>
</div>
