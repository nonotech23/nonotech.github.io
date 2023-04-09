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
            <span style="background-image: url('IMG/Projects/Isometric.svg')"></span>
        </a>

        <section class="descr pages">
            <h2>Ville isométrique</h2>
            <div class="project-img-present">
                <!-- thumbnail image wrapped in a link -->
                <a href="#img1">
                    <img src="IMG/Projects/Isometric.svg" alt="Image projet ville isométrique" draggable="false">
                </a>
            </div>
            <div class="box">
                <div class="gauche">
                    <p><span class="me-important">Temps:</span> 4h</p>
                    <p><span class="me-important">Année:</span> 2022</p>
                    <p><span class="me-important">Type:</span> Production Graphique</p>
                    <p><span class="me-important">Groupe:</span> Solo</p>
                </div>
                <div class="droite">
                    <h3>But</h3>
                    <p>Créer un ou plusieurs bâtiments en perspective isométrique, et les agencer dans une
                        page. Vous déciderez de l’univers (fantasy, moderne, moyen-age, futuriste, urban, etc.),
                        du style, de la composition et de la palette de couleurs utilisée.
                    </p>
                    <h3>Description</h3>
                    <p>Dans cette première œuvre, j'ai créé un monde cubique où les maisons sont
                        entassées au centre. Les fenêtres de ces maisons émettent des points de lumière,
                        témoignant de la présence de vie dans ce monde. Les voitures y circulent,
                        certaines entrant et d'autres sortant, tandis que d'autres maisons sont éteintes,
                        suggérant leur vacuité actuelle. Ce monde fictif est relié par des routes aux points
                        jaunes du bas, qui comportent des anneaux jaunes servant de téléporteurs permettant
                        aux voitures d'entrer et de sortir de la ville. Il y a deux téléporteurs en bas de
                        l'œuvre.
                        <br><br>
                        Au centre de la ville, on peut voir beaucoup d'activité, représentée
                        par les petits carrés colorés, ainsi que des faisceaux lumineux qui indiquent les
                        points stratégiques tels que le cœur de la ville et les téléporteurs. Le style de
                        l'œuvre est principalement néon.
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