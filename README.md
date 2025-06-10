<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UnknownManga</title>
    <link rel="icon" type="image/site-1.icon" href="/site-1.icon" />
    <link rel="stylesheet" href="/styles.css" />
    <style>
        /* Bouton d'ouverture */
        .open-btn {
            position: static;
            justify-content: flex-start;
            margin-right: 90px;
        }

        .open-button {
            background-color: rgb(43, 199, 23);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            opacity: 1;
            position: absolute;
        }

        /* Popup formulaire */
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
            padding: 20px;
            box-sizing: border-box;
            border-radius: 6px;
        }

        /* Champs formulaire */
        .form-popup input[type="email"],
        .form-popup input[type="text"],
        .form-popup input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 22px 0;
            border: none;
            background: #eee;
            box-sizing: border-box;
            border-radius: 3px;
            font-size: 1rem;
        }

        .form-popup input[type="email"]:focus,
        .form-popup input[type="text"]:focus,
        .form-popup input[type="password"]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Boutons */
        .form-popup .btn {
            background-color: rgb(236, 58, 4);
            color: blue;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
            opacity: 0.8;
            font-weight: bold;
            border-radius: 4px;
        }

        .form-popup .cancel {
            background-color: #cc0000;
            color: white;
        }

        .form-popup .btn:hover,
        .open-button:hover {
            opacity: 1;
        }

</style>
</head>
<body>

<header>
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
        </ul>
    </nav>

    <div>
        <input type="search" id="search" class="barre" placeholder="Recherche" />
        <input type="button" id="button" onclick="ouvrirPage()" value="Chercher" class="bouton" />
    </div>

    <div class="open-btn">
        <button class="open-button" onclick="openForm()"><strong>Inscription/ Connexion</strong></button>
    </div>
</header>

<!-- Popup Formulaire -->
<form method="GET" class="form-popup" id="popupForm" autocomplete="off">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com" required />
    <div id="email-help" class="form-text">L'email utilisé lors de la création de compte.</div>

    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" required />

    <button type="submit" class="btn" name="ok">Envoyer</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
</form>

<!-- Section Héros -->
<section class="hero">
    <div class="hero-content">
        <h1>Bienvenue sur UnknownManga</h1>
        <p>Votre source ultime pour tout ce qui concerne les mangas, anime et webtoons.</p>
        <a href="Category.html" class="cta-button">Explorer les Catégories</a>
        <a href="discord.html" class="cta-button">Rejoins nous sur Discord</a>

        <div class="top">
            <a href="webtoon/Read Return of the Disaster-Class Hero/Read Return of the Disaster-Class Hero.html">
                <img src="top1.jpg" width="220" height="290" alt="Return of the Disaster-Class Hero" />
            </a>
            <a href="manga/Juujika no Rokunin/Juujika no Rokunin.html">
                <img src="manga/Juujika no Rokunin/Juujika no Rokunin.png" width="240" height="350" alt="Juujika no Rokunin" />
            </a>
            <a href="anime/the misfit of demon king academy/the misfit of demon king academy.html">
                <img src="anime/the misfit of demon king academy/the misfit of demon king academy.png" width="220" height="290" alt="The Misfit of Demon King Academy" />
            </a>
        </div>
    </div>
</section>

<!-- Webtoon Carousel -->
<div class="listecategorie">
    <h2>Webtoon</h2>
    <div class="carousel-container">
        <button class="arrow left" onclick="scrollCarousel('webtoon-carousel', -1)">&#10094;</button>
        <div class="carousel" id="webtoon-carousel">
            <a href="webtoon/the beginning after the end/the beginning after the end.html"><img src="webtoon/the beginning after the end/the beginning after the end.png" alt="The Beginning After the End" /></a>
            <a href="webtoon/Poison fatinq healer/Poison fatinq healer.html"><img src="webtoon/Poison fatinq healer/Poison fatinq healer.png" alt="Poison Fatinq Healer" /></a>
            <a href="webtoon/Existance/Existence.html"><img src="webtoon/Existance/Existence.png" alt="Existence" /></a>
            <a href="webtoon/Return of the Disaster-Class Hero/Return of the Disaster-Class Hero.html"><img src="webtoon/Return of the Disaster-Class Hero/Return of the Disaster-Class Hero.png" alt="Return of the Disaster-Class Hero" /></a>
        </div>
        <button class="arrow right" onclick="scrollCarousel('webtoon-carousel', 1)">&#10095;</button>
    </div>
</div>

<!-- Manga Carousel -->
<div class="listecategorie">
    <h2>Manga</h2>
    <div class="carousel-container">
        <button class="arrow left" onclick="scrollCarousel('manga-carousel', -1)">&#10094;</button>
        <div class="carousel" id="manga-carousel">
            <a href="manga/Berserk/Berserk.html"><img src="manga/Berserk/Berserk.png" alt="Berserk" /></a>
            <a href="manga/Juujika no Rokunin/Juujika no Rokunin.html"><img src="manga/Juujika no Rokunin/Juujika no Rokunin.png" alt="Juujika no Rokunin" /></a>
            <a href="manga/Katekyo Hitman Reborn/Katekyo Hitman Reborn.html"><img src="manga/Katekyo Hitman Reborn/Katekyo Hitman Reborn.png" alt="Katekyo Hitman Reborn" /></a>
            <a href="manga/Naruto/Naruto.html"><img src="manga/Naruto/Naruto.png" alt="Naruto" /></a>
        </div>
        <button class="arrow right" onclick="scrollCarousel('manga-carousel', 1)">&#10095;</button>
    </div>
</div>

<!-- Anime Carousel -->
<div class="listecategorie">
    <h2>Anime</h2>
    <div class="carousel-container">
        <button class="arrow left" onclick="scrollCarousel('anime-carousel', -1)">&#10094;</button>
        <div class="carousel" id="anime-carousel">
            <a href="anime/the misfit of demon king academy/the misfit of demon king academy.html"><img src="anime/the misfit of demon king academy/the misfit of demon king academy.png" alt="The Misfit of Demon King Academy" /></a>
            <a href="anime/Naruto/Naruto.html"><img src="anime/Naruto/Naruto.png" alt="Naruto" /></a>
            <a href="anime/One Piece/One Piece.html"><img src="anime/One Piece/One Piece.png" alt="One Piece" /></a>
            <a href="anime/Attack on Titan/Attack on Titan.html"><img src="anime/Attack on Titan/Attack on Titan.png" alt="Attack on Titan" /></a>
        </div>
        <button class="arrow right" onclick="scrollCarousel('anime-carousel', 1)">&#10095;</button>
    </div>
</div>

<script>
    // Fonction menu toggle burger
    document.getElementById('menu-toggle').addEventListener('click', () => {
        const nav = document.getElementById('nav-links');
        nav.classList.toggle('active');
    });

    // Ouvre la popup inscription/connexion
    function openForm() {
        document.getElementById('popupForm').style.display = 'block';
    }

    // Ferme la popup
    function closeForm() {
        document.getElementById('popupForm').style.display = 'none';
    }

    // Fonction recherche - ouvre nouvelle page avec la recherche
    function ouvrirPage() {
        const recherche = document.getElementById('search').value.trim();
        if (recherche) {
            // encodeURIComponent pour sécuriser l'URL
            window.open('Recherche.php?recherche=' + encodeURIComponent(recherche), '_blank');
        } else {
            alert('Veuillez entrer un mot à rechercher.');
        }
    }

    // Scroll horizontal du carousel
    function scrollCarousel(carouselId, direction) {
        const carousel = document.getElementById(carouselId);
        const scrollAmount = 300; // px
        carousel.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }
</script>

</body>
</html>
