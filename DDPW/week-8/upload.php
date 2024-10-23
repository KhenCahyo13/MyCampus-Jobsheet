<?php
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES['file']['name']);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxSize = 3 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES['file']['size'] <= $maxSize) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
            echo "File uploaded successfully";
        } else {
            echo "Failed to upload file";
        }
    } else {
        echo "Invalid file type or size";
}
