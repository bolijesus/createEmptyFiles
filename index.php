<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extract archives to empty</title>
</head>

<body>
    <h1>Extract archives to empty</h1>
    <h3>Extrae el nombre de los archivos y los copia a la carpeta de destino vacio para que se pueda convertir en la pagina <a href="https://www.aconvert.com/es/ebook/epub-to-html/">EPUB to HTML</a> </h3>
    <form action="server/archivesEmpty.php" method="post" enctype="multipart/form-data">

        <div>
            <label for="">ruta carpeta de extraccion
                <input type="text" name="ruta_extraccion">
            </label>
        </div>

        <div>
            <label for="">ruta de carpeta de destino
                <input type="text" name="ruta_destino" placeholder="c:/archivo/carpetadestino/">
                <small>(Debe tener un / al momento de terminar para que sea leida como carpeta)</small>
            </label>
        </div>
        <div>
            <button type="submit">Extraer</button>
        </div>
    </form>
</body>

</html>