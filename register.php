<!DOCTYPE html>
<html lang="en">

<head>
  <title>Muzeul Artefactelor Vestimentare</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
  <div class="main">
    <div class="navbar">

      <div class="menu">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
            <a class="navbar-brand" href="#">
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
                      <a class="nav-link " aria-current="page" href="home.php">ACASĂ</a>
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
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-but" style="color: white;">
                  <a class="btn btn-outline-light" href="home.php">Înapoi</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="register">
      <form action="process.php"  method="post">
        <h1>Înregistrare</h1>
        <div class="input-box">
          <i class="bi bi-person-circle"></i>
          <input type="text" placeholder="Nume" name="Name" required>
        </div>
        <div class="input-box">
          <i class="bi bi-telephone-fill"></i>
          <input type="text" placeholder="Număr de telefon" name="Phone_number" required>
        </div>
        <div class="input-box">
          <i class="bi bi-envelope"></i>
          <input type="text" placeholder="Email" name="Email" required>
        </div>
        <div class="input-box">
          <input type="Password" placeholder="Parolă" name="Password" required>
          <i class="bi bi-lock-fill"></i>
        </div>
        <p class="link">Ai deja cont?<br>
          <a href="login.php">Autentifică-te</a>
        </p>
        <button type="submit" class="btn btn-warning" name="btn-save" id="button_reg">Înregistrare</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>