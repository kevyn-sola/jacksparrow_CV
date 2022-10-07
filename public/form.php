<?php

require '../data/data.php';

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

        /* header('Location: index.php'); */
    }
};

?>

    <form action="" method="post" class="form-parchemin" id="contact">
        <?php if (!empty($errors)): ?>
            <ul class="list-errors">
                <?php foreach ($errors as $error): ?>
                <li>
                    <?= $error ?>
                </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    <div class="form-input">
        <legend><?= $data['form']['legend']; ?></legend>

        <label for="firstname"><?= $data['form']['label-firstname']; ?></label>
        <input type="text" name="firstname" id="firstname" placeholder="Jack" required value="<?= $contactForm['firstname'] ?>" />

        <label for="lastname"><?= $data['form']['label-lastname']; ?></label>
        <input type="text" name="lastname" id="lastname" placeholder="Sparrow" required value="<?= $contactForm['lastname'] ?>" />
        
        <label for="email"><?= $data['form']['label-email']; ?></label>
        <input type="text" name="email" id="email" placeholder="Jack.sparrow@tortuga.bay" required value="<?= $contactForm['email'] ?>" />

        <label for="message"><?= $data['form']['label-message']; ?></label>
        <textarea name="message" id="message" cols="30" rows="10" value="<?= $contactForm['message'] ?>" placeholder="Je lirai peut etre ton contenu..."></textarea>
    </div>
    <div class="form-input">
        <div class="form-btn-flex">
            <label for="btn_submit">Clique sur le cachet !</label>
            <button class="form-btn" id="btn_submit" type="submit" value="Appose ta marque !!">
                <img src="../assets/img/cachet_cire_jack4.png" alt="Cachet de cire Pirates" />
        </div>
</form>