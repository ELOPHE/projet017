<?php
session_start();
if(isset($_SESSION['nom'])){
   
        if(isset($_POST['Envoyer'])){
           extract($_POST);
                if (isset($nom) && isset($prenom)) {
                $nom =$_POST['nom'];
                $prenom =$_POST['prenom']; 
                $_SESSION['nom'] = $nom; 
                $_SESSION['prenom'] = $prenom;
                $adresse_ip = $_SERVER['REMOTE_ADDR'];
                $_SESSION['ip'] =$adresse_ip;
                header('location: http://localhost/projetsUE017/cible formulaire de contact.php');
                }
        }
        }
    else   header('location: http://localhost/projetsUE017/authentification.php');

  
  

   
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
              action="cible formulaire de contact.php" 
       				method="post">

				<ul>
		  		<legend>FORMULAIRE DE CONTACT</legend>
			
	       		<li>
			          <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom"autofaucus required/><br>
            </li>
            <li>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" autofocus  required /><br>
               
            </li>
            <li>
                <label for="email">Adresse email</label>
                <input type="email" name="email" id="email" required/><br>
            </li>
            <li>
                <label for="sujet">Sujet</label>
                <textarea name="sujet" id="sujet"></textarea><br>
            </li>
            <li>
                <label for="message">Message</label>
                <textarea name="message" id="message"size="30"></textarea><br>
            </li>

           	<li>
           		 <input type="submit" name="Envoyer" value="Envoyer"></input>
           	</li>
      </ul>
     	</form>
      </body>
</html>
