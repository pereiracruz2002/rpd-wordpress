<?php
/**
* A Simple Category Template
*/

get_header(); ?>
<hr>
<div class="fundo_topo"></div>
<div class="row">
  <div class="large-4 columns titesq_interno">ÁREA DE ATUAÇÃO
  <div class="subtitesq_interno hide-for-small-only hide-for-medium-only">Romaro & Paixão Dias Advogados</div>
  </div>
  <div class="large-8 columns titdir_interno">PROFISSIONAIS DE ELEVADA GRADUAÇÃO</div>
</div>
<!-- FIM TOPO-->

<br>

<!-- INICIO CORPO-->
<div class="row">
  <main>
  	<?php
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post(); ?>
	    <input id="tab1" type="radio" name="tabs" checked>
	    <label for="tab1"><?php the_title();?></label>

	    <section id="content1">
	    	<?php the_content(); ?>
	       
	    </section>
	    <?php endwhile;
			else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>

  </main>
</div>




<!-- FIM CORPO -->
<br>
<br>
<?php get_footer(); ?>
