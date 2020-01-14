<?php require_once "header.php"; ?>

    <!-- CONTENU -->
    <div class="container">
        <div class="row mt-1">
            <div class="col-8">

                <div class="alert alert-primary" role="alert">
                    <h2>Boucles :</h2>
                </div>

                <?php
/*
                echo "<h3>Boucle for :</h3>";

                $couleurs = ["rouge", "vert", "bleu", "orange", "rose"];
                for ($i=0; $i<sizeof($couleurs); $i++) {
                    echo $couleurs[$i]."<br>";
                }

                foreach ($couleurs as $couleur) {
                    echo "Ma couleur est : ".$couleur."<br>";
                }




                echo "<h3>Boucle foreach :</h3>";

                $infoEleve = array(
                    "nom"           => "DOE",
                    "prenom"        => "John",
                    "email"         => "johnDoe@mailinator.com",
                    "age"           => 20,
                    "adresse"       => "5 rue albert einstein",
                    "ville"         => "LA ROCHELLE",
                    "codePostal"    => 17000
                );

                foreach ($infoEleve as $key => $value) {
                    echo $key." - ".$value."<br>";
                }
*/


/*
                $notes = array(15, 18, 14, 20);
                for (
                    $i = 0;                 // debut (on commence ici)
                    $i < sizeof($notes);    // fin (on s'arrete ici)
                    $i++                    // incrementer (+1 à chaque tour de boucle)
                ) {
                    echo $notes[$i] . "<br>";
                }
*/


//                $eleves = [
//                    "prenom" => [],
//                    "nom" => [],
//                    "classe" => []
//                ];

                $eleves = [
                    [
                        "prenom" => "John",
                        "nom"    => "DOE",
                        "classe" => "BWD2"
                    ],
                    [
                        "prenom" => "Eric",
                        "nom"    => "DURANT",
                        "classe" => "BWD3"
                    ]
                    // ...
                ];

                foreach ($eleves as $eleve) {
                    foreach ($eleve as $value) {
                        echo $value . " - ";
                    }
                    echo "<br>";
                }
                ?>

            </div>
            <div class="col-4">
                <?php require_once "sidebar.php"; ?>
            </div>
        </div>
    </div>

<?php require_once "footer.php"; ?>