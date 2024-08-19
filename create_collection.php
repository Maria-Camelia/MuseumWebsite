<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if files are uploaded
    if (isset($_FILES['elementImages']['name']) && isset($_POST['elementTitles']) && isset($_POST['elementDescriptions'])) {
        // Directory where uploaded images will be saved
        $targetDir = "collections_images/";

        // Upload cover image
        $coverImagePath =  $targetDir . $_FILES['collectionCoverImage']['name'];
        move_uploaded_file($_FILES["collectionCoverImage"]["tmp_name"], $coverImagePath);

        // Array to store upload status
        $collectionItems = [];

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
                    $collectionItems[] = [
                        "path" => $targetFilePath,
                        "description" => $_POST['elementDescriptions'][$i],
                        "title" => $_POST['elementTitles'][$i]
                    ];
                }
            }
        }

        // insert DB
        require_once('CollectionClass.php');

        $newCollection = new CollectionClass($_POST["collectionTitle"], $_POST["collectionDescription"], $coverImagePath, json_encode($collectionItems));
        $newCollection->save();

    } else {
        echo "Please select at least one image to upload.";
    }
}

?>