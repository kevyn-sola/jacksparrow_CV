<?php
    $experiencesProfessionnelles = [

       '1634 - 1640' => [
            'Capitaine' => 'Capitaine du Black Pearl. Pillage & recherche de trésors en tout genre !'
        ],
        '1640' => [
            'Capitaine' => 'Capitaine d\'un vieux raffiot avec une équipe de bras cassés. Objectif : Récupérer mon beau Black Pearl !'
        ],
        '1642 - 1644' => [
            'Capitaine' => 'Capitaine du Black Pearl'
        ],
        '1644' => [
            'Undefined' => 'Mort - RIP moi ! 🪦'
        ],
        '1646' => [
            'Résurrection' => 'Plus mort !'
        ],
        '1649 - 1652' => [
            'Capitaine' => 'Recherche de la Fontaine de Jouvence.'
        ],

    ];
    $avis = [

        'img/legolas.jpg' => ['William Turner' => 'Cet homme est le meilleur arch... euh tireur que j\'ai rencontré de ma vie d\'elf... euh de pirate.'],
        'img/barbossa.jpeg' => ['Hector Barbossa' => 'Je n\'ai jamais aussi bien vécu une mutinerie qu\'avec Jack Sparrow !'],
        'img/elizabeth.jpg' => ['Elizabeth Swann' => 'Il ne s\'est jamais rien passé entre Jack et moi et il ne se passera jamais rien !!'],
        'img/Gibbs.jpg' => ['Joshamee Gibbs' => 'Super Capitaine ! Quelle prestance ! Quel charisme ! J\'espère qu\'en disant ça il va enfin me payer tout ce qu\'il me doit.'],

    ];

?>

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

                