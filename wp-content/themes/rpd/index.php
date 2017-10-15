<?php get_header(); ?>
<!-- INICIO BANNER -->
<div class="hide-for-small-only hide-for-medium-only">

<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1347px; height: 455px;  overflow: hidden; visibility: hidden; ">
  <!-- Loading Screen -->

  <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">

    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
    </div>

    <div style="position:absolute;display:block;background:url('banner/loading.gif') no-repeat center center; top:0px; left:0px; width:100%; height:100%;">
    </div>
  </div>
 <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1347px; height: 455px; overflow: hidden;">


    <?php
        global $wp_query;
        $args2 = array( 'post_type' => 'banners','orderby' => 'post_date',
                          'order'=> 'DESC',
                          'numberposts'     => 8 );
        query_posts( $args2 );
        $i = 0;
         while ( have_posts() ) : the_post();
         $banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
                  
                  <div data-p="225.00" style="display: none;">
      <a href="#">
        <img data-u="image" src="<?php echo $banner[0];?>"/>
      </a>
    </div>
            <?php
            $i++;
            endwhile;
            // Reset Query
            wp_reset_query();
          ?>


    <div data-u="caption" data-t="5" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
      <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;"></div>
    </div>
  </div>
  <!-- Bullet Navigator -->
  <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
    <!-- bullet navigator item prototype -->
    <div data-u="prototype" style="width:16px;height:16px;"></div>
  </div>
  <!-- Arrow Navigator -->
  <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
  <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
</div>
</div>
<!-- FIM BANNER -->

<!-- INICIO CAROUSEL-->
<div class="row carousel">
<?php echo TinyCarousel('1'); ?>


<!--   <div class="large-4 columns "><img src="<?php echo get_template_directory_uri(); ?>/img/direito_previdenciario.png"></img></div>
  <div class="large-4 columns "><img src="<?php echo get_template_directory_uri(); ?>/img/direito_previdenciario.png"></img></div> -->
</div>
<!-- FIM CAROUSEL -->
<!-- FIM MENU -->
  <!-- fim header -->
<!-- INICIO CORPO-->
<div class="row">
  <?php

// The Loop
  wp_reset_query();
$args = array('post_type' => 'novidades', 'orderby' => 'post_date',
                'order'=> 'DESC',
                'numberposts'     => 3 );
query_posts( $args );
while ( have_posts() ) : the_post(); ?>
<?php $banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>

  <div class="large-5 columns">
    <img src="<?php echo get_template_directory_uri(); ?>/img/pic_advs.png"></img></div>
  <div class="large-6 columns">
    <div class="tit_index"><?php the_title();?>
    </div>
    <br>
     <div class="txt_index">
        <?php echo abreviaString(get_the_content(),200,'[...]'); ?>
     </div>
  </div>
<?php endwhile;?>
<?php
    wp_reset_query();
?>
<div class="large-1 columns end"></div>

</div>
<br>
<!-- FIM CORPO -->

<!-- INICIO BLOG-->
<div class="row">
<h4 class="tit_h4">Artigos em Destaque no Clipping</h4>

<?php
// The Loop
global $wp_query;
$args = array( 'cat' => 5 );
query_posts( $args );
$i = 0;
 while ( have_posts() ) : the_post();?>
<?php $banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>



<div class="large-4 columns">
  <img src="<?php echo $banner[0];?>"></img>
  <br>
  <div class="tit_clipping"><?php the_title();?></div><br>
  <div class="txtindexclipping">
  <?php echo abreviaString(get_the_content(),200,'[...]'); ?>
  </div>
  <div class="dataindex"><i class="fa fa-calendar-o"></i> <?php the_date() ?></div>
</div>
<?php endwhile;?>
<!-- <div class="large-4 columns">
  <img src="<?php echo get_template_directory_uri(); ?>/img/fotoblog1.png"></img>
  <br>
  <div class="tit_clipping">Romaro & Paixão Dias orientam
    população através das rádios locais</div><br>
  <div class="txtindexclipping">
  Romaro & Paixão Dias Advogados esteve recentemente,
  em duas das mais conceituadas rádios de São Carlos
  explicando e respondendo questionamentos dos ouvintes
  sobre Direito Previdenciário e […]
  </div>
  <div class="dataindex"><i class="fa fa-calendar-o"></i> 01/10/2017</div>
</div>


<div class="large-4 columns">
  <img src="<?php echo get_template_directory_uri(); ?>/img/fotoblog1.png"></img>
  <br>
  <div class="tit_clipping">Romaro & Paixão Dias orientam
    população através das rádios locais</div><br>
  <div class="txtindexclipping">
  Romaro & Paixão Dias Advogados esteve recentemente,
  em duas das mais conceituadas rádios de São Carlos
  explicando e respondendo questionamentos dos ouvintes
  sobre Direito Previdenciário e […]
  </div>
  <div class="dataindex"><i class="fa fa-calendar-o"></i> 01/10/2017</div>
</div> -->
</div>
<!-- FIM BLOG-->
<br>
<br>
<!--  INICIO NEWSLETTER -->
<div class="row hide-for-small-only hide-for-medium-only">

  <div class="large-6 columns box">
    <div class="txtbox">Cadastre-se para receber nosso<br>
clipping por e-mail!
    </div>
  </div>

  <div class="large-6 columns box_azul">
    <!-- <form class="form">
      <input class="campo_nome" type="text" placeholder="nome">
      <input class="campo_email" type="email" placeholder="email">
        <input class="submit" type="submit" value="Quero Receber!">
    </form> -->
    <?php eemail_show(); ?>
    </div>

</div>
<!--  FIM NEWSLETTER -->
<br>
<br>
<!-- INICIO CONTATO -->
<div class="row">
  <div class="large-3 columns endindex"><i class="fa fa-map-marker fa-4x"></i>
    <h3>Endereço</h3>
      Rua José Benetti, 290, Vila Prado<br>
      13574-300<br>
  </div>

  <div class="large-3 columns endindex"><i class="fa fa-mobile fa-4x"></i>
    <h3>Telefone</h3>
      (16) 3416-8171
    </div>

  <div class="large-3 columns endindex"><i class="fa fa-paper-plane fa-3x"></i>
    <h3>Contato</h3>
      contato@rpd.adv.br<br>
      eros.romaro@rpd.adv.br<br>
      andreia.paixao@rpd.adv.br
    </div>

  <div class="large-3 columns endindex"><i class="fa fa-clock-o fa-4x"></i>
    <h3>Horário</h3>
      Segunda-feira à Sexta-feira<br>
      das 8h00 às 18h00
    </div>

</div>
<!-- FIM CONTATO -->

<br>
<?php get_footer(); ?>

