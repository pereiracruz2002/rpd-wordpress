<?php
/**
* A Simple Category Template
*/

get_header(); ?>
<hr>
<div class="fundo_topo"></div>
<div class="row">
  <div class="large-4 columns titesq_interno">CLIPPING
  <div class="subtitesq_interno hide-for-small-only hide-for-medium-only">Romaro & Paixão Dias Advogados</div>
  </div>
  <div class="large-8 columns titdir_interno">EXCELÊNCIA NO ATENDIMENTO AOS CLIENTE</div>
</div>
<br>
<div class="row">
  <div class="large-9 columns">
<?php
if ( have_posts() ) : ?>
<?php
while ( have_posts() ) : the_post(); ?>
<?php $banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>


<div class="row">
  <div class="large-2 columns">
   <?php the_date( 'd-m', '<h2>', '</h2>' ); ?>
  </div>
  <div class="large-10 columns">
  <div class=""><?php the_title();?></div><br>
    <div class="txt_equipe"><?php the_content();?>
    </div>
  </div>
</div>

<br>
<?php endwhile;

else: ?>
<p>Sorry, no posts matched your criteria.</p>


<?php endif; ?>
</div>
<div class="large-3 columns">
  <?php get_sidebar(); ?> 
</div>
</div>

<?php get_footer(); ?>
