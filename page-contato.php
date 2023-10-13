<?php  
//Template Name: Modelo Contato
get_header(); 
?>

<!-- header -->
<header>
    <div class="bg-contatos">
        <div class="container">
            
            <div id="topo" class="row full-topo scrolled">
                <?php get_template_part('_menuHeader'); ?>
            </div>



        </div>            
    </div>
</header>
<!-- /header -->

<? if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>


<div class="row row-full-contatos">
        <div class="container texto-contatos">
            <div class="row linha-form">
                <div class="col-md-6 contato-form">
                    <h2><?php the_title(); ?></h2>

                    <!--
                    <?php the_content(); ?>
                    -->

                    <div role="form" class="wpcf7" id="wpcf7-f41-p29-o1" lang="pt-BR" dir="ltr">
                        <div class="screen-reader-response"></div>
                    <form action="/hml/index.php/contato/#wpcf7-f41-p29-o1" method="post" class="wpcf7-form" novalidate="novalidate">

                        <input type="hidden" name="_wpcf7" value="41" />
                        <input type="hidden" name="_wpcf7_version" value="5.0.2" />
                        <input type="hidden" name="_wpcf7_locale" value="pt_BR" />
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f41-p29-o1" />
                        <input type="hidden" name="_wpcf7_container_post" value="29" />


                    <div class="controls">                                                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap usuario-nome"><input type="text" name="usuario-nome" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Nome" /></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                     <span class="wpcf7-form-control-wrap usuario-email"><input type="email" name="usuario-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="E-mail" /></span>                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap usuario-empresa"><input type="text" name="usuario-empresa" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Empresa" /></span> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group col-md-9">
                                    <span class="wpcf7-form-control-wrap usuario-telefone"><input type="tel" name="usuario-telefone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" aria-required="true" aria-invalid="false" placeholder="Telefone (xx) xxxxx-xxxx" /></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group col-md-9">
                                    <span class="wpcf7-form-control-wrap usuario-seguimento"><input type="text" name="usuario-seguimento" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Segmento" /></span>                       
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group col-md-9">
                                    <span class="wpcf7-form-control-wrap usuario-assunto"><input type="text" name="usuario-assunto" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Assunto" /></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap usuario-mensagem"><textarea name="usuario-mensagem" cols="30" rows="6" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Mensagem"></textarea></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="col-md-3 btn wpcf7-form-control wpcf7-submit" type="submit" value="Enviar mensagem">Enviar</button>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>

                </div>
                <div class="col-md-6">
                    <!--<img src="images/contato.jpg" style="width:100%" alt="Contatos">-->

                    <figure class="contato-figure">
                    <?php the_post_thumbnail( 'full' );  ?>
                    </figure>

                    <div class="contato-texto-page">
                        <p><span class="telefone"><small>+55</small> 11 4156 8400</span></p>
                        <p>Rua Padre Luiz Chrispim, 380<br>CEP 07790-440<br>Cajamar/SP - Brasil</p>
                        <p><span class="email">comercial@globoplast.com.br</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-full-mapa">    
        <div id="map">


            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3661.446669046671!2d-46.837928284557755!3d-23.408226634759153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a709576c36b5fb1!2sGloboplast+Ind%C3%BAstria+e+Com%C3%A9rcio+de+Pl%C3%A1sticos!5e0!3m2!1spt-BR!2sbr!4v1543264989511" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

       </div>
    </div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>