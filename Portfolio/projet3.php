<!DOCTYPE html>
<html lang="fr">
<?php require_once "inc/head.php"; ?>
<title>Portfolio Noan Delaneau</title>

<?php require_once "inc/nav.php"; ?>

<body>
    <!-- Content -->
    <main>
        <a href="#" class="lightbox" id="img1">
            <span style="background-image: url('IMG/Projects/Photographies/DSC_0118.jpg')"></span>
            <p>Le coach présente un exercice</p>
        </a>
        <a href="#" class="lightbox" id="img2">
            <span style="background-image: url('IMG/Projects/Photographies/DSC_0129.jpg')"></span>
            <p>Entraînements des joueurs de handball</p>
        </a>
        <a href="#" class="lightbox" id="img3">
            <span style="background-image: url('IMG/Projects/Photographies/DSC_0158.jpg')"></span>
            <p>Le coach présente un exercice</p>
        </a>
        <a href="#" class="lightbox" id="img4">
            <span style="background-image: url('IMG/Projects/Photographies/IMG_9131.jpg')"></span>
            <p>Le coach présente un exercice</p>
        </a>
        <a href="#" class="lightbox" id="img5">
            <span style="background-image: url('IMG/Projects/Photographies/IMG_9240.jpg')"></span>
            <p>Séance de tirs au but</p>
        </a>
        <section class="descr pages">
            <h2>Photographies</h2>
            <div class="project-img-present">

                <!-- thumbnail image wrapped in a link -->
                <a href="#img1">
                    <img id="img-s" src="IMG/Projects/Photographies/DSC_0118.jpg" alt="Photo exercice handball">
                </a>
                <a href="#img2">
                    <img id="img-s" src="IMG/Projects/Photographies/DSC_0129.jpg" alt="Photo entraînements handball">
                </a>
                <a href="#img3">
                    <img id="img-s" src="IMG/Projects/Photographies/DSC_0158.jpg" alt="Photo exercice handball">
                </a>
                <a href="#img4">
                    <img id="img-s" src="IMG/Projects/Photographies/IMG_9131.jpg" alt="Photo exercice handball">
                </a>
                <a href="#img5">
                    <img id="img-s" src="IMG/Projects/Photographies/IMG_9240.jpg" alt="Photo séance de tirs au but">
                </a>

            </div>
            <div class="box">
                <div class="gauche">
                    <p><span class="me-important">Temps:</span> 2 mois</p>
                    <p><span class="me-important">Année:</span> 2022</p>
                    <p><span class="me-important">Type:</span> Audiovisuel</p>
                    <p><span class="me-important">Groupe:</span> Equipe de 3</p>
                </div>
                <div class="droite">
                    <h3>Description</h3>
                    <p>
                        Dans ce projet, le but était de réaliser une série de photographies et de sons autour d’un thème défini en amont. Avec mon trio, nous avons choisi de partir sur le thème du sport, nous n’avions pas beaucoup de contraintes hormis qu’il fallait que les sons et photos soient en cohésion.
                        <br><br>
                        Parmi la centaine de photos réalisées, nous avons sélectionné 5 plans qui devaient respecter les contraintes suivantes :
                        <br>
                        • Minimum une mise en scène
                        <br>
                        • Minimum un plan large
                        <br>
                        • Minimum un plan serré
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