<?php get_header();?>
<hr>
<div class="fundo_topo"></div>
<div class="row">
  <div class="large-4 columns titesq_interno">SOBRE-NÓS
  <div class="subtitesq_interno hide-for-small-only hide-for-medium-only">Romaro & Paixão Dias Advogados</div>
  </div>
  <div class="large-8 columns titdir_interno">EXCELÊNCIA NO ATENDIMENTO AOS CLIENTE</div>
</div>
<!-- FIM TOPO-->

<br>

<!-- INICIO CORPO-->
<div class="row">
  <div class="large-7 columns txt_empresa">
  	<?php
        while (have_posts()) {
          the_post();
        ?>
    <h4 class="tit_h4">Conheça Nossa História</h4>
   		 <?php the_content(); ?>
     <?php
        } //endwhile;
      ?>
  </div>
<div class="large-5 columns pic_empresa hide-for-small-only hide-for-medium-only">
  <img src="<?php echo get_template_directory_uri(); ?>/img/pic_empresa.png"></img>
  <img src="<?php echo get_template_directory_uri(); ?>/img/pic_empresa1.png"></img>
</div>
</div>


<br>
<!-- FIM CORPO -->
<?php get_footer(); ?>