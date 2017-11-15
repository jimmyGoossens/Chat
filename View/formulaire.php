<<<<<<< HEAD
<?php

  include('header.php');

?>

=======
>>>>>>> 2f702595f44da54206614bf5c27c5f6f3b79cbdb
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
<script type="text/javascript">
function validate()
{
 var error="";
 var name = document.getElementById( "pseudo" );
 if( name.value == "" )
 {
  error = " vous devez entrer votre nom";
 
 alert(error);
  return false;
 }

 var email = document.getElementById( "email" );
 if( email.value == "" || email.value.indexOf( "@" ) == -1 ){
  	error = " adresse mail invalide ";
  	alert(error);
  	return false;
 }

 var password = document.getElementById( "mdp1" );
 if( password.value.length <= 8 ) {
	  error = " le mot de passe doit faire au moins 8 caractères ";
	  alert(error);
	  return false;
	 }

 var mdp= document.getElementById("mdp2");
 if(password.value !== mdp.value){
 	error = "les deux mot de passes ne correspondent pas ";
  	alert(error);
  	return false;
 }
 else{
  return true;
 }

}


</script>
