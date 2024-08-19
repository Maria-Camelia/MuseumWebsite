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
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end bg-dark" tabindex="-1"
                            aria-labelledby="offcanvasNavbarLabel" id="offcanvasNavbar">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Meniu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
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
                                        <a class="btn btn-outline-light" href="home.php">Înapoi</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </nav>
            </div>
        </div>
        <div class="register2">
            <form action="create_exhibitions.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="date" class="form-label">Data și ora expoziției</label>
                    <input class="form-control" name="exhibitionsDate" type="text" placeholder="" aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Titlu expoziție</label>
                    <textarea class="form-control" name="exhibitionsTitle" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="short_description" class="form-label">Descriere scurtă</label>
                    <textarea class="form-control" name="exhibitionsShortDescription" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                        <label for="complete_description" class="form-label">Descriere completă</label>
                        <textarea class="form-control" name="exhibitionsCompleteDescription" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="imageUploadContainer">
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Imagine expoziție</label>
                        <input class="form-control" type="file" id="formFileMultiple" name="elementImages[]" accept="image/">
                    </div>
                </div>
                <button type="button" class="btn btn-success" id="addImageButton"  style="margin-bottom: 10px;">Adaugă imagine</button>
                <button type="submit" class="btn btn-primary" id="button_create">Creează</button>
            </form>
        </div>
    </div>
    <script>
    document.getElementById("addImageButton").addEventListener("click", function() {
        debugger;
        var container = document.getElementsByClassName("imageUploadContainer");
        var newItem = document.createElement("div");
        newItem.classList.add("mb-3");
        newItem.innerHTML = `
                    <label for="formFileMultiple" class="form-label">Imagine colecție</label>
                    <input class="form-control" type="file" id="formFileMultiple" name="elementImages[]" accept="image/">
        `;
        container[0].appendChild(newItem);
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>