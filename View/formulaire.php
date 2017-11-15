<?php

  include('header.php');

?>

<form  action="inscription.php" method="post" onsubmit="return validate();">

    <label for="pseudo"> Votre pseudo :</label></br>
    <input type="text" name="pseudo" id="pseudo" placeholder="Ex:elises20"></br>

    <label for="motdepasse1"> inserez  un mot de passe :</label></br>
    <input type="text" name="motdepasse1" id="mdp1" placeholder="motdepasse"></br>

    <label for="motdepasse2"> confirmez le mot de passe :</label></br>
    <input type="text" name="motdepasse2" id="mdp2" placeholder="motdepasse"></br>

    <label for="email"> inserez  une adresse e-mail :</label></br>
    <input type="text" name="email" id="email" placeholder="email"></br>


    <input type="submit" name="valider">

</form>
