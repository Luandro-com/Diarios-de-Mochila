<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <meta name="description" content="Diarios de Mochila é um blog de crônicas (de viagens), memórias, poesias e afins; suas mensagens propõem um olhar de mundo de inspiração latino-americana." />
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.gif" />
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>
