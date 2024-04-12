<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domaine juridique</title>
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
    background-image: url(images/juri2.jpeg);
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
                    Services juridiques de qualité
                    </h1>

                </div>
            </div>
            <div class="lc-block col-md-8 col-xs-12">
                <div editable="rich">
                    <!-- <p class="card-text">
                    Découvrez nos services de comptabilité pour optimiser la gestion financière de votre entreprise.

                    </p> -->
                    <p class="lead">
                    Explorez nos services juridiques spécialisés, conçus pour soutenir et protéger votre entreprise dans un environnement juridique complexe. De la rédaction des actes à la résolution des litiges, notre équipe d'experts vous accompagne avec professionnalisme et dévouement.                    
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
            <h2 class="text-center mb-4">Nos services juridiques</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Rédaction des actes juridiques</h3>
                            <p class="card-text">Réalisation de toutes les démarches de création, de modification et de dissolution des sociétés.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Convocations aux assemblées</h3>
                            <p class="card-text">Rédaction et envoi des convocations aux assemblées générales des sociétés.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Rapports de gérance</h3>
                            <p class="card-text">Rédaction et publication des rapports de gérance et des procès-verbaux d'assemblées.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Conseils juridiques</h3>
                            <p class="card-text">Consultation et conseils juridiques pour toutes vos questions légales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Assistance en droit du travail</h3>
                            <p class="card-text">Formation, conseils et assistance en matière de législation du travail et sociale.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Elaboration de manuels de procédure</h3>
                            <p class="card-text">Création de manuels de procédure pour garantir la conformité et l'efficacité de vos opérations.</p>
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
