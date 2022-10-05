<?php require '../data/data.php' ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/style/root.css" />
    <link rel="stylesheet" href="../assets/style/style.css" />
    <link rel="stylesheet" href="../assets/style/form.css" />
    <link rel="stylesheet" href="../assets/style/loisirs.css" />
    <link rel="stylesheet" href="../assets/style/profil.css" />
    <link rel="stylesheet" href="../assets/style/header.css" />
    <link rel="stylesheet" href="../assets/style/skill.css">
    <link rel="stylesheet" href="../assets/style/pro_experience.css" />
    <title>Jack Sparrow CV</title>
    <script src="../assets/script/header.js" defer></script>
</head>


<img src="../assets/img/title_experience.png" class="section-experience-title">
<div class="experience-pro-container">
    <?php foreach($data['experiencesProfessionnelles'] as $date => $experience) : ?>
    <div class="date">
        <p>
            <?= $date ?>
        </p>
    </div>
    <div class="experience">
        <?php foreach($experience as $title => $description) : ?>
        <p>
            <span><?= $title ?></span>
            <hr>
            <?= $description ?>
        </p>
        <?php endforeach ?>
    </div>
    <?php endforeach ?>
</div>              

<div class="exp-quotes">
<h2>Avis sur ma personne</h2>
<div class="quotes-container" id="quotes-container1">
    <?php foreach($data['avis'] as $img => $opignonOfThePerson) : ?>
    <div class="img-quotes-container">
        <img src="<?= $img ?>" alt="picture of Legolas" class="quotes-pic" />
        <img src="../assets/img/inverted-commas.png" alt="image of commas" class="commas" />
        <?php foreach($opignonOfThePerson as $name => $opignon) : ?>
        <div class="quote-text-container">
            <p><?= $opignon ?></p>
            <hr>
            <p><b><?= $name ?></b></p>
        </div>
            
    </div>
    <?php endforeach ?>
    <?php endforeach ?>
</div>
</div>

                