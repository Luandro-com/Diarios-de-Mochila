<form class="field" id="searchform" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <input id="searchterm" type="search" value="<?php echo get_search_query(); ?>" name="s" required placeholder="<?php _e('Pesquisar / Búsqueda', 'Diarios'); ?>" />
  <button type="submit" id="search"><span class="glyphicon glyphicon-search"></span></button>
</form>
