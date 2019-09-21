<?php
/**
 * The Header for our theme.
 *
 * @package advance-fitness-gym-pro
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php do_action( 'advance_fitness_gym_pro_before_topbar' ); ?>
    <?php get_template_part('template-parts/header/top-bar'); ?>      
  <header id="masthead" class="site-header">
    <div id="header"> 
      <?php do_action( 'advance_fitness_gym_pro_before_header' ); ?>
      <?php get_template_part('template-parts/header/content-header'); ?>
    </div>
    <div class="clearfix"></div>
  </header>