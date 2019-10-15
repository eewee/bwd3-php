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

                echo "<h3>xxx</h3>";
                echo "Bonjour xxx";
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