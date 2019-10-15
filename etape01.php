<?php
// Afficher les erreurs :
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Inclure le fichier header.php :
require_once "header.php";
?>

    <!-- CONTENU -->
    <div class="container">
        <div class="row mt-1">
            <div class="col-8">

                <div class="alert alert-primary" role="alert">
                    <h2>Variable :</h2>
                </div>

                <?php
                // Ceci est un commentaire en ligne

                /**
                 * Ceci est un commentaire pouvant être sur plusieurs lignes.
                 * aaa
                 * bbb
                 * ccc
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
                    "rouge",
                    "vert",
                    "gris"
                );
                echo $couleurs[1];
                ?>

            </div>
            <div class="col-4">

                <img src="./images/visuel-php.jpg" class="img-fluid" alt="Visuel PHP">

                <h1>PHP initiation</h1>
                <ul>
                    <li>Variable</li>
                    <li>Tableau</li>
                    <li>Condition</li>
                    <li>Boucle</li>
                </ul>

            </div>
        </div>
    </div>

<?php
// Inclure le fichier footer.php :
require_once "footer.php";
?>