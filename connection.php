
<!-- Se connecter -->

<?php
  // Lier le fichier à la base de donnée
  $bdd = new PDO('mysql:host=10.20.0.158/phpmyadmin; bdname=test; charset=utf8', 'root', 'user');

  // Ne  pas cacher le mot de passe
  $pass_hache = password_hash($_POST['Mot de passe'], PASSWORD_DEFAULT);

  // Vérifier les identifiants
  $req = $bdd->prepare('SELECT id FROM chat WHERE pseudo = :pseudo AND Mot de passe = :mdp');
  $req->execute(array(
    'pseudo' => $pseudo,
    'Mot de passe' => $pass_hache));

  $resultat = $req->fetch();

  // Message si OK ou MAUVAIS
  if (!$resultat) {
    echo 'Mauvais identifiant ou mot de passe !';
  } else {
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $pseudo;
    echo 'Vous êtes connecté !';
  }

?>

<!-- Indiquer à l'user qu'il est connecté -->

<?php

  if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])) {
    echo 'Bonjour ' . $_SESSION['pseudo'];
  }

?>

<!-- Se déconnecter -->

<?php

  // Faire appel à la session
  session_start();

  // Supprimer la session et ses variables
  $_SESSION = array();
  session_destroy();

?>
