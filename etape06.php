<?php require_once "header.php"; ?>

    <!-- CONTENU -->
    <div class="container">
        <div class="row mt-1">
            <div class="col-8">

                <div class="alert alert-primary" role="alert">
                    <h2>Base de données :</h2>
                    Doc : <a href="https://www.php.net/manual/fr/pdo.query.php" target="_blank">https://www.php.net/manual/fr/pdo.query.php</a>
                </div>

                <?php
                try {
                    //---------------------------------------------------------------------------
                    // Connexion a la base de donnees
                    //---------------------------------------------------------------------------

                    $pdo = new PDO($db['dsn'], $db['user'], $db['password'], array(
                        PDO::ATTR_PERSISTENT => true,
                        // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    ));

                    //---------------------------------------------------------------------------
                    // SELECT : Selectionner x donnee(s)
                    //---------------------------------------------------------------------------

                    echo "<h2>Selectionner x article(s) :</h2>";

                    // Requete : selectionner la table nommee "article".
                    $req = $pdo->query("SELECT * FROM article");

                    // Boucler sur la totalite des donnees.
                    $rows = $req->fetchAll();
                    foreach($rows as $row) {
                        echo "
                        Id : ".$row['id_article']."<br>
                        Titre : ".$row['titre_article']."<br>
                        Contenu : ".$row['contenu_article']."<br>
                        Date : ".$row['date_article']."<br>
                        <br>";
                    }

                    //---------------------------------------------------------------------------
                    // SELECT : prepare
                    //---------------------------------------------------------------------------
//                    echo "<h2>Prepare :</h2>";
//                    $req = $pdo->prepare('SELECT * FROM article WHERE id_article = ?'); // AND titre_article = ?
//                    $req->execute(array(2));
//                    $rows = $req->fetchAll();
//                    foreach($rows as $row) {
//                        echo "Titre : ".$row['titre_article']."<br>";
//                    }

                    //---------------------------------------------------------------------------
                    // SELECT : prepare with bindParam
                    //---------------------------------------------------------------------------
//                    echo "<h2>Prepare with bindParam :</h2>";
//                    $titre = "%Mon%";
//                    $contenu = "Mon contenu";
//
//                    $req = $pdo->prepare('
//                        SELECT id_article, titre_article
//                        FROM article
//                        WHERE titre_article LIKE ? AND contenu_article = ?');
//                    $req->bindParam(1, $titre, PDO::PARAM_STR);
//                    $req->bindParam(2, $contenu, PDO::PARAM_STR);
//                    $req->execute();
//                    $rows = $req->fetchAll();
//                    foreach($rows as $row) {
//                        echo "
//                        Id : ".$row['id_article']."<br>
//                        Titre : ".$row['titre_article']."<br>";
//                    }

                    //---------------------------------------------------------------------------
                    // INSERT : classique
                    //---------------------------------------------------------------------------
//                    $pdo->exec('
//                        INSERT INTO article(
//                            titre_article, contenu_article, date_article
//                        ) VALUES (
//                            "Mon titre", "Mon contenu", "2019-10-30"
//                        )
//                    ');

                    //---------------------------------------------------------------------------
                    // INSERT : prepare
                    //---------------------------------------------------------------------------

//                    $req = $pdo->prepare('
//                        INSERT INTO article(
//                            titre_article, contenu_article, date_article
//                        ) VALUES (
//                            :titre_article, :contenu_article, :date_article
//                        )
//                    ');
//                    $req->execute(array(
//                        "titre_article"     => "Mon titre classique",
//                        "contenu_article"   => "Mon contenu classique",
//                        "date_article"      => "2019-11-30"
//                    ));

                    //---------------------------------------------------------------------------
                    // UPDATE : classique
                    //---------------------------------------------------------------------------

//                    $pdo->exec('UPDATE article SET
//                        titre_article   = "Mon titre après un update classique",
//                        contenu_article = "Mon contenu après un update classique"
//                        WHERE
//                        id_article = 4
//                    ');

                    //---------------------------------------------------------------------------
                    // UPDATE : prepare
                    //---------------------------------------------------------------------------

//                    $req = $pdo->prepare('
//                        UPDATE article SET
//                        titre_article   = :titre_article,
//                        contenu_article = :contenu_article
//                        WHERE
//                        id_article      = :id_article
//                    ');
//                    $req->execute(array(
//                        "titre_article"     => "Mon titre après un update prepare",
//                        "contenu_article"   => "Mon contenu après un update prepare",
//                        "id_article"        => 4
//                    ));

                    //---------------------------------------------------------------------------
                    // DELETE : classique
                    //---------------------------------------------------------------------------
                    // https://www.php.net/manual/fr/pdo.exec.php

                    //---------------------------------------------------------------------------
                    // BEGIN TRANSACTION : commit
                    //---------------------------------------------------------------------------

//                    echo "<h2>beginTransaction with commit :</h2>";
//
//                    $articles = [
//                        ["titre A", "contenu A", "2019-06-12"],
//                        ["titre B", "contenu B", "2019-04-22"],
//                        ["titre C", "contenu C", "2019-10-05"],
//                    ];
//
//                    // Démarre une transaction, désactivation de l'auto-commit
//                    $pdo->beginTransaction();
//
//                    // Insert
//                    $req = $pdo->prepare('
//                        INSERT INTO article
//                        (titre_article, contenu_article, date_article)
//                        VALUES
//                        (?, ?, ?)
//                    ');
//                    foreach ($articles as $article) {
//                        $req->execute(array(
//                            $article[0],
//                            $article[1],
//                            $article[2],
//                        ));
//                    }
//
//                    // On s'aperçoit d'une erreur et on annule les modifications
//                    $pdo->commit();

                    //---------------------------------------------------------------------------
                    // BEGIN TRANSACTION : rollback
                    //---------------------------------------------------------------------------

//                    echo "<h2>beginTransaction with rollBack :</h2>";
//
//                    // Démarre une transaction, désactivation de l'auto-commit
//                    $pdo->beginTransaction();
//
//                    // Insert
//                    $req = $pdo->exec('INSERT INTO article(
//                            titre_article, contenu_article, date_article
//                        ) VALUES (
//                            "Mon titre A", "Mon contenu A", "2020-12-30"
//                        )
//                    ');
//
//                    // On s'aperçoit d'une erreur et on annule les modifications
//                    $pdo->rollBack();

                } catch (Exception $e) {
                    die("Impossible de se connecter : <br>" . $e->getMessage());
                }
                ?>
            </div>
            <div class="col-4">
                <?php require_once "sidebar.php"; ?>
            </div>
        </div>
    </div>

<?php require_once "footer.php"; ?>