<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domaine management</title>
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
    background-image: url(images/management.jpeg);
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
                  
                    <h1 class="display-3 fw-bolder">
                    Services de gestion et management
                    </h1>

                </div>
            </div>
            <div class="lc-block col-md-8 col-xs-12">
                <div editable="rich">
                    <!-- <p class="card-text">
                    Découvrez nos services de comptabilité pour optimiser la gestion financière de votre entreprise.

                    </p> -->
                    <p class="lead">
                    Découvrez nos services de gestion et de management conçus pour répondre aux besoins spécifiques de votre entreprise et stimuler sa croissance durable. Nous comprenons l'importance cruciale d'une gestion efficace dans le succès de toute organisation, c'est pourquoi nous proposons une gamme complète de solutions personnalisées pour relever vos défis les plus pressants.
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
            <h2 class="text-center mb-4">Nos services de gestion et management</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Montage de dossier d’agrément</h3>
                            <p class="card-text">Assistance dans le montage de dossiers pour l'obtention d'agréments et certifications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Accompagnement pour documents techniques</h3>
                            <p class="card-text">Aide dans l'obtention et la rédaction de documents techniques nécessaires à votre activité.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Elaboration de plan d’affaires</h3>
                            <p class="card-text">Création de plans d'affaires sur mesure pour votre entreprise.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Recrutement et placement de personnel</h3>
                            <p class="card-text">Services de recrutement et de placement de personnel qualifié.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Gestion externalisée des ressources humaines</h3>
                            <p class="card-text">Externalisation de la gestion administrative et RH pour optimiser vos ressources.</p>
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
