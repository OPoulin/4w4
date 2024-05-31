<div class="slideshow-container">
    

  <div class="images__slideshow fondu">
    <div class="numero__texte">1 / 5</div>
    <img class="img__taille" src="https://gftnth00.mywhc.ca/tim45/wp-content/uploads/2024/05/argentina.jpg" style="width:100%">
    <div class="texte">Visitez les vues époustouflantes de l'Argentine</div>
  </div>

  <div class="images__slideshow fondu">
    <div class="numero__texte">2 / 5</div>
    <img class="img__taille" src="https://gftnth00.mywhc.ca/tim45/wp-content/uploads/2024/05/fracne.jpg" style="width:100%">
    <div class="texte">Découvrez les châteaux mythiques de France</div>
  </div>

  <div class="images__slideshow fondu">
    <div class="numero__texte">3 / 5</div>
    <img class="img__taille" src="https://gftnth00.mywhc.ca/tim45/wp-content/uploads/2024/05/italy.jpg" style="width:100%">
    <div class="texte">Profitez de vacances bien méritées en Italie</div>
  </div>

  <div class="images__slideshow fondu">
    <div class="numero__texte">4 / 5</div>
    <img class="img__taille" src="https://gftnth00.mywhc.ca/tim45/wp-content/uploads/2024/05/japan.jpg" style="width:100%">
    <div class="texte">Prenez pars aux sciècles d'histoire du Japon</div>
  </div>

  <div class="images__slideshow fondu">
    <div class="numero__texte">5 / 5</div>
    <img class="img__taille" src="https://gftnth00.mywhc.ca/tim45/wp-content/uploads/2024/05/united-states-scaled.jpg" style="width:100%">
    <div class="texte">Décelez le riche parcours des États-Unis au sein même du pays</div>
  </div>

  <a class="precedent" onclick="rajouterImage(-1)">&#10094;</a>
  <a class="suivant" onclick="rajouterImage(1)">&#10095;</a>
</div>
<br>


<div style="text-align:center;">
  <span class="point" onclick="imageActuelle(1)"></span>
  <span class="point" onclick="imageActuelle(2)"></span>
  <span class="point" onclick="imageActuelle(3)"></span>
  <span class="point" onclick="imageActuelle(4)"></span>
  <span class="point" onclick="imageActuelle(5)"></span>
</div>

<script>
   /*Code recupere du fichier js*/
   let indexImage = 1;
montrerImage(indexImage);

// Next/previous controls
function rajouterImage(n) {
  montrerImage(indexImage += n);
}

// Thumbnail image controls
function imageActuelle(n) {
  montrerImage(indexImage = n);
}

function montrerImage(n) {
  let i;
  let images = document.getElementsByClassName("images__slideshow");
  let points = document.getElementsByClassName("point");
  if (n > images.length) {indexImage = 1}
  if (n < 1) {indexImage = images.length}
  for (i = 0; i < images.length; i++) {
    images[i].style.display = "none";
  }
  for (i = 0; i < points.length; i++) {
    points[i].className = points[i].className.replace(" active", "");
  }
  images[indexImage-1].style.display = "block";
  points[indexImage-1].className += " active";
}
</script>