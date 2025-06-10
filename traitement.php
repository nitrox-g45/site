<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	    <link rel="stylesheet" href="styles.css">

</head>
<body>
       <a class="btn" href="inscription.html"> Inscription </a>
	   <br/>
	   <br/>
              <a class="btn2" href="login.php">Connexion</a>
			  <br/>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
$pass_confirm = isset($_POST['pass_confirm']) ? $_POST['pass_confirm'] : '';

    $chemin = __DIR__ . '/inscriptions.csv';
if ($pass !== $pass_confirm) {
        $erreurs[] = "Erreur : Les mots de passe ne correspondent pas.";
        exit;
    }
$erreurs = [];


// V�rification de l'unicit� de l'email et du nom
    $emailExiste = false;
    $nomExiste = false;
    
    // V�rification dans le fichier CSV
    if (file_exists($chemin)) {
        $fichier = fopen($chemin, 'r');
        while (($ligne = fgetcsv($fichier)) !== false) {
            // V�rification de l'email
            if (isset($ligne[2]) && strtolower(trim($ligne[2])) === strtolower(trim($email))) {
                $emailExiste = true;
            }

            // V�rification du nom
            if (isset($ligne[1]) && strtolower(trim($ligne[1])) === strtolower(trim($nom))) {
                $nomExiste = true;
            }
}
fclose($fichier);
}
           // Ajouter les erreurs d'unicit�
    if ($emailExiste) {
        $erreurs[] = "Erreur : Cette adresse e-mail est deja utilisee. Veuillez en essayer une autre.";
    }
    if ($nomExiste) {
        $erreurs[] = "Erreur : Ce nom est deja utilise. Veuillez en essayer un autre.";
    }

    // Si des erreurs existent, afficher les erreurs
    if (count($erreurs) > 0) {
        foreach ($erreurs as $erreur) {
            echo $erreur . "<br>";
        }
        exit;
    }
    $fichier = fopen($chemin, 'a');
    if ($fichier) {
        fputcsv($fichier, [$prenom, $nom, $email, $pass]);
        fclose($fichier);
        echo "Vous informations d'inscription : <p> Pr�nom: " . htmlspecialchars($prenom) . "</br> Nom: " . htmlspecialchars($nom) . "</br> Email: " . htmlspecialchars($email) . "</br> Mot de passe: " . htmlspecialchars($pass) . "</p>";
    } else {
        echo "Erreur : impossible d'�crire dans le fichier CSV.";
    }
} else {
    echo "Formulaire non soumis.";
}

?>
