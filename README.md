<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UnknownManga</title>
    <link rel="icon" type="image/site-1.icon" href="/site-1.icon" />
    <link rel="stylesheet" href="/css/styles.css" />
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

        /* En-tête */
        header {
            background: #222;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 1.2rem;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 1rem;
            padding: 0;
            margin: 0;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Menu toggle (burger) */
        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .menu-toggle .bar {
            width: 25px;
            height: 3px;
            background-color: white;
            margin: 4px 0;
            border-radius: 2px;
        }

        /* Barre recherche et bouton */
        #search {
            padding: 6px 10px;
            border-radius: 4px;
            border: none;
            font-size: 1rem;
            margin-right: 10px;
        }

        .bouton {
            padding: 7px 14px;
            border: none;
            border-radius: 4px;
            background-color: rgb(43, 199, 23);
            color: white;
            cursor: pointer;
            font-weight: 600;
        }

        .bouton:hover {
            background-color: rgb(36, 163, 19);
        }

        /* Section héros */
        .hero {
            text-align: center;
            padding: 3rem 1rem;
            background: #f5f5f5;
        }

        .hero-content h1 {
            font-size: 2.8rem;
            margin-bottom: 0.5rem;
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .cta-button {
            background-color: rgb(236, 58, 4);
            color: white;
            padding: 12px 25px;
            margin: 0 0.5rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #b32e00;
        }

        /* Images top */
        .top {
            margin: 5rem auto 2rem;
            text-align: center;
        }

        .top img,
        .top2 img,
        .top3 img {
            transition: transform 0.1s;
            cursor: pointer;
        }

        .top img:hover,
        .top2 img:hover,
        .top3 img:hover {
            transform: scale(1.3);
        }

        /* Liste catégorie */
        .listecategorie {
            margin: 2rem;
        }

        .listecategorie h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        /* Carousel container */
        .carousel-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .carousel {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            gap: 10px;
            padding: 10px 0;
        }

        .carousel::-webkit-scrollbar {
            display: none; /* Masquer scrollbar */
        }

        .carousel a img {
            border-radius: 8px;
            cursor: pointer;
            width: 170px;
            height: 240px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .carousel a img:hover {
            transform: scale(1.1);
        }

        /* Flèches carousel */
        .arrow {
            background-color: rgba(0, 0, 0, 0.4);
            border: none;
            color: white;
            font-size: 2rem;
            padding: 0 12px;
            cursor: pointer;
            border-radius: 4px;
            user-select: none;
            transition: background-color 0.3s ease;
        }

        .arrow:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

        .arrow.left {
            margin-right: 10px;
        }

        .arrow.right {
            margin-left: 10px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                background-color: #222;
                position: absolute;
                top: 60px;
                right: 0;
                width: 200px;
                display: none;
            }

            nav ul.active {
                display: flex;
            }

            .menu-toggle {
                display: flex;
            }

            header {
                justify-content: space-between;
            }
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
