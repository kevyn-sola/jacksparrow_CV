<?php require '../data/data.php' ?>

<div class="profil-jack">
    <div class="img-icon-profil">
        <img src="<?= $data['profil']['imgProfil'] ?>" alt="<?= $data['profil']['altImgProfil'] ?>">

        <div class="permis">
            <img src="<?= $data['profil']['iconProfil'] ?>" alt="<?= $data['profil']['altIconProfil'] ?>" id="ancre-bateau">
            <p><?= $data['profil']['permis'] ?></p>
        </div>

    </div>
    <div class="content-profil">
        <h1><?= $data['profil']['titreProfil'] ?></h1>
        <p><?= $data['profil']['description'] ?></p>

        <p class="info-profil">
            <?= $data['profil']['contactProfil'] ?>
        </p>
    </div>
</div>

<div class="sign_jack">
    <img id="signature" src="<?= $data['profil']['signProfil'] ?>" alt="<?= $data['profil']['altSignProfil'] ?>" />

</div>