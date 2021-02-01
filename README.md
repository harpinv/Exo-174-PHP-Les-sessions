Consignes :

- Dans le fichier index.php, vous allez démarrer une session , et créer une variable de session appelée couleur ayant
pour valeur "rouge"
- Vous allez créer un fichier index2.php et afficher la valeur de la variable de session couleur




Théorie :

PHP permet de sauvegarder temporairement des valeurs sur différentes pages php, ces valeurs sont propres à l'utilisateur
qui visite votre site ( à son navigateur ), par défaut elles sont supprimées lorsque l'utilisateur quitte le site.

Pour commencer une session, on utilisera la fonction suivante : session_start()

Les variables de session sont accessibles pour tout vos scripts en utilisant la variable super globale $_SESSION

Exemple :

session_start();
$_SESSION['username'] = "Pierre";
echo "votre nom est".$_SESSION['username'];

Si l'utilisateur visite par la suite la page machin.php , il suffira de faire appel à $_SESSION['username'] sur cette autre page
pour accéder à la valeur enregistrée, il faudra par contre utiliser session_start() en début de script sur cette page.

Vous pouvez uploader puis visiter la page exemple1.php qui va définir une variable de session, cliquez sur le lien présent
sur cette page pour visiter exemple2.php, la variable de session va s'afficher.

Vous pouvez modifier les valeurs de $_SESSION['preference'] dans le script exemple1.php pour tester.



- Pour supprimer les variables de la session puis supprimer la session elle même, vous pouvez utiliser les fonctions suivantes :

//Supprime les variables de session
session_unset();

//Supprime la session
session_destroy();


Documentation compléte sur les sessions : http://php.net/manual/fr/book.session.php


