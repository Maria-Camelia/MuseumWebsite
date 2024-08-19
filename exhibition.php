<?php
require_once('loggedin_access_only.php');
require_once('connection.php');

$num_per_page=3;

if(isset($_GET["page"]))
{
    $page=$_GET["page"];
}
else
{
    $page =1; 
}

$start_from=($page-1) * 3; 

$getExhibitionsSQL = "SELECT * FROM `exhibitions` limit $start_from,$num_per_page";
$result = mysqli_query($connection, $getExhibitionsSQL);
?>
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
                      <a class="nav-link active" href="exhibition.php">EXPOZIȚII</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="contact.html">CONTACT</a>
                    </li>
                    </ul>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-but" style="color: white;">
                                <a class="btn btn-outline-light" href="home.php" id="btn-back">înapoi</a>
                            </li>
                        </ul>
                </div>
            </div>
            </nav>
            </div>
        </div>
        <?php
            while($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="card text-center bg-dark" style="border-radius: 14px;">
            <div class="card-header" style="color: aliceblue; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                <h3> <?php echo $row["date"];?> </h3>
            </div>
            <div class="card-body">
                <h5 class="card-title" style="color: aliceblue;"><?php echo $row["title"];?></h5>
                <p class="card-text" style="color: aliceblue;"><?php echo $row["short_description"];?></p>
                <a href="exhibition_details.php?exhibitionId=<?php echo $row["id"];?>" class="btn btn-primary">Vezi mai multe</a>
            </div>
        </div>
        <?php
            }
        ?>
        <?php
            $getExhibitionsSQL = "SELECT * FROM `exhibitions`";
            $result = mysqli_query($connection, $getExhibitionsSQL);
            $total_cards = mysqli_num_rows($result);
            $total_pages = ceil($total_cards / $num_per_page);
        ?>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center" style="margin-top:4px;">

                <li class="page-item <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
                    <a class="page-link" href="<?php echo sprintf("exhibition.php?page=%d", max(1, $page - 1)); ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                    <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>">
                        <a class="page-link" href="<?php echo sprintf("exhibition.php?page=%d", $i); ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>

                <li class="page-item <?php echo ($page >= $total_pages) ? 'disabled' : ''; ?>">
                    <a class="page-link" href="<?php echo sprintf("exhibition.php?page=%d", min($total_pages, $page + 1)); ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>