<?php
require_once('admin_access_only.php');
include_once 'CollectionClass.php'; 
$result = CollectionClass::getAllCollection(); 
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
                                <br>
                            </ul>
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-but" style="color: white;">
                                    <button type="button" class="btn btn-success" onclick="window.location.href='view_create_collection.php'">Adaugă colecție nouă</button>
                                    <a class="btn btn-outline-light" href="home.php">Înapoi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <br>
        <div class="container table-container">
        <table id="productTable" class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">TITLU</th>
                    <th scope="col" class="description-cell">DESCRIERE</th>
                    <th scope="col">IMAGINE DE COPERTA</th>
                    <th scope="col">ACTIUNI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <th><?php echo $row["title"]; ?></th>
                        <th class="description-cell"><?php echo $row["description"]; ?></th>
                        <th>
                            <img src="<?php echo $row["cover_image"]; ?>" alt="Cover Image">
                        </th>
                        <th><a class="btn btn-primary" href="deleteCollection.php?ID=<?php echo $row["id"]; ?>">Sterge</a></th>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>    