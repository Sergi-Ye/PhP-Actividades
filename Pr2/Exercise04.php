<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>

    <?php




    ?>

    <div style="display: inline-block; border: 1px solid black; padding: 10px;">

        <p><b>Subir un archivo</b></p>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            Subir archivo:
            <input type="file" name="subir" id="subir">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </div>


</body>

</html>