<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UnknownManga</title>
    <link rel="icon" type="image/site-1.icon" href="/site-1.icon">
    <link rel="stylesheet" href="../../css/styles.css">
    <style>
      *       /* Fixez le bouton sur le côté gauche de la page */
      .open-btn {
        position: static;
        justify-content: block-start;
        margin-right: 90px;
      }

      /* Stylez et fixez le bouton sur la page */
      .open-button {
        background-color:rgb(43, 199, 23);
        color: white;
        padding: 12px 20px;
        border: #cc0000;
        border-radius: 5px;
        cursor: pointer;
        opacity: 1;
        position: absolute;
    
      }

      /* Masquez la forme Popup */
      .form-popup {
        color: black;
        display: none;
        position: fixed;
        left: 50%;
        top: 20%;
        transform: translate(-50%, 0);
        border: 2px solid #666;
        z-index: 9;
        width: 300px;
        background-color: white;
      }

      /* Styles pour le conteneur de la forme */
      .form-container {
        padding: 20px;
        background-color: #fff;
        z-index: 1;
      }

      /* Largeur complète pour les champs de saisie */
      .form-container input[type="text"],
      .form-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0 22px 0;
        border: none;
        background: #eee;
      }

      /* Quand les entrées sont concentrées, faites quelque chose */
      .form-container input[type="text"]:focus,
      .form-container input[type="password"]:focus {
        background-color: #ddd;
        outline: none;
      }

      /* Stylez le bouton de connexion */
      .form-container .btn {
        background-color:rgb(236, 58, 4);
        color: blue;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom: 10px;
        opacity: 0.8;
      }

      /* Stylez le bouton pour annuler */
      .form-container .cancel {
        background-color: #cc0000;
      }

      /* Planez les effets pour les boutons */
      .form-container .btn:hover,
      .open-button:hover {
        opacity: 1;
      }
    </style>
</head>
<body>

<?php   // class="btn btn-primary"

$pwd = null;
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
//echo "valeur de logged = $logged<br>";
if ($logged !=1) {$pwd=0;} else {$pwd=1; $_SESSION["password"]="1";}	
}





if (! $pwd == 1 ) {
	/*echo '<div class="open-btn">
      <button class="open-button" onclick="openForm()"><strong>Ouvrir la forme</strong></button>
    </div>
 <form method="GET">
    	 
    	 
        <div class="form-popup" id="popupForm">
        	<label for="email" class="form-label">Email</label>
        	<input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
        	<div id="email-help" class="form-text">L\'email utilisé lors de la création de compte.</div>
    	
        	<label for="password" class="form-label">Mot de passe</label>
        	<input type="text" class="form-control" id="password" name="password">
    	
    	<button type="submit" class="btn" name="ok">Envoyer</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button> </div>
</form>
<script>
      // Ouvrir la popup
      function openForm() {
        document.getElementById("popupForm").style.display = "block";
      }

      // Fermer la popup
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }

      // Fermer la popup si on clique en dehors
      document.addEventListener("click", function(event) {
        var popup = document.getElementById("popupForm");
        var openButton = document.querySelector(".open-button");

        // Vérifie si le clic était en dehors de la popup ET que la popup est visible
        if (!popup.contains(event.target) && !openButton.contains(event.target) && popup.style.display === "block") {
          closeForm(); // Fermer la popup si on clique en dehors
        }
      });
    </script>';*/
 }
	
?>	

    <!-- En-tête -->
    <header>
        <div class="container">
            <div class="logo">UnknownManga</div>
            <nav>
                <div class="menu-toggle" id="menu-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="nav-links" id="nav-links">
                <li><a href="Définition.html">Définition des mots</a></li>
			<li><a href="index.php">Accueil</a></li>
                    <li><a href="Manga.html">Manga</a></li>
                    <li><a href="Anime.html">Anime</a></li>
                    <li><a href="Webtoon.html">Webtoon</a></li>
                    
                    <body>
                        <input type="search" id="search" class="barre" placeholder="Recherche" onchange="ouvrirPage()">
                        <input type="button" id="button" onclick="ouvrirPage()" value="Chercher" class="bouton">
                        <style>

                        </style>
                        <script>
                            function ouvrirPage() {
                                var a = document.getElementById("search").value; 
                                
                                if(a === "chat") { 
                                    window.open("/1.html", "_self"); 
                                } else {
                                    alert("Aucune page trouvée pour: " + a);
                                }
                            }
                        </script>
                        <div class="page-inscription">
                            
                                <div class="open-btn">
      <button class="open-button" onclick="openForm()"><strong>Inscription/ Connexion</strong></button>
    </div>
 
    	 
    	 
        <div class="form-popup" id="popupForm">
        	<label for="email" class="form-label">Email</label>
        	<input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com"></br>
        	
    	
        	<label for="password" class="form-label">Mot de passe</label>
        	<input type="text" class="form-control" id="password" name="password">
    	
    	<button type="submit"  name="ok">Envoyer</button>
        <button type="button"  onclick="closeForm()">Fermer</button> </div>

<script>
      // Ouvrir la popup
      function openForm() {
        document.getElementById("popupForm").style.display = "block";
      }

      // Fermer la popup
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }

      // Fermer la popup si on clique en dehors
      document.addEventListener("click", function(event) {
        var popup = document.getElementById("popupForm");
        var openButton = document.querySelector(".open-button");

        // Vérifie si le clic était en dehors de la popup ET que la popup est visible
        if (!popup.contains(event.target) && !openButton.contains(event.target) && popup.style.display === "block") {
          closeForm(); // Fermer la popup si on clique en dehors
        }
      });
    </script>
                            </div>
                    </body>
                
        </div>
    </header>

</div>
    <!-- Section Héros -->
    <section class="hero">
        <div class="hero-content">
            <h1>Bienvenue sur UnknownManga</h1>
            <p>Votre source ultime pour tout ce qui concerne les mangas, anime et webtoons.</p>
            <a href="Category.html" class="cta-button">Explorer les Catégories</a>
            <a href="discord.html" class="cta-button">Rejoins nous sur Discord</a>
            <div class="top">
                <a href="webtoon\Read Return of the Disaster-Class Hero/Read Return of the Disaster-Class Hero.html"><img class="top" src="top1.jpg" width="220" height="290"></a>
                <a href="manga\Juujika no Rokunin/Juujika no Rokunin.html"><img class="top2" src="manga\Juujika no Rokunin/Juujika no Rokunin.png" width="240" height="350"></a>
                <a href="animé\the misfit of demon king academy/the misfit of demon king academy.html"><img class="top3" src="animé\the misfit of demon king academy/the misfit of demon king academy.png" width="220" height="290"></a>
                <style>
                    .top
                    {
                        margin-bottom: 2rem;
                       margin-top: 5rem;
                       text-align: center;
                    }
                    .top3
                    {
margin-bottom: 2rem;
                    }
					img {
               transition: transform .1s;
      }
	  img:hover{
        -moz-transform: scale(1.3);
        -webkit-transform: scale(1.3);
      }
                </style>
        </div>
    </section> 
           <div class="listecategorie">
		   <h2>Webtoon</h2>
		   <div class="carousel-container">
    <button class="arrow left" onclick="scrollCarousel(-1)">&#10094;</button>
    
    <div class="carousel" id="webtoon-carousel">
			<a href="webtoon\the beginning after the end/the beginning after the end.html"><img class="top4" src="webtoon\the beginning after the end/the beginning after the end.png" width="170 " height="240 " alt=""></a>
			<a href="webtoon\Poison fatinq healer/Poison fatinq healer.html"><img class="top4" src="webtoon\Poison fatinq healer/Poison fatinq healer.png" width="170 " height="240 " alt=""></a>
			<a href="webtoon\Existance/Existence.html"><img class="top4" src="webtoon\Existance/Existence.png" width="170 " height="240 " alt=""></a>
			<a href="webtoon\Solo leveling/Solo leveling.html"><img class="top4" src="webtoon\Solo leveling/Solo leveling.png" width="170 " height="240 " alt=""></a>
			<a href="webtoon\revenge of the iron blooded sword hound/revenge of the iron blooded sword hound.html"><img class="top4" src="webtoon\revenge of the iron blooded sword hound/revenge of the iron blooded sword hound.png" width="170 " height="240 " alt=""></a>
			<a href="webtoon\Re Life Player/Re Life Player.html"><img class="top4" src="webtoon\Re Life Player/Re Life Player.png" width="170 " height="240 " alt=""></a>
			<a href="webtoon\My wife is from a thousand years ago/My wife is from a thousand years ago.html"><img class="top4" src="webtoon\My wife is from a thousand years ago/My wife is from a thousand years ago.png" width="170 " height="240 " alt=""></a>
			<a href="webtoon\The Archmage’s Restaurant/The Archmage’s Restaurant.html"><img class="top4" src="webtoon\The Archmage’s Restaurant/The Archmage’s Restaurant.png" width="170 " height="240 " alt=""></a>
			<a href="webtoon\the priest of corruption/the priest of corruption.html"><img class="top4" src="webtoon\the priest of corruption/the priest of corruption.png" width="170 " height="240 " alt=""></a>
			<a href="webtoon\wind breaker/wind breaker.html"><img class="top4" src="webtoon\wind breaker/wind breaker.png" width="170 " height="240 " alt=""></a>
			<a href="webtoon\the boxer/the boxer.html"><img class="top4" src="webtoon\the boxer/the boxer.png" width="170 " height="240 " alt=""></a>
			<a href="webtoon\hello killer/hello killer.html"><img class="top4" src="webtoon\hello killer/hello killer.png" width="170 " height="240 " alt=""></a>
		   </div>
		    <button class="arrow right" onclick="scrollCarousel(1)">&#10095;</button>
  </div>
</div>
 <div class="listecategorie">
		   <h2>Animé</h2>
		   <div class="carousel-container">
    <button class="arrow left" onclick="scrollCarousel(-1)">&#10094;</button>
	<div class="carousel" id="webtoon-carousel">
		<a href="animé\the misfit of demon king academy/the misfit of demon king academy.html"><img class="top4" src="animé\the misfit of demon king academy/the misfit of demon king academy.png" width="170 " height="240 " alt=""></a>
	</div>
	
	<div class="listecategorie">
		   <h2>Manga</h2>
		   <div class="carousel-container">
    <button class="arrow left" onclick="scrollCarousel(-1)">&#10094;</button>
	<div class="carousel" id="webtoon-carousel">
		<a href="manga\Juujika no Rokunin/Juujika no Rokunin.html"><img class="top4" src="manga\Juujika no Rokunin/Juujika no Rokunin.png" width="170 " height="240 " alt=""></a>
	</div>
<style>
	.listecategorie{
		 margin: 2rem;
		
	}
	.top4
                    {
                      margin-top: 2rem;
                    }
</style>
    <!-- JavaScript pour le menu burger -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const navLinks = document.getElementById('nav-links');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>
	<script>
  function scrollCarousel(direction) {
    const container = document.getElementById('webtoon-carousel');
    const scrollAmount = 300;
    container.scrollBy({
      left: direction * scrollAmount,
      behavior: 'smooth'
    });
  }
   
      // Ouvrir la popup
      function openForm() {
        document.getElementById("popupForm").style.display = "block";
      }

      // Fermer la popup
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }

      // Fermer la popup si on clique en dehors
      document.addEventListener("click", function(event) {
        var popup = document.getElementById("popupForm");
        var openButton = document.querySelector(".open-button");

        // Vérifie si le clic était en dehors de la popup ET que la popup est visible
        if (!popup.contains(event.target) && !openButton.contains(event.target) && popup.style.display === "block") {
          closeForm(); // Fermer la popup si on clique en dehors
        }
      });
    
</script>
</body>
</html>
  
