<?php
session_start();
if(isset($_POST['seConnecter'])){
    extract($_POST); 
      if(isset($nom) && isset($mdp)){
      	 if($nom =="elophe" && $mdp =="elh"){
        $_SESSION['nom'] = $nom;
        $_SESSION['mdp'] = $mdp;
        $_SESSION['timecurent'] = time();
        header("LOCATION:http://localhost/projetsUE017/formulaire de contact.php");
                       }else $erreur= "login ou mot de passe invalide ";
       }

   }
   ?>
   <!DOCTYPE html>
<html>
      <head>
          <meta charset ="utf-8"/>
          <link rel="stylesheet" href="style.css">
          <script src = "https://www.google.com/recaptcha/api.js" ></script> 
          <title>ue017projet1</title>
       </head>
       <body>
       <form 	class='contact_form'
       			method="post">
          <div class="g-recaptcha"
              data-sitekey = "6Ley158UAAAAAGKPKqvBHF-QOyYTDd9X0U1zot7Z">
          </div>
		
		<ul>
				<legend>AUTHENTIFICATION</legend>
			<li>
                <label for="nom">Nom utilisateur</label>
                <input type="text" name="nom" id="nom" autofocus  required /><br>
            
            </li>
            <li>
            	<label for ="mot de passe"> mot de passe</label>
            	<input for ="text" name="mdp" id="mot de passe" autofocus required/><br>
            </li>
            <li>
            	 <input  type="submit" name="seConnecter" value="valider" >
           	</li>
		</ul>
		</form>
 <?php
    if (isset($erreur)) {
      echo '<font color="red">'. $erreur."</font>";  echo " Pour vous s'inscrire cliquez ";?><a href="inscription.php">ici</a>;<?php   }
    ?>
		</body>
</html>
<?php
//ma clé privé
    $secret = "6Ley158UAAAAAJXXI6ElG8oxzvAE8EjJWA9l7OpG";
//paramètre renvoyé par le recaptcha
    $response = $_POST['g-recaptcha-response'];
//on recupère l'IP de l'utilisateur
    $remoteip = $_SERVER['REMOTE_ADDR'];

    $api_url ="https://www.google.com/recaptcha/api/siteverify?secret="
    . $secret 
    . "&response=" . $response 
    . "&remoteip=" . $remoteip ;
    $decode = json_decode(file_get_contents($api_url), true);
  
    if ($decode['success']== true) {
      //c'est un humain
    }

    else {
      //C'est un robot ou le code de verification est incorrecte
    }
?>

