<?php
session_start();
#if(isset($_POST['seConnecter'])){
 #   extract($_POST); 
  #    if(isset($nom) && isset($mdp)){
   #     $_SESSION['nom'] = $nom;
    #    $_SESSION['mdp'] = $mdp;
     #  }
       # header("LOCATION:http://localhost/projetsUE017/formulaire de contact.php");
   #}

?>

<!DOCTYPE html>
<html>
      <head>
          <meta charset ="utf-8"/>
          <link rel="stylesheet" href="style.css">
          <title>ue017projet1</title>
       </head>
       <body>
       <form 	class='contact_form'
       			action="formulaire de contact.php" 
       			method="post">
		<ul>
				        <legend>INSCRIPTION</legend>
				<li>
					      <label for="nom">Nom</label>
               	<input type="text" name="nom" id="nom" autofocus  required /><br>
      	</li>
				<li>
					      <label for="prenom">Prénom</label>
              	<input type="text" name="prenom" id="prenom" autofocus  required /><br>
               
				</li>
				 <li>
            		<label for ="mot de passe"> mot de passe</label>
            		<input for ="text" name="mdp" id="mot de passe" autofocus required/><br>
        </li>
				<li>
					      <label for="email">Adresse email</label>
               	<input type="email" name="email" id="email" required/><br>
        </li>
				<li>
					      <input  type="submit" name="seConnecter" value="se connecter" >
				</li>
		</ul>
		</form>
		</body>
</html>