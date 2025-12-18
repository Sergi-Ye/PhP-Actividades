<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 6</title>
</head>

<body>

    <?php

    if (isset($_POST["submit"])) {
        $target_dir = "Archivos6/";
        $target_file = $target_dir . basename($_FILES["subir"]["name"]);
        $uploadOk = 1;
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        $tamaño;
        if (!is_numeric($_POST["tamaño"])) {
            echo "<b>Error:</b> El tamaño ha de ser un numero!";
        }else{
            $tamaño = $_POST["tamaño"] * 1048576;
        }   

        if ($_FILES["subir"]["size"] > $tamaño) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        $ext = $_POST["ext"];

        if ($fileType != $ext) {
            echo "La extensión que has indicado es <b>$ext</b>, pero el archivo es <b>$fileType</b><br>";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
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

        <form action="" method="post" enctype="multipart/form-data" style="display: inline-block;">
            File:
            <input type="file" name="subir" id="subir"><br>

            Extensión:
            <input list="extension" name="ext">
            <datalist id="extension">
                <option value="jpg">
                <option value="png">
                <option value="pdf">
            </datalist>
            <br>

            Tamaño max (mb):
            <input type="text" name="tamaño">
            <input type="submit" value="Subir" name="submit">

        </form>

    </div>



</body>

</html>