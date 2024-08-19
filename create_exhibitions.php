<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if files are uploaded
    if (isset($_FILES['elementImages']['name'])) {
        // Directory where uploaded images will be saved
        $targetDir = "exhibitions_images/";

        $images = [];
        // Loop through each uploaded file
        for ($i = 0; $i < count($_FILES['elementImages']['name']); $i++) {
            $fileName = basename($_FILES['elementImages']['name'][$i]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            // Check if file is an image
            $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                if (move_uploaded_file($_FILES["elementImages"]["tmp_name"][$i], $targetFilePath)) {
                    // You can store the filename and description in a database, save it in an array, etc.
                    array_push($images, $targetFilePath);
                }
            }
        }

        // insert DB
        require_once('ExhibitionsClass.php');

        $newExhibitions = new ExhibitionsClass($_POST["exhibitionsDate"], $_POST["exhibitionsTitle"], $_POST["exhibitionsShortDescription"], $_POST["exhibitionsCompleteDescription"], json_encode($images));
        $newExhibitions->save();

    } else {
        echo "Please select at least one image to upload.";
    }
}

?>