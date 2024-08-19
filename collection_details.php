
<?php
require_once('connection.php');

$collectionId = $_GET["collectionId"];
$getCollectionSQL = "SELECT * FROM  `collection` WHERE id = $collectionId";
$result = mysqli_query($connection, $getCollectionSQL);
$collectionData = mysqli_fetch_assoc($result);
$collectionData["collection_items"] = json_decode($collectionData["collection_items"], true);


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
                      <a class="nav-link" aria-current="page" href="home.php">ACASĂ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="collection.php">COLECȚII</a>
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
                  <a class="btn btn-outline-light" href="collection.php">înapoi</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
          aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
          aria-label="Slide 6"></button>

      </div>
      <div class="carousel-inner">
        <?php
          foreach ($collectionData["collection_items"] as $index => $item) {
            $test = "";
        ?>
        <div class="carousel-item <?php if($index === 0){
          echo "active";
          } ?>" >
            <img src="<?php echo $item['path']; ?>" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5><?php echo $item['title']; ?></h5>
                <p><?php echo $item['description']; ?></p>
            </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
</body>

</html>