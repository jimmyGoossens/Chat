<!-- Se connecter -->

<?php

  // Lier le fichier à la base de donnée
  $bdd = new PDO('mysql:host=10.20.0.158; bdname=test; charset=utf8', 'root', 'user');

  // Ne  pas cacher le mot de passe
  $pass_hache = password_hash($_GET['pass']);

  // Vérifier les identifiants
  $req = $bdd->prepare('SELECT id FROM chat WHERE pseudo = :pseudo AND pass = :pass');
  $req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache));

  $resultat = $req->fetch();

  // On sécurise la connection et on affiche un message si OK ou MAUVAIS
  if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $pass_hache)) {
      if (!$resultat) {
        echo 'Mauvais identifiant ou mot de passe !';
        } else {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['pseudo'] = $pseudo;
            echo $pseudo . 'est connecté !';
            }
  }

?>

<!-- Indiquer à l'user qu'il est connecté -->

<?php

  if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])) {
    echo 'Bonjour ' . $_SESSION['pseudo'];
  }

?>
