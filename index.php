<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hébergeur d'image gratuit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>PHOTO-RAMS</h1>

    </header>

    <main>
        <form action="POST">
            <p>
                <input type="file" name="fichier_photo" id="fichier_photo" enctype="multipart/form-data">
            </p>
                
            <button type="submit">Envoyer</button>
        </form>
    </main>

    <footer>
        <p><?php echo date("Y"); ?></p>
    </footer>
</body>
</html>