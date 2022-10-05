<?php

$data= [
    'form' => [

        'legend' => 'Allez mon gars... Contact moi!',
        'label-firstname' => 'Ecris ton prénom!',
        'label-lastname' => 'Ecris ton nom!',
        'label-email' => 'Ajoutes ton adresse postal numerique!',
        'label-message' => 'Dit moi ce que tu desires!',
    ],
];


$contactForm['firstname'] = '';
$contactForm['lastname'] = '';
$contactForm['email'] = '';
$contactForm['message'] = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Nettoyage de donnée
    foreach ($_POST as $key => $value) {
        $contactForm[$key] = trim($value);
    }

    $errors = [];

    if (empty($contactForm['firstname'])) {
        $errors[] = 'Le prénom est obligatoire';
    }

    if (empty($contactForm['lastname'])) {
        $errors[] = 'Le nom est obligatoire';
    }

    if (empty($contactForm['email'])) {
        $errors[] = 'L\'adresse email est obligatoire';
    }

    if (!filter_var($contactForm['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Ce n\'est pas un format d\'email';
    }

    if (empty($errors)) {

        header('Location:form.php');
    }
}
;

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
        <?php if (!empty($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                <li>
                    <?= $error?>
                </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="form-input">
            <legend id="contact"><?= $data['form']['legend']; ?></legend>

            <label for="firstname"><?= $data['form']['label-firstname']; ?></label>
            <input type="text" name="firstname" id="firstname" placeholder="Jack" required value="<?= $contactForm['firstname'] ?>" />

            <label for="lastname"><?= $data['form']['label-lastname']; ?></label>
            <input type="text" name="lastname" id="lastname" placeholder="Sparrow" required value="<?= $contactForm['lastname'] ?>" />
        </div>
        <div class="form-input">
            <label for="email"><?= $data['form']['label-email']; ?></label>
            <input type="text" name="email" id="email" placeholder="Jack.sparrow@tortuga.bay" required value="<?= $contactForm['email'] ?>" />

            <label for="message"><?= $data['form']['label-message']; ?></label>
            <textarea name="message" id="message" cols="30" rows="10" value="<?= $contactForm['message'] ?>" 
                placeholder="Je lirai peut être ton contenu..." ></textarea>
        </div>
        <div class="form-input">
            <div class="form-btn-flex">
                <!-- event listener alert script -->
                <button class="form-btn" id="btn_submit" type="submit" value="Appose ta marque !!">
                    <img src="/img/cachet_cire_jack.png" alt="Cachet de cire Pirates" />
            </div>
        </div>
        <div class="copyright">
            <h2>Github:</h2>
                <a href="https://github.com/Planger45" target="_blank">Kevyn SOLA</a>
                <a href="https://github.com/hhertout" target="_blank">Hugues Hertout</a>
                <a href="https://github.com/V-Gillet" target="_blank">Valentin Gillet</a>
                <a href="https://github.com/toomanyMG" target="_blank">Mikael Gallé</a>
            </div>
    </form>
</body>

</html>