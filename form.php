<?php

var_dump($_POST);

$errors[] = 0;

if ($_SERVER['REQUEST METHOD'] === 'POST') {
    // Nettoyage de donnée
    foreach ($_POST as $key => $value) {
        $contactForm[$key] = trim($value);
    }


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form php</title>
</head>

<body>
    <form action="" method="post" class="form-parchemin">
        <div class="form-input">
            <legend id="contact">Allez mon gars... Contact moi!</legend>
            <label for="name">Ecrit ton nom!</label>
            <input type="text" name="name" id="name" required placeholder="Name" />
        </div>
        <div class="form-input">
            <label for="email">Ajoute ton adresse postal numerique!</label>
            <input type="text" name="email" id="email" required placeholder="Email adress" />
        </div>
        <div class="form-input">
            <div class="form-btn-flex">
                <button class="form-btn" type="submit" value="Appose ta marque !!">
                    <img src="/img/cachet_cire_jack.png" alt="Cachet de cire Pirates" />
            </div>
        </div>
    </form>
</body>

</html>