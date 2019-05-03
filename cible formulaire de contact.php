<?php
session_start();
if (isset($_SESSION['nom'])) {
	      if (isset($_COOKIE['nbVisites'])) 
      		{
        		$nbVisites=$_COOKIE['nbVisites']+1;
     		}
       		 else
       		{$nb_Visites=1;
         	}
      		setcookie('nbVisites',$nbVisites,time()+3600*24*31);
 if((time() - $_SESSION['timecurent']) > 60)
      {
      header('Location: http://localhost/projetsUE017/log.php');
        echo "votre session a expirée";
      }
     function detectip()
{
// Récupération de l'ip du visiteur

		$ip = $_SERVER['REMOTE_ADDR'];
}
 
  $fp = fopen('contact_log.txt','a+');
  $ip=detectip();
   $filename='contact_log.txt';
    if(file_exists($filename)){
      fputs($fp, "\n");
      fputs($fp, "nom : ".$_SESSION['nom']." adresse ip :".$_SESSION['ip']. " date de visite : ".date("d F Y H:i:s", filemtime($filename)));
      fclose($fp);
      }
  }


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>ue017projet1</title>
	</head>

	<body>

		<p>Bonjour <p/>

		<p>Bienvenue sur notre site (Mme, M)
			<?php 	
			echo $_SESSION['nom'];
			echo "<br/>";
			echo "c'est votre ".$_COOKIE['nbVisites']." ème visite !";
			echo "<br/>";
			echo "La session va expirer aprés 60 minutes";

			?></p>
		<p>Votre email :<?php echo $_POST['email'];?></p>
	</body>

</html>