<?php require_once "header.php"; ?>

    <!-- CONTENU -->
    <div class="container">
        <div class="row mt-1">
            <div class="col-8">

                <div class="alert alert-primary" role="alert">
                    <h2>Variable :</h2>
                </div>

                <?php
                // Ceci est un commentaire en ligne
                // mon commentaire

                /**
                 * Ceci est un commentaire pouvant être sur plusieurs lignes.
                 * aaa
                 * bbb
                 * ccc
                 *
                 * ddd
                 * xxx
                 * ddd
                 *
                 */

                // Variable
                $prenom = "John";
                $nom = "DOE";
                echo "Bonjour ".$prenom." ".$nom."<hr>";

                // Paragraphe
                $monTexte = "
                <p>
                    Lorem ipsum<br>
                    Test aaa<br>
                    Test bbb
                </p>";
                echo $monTexte;
                ?>



                <div class="alert alert-primary" role="alert">
                    <h2>Tableau :</h2>
                </div>

                <?php
                // Tableau
                $couleurs = array(
                    "rouge",        // 0
                    "vert",         // 1
                    "gris"          // 2
                );
                echo $couleurs[1];
                ?>

            </div>
            <div class="col-4">
                <?php require_once "sidebar.php"; ?>
            </div>
        </div>
    </div>

<?php require_once "footer.php"; ?>