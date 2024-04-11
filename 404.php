<div id="accueil" class="global">
        <section class="accueil__section">
            <img src="" alt="">
            <h2 class="texte_section">Erreur 404</h2>
            <h4 class="texte_404">Vous essayez d'accéder à une page qui n'existe pas</h4>
            <h4 class="texte_404">Pour revenir à la page d'accueil, cliquez sur le lien suivant</h4>
            <div class="conteneur_404">
                <button id="bouton_retour" type="button" href="">Explorez le monde</button>
            </div>
            <article class="flexbox">
                <?php 
                    $categories = get_categories();
                    foreach ($categories as $elm_categories) {
                        $nom = $elm_categories->name;
                        $description = wp_trim_words($elm_categories->description, 10);
                        $nombre_destinations = $elm_categories->count;
                        $url_categorie = get_term_link($elm_categories); //FIX THIS
                    ?>
                    <div class="carte">
                        <h3><?php echo $nom; ?></h3>
                        <p><?php echo $description; ?></p>
                        <p>Nombre de destinations : <?php echo $nombre_destinations; ?></p>
                        <a class="lien__carte" href="<?php echo $url_categorie; ?>">Voyages correspondants</a>
                    </div>
                <?php } ?>
            </article>
        </section>
    </div>