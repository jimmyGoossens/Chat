<?php
// Passaword création


if (isset($_GET['email']))
{
    $_GET['email'] = htmlspecialchars($_GET['email']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_GET['email']))
    {
        $bdd= new PDO('mysql:host=10.20.0.158;dbname=test;charset=utf8', 'root','user');

        // Inscription membres
        $req= $bdd-> prepare('INSERT INTO chat(pseudo, pass, email) VALUES(:pseudo, :pass, :email)');
        if ($_GET['motdepasse2'] == $_GET['motdepasse1']) {
            $req->execute(array(
                'pseudo' => $_GET['pseudo'],
                'pass' => $_GET['motdepasse1'],
                'email' => $_GET['email']));
        }else {
            echo 'les mots de passe ne sont pas identique !, cliquez sur : ';
        }
    }
    else

    {echo '<div class="reponse">';
        echo 'L\'adresse ' . $_GET['email'] . '  n\'est pas valide,recommencez';
    echo '</div>';
    }
}
 ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <bouton>
        <a href="formulaire.php"> Retour</a>
        </bouton>
    </body>
</html>
