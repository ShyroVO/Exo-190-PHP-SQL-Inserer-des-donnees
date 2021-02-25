<?php

/**
 * Pour cet exercice, vous allez utiliser la base de données table_test_php créée pendant l'exo 189
 * Vous utiliserez également les deux tables que vous aviez créées au point 2 ( créer des tables avec PHP )
 */

try {
    /**
     * Créez ici votre objet de connection PDO, et utilisez à chaque fois le même objet $pdo ici.
     */
    $pdo = new PDO("mysql:host=localhost;dbname=table_test_php;charset=utf8", root , '');

    /**
     * 1. Insérez un nouvel utilisateur dans la table utilisateur.
     */

    // TODO votre code ici.
    $userRequest = "INSERT INTO table_test-php.user (email, username, password) VALUES ('test@example.com', 'moi', 'azer')";


    /**
     * 2. Insérez un nouveau produit dans la table produit
     */

    // TODO votre code ici.
    $articleRequest = "INSERT INTOtable_text_phpe.article (titre, contenu) VALUES ('untitre', 'un contenue')";

    /**
     * 3. En une seule requête, ajoutez deux nouveaux utilisateurs à la table utilisateur.
     */

    // TODO Votre code ici.

    /**
     * 4. En une seule requête, ajoutez deux produits à la table produit.
     */

    // TODO Votre code ici.

    /**
     * 5. A l'aide des méthodes beginTransaction, commit et rollBack, insérez trois nouveaux utilisateurs dans la table utilisateur.
     */

    // TODO Votre code ici.


    /**
     * 6. A l'aide des méthodes beginTransaction, commit et rollBack, insérez trois nouveaux produits dans la table produit.
     */
}
catch (...)
