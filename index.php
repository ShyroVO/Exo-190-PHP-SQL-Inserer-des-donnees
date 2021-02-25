<?php

//Pour cet exercice, vous allez utiliser la base de données table_test_php créée pendant l'exo 189
//Vous utiliserez également les deux tables que vous aviez créées au point 2 ( créer des tables avec PHP )

try {
    //Créez ici votre objet de connection PDO, et utilisez à chaque fois le même objet $pdo ici.
    $pdo = new PDO("mysql:host=localhost;dbname=table_test_php;charset=utf8", 'root' , '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    //1. Insérez un nouvel utilisateur dans la table utilisateur.
    // TODO votre code ici.
    $userRequest = "INSERT INTO user (email, username, password) VALUES ('test@example.com', 'moi', 'azer')";
    $pdo->exec($userRequest);

    //2. Insérez un nouveau produit dans la table produit
    // TODO votre code ici.
    $articleRequest = "INSERT INTO article (titre, contenu) VALUES ('untitre', 'un contenue')";
    $pdo->exec($articleRequest);

    //3. En une seule requête, ajoutez deux nouveaux utilisateurs à la table utilisateur.
    // TODO Votre code ici.
    $userRequest2 = "INSERT INTO user (email, username, password) 
                VALUE ('test2@example.com', 'moi2', 'aqwzsx'), ('test3@example.com', 'moi3', 'poiuy')";
    $pdo->exec($userRequest2);

    //4. En une seule requête, ajoutez deux produits à la table produit.
    // TODO Votre code ici.
    $articleRequest2 = "INSERT INTO article (titre, contenu) VALUES ('untitre2', 'un contenue2'), ('untitre3', 'un contenue3')";
    $pdo->exec($articleRequest2);

    //5. A l'aide des méthodes beginTransaction, commit et rollBack, insérez trois nouveaux utilisateurs dans la table utilisateur.
    //6. A l'aide des méthodes beginTransaction, commit et rollBack, insérez trois nouveaux produits dans la table produit
    // TODO Votre code ici.
    $pdo->beginTransaction();

    $userRequest3 = "INSERT INTO user (email, username, password) VALUES ('test@example.com', 'moi', 'azer')";
    $pdo->exec($userRequest3);
    $userRequest4 = "INSERT INTO user (email, username, password) VALUES ('test@example.com', 'moi', 'azer')";
    $pdo->exec($userRequest4);
    $userRequest5 = "INSERT INTO user (email, username, password) VALUES ('test@example.com', 'moi', 'azer')";
    $pdo->exec($userRequest5);

    $articleRequest3 = "INSERT INTO article (titre, contenu) VALUES ('untitre', 'un contenue')";
    $pdo->exec($articleRequest3);
    $articleRequest4 = "INSERT INTO article (titre, contenu) VALUES ('untitre', 'un contenue')";
    $pdo->exec($articleRequest4);
    $articleRequest5 = "INSERT INTO article (titre, contenu) VALUES ('untitre', 'un contenue')";
    $pdo->exec($articleRequest5);

    $pdo->commit();

}
catch (PDOException $exception) {
    echo $exception->getMessage();
    $pdo->rollBack();
}
