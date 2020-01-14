<?php require_once "header.php"; ?>

    <!-- CONTENU -->
    <div class="container">
        <div class="row mt-1">
            <div class="col-8">

                <div class="alert alert-primary" role="alert">
                    <h2>Function :</h2>
                </div>

                <?php
                //---------------------------------------------------------------------------
                // FUNCTIONS :
                //---------------------------------------------------------------------------

                function bonjour($prenom, $nom) {
                    echo "Bonjour ".$prenom." ".$nom;
                }

                // Déclaration de la fonction :
                function getStudentById($eleves, $id=2) {
                    return $eleves[$id];
                }

                //---------------------------------------------------------------------------
                // INIT DONNEES :
                //---------------------------------------------------------------------------

                // Votre tableau :
                $eleves = array(
                    array('nom'=>'DURANT', 'prenom'=>'Julien', 'email'=>'julien@mailinator.com', 'age'=>22),
                    array('nom'=>'LADY',   'prenom'=>'Sophie', 'email'=>'sophie@mailinator.com', 'age'=>25),
                    array('nom'=>'DULON',  'prenom'=>'Pierre', 'email'=>'pierre@mailinator.com', 'age'=>20)
                );

                //---------------------------------------------------------------------------
                // UTILISER LES FONCTIONS :
                //---------------------------------------------------------------------------

                bonjour( "John", "DOE" );
                echo "<hr>";

                // Call fonction :
                $monEleve = getStudentById($eleves);

                // Affichage (debug only) :
                echo '<pre>'.var_export($monEleve, true).'</pre>';

                // Affichage de l'email :
                echo "<p>Mon email est : ".$monEleve['email']."</p>";
                echo "<hr>";
                ?>

            </div>
            <div class="col-4">
                <?php require_once "sidebar.php"; ?>
            </div>
        </div>
    </div>

<?php require_once "footer.php"; ?>