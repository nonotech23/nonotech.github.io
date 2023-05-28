<!DOCTYPE html>
<html lang="fr">
<?php require_once "inc/head.php"; ?>
<title>Portfolio Noan Delaneau</title>

<?php require_once "inc/nav.php"; ?>

<body>
    <!-- Content -->
    <main>
        <a href="#" class="lightbox" id="img1">
            <span style="background-image: url('IMG/Projects/RT/schéma-1.png')"></span>
            <p>Schéma de câblage</p>
        </a>
        <a href="#" class="lightbox" id="img2">
            <span style="background-image: url('IMG/Projects/RT/schéma-2.png')"></span>
            <p>Configuration routeur</p>
        </a>
        <a href="#" class="lightbox" id="img3">
            <span style="background-image: url('IMG/Projects/RT/schéma-3.png')"></span>
            <p>Configuration switchs</p>
        </a>
        <a href="#" class="lightbox" id="img4">
            <span style="background-image: url('IMG/Projects/RT/schéma-4.png')"></span>
            <p>Différents types d'utilisateurs dystincts</p>
        </a>
        <a href="#" class="lightbox" id="img5">
            <span style="background-image: url('IMG/Projects/RT/schéma-5.png')"></span>
            <p>Schéma de services</p>
        </a>
        <section class="descr pages">
            <h2>Réalisation d'un réseau d'entreprise</h2>
            <div class="project-img-present">

                <!-- thumbnail image wrapped in a link -->
                <a href="#img1">
                    <img id="img-s" src="IMG/Projects/RT/schéma-1.png" alt="Schéma de câblage">
                </a>
                <a href="#img2">
                    <img id="img-s" src="IMG/Projects/RT/schéma-2.png" alt="Configuration routeur">
                </a>
                <a href="#img3">
                    <img id="img-s" src="IMG/Projects/RT/schéma-3.png" alt="Configuration switchs">
                </a>
                <a href="#img4">
                    <img id="img-s" src="IMG/Projects/RT/schéma-4.png" alt="Différents types d'utilisateurs dystincts">
                </a>
                <a href="#img5">
                    <img id="img-s" src="IMG/Projects/RT/schéma-5.png" alt="Schéma de services">
                </a>

            </div>
            <div class="box">
                <div class="gauche">
                    <p><span class="me-important">Temps:</span> 6 mois</p>
                    <p><span class="me-important">Année:</span> 2021 - 2022</p>
                    <p><span class="me-important">Type:</span> Réseaux</p>
                    <p><span class="me-important">Groupe:</span> Trio</p>
                </div>
                <div class="droite">
                    <h3>But</h3>
                    <p>
                    Mise en place d'un réseau informatique dans une entreprise fictive composée de plusieurs 
                    bâtiments/étages depuis la conception de ce réseau jusqu'à la réalisation 
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