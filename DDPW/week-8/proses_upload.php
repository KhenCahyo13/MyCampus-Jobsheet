<?php
    $targetDirectory = "documents/";

    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    if ($_FILES['files']['name'][0]) {
        $totalFiles = count($_FILES['files']['name']);

        for ($i = 0; $i < $totalFiles; $i++) {
            $fileName = $_FILES['files']['name'][$i];
            $targetFilePath = $targetDirectory . $fileName;

            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFilePath)) {
                echo "File uploaded successfully";
            } else {
                echo "Failed to upload file $fileName";
            }
        }
    } else {
        echo "No files selected";
    }
?>