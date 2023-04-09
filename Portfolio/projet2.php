<!DOCTYPE html>
<html lang="fr">
<?php require_once "inc/head.php"; ?>
<title>Portfolio Noan Delaneau</title>

<?php require_once "inc/nav.php"; ?>

<body>
    <!-- Content -->
    <main>
        <a href="#" class="lightbox" id="img1">
            <span style="background-image: url('IMG/Projects/12.png')"></span>
            <p>Affiche d'évènement</p>
        </a>
        <a href="#" class="lightbox" id="img2">
            <span style="background-image: url('IMG/Projects/13.png')"></span>
            <p>Flyer d'évènement</p>
        </a>

        <section class="descr pages">
            <h2>FAITES DU NUMÉRIQUE</h2>
            <div class="project-img-present">

                <!-- thumbnail image wrapped in a link -->
                <a href="#img1">
                    <img id="img-s" src="IMG/Projects/12.png" alt="Affiche évènement">
                </a>
                <a href="#img2">
                    <img id="img-s" src="IMG/Projects/13.png" alt="Flyer évènement">
                </a>

            </div>
            <div class="box">
                <div class="gauche">
                    <p><span class="me-important">Temps:</span> 2 mois</p>
                    <p><span class="me-important">Année:</span> 2022 - 2023</p>
                    <p><span class="me-important">Type:</span> Communication</p>
                    <p><span class="me-important">Groupe:</span> Duo</p>
                </div>
                <div class="droite">
                    <h3>But</h3>
                    <p>Créer la communication de l'évènement "Faites du Numérique" afin de le promouvoir dans la ville de Plougrescant ainsi qu'aux alentours.
                    </p>
                    <h3>Description</h3>
                    <p>Réalisation d'une identité visuelle avec une affiche et un flyer.
                        <br>
                    <h3>Technologies utilisées :</h3>
                    Adobe Illustrator (pour le logo et le flyer)
                    <br>
                    Adobe Photoshop (pour l'affiche)
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