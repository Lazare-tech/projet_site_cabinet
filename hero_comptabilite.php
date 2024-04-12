<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domaine de comptabilité</title>
    <!-- Liens vers Bootstrap CSS et Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- Styles CSS personnalisés -->
    <link rel="stylesheet"  href="expertise.css">

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
    background-image: url(images/compta1.jpg);
    background-size: cover;
    height: 100vh;
}

    </style>
</head>
<body>
    <?php include("navbar.php") ?>

    <!-- Hero section -->
    <!-- Hero -->
<div lc-helper="background" class="container-fluid py-5 mb-4 d-flex justify-content-center hero_acc">
        <div class="p-5 mb-4 lc-block col-xxl-7 col-lg-8 col-12" style=" backdrop-filter: blur(6px) saturate(102%);
                -webkit-backdrop-filter: blur(6px) saturate(102%);
                background-color: rgba(255, 255, 255, 0.45);
                border-radius: 12px;
                border: 1px solid rgba(209, 213, 219, 0.3);">
            <div class="lc-block">
                <div editable="rich">
                  
                    <h1 class="display-3 fw-bolder">Maîtrisez la comptabilité pour votre entreprise</h1>

                </div>
            </div>
            <div class="lc-block col-md-8 col-xs-12">
                <div editable="rich">
                    <p class="card-text">
                    Découvrez nos services de comptabilité conçus pour optimiser la gestion financière de votre entreprise. Notre équipe d'experts vous propose des solutions personnalisées pour répondre à vos besoins spécifiques.
                    </p>
                </div>
            </div>
            <div class="lc-block">
                <a href="#services" class="btn btn-dark btn-lg">Découvrir nos services</a>

            </div>
        </div>
    </div>

  
    </section> 

    <!-- Services section -->
    <section id="services" class="services-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Nos services de comptabilité</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Audit comptable</h3>
                            <p class="card-text">Révision et analyse des états financiers de votre entreprise.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Assistance comptable</h3>
                            <p class="card-text">Aide à la tenue de la comptabilité et à la préparation des déclarations fiscales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Formation logiciel comptable</h3>
                            <p class="card-text">Formation sur l'utilisation des logiciels de comptabilité.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Vente de logiciel comptable</h3>
                            <p class="card-text">Conseil et vente de logiciels de comptabilité adaptés à vos besoins.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Elaboration des états financiers</h3>
                            <p class="card-text">Préparation des bilans et des états financiers conformes aux normes comptables.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
