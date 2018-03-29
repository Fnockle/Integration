<?php
$title = 'Home';
$id="1";
require('php/header.php');

?>



<main class="home">

  <h1 class="offres">C'est noël, profitez-en !</h1>

<img class="offres" src="img/offre-noel.jpg" alt="offre noël">

<p class="offres" id="padding">Pour toute commande effectuée avant le 20 décembre</p>



<section class="offres">

<div class="slideshow-container">

<div class="mySlides">

  <img src="img/slider/1.jpg" style="width:100%">

</div>

<div class="mySlides">

  <img src="img/slider/2.jpg" style="width:100%">

</div>

</div>

<div style="text-align:center">

  <span class="dot" onclick="currentSlide(1)"></span>

  <span class="dot" onclick="currentSlide(2)"></span>

</div>

</section>

<section class="thes">

  <h2 class="border"><span>Choisissez votre thé</span></h2>

  <article>

    <img src="img/tea/1.jpg" alt="Thé noir">

    <h3>Thé noir</h3>

  </article>

  <article>

    <img src="img/tea/2.jpg" alt="Thé vert">

    <h3>Thé vert</h3>

  </article>

  <article>

    <img src="img/tea/3.jpg" alt="Thé Oolong">

    <h3>Thé Oolong</h3>

  </article>

  <article>

    <img src="img/tea/4.jpg" alt="Thé blanc">

    <h3>Thé blanc</h3>

  </article>

  <article>

    <img src="img/tea/5.jpg" alt="Rooibos">

    <h3>Rooibos</h3>

  </article>

</section>

<section class="cocaïnesniff">

  <article>

    <h2 class="border"><span>Notre nouveauté</span></h2>

    <img src="img/product/product1.jpg" alt="Thé du hammam">

    <h3>Thé du hammam</h3>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis commodo porttitor vulputate. Mauris et aliquet magna. Sed ullamcorper sed odio suscipit ultricies. Nam interdum diam eget sem posuere, sit amet blandit nulla iaculis. Vivamus pretium tempus venenatis. Suspendisse et mi lacus.</p>

    <p>À partir de</p>

    <h3>8.50€</h3>

    <p> <a href="#">VOIR CE PRODUIT</a></p>

  </article>

  <article>

    <h2 class="border"><span>Notre best-seller</span></h2>

    <img src="img/product/product2.jpg" alt="Infusion Herboriste">

    <h3>Infusion Herboriste</h3>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis commodo porttitor vulputate. Mauris et aliquet magna. Sed ullamcorper sed odio suscipit ultricies. Nam interdum diam eget sem posuere, sit amet blandit nulla iaculis. Vivamus pretium tempus venenatis. Suspendisse et mi lacus.</p>

    <p>À partir de</p>

    <h3>7.60€</h3>

    <p> <a href="#">VOIR CE PRODUIT</a></p>

  </article>

  <article>

    <h2 class="border"><span>Notre coup de coeur</span></h2>

    <img src="img/product/product3.jpg" alt="Blue of London">

    <h3>Blue of London</h3>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis commodo porttitor vulputate. Mauris et aliquet magna. Sed ullamcorper sed odio suscipit ultricies. Nam interdum diam eget sem posuere, sit amet blandit nulla iaculis. Vivamus pretium tempus venenatis. Suspendisse et mi lacus.</p>

    <p>À partir de</p>

    <h3>9.00€</h3>

    <p> <a href="#">VOIR CE PRODUIT</a></p>

  </article>

</section>

</main>



<script>

var slideIndex = 1;

showSlides(slideIndex);



function plusSlides(n) {

  showSlides(slideIndex += n);

}



function currentSlide(n) {

  showSlides(slideIndex = n);

}



function showSlides(n) {

  var i;

  var slides = document.getElementsByClassName("mySlides");

  var dots = document.getElementsByClassName("dot");

  if (n > slides.length) {slideIndex = 1}

  if (n < 1) {slideIndex = slides.length}

  for (i = 0; i < slides.length; i++) {

      slides[i].style.display = "none";

  }

  for (i = 0; i < dots.length; i++) {

      dots[i].className = dots[i].className.replace(" active", "");

  }

  slides[slideIndex-1].style.display = "block";

  dots[slideIndex-1].className += " active";

}

</script>





  </body>





<?php require('php/footer.php');?>
