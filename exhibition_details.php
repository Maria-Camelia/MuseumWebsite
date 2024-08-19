<?php
require_once('connection.php');


$exhibitionId = $_GET["exhibitionId"];
$getExhibitionSQL = "SELECT * FROM `exhibitions` WHERE id = $exhibitionId limit 1";
$result = mysqli_query($connection, $getExhibitionSQL);
$exhibitionData = mysqli_fetch_assoc($result);
$exhibitionData["images"] = json_decode($exhibitionData["images"]);
?>

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
                      <a class="nav-link active" href="exhibition.php">EXPOZIȚII</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="contact.html">CONTACT</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-but" style="color: white;">
                      <a class="btn btn-outline-light" href="exhibition.php">înapoi</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </nav>
    </div>
    <div class="carousel-description">
        <h1><?php echo $exhibitionData["title"]; ?></h1>
        <p><?php echo $exhibitionData["complete_description"]; ?> </p>
    </div>
    <div id="carouselExampleInterval1" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
          <?php
            foreach($exhibitionData["images"] as $index => $imagePath){
              $test = "";
            
          ?>
          <div class="carousel-item <?php if($index === 0){
          echo "active";
          } ?>" >
            <img src="<?php echo $imagePath; ?>" class="d-block" alt="..." >
          </div>
          <?php
          }
          ?>
      </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval1" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval1" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
  </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>

</body>

</html>