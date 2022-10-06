<?php require '../data/data.php' ?>

<div class="planche-title">
    <h1>Experiences</h1>
</div>
<div class="experience-pro-container">
    <?php foreach ($data['experiencesProfessionnelles'] as $date => $experience) : ?>
        <div class="date">
            <p>
                <?= $date ?>
            </p>
        </div>
        <div class="experience">
            <?php foreach ($experience as $title => $description) : ?>
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
        <?php foreach ($data['avis'] as $img => $opignonOfThePerson) : ?>
            <div class="img-quotes-container">
                <img src="<?= $img ?>" alt="picture of Legolas" class="quotes-pic" />
                <img src="../assets/img/inverted-commas.png" alt="image of commas" class="commas" />
                <?php foreach ($opignonOfThePerson as $name => $opignon) : ?>
                    <div class="quote-text-container">
                        <p><?= $opignon ?></p>
                        <hr>
                        <p><b><?= $name ?></b></p>
                    </div>

                    <?php endforeach ?>
                </div>
    <?php endforeach ?>
    </div>
</div>