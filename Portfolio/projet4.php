<!DOCTYPE html>
<html lang="fr">
<?php require_once "inc/head.php"; ?>
<title>Portfolio Noan Delaneau</title>

<?php require_once "inc/nav.php"; ?>

<body>
    <!-- Content -->
    <main>
        <a href="#" class="lightbox" id="img1">
            <span style="background-image: url('IMG/Projects/Affiche_Finale.png')"></span>
            <p>Affiche d'évènement</p>
        </a>

        <a href="#" class="lightbox" id="img2">
            <span style="background-image: url('IMG/Projects/logo_GEC.svg')"></span>
            <p>Logo association</p>
        </a>
        <section class="descr pages">
            <h2>GRET EXCHANGE CAMPUS</h2>
            <div class="project-img-present">

                <!-- thumbnail image wrapped in a link -->
                <a href="#img1">
                    <img id="img-s" src="IMG/Projects/Affiche_Finale.png" alt="Affiche évènement">
                </a>
                <a href="#img2">
                    <img id="img-s" src="IMG/Projects/logo_GEC.svg" alt="Logo association">
                </a>

            </div>
            <div class="box">
                <div class="gauche">
                    <p><span class="me-important">Temps:</span> 1 mois</p>
                    <p><span class="me-important">Année:</span> 2022 - 2023</p>
                    <p><span class="me-important">Type:</span> Gestion de Projet</p>
                    <p><span class="me-important">Groupe:</span> Equipe de 4</p>
                </div>
                <div class="droite">
                    <h3>But</h3>
                    <p>Création d’une salle de collecte d’objets au sein de l’IUT</p>
                    <h3>Description</h3>
                    <p>Nous sommes tous étudiants parfois dans des situations difficiles, avec un contexte économique dur et l’inflation qui rentre en jeu. A travers ce projet, nous avons pensé donner de l’aide aux étudiants les plus dans le besoin.
                    <br>
                    Avec cette association nous avons voulu transmettre nos valeurs (partage, justice et égalité) en créant un espace de collecte, de dons et d’achats d’objets au sein de l’IUT, ce lieu est essentiellement réservé aux étudiants.
                    <br>
                    Si le projet de création cet espace évolue, nous continuerons en créant des réseaux sociaux pour l’association afin qu’elle donne une image attractive et pour accroitre son rayonnement au niveau des étudiants.
                    </p>
                </div>
            </div>
            <a href="projets.php" class="project-link">
                <img src="IMG/back.svg" alt="logo back">
                <p>Retour aux projets</p>
            </a>
        </section>
        <?php require_once "inc/footer.php"; ?>
    </main>
</body>

</html>