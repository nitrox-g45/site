<?php   // class="btn btn-primary"

if (isset($_GET['ok'])) {
	//echo "vérification<br>"; 
if (! empty($_GET['email'])) {$email = $_GET['email'];} else {echo "il manque l'email !!"; }
if (! empty($_GET['password'])) {$pwd = $_GET['password'];}  else {echo "il manque le mot de passe !!";}

//echo "email=$email et password=$pwd<br> ";

// Vérification dans le fichier CSV
$finscrits = file("inscriptions.csv"); //print_r($finscrits);
// syntaxe 
// nom, prenom, email, mot de passe
   
$logged = 0;  
 
// Validation du formulaire

	if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	echo "Il faut un email valide pour soumettre le formulaire.";
	} else 
	{
		foreach ($finscrits as $user0) { //echo "$user0<br>";
			$user=explode(",",$user0);
			if ($user[2] == $email) {
				if (trim($user[3]) == $pwd) {$logged = 1;}
			}
		}

    } 
echo "valeur de logged = $logged<br>";
if ($logged !=1) die("échec");	
}



?>


<form action="login.php" method="GET">
    	<!-- si message d'erreur on l'affiche -->
    	<?php if (isset($errorMessage)) : ?>
        	<div class="alert alert-danger" role="alert">
            	<?php echo $errorMessage; ?>
        	</div>
    	<?php endif; ?>
    	<div class="mb-3">
        	<label for="email" class="form-label">Email</label>
        	<input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
        	<div id="email-help" class="form-text">L'email utilisé lors de la création de compte.</div>
    	</div>
    	<div class="mb-3">
        	<label for="password" class="form-label">Mot de passe</label>
        	<input type="text" class="form-control" id="password" name="password">
    	</div>
    	<button type="submit" name="ok">Envoyer</button> 
	</form>

