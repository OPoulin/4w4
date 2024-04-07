<?php
/**
 * Modèle de recherche
 */
?>

<?php
get_header();
?>
<main class="site__main">

<section class="recherche__section">
<?php if (have_posts()) : ?>

<header class="page-header">
    <h1 class="page-title"><?php printf(esc_html__('Résultats pour : %s', 'text_domain'), '<span>' . get_search_query() . '</span>'); ?></h1>
</header>

<?php
/* Start the Loop */
while(have_posts()): the_post(); ?>
      <article>
         <h5><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h5>
         <?php echo wp_trim_words(get_the_excerpt(), 60) ?>
         <hr>
      </article>
      <?php endwhile;

the_posts_navigation();

else :
// If no search results are found, display a message
?>
<p><?php esc_html_e("Désolé, mais nous n'avons pas trouvé de résultats à votre recherche, réessayez avec des mots-clés différents", 'text_domain'); ?></p>
<?php
endif;
?>
</section>
</main>
<?php
get_footer();
?>