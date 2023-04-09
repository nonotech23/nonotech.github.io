<!DOCTYPE html>
<html lang="fr">
<?php require_once "inc/head.php"; ?>
<title>Portfolio Noan Delaneau</title>

<?php require_once "inc/nav.php"; ?>

<body>
    <!-- Content -->
    <main>

        <section class="pages">
            <div class="intro" id="intro">
                <div class="text-int">
                    <div class="content-home">
                        <div class="title">
                            <h1 class="title-filled noise">Hi ! I'm Noan</h1>
                            <!-- <h1 class="title-filled noise pseudo"><span class="name"></span></h1> -->
                            <h1 class="title-outline">Hi ! I'm Noan</h1>
                            <!-- <h1 class="title-outline pseudo"><span class="name"></span></h1> -->
                            <div id="job">
                                <p><span class="typing"></span></p>
                            </div>
                            <h3><a href="me.php">En savoir plus sur moi</a></h3>
                        </div>
                    </div>

                    <a href="#projects" class="fleche-lien bounce2">
                        <img class="icon" src="IMG/arrow_downward.svg" alt="Fleche vers le bas">
                    </a>
                </div>
            </div>
            <div id="projects">
                <h2 id="projet">MES DERNIERS PROJETS</h2>
                <div class="gallery-index">
                    <a class="link" href="projet1.php">
                        <div class="item" style="background-image: url('IMG/Projects/15.png')">
                            <div class="item_infos">
                                <div class="item_left">
                                    <p class="item_nom">Projet Pokedex</p>
                                    <p class="item_spe">Intégration : HTML, CSS, PHP</p>
                                </div>
                                <div class="item_right">
                                    <p class="item_annee">2022</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a class="link" href="projet2.php">
                        <div class="item" style="background-image: url('IMG/Projects/16.svg')">
                            <div class="item_infos">
                                <div class="item_left">
                                    <p class="item_nom">Faites du numérique</p>
                                    <p class="item_spe">Communication</p>
                                </div>
                                <div class="item_right">
                                    <p class="item_annee">2022</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a class="link" href="projet3.php">
                        <div class="item" style="background-image: url('IMG/Projects/photo.svg')">
                            <div class="item_infos">
                                <div class="item_left">
                                    <p class="item_nom">Photographies</p>
                                    <p class="item_spe">Audiovisuel</p>
                                </div>
                                <div class="item_right">
                                    <p class="item_annee">2022</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a class="link" href="projet4.php">
                        <div class="item" style="background-image: url('IMG/Projects/14.svg')">
                            <div class="item_infos">
                                <div class="item_left">
                                    <p class="item_nom">GREAT EXCHANGE CAMPUS</p>
                                    <p class="item_spe">Gestion de Projet </p>
                                </div>
                                <div class="item_right">
                                    <p class="item_annee">2022</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a class="link" href="projet5.php">
                        <div class="item" style="background-image: url('IMG/Projects/Isometric.svg')">
                            <div class="item_infos">
                                <div class="item_left">
                                    <p class="item_nom">Isométrie</p>
                                    <p class="item_spe">Production graphique</p>
                                </div>
                                <div class="item_right">
                                    <p class="item_annee">2022</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a class="link" href="projet6.php">
                        <div class="item" style="background-image: url('IMG/Projects/twitter.png')">
                            <div class="item_infos">
                                <div class="item_left">
                                    <p class="item_nom">Communication jeux Vidéo</p>
                                    <p class="item_spe">Communication</p>
                                </div>
                                <div class="item_right">
                                    <p class="item_annee">En cours</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="see-more">
                <a class="btn more" href="./projets.php">
                    <h3>Voir Plus</h3>
                </a>
            </div>
        </section>
        <?php require_once "inc/footer.php"; ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script>
        var typed = new Typed(".typing", {
            strings: ["Etudiant en BUT MMI", "Développeur web junior"],
            typeSpeed: 100,
            backSpeed: 50,
            loop: true
        })

        // var typed = new Typed(".name", {
        //     strings: ["Noan", "NonoTech"],
        //     typeSpeed: 100,
        //     backSpeed: 50,
        //     loop: true
        // })
    </script>
</body>

</html>