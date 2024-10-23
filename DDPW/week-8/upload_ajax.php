<?php
    $errors = array();
    $targetDirectory = "images/";

    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    if (isset($_FILES['files'])) {
        $totalFiles = count($_FILES['files']['name']);
        $allowedExtensions = array("jpg", "jpeg", "png");
        $maxSize = 2 * 1024 * 1024; // 2 MB

        for ($i = 0; $i < $totalFiles; $i++) {
            $fileName = $_FILES['files']['name'][$i];
            $fileSize = $_FILES['files']['size'][$i];
            $fileTmp = $_FILES['files']['tmp_name'][$i];
            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            if (!in_array($fileExt, $allowedExtensions)) {
                $errors[] = "$fileName: Allowed extensions are JPG, JPEG, PNG.";
            }

            if ($fileSize > $maxSize) {
                $errors[] = "$fileName: File size must not exceed 2 MB.";
            }

            if (empty($errors)) {
                if (move_uploaded_file($fileTmp, $targetDirectory . $fileName)) {
                    echo "$fileName: Successfully uploaded.<br>";
                } else {
                    echo "$fileName: Failed to upload.<br>";
                }
            }
        }

        if (!empty($errors)) {
            echo implode("<br>", $errors);
        }
    }
?>