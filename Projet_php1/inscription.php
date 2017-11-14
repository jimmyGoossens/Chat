<?php
// Passaword création


if (isset($_POST['email']))
{
    $_POST['email'] = htmlspecialchars($_POST['email']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
    {
        $bdd= new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','user');

        // Inscription membres

        $req= $bdd-> prepare('INSERT INTO membres(pseudo, pass, email) VALUES(:pseudo, :pass, :email)');

        $req->execute(array(
            'pseudo' => $_POST['pseudo'],
            'pass' => $_POST['motdepasse'],
            'email' => $_POST['email']));

    }
    else
    {echo '<div class="reponse">';
        echo 'L\'adresse ' . $_POST['email'] . '  n\'est pas valide, recommencez !';
    echo '</div>';
    }
}

 ?>
