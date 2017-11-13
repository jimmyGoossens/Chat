<?php

// Passaword création

$bdd= new PDO('mysql:host=localhost;dbname=testchatbox;charset=utf8', 'root','user');

// Inscription membres

$req= $bdd-> prepare('INSERT INTO membres(pseudo, pass, email) VALUES(:pseudo, :pass, :email)');

$req->execute(array(
    'pseudo' => $_POST['pseudo'],
    'pass' => $_POST['motdepasse'],
    'email' => $_POST['email']));
 ?>
