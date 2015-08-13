<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->
  <div id="wrapper">
     <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>
    <div id="page-content-wrapper">
      <div class="main-container container">
          <div class="row">
            <!-- <div class="col-md-12">
              <div class="col-md-4">
                <!-- PORTFOLIO
                <?php dynamic_sidebar( 'menu_top_1' ); ?>
              </div> -->
              <div class="col-md-12">
                <!-- PUBLICIDADE -->
                <div class="publicidade">
                  <?php
                    if (function_exists(display_campaign)) {
                    display_campaign(1);
                    }
                  ?>
                  <?php echo adrotate_ad(1); ?>
                </div>
              </div>
              <div class="col-md-12"><h6 class="apresenta">apresenta</h6></div>
              <div class="topbar">
                <?php dynamic_sidebar( 'top_1' ); ?>
              </div>
              <main class="main" role="main">
                <?php include roots_template_path(); ?>
              </main><!-- /.main -->
              <?php if (roots_display_sidebar()) : ?>
              <aside class="sidebar" role="complementary">
                <?php include roots_sidebar_path(); ?>
              </aside><!-- /.sidebar -->
              <?php endif; ?>
              <?php get_template_part('templates/footer'); ?>
            </div>
          </div>
        </div>
    </div>
  </div>
</body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1497922977149725&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</html>
