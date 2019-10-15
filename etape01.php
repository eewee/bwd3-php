<?php
require_once "header.php";
?>

    <!-- CONTENU -->
    <div class="container">
        <div class="row mt-1">
            <div class="col-8">

                <div class="alert alert-primary" role="alert">
                    <h2>Variables :</h2>
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
                </p>
                <hr>
                ";
                echo $monTexte;

                // Tableau
                $tableauA = array(
                    "Michael",      // 0
                    "Sophie",       // 1
                    "Pierre"        // 2
                );
                echo $tableauA[1]."<hr>";
                ?>

            </div>
            <div class="col-4">

                <img src="./images/visuel-php.jpg" class="img-fluid" alt="Visuel PHP">

                <h1>PHP initiation</h1>
                <ul>
                    <li>Les variables.</li>
                    <li>...</li>
                </ul>

            </div>
        </div>
    </div>

<?php
require_once "footer.php";
?>