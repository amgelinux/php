<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- Cambia esta etiqueta form por la otra para simplemente mostrar la info del archivo y no
guardarlo en la base de datos

<form method="POST" action="./mostrar.php" enctype="multipart/form-data">
-->
<form method="POST" action="../05_basedatos/guardarfichero.php" enctype="multipart/form-data">
    <div>
        <span>Upload a File:</span>
        <input type="file" name="uploadedFile" />
    </div>

    <input type="submit" name="uploadBtn" value="Upload" />
</form>
</body>
</html>

Basado en:
https://code.tutsplus.com/es/tutorials/how-to-upload-a-file-in-php-with-example--cms-31763
