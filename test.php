<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Multiple Image Upload Form</title>
</head>
<body>

<h2>Upload Images with Descriptions</h2>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <div id="imageUploadContainer">
        <div class="imageUploadItem">
            <input type="file" name="images[]" accept="image/" required>
            <input type="text" name="descriptions[]" placeholder="Enter description" required>
        </div>
    </div>
    <button type="button" id="addImageButton">Add Image</button>
    <button type="submit">Upload</button>
</form>

<script>
    document.getElementById("addImageButton").addEventListener("click", function() {
        var container = document.getElementById("imageUploadContainer");
        var newItem = document.createElement("div");
        newItem.classList.add("imageUploadItem");
        newItem.innerHTML = `
            <input type="file" name="images[]" accept="image/" required>
            <input type="text" name="descriptions[]" placeholder="Enter description" required>
        `;
        container.appendChild(newItem);
    });
</script>

</body>
</html>