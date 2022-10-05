<?php
require '../data/data.php'; ?>

<div class="competences-section">
    <h1> Competences </h1>
    <div class="competences-container">
        <div class="competences">
            <?php foreach ($data['competences'] as $title => $objects) : ?>
                <div class='<?= $objects['classIconSkill'] ?>'></div>
                <h2><?= $title ?></h2>
                <p><?= $objects['skilldesc'] ?></p>
            <?php endforeach ?>

        </div>
    </div>
</div>









<!--  <h1>Competences</h1>
<div class="competences-container">

    <div class="competences">
        <div class="icon-fighter"></div>
        <h2>Bagarreur</h2>
        <p>23 Batailles à mon actif !</p>
    </div>
    <div class="competences">
        <div class="icon-rhum"></div>
        <h2>Tiens l'alcool</h2>
        <p> Santé !</p>
    </div>
    <div class="competences">
        <div class="icon-pillage"></div>
        <h2>Vol/Pillage</h2>
        <p>Quel pirate n'aime pas les trésors ?</p>
    </div>
    <div class="competences">
        <div class="icon-management"></div>
        <h2>Management</h2>
        <p>Capitaine sur une dizaines de navires.</p>
    </div>
    <div class="competences">
        <div class="icon-run"></div>
        <h2>Rapide</h2>
        <p> Je cours plus vite qu'une tribu de cannibales.</p>
    </div>
</div>
</div>  -->