<?php 
/**
 *  Modèle de base index.php 
 */
?>

<?php get_header(); ?>
<div id="entete" class="global">
        <section class="entete__header">  
                        <!-- facebook -->

            <div class="entete__header__texte">    
                <h1 class="bgc-text"><?php echo get_bloginfo('name'); ?></h1>
                <h2 class="bgc-text"><?php echo get_bloginfo('description'); ?></h2>
                <h3 class="bgc-text">TIM - Collège de Maisonneuve</h3>
            </div>   
            <div class="entete__header__button"><button class="entete__button"><a href="http://localhost/4w4-op/index.php/category/aventure/">À l'aventure</a></button></div>
        </section>
    </div>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Souhaitez la bienvenue à des vacances bien mérité</h2>
        <div class="section__cours">  
 <?php
/*
get_the_title(); // retourne une chaîne qui contient le titre
the_title() // echo du titre
*/

  ?>      
  <?php if (have_posts()):
        while(have_posts()): the_post(); ?>
        <div class="carte">
            
            <h4><?php the_title() ?></h4>
            <p><?php echo wp_trim_words(get_the_content(),10); ?></p>
            <p><a href="<?php echo get_permalink(); ?>">La suite</a> </p>
            <?php the_category(); ?>
        </div>
       <?php endwhile; ?>
    <?php endif; ?>
  </div>

    </div>
    <div id="galerie" class="global diagonal">
        <section class="galerie__section">
            <h2>Galerie</h2>
            <?php 
            /*Tentative inclure slideshow dans galerie en utilisant MetaSlider*/
            /*A corriger dans le futur*/
            /*echo do_shortcode('[soliloquy id="171"]');*/?>
            <?php include("slideshow.php"); ?>
            <blockquote class="slogan__blockquote">Visitez l'une de nos centaines de destinations vacances. Nos voyages ont de quoi plaire à tous les types de voyageurs, que vous soyez du type détente ou aventureux, nous avons toutes les destinations pour vous combler de joie.</blockquote>
        </section>
    </div>
    <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>Destinations Populaires</h2>
            
        </section>
        <?php get_template_part("gabarit/vague"); ?>
    </div>

    <?php  get_footer(); ?>
    