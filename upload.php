<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if files are uploaded
    if (isset($_FILES['images']['name']) && isset($_POST['descriptions'])) {
        // Directory where uploaded images will be saved
        $targetDir = "uploads/";

        // Array to store upload status
        $uploadStatus = [];

        // Loop through each uploaded file
        for ($i = 0; $i < count($_FILES['images']['name']); $i++) {
            $fileName = basename($_FILES['images']['name'][$i]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            // Check if file is an image
            $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                if (move_uploaded_file($_FILES["images"]["tmp_name"][$i], $targetFilePath)) {
                    // Insert image file name and description into database, or do further processing here
                    $description = $_POST['descriptions'][$i];
                    // You can store the filename and description in a database, save it in an array, etc.
                    $uploadStatus[] = "Image '$fileName' uploaded successfully with description: '$description'";
                } else {
                    $uploadStatus[] = "Sorry, there was an error uploading your file '$fileName'";
                }
            } else {
                $uploadStatus[] = "Sorry, only JPG, JPEG, PNG, GIF files are allowed for '$fileName'";
            }
        }

        // Output upload status
        foreach ($uploadStatus as $status) {
            echo $status . "<br>";
        }
    } else {
        echo "Please select at least one image to upload.";
    }
}
?>