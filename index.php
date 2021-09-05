<?php 
    if (isset($_FILES['fichier_photo']) && $_FILES['fichier_photo'][error] == 0) {
        # code...
        $error = 1;
        if ($_FILES['fichier_photo']['size'] <= 3000000) {
            # code...
            $information_image = pathinfo($_FILES['fichier_photo']['name']);

            $extension_image =  $information_image['extension'];

            $extension_image_array = array('jpg', 'png', 'gif', 'jpeg');

            if (in_array($extension_image, $extension_image_array)) {
                # code...
                $address_image = 'uploads/'.time().rand().rand();
                
                move_uploaded_file($_FILES['fichier_photo']['tmp_name'], $address_image);

                $error = 0;
            }
        }
    }

?>

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
                <input type="file" required name="fichier_photo" id="fichier_photo" enctype="multipart/form-data">
            </p>
                
            <button type="submit">Envoyer</button>
        </form>
    </main>

    <footer>
        <p><?php echo date("Y"); ?></p>
    </footer>
</body>
</html>