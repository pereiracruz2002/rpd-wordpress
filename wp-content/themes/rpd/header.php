<?php
/**
 * The theme header
 *
 * @package rpd
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Romaro & Paixão Dias Advogados</title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/banner.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/cdtop.css"> <!-- Gem style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tab.css" />
    
  
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>

    		<!--wordpress head-->
		<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- inicio header -->
  <div class="fundo_azul"></div>
  <div class="row">
    <div class="large-6 columns hide-for-small-only hide-for-medium-only endereco_topo">
      <i class="fa fa-map-marker"></i> Rua José Benetti, 290, Vila Prado - São Carlos/SP
    </div>
    <div class="large-5 columns hide-for-small-only hide-for-medium-only contato_topo">
      <i class="fa fa-phone"></i> (16) 3416-8171 | <i class="fa fa-envelope-o"></i> contato@rpd.adv.br
    </div>
    <div class="large-1 columns hide-for-small-only hide-for-medium-only midias_topo">
      <i class="fa fa-facebook"></i> | <i class="fa fa-twitter"></i>
    </div>
  </div>
  <!--INICIO MENU -->
<div class="row">
  <div class="large-3 columns logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></img></div>
  <div class="large-9 columns">
    <?php
      wp_nav_menu( array(
'menu' => 'meu_menu',

'theme_location' => 'meu_menu',

'container' => 'div',

'container_class' => 'classe_do_container',

'container_id' => 'cssmenu',

'menu_class' => 'classe_do_menu',

'echo' => true,

'menu_id' => 'cssmenu',

'before' => '',

'after' =>'',

'link_before' => '',

'link_after' => ' ',

'depth' => 0,

'walker' => '',

) );


      ?>
   <!--  <div id='cssmenu'>
    <ul>
       <li><a href='#'>Home</a></li>
       <li><a href='sobre-nos.php'>Sobre nós</a></li>
       <li><a href='nossa-equipe.php'>Nossa equipe</a></li>
       <li><a href='#'>Área de atuação</a>
          <ul>
            <li><a href='direito-previdenciario.php'>Direito Previdenciário</a></li>
            <li><a href='#'>Direito Imobiliário</a></li>
            <li><a href='#'>Direito Notarial e de Registros Públicos</a></li>
            <li><a href='#'>Contencioso Cível</a></li>
            <li><a href='#'>Direito de Família</a></li>
            <li><a href='#'>Direito das Sucessões (Inventários e Testamentos)</a></li>
            <li><a href='#'>Mediação e Conciliação</a></li>
          </ul>
        </li>
       <li><a href='#'>Clipping</a></li>
       <li><a href='#'>Fale Conosco</a></li>
    </ul>
    </div>-->
  </div>
</div> 



 
  