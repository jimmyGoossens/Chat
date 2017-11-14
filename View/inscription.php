<?php
// Passaword création


if (isset($_POST['email']))
{
    $_POST['email'] = htmlspecialchars($_POST['email']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
    {
        $bdd= new PDO('mysql:host=10.20.0.158;dbname=test;charset=utf8', 'root','user');

        // Inscription membres
        $req= $bdd-> prepare('INSERT INTO chat(pseudo, pass, email) VALUES(:pseudo, :pass, :email)');
        if ($_POST['motdepasse2'] == $_POST['motdepasse1']) {
            $req->execute(array(
                'pseudo' => $_POST['pseudo'],
                'pass' => $_POST['motdepasse1'],
                'email' => $_POST['email']));
        }else {
            echo 'les mots de passe ne sont pas identique !, cliquez sur : ';
        }
    }
    else

    {echo '<div class="reponse">';
        echo 'L\'adresse ' . $_POST['email'] . '  n\'est pas valide,recommencez';
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
