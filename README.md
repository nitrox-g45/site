<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>UnknownManga</title>
  <link rel="stylesheet" href="../../css/styles.css">
  <style>
    .open-btn {
      margin: 1rem;
    }

    .open-button {
      background-color: rgb(43, 199, 23);
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      position: static;
    }

    .form-popup {
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
    }

    .form-popup input[type="text"],
    .form-popup input[type="email"] {
      width: 100%;
      padding: 10px;
      margin: 5px 0 20px;
      background: #eee;
      border: none;
    }

    .form-popup .btn {
      background-color: rgb(236, 58, 4);
      color: white;
      padding: 12px;
      width: 100%;
      border: none;
      cursor: pointer;
    }

    .form-popup .cancel {
      background-color: #cc0000;
      margin-top: 10px;
    }
  </style>
</head>
<body>

<!-- Bouton pour ouvrir le formulaire -->
<div class="open-btn">
  <button class="open-button" onclick="openForm()">Connexion</button>
</div>

<!-- Formulaire de connexion -->
<div class="form-popup" id="popupForm">
  <h3>Connexion</h3>
  <label for="email">Email :</label>
  <input type="email" id="email" placeholder="you@exemple.com" required>

  <label for="password">Mot de passe :</label>
  <input type="text" id="password" placeholder="Mot de passe" required>

  <button class="btn" onclick="login()">Envoyer</button>
  <button class="btn cancel" onclick="closeForm()">Fermer</button>
</div>

<script>
  function openForm() {
    document.getElementById("popupForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("popupForm").style.display = "none";
  }

  function login() {
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();

    if (!email || !password) {
      alert("Veuillez remplir les deux champs.");
      return;
    }

    // Simulation d’un compte existant (à supprimer en prod)
    if (email === "admin@example.com" && password === "1234") {
      alert("Connexion réussie !");
      closeForm();
    } else {
      alert("Email ou mot de passe incorrect !");
    }
  }

  // Ferme la popup si on clique en dehors
  document.addEventListener("click", function(event) {
    var popup = document.getElementById("popupForm");
    var openButton = document.querySelector(".open-button");

    if (!popup.contains(event.target) && !openButton.contains(event.target) && popup.style.display === "block") {
      closeForm();
    }
  });
</script>

</body>
</html>
