<?php require '../data/data.php' ?>
<h2>Experiences professionelles</h2>
<div class="experience-pro-container">
    <?php foreach($experiencesProfessionnelles as $date => $experience) : ?>
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
                

<div class="exp-quotes">
<h2>Avis sur ma personne</h2>
    <?php foreach($avis as $img => $opignonOfThePerson) : ?>
<div class="quotes-container" id="quotes-container1">
    <div class="img-quotes-container">
        <img src="<?= $img ?>" alt="picture of Legolas" class="quotes-pic" />
        <img src="img/inverted-commas.png" alt="image of commas" class="commas" />
    </div>
    <?php foreach($opignonOfThePerson as $name => $opignon) : ?>
    <div class="exp-text-container">
        <p><?= $opignon ?></p>
        <p><b><?= $name ?></b></p>
    </div>
    <?php endforeach ?>
</div>
<?php endforeach ?>

                