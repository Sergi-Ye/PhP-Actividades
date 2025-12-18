<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4</title>
</head>
<body>
    
<?php

$target_dir = "uploads/";
$uploadOk = 1;

// Comprobamos si se ha enviado un archivo
if(isset($_FILES["subir"])) {
    $target_file = $target_dir . basename($_FILES["subir"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["subir"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["subir"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats (jpg, png, pdf)
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf") {
        echo "Sorry, only JPG, PNG & PDF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["subir"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["subir"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<div style="border: 1px solid black; padding: 5px; ">

    <p><b>File uploader</b></p>
    <form method="post" enctype="multipart/form-data" style="display: inline-block;">
        File:
        <input type="file" name="subir" id="subir"><br>

        Extensión:
        <input list="extension">
            <datalist id="extension">
                <option value="jpg">
                <option value="png">
                <option value="pdf">
            </datalist>
        <br>

        Tamaño max:
        <input type="text" name="tamaño">
        <input type="submit" value="UPLOAD" name="submit">

    </form>

</div>

</body>
</html>
