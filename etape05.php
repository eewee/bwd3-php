<?php require_once "header.php"; ?>

    <!-- CONTENU -->
    <div class="container">
        <div class="row mt-1">
            <div class="col-8">

                <div class="alert alert-primary mt-2" role="alert">
                    <h2>$_GET :</h2>
                </div>
                <?php
                // URL : http://localhost:8123/etape05.php?recherche=lorem+ipsum
                echo "La variable 'recherche' contient : " . $_GET['recherche']."<br>";
                ?>




                <div class="alert alert-primary mt-2" role="alert">
                    <h2>$_POST :</h2>
                </div>
                <?php
                // TRAITEMENT DES DONNEES DU FORMULAIRE :
                echo "<pre>".var_export($_POST, true)."</pre>";
                ?>
                <form action="" method="post">
                    Votre nom : <br>
                    <input type="text" name="nom" /><br>

                    Votre âge :<br>
                    <input type="text" name="age" /><br>

                    <input type="submit" value="Valider">
                </form>




                <div class="alert alert-primary mt-2" role="alert">
                    <h2>$_SESSION :</h2>
                </div>
                <?php
                // Declaration (init) :
                $_SESSION["firstname"] = "John";
                $_SESSION["lastname"] = "DOE";

                // Pour afficher la valeur, faite juste (sur cette page ou une autre) :
                // echo $_SESSION["firstname"];
                // NB : Il faut obligatoirement appeler session_start(); en début de chacun des fichiers de votre site.
                ?>

            </div>
            <div class="col-4">
                <?php require_once "sidebar.php"; ?>
            </div>
        </div>
    </div>

<?php require_once "footer.php"; ?>