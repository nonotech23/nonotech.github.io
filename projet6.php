<!DOCTYPE html>
<html lang="fr">
<?php require_once "inc/head.php"; ?>
<title>Portfolio Noan Delaneau</title>

<?php require_once "inc/nav.php"; ?>

<body>
    <!-- Content -->
    <main>
        <!-- lightbox container hidden with CSS -->
        <a href="#" class="lightbox" id="img1">
            <span style="background-image: url('IMG/Projects/twitter_info.jpg')"></span>
        </a>

        <section class="descr pages">
            <h2>Call of Duty France</h2>
            <div class="project-img-present">
                <!-- thumbnail image wrapped in a link -->
                <a href="#img1">
                    <img src="IMG/Projects/twitter_info.jpg" alt="Présentation compte Twitter" draggable="false">
                </a>
            </div>
            <div class="box">
                <div class="gauche">
                    <p><span class="me-important">Temps:</span> Depuis 2019</p>
                    <p><span class="me-important">Type:</span> Communication</p>
                    <p><span class="me-important">Groupe:</span> Solo - autodidacte</p>
                </div>
                <div class="droite">
                    <h3>Description</h3>
                    <p>
                        Depuis 2019, je gère un compte Twitter qui se spécialise dans l'actualité de la franchise
                        de jeux vidéo Call of Duty. C'est un véritable plaisir pour moi de communiquer avec une
                        audience passionnée par cette série de jeux vidéo à succès. J'utilise ce compte pour
                        relayer les dernières informations, les mises à jour, les événements et les rumeurs
                        concernant les différents jeux de la franchise Call of Duty.
                        <br>
                        Je suis fier de dire que je suis devenu un expert dans la création de contenu lié à
                        Call of Duty. Je sais comment attirer l'attention de mon public avec des images
                        captivantes, des titres accrocheurs et des tweets bien rédigés qui suscitent
                        l'interaction et la participation des fans.
                        <br>
                        Au fil du temps, j'ai développé une communauté solide de followers qui comptent
                        sur mon compte Twitter pour rester informés des dernières nouvelles et des
                        événements de Call of Duty.
                        <br>
                        Je suis heureux de pouvoir partager ma passion pour Call of Duty avec mes
                        followers, et j'espère continuer à fournir un contenu de qualité pour les années à venir.
                    </p>
                    <h3>Lien</h3>
                    <a href="http://twitter.com/codfrance_" target="_blank">twitter.com/codfrance_</a>
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