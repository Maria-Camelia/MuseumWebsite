<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Muzeul Artefactelor Vestimentare</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="main">
    <div class="navbar">

      <div class="menu">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <img src="LOGOO.png" alt="Descrierea imaginii" id="Logo">
                <img src="LOGOO_SMALL.png" alt="Descreiere poza" id="Logo2"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
              aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" aria-labelledby="offcanvasNavbarLabel" id="offcanvasNavbar">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Meniu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" ></button>
              </div>
              <div class="offcanvas-body"> 
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="home.php">ACASĂ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="collection.php">COLECȚII</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="exhibition.php">EXPOZIȚII</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="contact.html">CONTACT</a>
                    </li>
                  </ul>
                  <?php
                    if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"] === true){
                  ?>
                  <div class="dropdown" id="admin_button">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Administrare
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" >
                      <li><a class="dropdown-item" href="view_users.php">Utilizatori</a></li>
                      <li><a class="dropdown-item" href="view_collection.php">Colectii</a></li>
                      <li><a class="dropdown-item" href="view_exhibition.php">Expozitii</a></li>
                    </ul>
                  </div>
                  <?php
                    }
                  ?>
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <?php
                    if(isset($_SESSION["isLoggedin"]) && $_SESSION["isLoggedin"] === true){
                  ?>
                    <li class="nav-but" style="color: white;">
                      <a class="btn btn-outline-light" href="logout.php">Deconectare</a>
                    </li>
                  <?php
                    }else{
                  ?>
                    <li class="nav-but" style="color: white;">
                      <a class="btn btn-outline-light" href="register.php">Înregistrare</a>
                    </li>
                    <li class="nav-but" style="color: white;">
                      <a class="btn btn-outline-light" href="login.php">Autentificare</a>
                    </li>
                  <?php
                    }
                  ?>
                  </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="description">
      <img src="poza1.jpg" alt="Descrierea imaginii" id="pHome">
      <p class="text">Descoperă istoria modei și evoluția stilurilor vestimentare la Muzeul Artefactelor Vestimentare.
        Explorează o colecție impresionantă de artefacte vestimentare din diferite epoci și culturi, de la rochii antice
        până la designuri contemporane. Aici, fiecare articol de îmbrăcăminte spune o poveste unică despre modă,
        identitate și creativitate. Pregătește-te pentru o călătorie fascinantă în lumea modei și stilului, într-un
        mediu muzeal cu design modern și interactiv.
      </p>
    </div>
    <div class="title">
      <h1>Îmbracă Istoria și Eleganța</h1>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>