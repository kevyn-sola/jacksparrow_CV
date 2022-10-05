<?php

require '../data/data.php';


foreach ($data['Loisirs'] as $title => $hobbyContent) : ?>
    <div class="loisirs">
        <div class=loisirs-container>
            <img src="../assets/img/plancheBois3.png" alt="" class='plank'>
            <div class="loisirs-cards-container" id="cards-container1">
                <div class="loisirs-cards">
                    <div class="loisirs-text-container">
                        <h2><?= $title ?></h2>
                        <p><?= $hobbyContent[0] ?></p>
                    </div>
                    <img src="<?= $hobbyContent[1] ?>" alt="<?= $hobbyContent[2] ?>" class="picto" />
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>