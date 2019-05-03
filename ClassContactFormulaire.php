<?php
Class ContactFormulaire {

	private $nom;
	private $mail;
	private $sujet;
	private $message;

 public function __construct($nom,$mail,$sujet,$message){
       if (!empty($nom)) {
           $this->nom =$nom;
       }
       if (!empty($mail)) {
           $this->mail =$mail;
       }
       if (!empty($sujet)) {
           $this->sujet =$sujet;
       }
       if (!empty($message)) {
           $this->message =$message;
       }
   }

	public function getNom()
	{
		return $this->nom;
	}
	public function getMail()
	{
		return $this->mail;
	}
	public function getSujet()
	{
		return $this->sujet;
	}
	public function getMessage()
	{
		return $this->message;
	}
	public function RecupForm()
	{
		 return getNom();
		 return getMail();
		 return getSujet();
		 return getMessage();
	}
	public function TestForm()
	{
		if (empty(RecupForm()) && $this->RecupForm()==0 ) 
		{
			return true;
		}
		else return false;
	}
	public function EnvoiMail()
	{
		$headers = 'FROM: site@local.dev';
		if ($this->TestForm()== false)
		{
			$retour = mail('sylvie.elophe.auditeur@lecnam.net','Formulaire de contact'.$this->RecupForm(),$headers);
    			if (isset($retour)) {
        		echo $this->AfficheMessage();
    			}
    	}
	}
   	public function AfficheMessage()
   	{
   		if (isset($retour))
   		echo 'Votre message a bien été envoyé ';
   	}
   		
   	   	

   	public function afficheErreur()
   	{
   		if ($this->TestForm==true){
   			echo "Tous les champs ne sont pas remplis ou les informations sont invalides";
   	}
	}
}
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
              	
        		method="post">
				<ul>
		  		<legend>FORMULAIRE DE CONTACT</legend>
			
	       		<li>
			          <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom"autofaucus required/><br>
            </li>
            
            <li>
                <label for="mail">mail</label>
                <input type="email" name="mail" id="mail" required/><br>
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