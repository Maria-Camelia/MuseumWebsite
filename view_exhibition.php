<?php
require_once('admin_access_only.php');
include_once 'ExhibitionsClass.php'; 
$result = ExhibitionsClass::getAllExhibitions(); 
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
                                    <a class="nav-link" aria-current="page" href="home.php">ACASĂ</a>
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
                                    <button type="button" class="btn btn-success" onclick="window.location.href='view_create_exhibitions.php'">Adaugă expoziție nouă</button>
                                    <a class="btn btn-outline-light" href="home.php">Înapoi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="container table-container">
        <h2></h2>
            <table id="productTable" class="table table-dark table-hover">
                <thead>
                    <tr >
                        <th scope="col" colspan="1">DATA</th>
                        <th scope="col" colspan="1">TITLU</th>
                        <th scope="col" colspan="1">DESCRIERE SCURTA</th>
                        <th scope="col" colspan="1">TOATA DESCRIEREA</th>
                        <th scope="col" colspan="1">IMAGINI</th>
                        <th scope="col" colspan="1">ACTIUNI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i=0;
                while($row = mysqli_fetch_array($result)){
                ?>
                
                    <tr>
                        <th><?php echo $row["date"];?></th>
                        <th><?php echo $row["title"];?></th>
                        <th>
                        <?php 
                        $short_description = $row["short_description"];
                        echo substr($short_description, 0, 40) . (strlen($short_description) > 40 ? '...' : '');
                        ?>
                    </th>
                    <th>
                        <?php 
                        $complete_description = $row["complete_description"];
                        echo substr($complete_description, 0, 40) . (strlen($complete_description) > 40 ? '...' : '');
                        ?>
                    </th>
                    <th>
                    <?php
                            $imagesJson = $row["images"];

                            $imagesArray = json_decode($imagesJson, true);

                            if (json_last_error() === JSON_ERROR_NONE) {
                                foreach ($imagesArray as $image) {
                                    echo '<img src="' . $image . '" alt="Imagine" style="width: 30px; height: auto; margin-right: 5px;">';
                                }
                            } else {
                                echo "Eroare la decodarea JSON: " . json_last_error_msg();
                            }
                        ?>
                    </th>
                        <th><a class="btn btn-primary" href="deleteExhibitions.php?ID=<?php echo $row["id"];?>">Sterge</a></th>
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