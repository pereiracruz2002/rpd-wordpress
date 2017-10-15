<?php get_header();?>
<!-- INICIO TOPO -->
<hr>
<div class="fundo_topo"></div>
<div class="row">
  <div class="large-4 columns titesq_interno">FALE CONOSCO
  <div class="subtitesq_interno hide-for-small-only hide-for-medium-only">Romaro & Paixão Dias Advogados</div>
  </div>
  <div class="large-8 columns titdir_interno">ROMARO & PAIXÃO DIAS ADVOGADOS</div>
</div>
<!-- FIM TOPO-->

<br>

<!-- INICIO CORPO-->
<div class="row">
  <div class="small-12 medium-12 large-6 columns">
    <h5>Preencha o formulário de contato</h5>
     <?php 
        while (have_posts()) {
          the_post();
        ?>
         
          <?php the_content(); ?>

          <?php
        } //endwhile;
        ?> 

   <!--  <div class="">
       <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Nome" required>
    </div>
    <div class="">
       <input type="text" class="form-control" id="form-name" name="form-name" placeholder="E-mail" required>
    </div>
    <div class="">
       <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Telefone" required>
    </div>
    <div class="">
       <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Assunto" required>
    </div>
    <div class="">
        <textarea class="form-control" rows="3" id="form-mensagem" name="form-mensagem" placeholder="Mensagem" required></textarea>
    </div>
    <div class="">
        <button type="submit" class="btn btn-default button">Enviar</button>
    </div>
  </div> -->
  </div>

  <div class="small-12 medium-12 large-6 columns">
    <h5>Telefones</h5>
    <div class=""><i class="fa fa-phone"></i>&nbsp;(16) 3416-8171</div>
    <br>
    <h5>Email</h5>
    <div class=""><i class="fa fa-envelope-o"></i><a href="mailto:contato@rpd.adv.br">&nbsp; contato@rpd.adv.br</a></div>
    <br>
    <div class="google-maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3698.64760462123!2d-47.90086538505024!3d-22.02480948546742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b8773ef68e7385%3A0xe7baebcf74f10e09!2sR.+Jos%C3%A9+Benetti%2C+290+-+Vila+Prado%2C+S%C3%A3o+Carlos+-+SP%2C+13574-300!5e0!3m2!1spt-BR!2sbr!4v1506957725845" width="380" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>    </div>

  </div>





</div>


<!-- FIM CORPO -->
<br>
<br>
<!-- FIM CORPO -->
<?php get_footer(); ?>