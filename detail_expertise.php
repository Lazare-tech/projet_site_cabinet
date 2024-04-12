<?php
include("config.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link  -->
         <!-- link  -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet"  href="expertise.css">
    <title>Details expertise</title>
    <style>
    /* Styles généraux */
/* Styles généraux */
body {
  font-family: Arial, sans-serif;
}

/* Hero section */
/* .hero-section {
  background-image: url('background.jpg');
  background-size: cover;
} */

/* Services section */
.services-section {
  background-color: #f9f9f9;
}

.services-section .card {
  border: none;
}

/* Footer section */
.footer-section {
  background-color: #e9e9e9;
}
.hero_acc{
    background-image: url(images/fis3.jpeg);
    background-size: cover;
    height: 100vh;
}

    </style>
</head>
<body>
<?php include("navbar.php")?>
<!-- hero      -->
<!-- Hero -->
<div lc-helper="background" class="container-fluid py-5 mb-4 d-flex justify-content-center hero_acc">
        <div class="p-5 mb-4 lc-block col-xxl-7 col-lg-8 col-12" style=" backdrop-filter: blur(6px) saturate(102%);
                -webkit-backdrop-filter: blur(6px) saturate(102%);
                background-color: rgba(255, 255, 255, 0.45);
                border-radius: 12px;
                border: 1px solid rgba(209, 213, 219, 0.3);">
            <div class="lc-block">
                <div editable="rich">
                  
                    <h1 class="display-3 fw-bolder">Maîtrisez la fiscalité pour optimiser vos finances</h1>

                </div>
            </div>
            <div class="lc-block col-md-8 col-xs-12">
                <div editable="rich">
                    <p class="card-text">
                    Explorez nos services de fiscalité et découvrez comment nous pouvons vous aider à gérer vos affaires financières avec efficacité.

                    </p>
                </div>
            </div>
            <div class="lc-block">
                <a href="#services" class="btn btn-dark btn-lg">Découvrir nos services</a>

            </div>
        </div>
    </div>



<section id="services" class="services-section py-5">
  <div class="container">
    <h2 class="text-center mb-4">Nos services de fiscalité</h2>
    <div class="row gx-5">
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h3 class="card-title">Consultation fiscale</h3>
            <p class="card-text">Obtenez des conseils d'experts pour optimiser votre situation fiscale.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h3 class="card-title">Gestion du contentieux fiscal</h3>
            <p class="card-text">Assistance juridique et gestion des litiges fiscaux.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h3 class="card-title">Gestion fiscale des entreprises</h3>
            <p class="card-text">Services de gestion fiscale adaptés aux besoins des entreprises.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h3 class="card-title">Conseils et analyse fiscale</h3>
            <p class="card-text">Analyse approfondie de votre situation fiscale et conseils personnalisés.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>