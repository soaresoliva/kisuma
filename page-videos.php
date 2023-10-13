<?php  
//Template Name: Modelo Vídeos
?>
<?php  get_header();  ?>
<? if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

<!-- header -->
<header>
    <div class="bg-qualidade" style="height: 10px;">
        <div class="container">
            <div id="topo" class="row full-topo scrolled">
                <?php get_template_part('_menuHeader'); ?>
            </div>

        </div>            
    </div>
</header>
<!-- /header -->

<div class="container texto-qualidade">
    <div class="row">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </div>
</div>    
    
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>