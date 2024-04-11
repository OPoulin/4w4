<div id="accueil" class="global">
    <section class="accueil__section">
        <div class="assembler_404">
            <img class="image_404" src="https://gftnth00.mywhc.ca/tim45/wp-content/uploads/2024/04/Default_circular_logo_for_a_vacation_website_2.png" alt="image 404">
            <h2 class="texte_section">Erreur 404</h2>
            <h4 class="texte_404">Vous essayez d'accéder à une page qui n'existe pas</h4>
            <h4 class="texte_404">Pour revenir à la page d'accueil, cliquez sur le lien suivant</h4>
            <div class="conteneur_404">
                <button id="bouton_retour" type="button">Explorez le monde</button>
                <?php 
                echo get_search_form();
                ?>
                <div class="les_categories">

                </div>
            </div>
        </div>
    </section>
</div>

<script>
    /*Code recupere du fichier js*/
    let btn = document.getElementById('bouton_retour');


    btn.addEventListener('click', revenirFrontPage) 



    function revenirFrontPage() {
    console.log("HAHAHAHAHAAHAHAHAHAHAH")
    document.location.href = 'https://gftnth00.mywhc.ca/tim45/';
    };
</script>
