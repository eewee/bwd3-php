<?php require_once "header.php"; ?>

    <!-- CONTENU -->
    <div class="container">
        <div class="row mt-1">
            <div class="col-8">

                <div class="alert alert-primary" role="alert">
                    <h2>Conditions :</h2>
                </div>




                <?php
                $feuTricolor = "vert";
                $wording = [
                    "vert"   => "Vous devez passer",
                    "orange" => "Vous devez essayer de vous arrêter (si pas le temps, continuer)",
                    "rouge"  => "Vous devez vous arrêter",
                    "autre"  => "Vous devez suivre les panneaux"
                ];
                //echo "<pre>".var_export($wording, true)."</pre>";




                echo "<h2>If / elseif / else (=Faire une action Si / Sinon):</h2>";
                if ($feuTricolor == "vert") {
                    $quoiFaire = $wording[$feuTricolor];

                } elseif ($feuTricolor == "orange") {
                    $quoiFaire = $wording[$feuTricolor];

                } elseif ($feuTricolor == "rouge") {
                    $quoiFaire = $wording[$feuTricolor];

                } else {
                    $quoiFaire = $wording[$feuTricolor];
                }
                echo "Le feu est : ".$feuTricolor."<br>";
                echo "Quoi faire : ".$quoiFaire."<br>";
                echo "<hr>";




                echo "<h2>Switch :</h2>";

                switch($feuTricolor) {
                    case "vert" :
                        $quoiFaire = $wording["vert"];
                        break;

                    case "orange" :
                        $quoiFaire = $wording["orange"];
                        break;

                    case "rouge" :
                        $quoiFaire = $wording["rouge"];
                        break;

                    default :
                        $quoiFaire = $wording["autre"];
                }
                echo "Le feu est : ".$feuTricolor."<br>";
                echo "Quoi faire : ".$quoiFaire."<br>";
                echo "<hr>";
                ?>

            </div>
            <div class="col-4">
                <?php require_once "sidebar.php"; ?>
            </div>
        </div>
    </div>

<?php require_once "footer.php"; ?>