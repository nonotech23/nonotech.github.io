<!DOCTYPE html>
<html lang="fr">
<?php require_once "inc/head.php"; ?>
<title>Portfolio Noan Delaneau</title>

<?php require_once "inc/nav.php"; ?>

<body>
    <!-- Content -->
    <main>
        <a href="#" class="lightbox" id="img1">
            <span style="background-image: url('IMG/Projects/pokedex.png')"></span>
        </a>
        <section class="descr pages">
            <h2>Pokedex</h2>
            <div class="project-img-present">
                <!-- thumbnail image wrapped in a link -->
                <a href="#img1">
                    <img src="IMG/Projects/pokedex.png" alt="Image projet pokedex">
                </a>
            </div>
            <div class="box">
                <div class="gauche">
                    <p><span class="me-important">Temps:</span> 3 mois</p>
                    <p><span class="me-important">Année:</span> 2022</p>
                    <p><span class="me-important">Type:</span> Web</p>
                    <p><span class="me-important">Groupe:</span> Solo</p>
                </div>
                <div class="droite">
                    <h3>But</h3>
                    <p>Ce projet a pour but de développer une application Web simulant la capture de Pokemon.
                        <br>
                        Permettant la gestion d'une collection de Pokemon par un dresseur unique.
                        <br>
                        Le développement a été fait en PHP, HTML et CSS (ainsi qu'une petite partie en JavaScript).
                        <br><br>
                        Il s'agit d'obtenir une application web affichant le contenu d'une collection de Pokemon
                        pour un seul utilisateur.
                        <br>

                    </p>
                    <h3>Description</h3>
                    <p>
                        On peut ajouter des Pokemon à la collection, retirer des Pokemon à la collection et augmenter 
                        ou réduire la quantité d'un Pokemon existant dans la collection. 
                        <br>
                        On peut également afficher le détail des caractéristiques d'un Pokemon particulier de la collection.
                        <br>
                        L'entrée dans l'application se fait via un écran d'accueil qui affiche un message de 
                        bienvenue.
                        <br>
                        L'application a un design original et adapté, et son ergonomie a été pensée.
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