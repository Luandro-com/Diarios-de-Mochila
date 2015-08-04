<div class="intro-container container">
 	<div class="row">
		<div class="col-md-4 intro-poesia-container">
			<h3>Ninguém que possa escrever bem pode escrever em paz</h3>
			<h4>Charles Bukowski</h4>
		</div>
		<div class="col-md-3 intro-page-logo">
		        <?php if ( get_theme_mod( 'm1_logo' ) ) : ?>
		        	<img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		        <?php else : ?>
		          <hgroup>
		              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		              <p class="site-description"><?php bloginfo( 'description' ); ?></p>
		          </hgroup>
		        <?php endif; ?>
		        <br/>
		        <a href="mailto:contato@diariosdemochila.com?Subject=Contato%20Diarios%20de%20Mochila">contato@diariosdemochila.com</a>
		</div>
		<div class="col-xs-12 intro-arrow-container">
			<span class="intro-arrow glyphicon glyphicon-circle-arrow-down"></span>
		</div>
 	</div>
</div>
