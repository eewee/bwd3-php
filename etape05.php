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
                if (isset($_GET['recherche']) && !empty($_GET['recherche'])) {
                    echo "La variable 'recherche' contient : " . $_GET['recherche']."<br>";
                } else {
                    echo "rien";
                }
                ?>




                <div class="alert alert-primary mt-2" role="alert">
                    <h2>$_POST :</h2>
                </div>

                <?php
                // init
                $email    = "";
                $password = "";

                // isset()  : SI J'AI DES DONNEES DANS $_POST
                // !empty() : ET QUI NE SONT PAS VIDE
                if(isset($_POST) && !empty($_POST)) {
                    // AFFICHER LES DONNEES DU TABLEAU $_POST :
                    $email    = $_POST['email'];
                    $password = $_POST['password'];
                }
                ?>

                <!-- MON FORMULAIRE : -->
                <form action="" method="post">
                    Email : <br>
                    <input type="text" name="email" value="<?php echo $email; ?>" /><br>

                    Mot de passe :<br>
                    <input type="text" name="password" value="<?php echo $password; ?>" /><br>

                    <input type="submit" value="Valider">
                </form>




                <div class="alert alert-primary mt-2" role="alert">
                    <h2>$_SESSION :</h2>
                </div>
                <?php
                // Declaration (init) :
                $_SESSION["firstname"] = "John";
                $_SESSION["lastname"]  = "DOE";

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