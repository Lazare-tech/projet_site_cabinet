<?php
include "config.php";?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar scroll</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li><a href="#" class="nav-link">Expertise</a>
                    <ul class="sub-menu">
                    <li><a href="hero_fiscalite.php">Domaine fiscalite</a></li>
                    <li><a href="hero_comptabilite.php">Domaine comptabilite</a></li>
                    <li><a href="hero_juridique.php">Domaine juridique</a></li>

                    <li><a href="hero_management.php">Domaine management</a></li>

                    </ul>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="contac.php">Contacts</a>
                </li>
                   
                   
            </ul>
           



        </div>
    </div>
</nav>

