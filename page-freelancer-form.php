<?php

/*

  Template Name: Formulario Freelancer

*/

 get_header(); ?>
 <section class="container-responsive">
   <div class="row-responsive">
     <div class="col-small-12 col-medium-10 col-large-9 col-xlarge-7 elm-center">
       <p class="titulo rubik-font">CronApp Cloud Community</p>
     </div>
     <div class="col-small-12 col-medium-8 col-large-5 col-xlarge-4 elm-center">
       <p class="sub-titulo rubik-font">Se você é um desenvolvedor CronApp, faça parte da comunidade e trabalhe como freelancer desenvolvendo na nuvem projetos incríveis!</p>
     </div>
   </div>


   <div id="formulario-contato" class="row-responsive">
     <div class="col-small-12 col-medium-9 col-large-9 col-xlarge-5 elm-center">
       <?php echo do_shortcode( '[contact-form-7 id="36763" title="Contato - formulario freelancer"]' ); ?>
     </div>
   </div>
 </section>

<?php get_footer(); ?>
