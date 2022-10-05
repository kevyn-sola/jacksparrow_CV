<?php

require '../data/data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/style/root.css" />
    <link rel="stylesheet" href="../assets/style/style.css" />
    <link rel="stylesheet" href="../assets/style/form.css" />
    <link rel="stylesheet" href="../assets/style/loisirs.css" />

</head>


<body>
    <section class="section section4">
        <div class="loisirs">
            <div class=loisirs-container>
                <img src="../assets/img/plancheBois3.png" alt="" class='plank'>
                <div class="loisirs-cards-container" id="cards-container1">
                    <div class="loisirs-cards">
                        <div class="loisirs-text-container">
                            <?php
                            foreach ($data['Loisirs'] as $hobby => $hobbies) :
                                foreach ($hobbies as $hobbyTitle => $hobbyContent) : ?>
                                    <h2><?= $hobbyTitle ?></h2>
                                    <p><?= $hobbyContent ?></p>
                                <?php endforeach ?>
                            <?php endforeach ?>
                        </div>
                        <img src="../assets/img/kraken.png" alt="an image of a kraken" class="picto" />
                    </div>
                </div>
            </div>

            <div class=loisirs-container>
                <img src="../assets/img/plancheBois3.png" alt="" class='plank'>
                <div class="loisirs-cards-container" id="cards-container2">
                    <div class="loisirs-cards">
                        <div class="loisirs-text-container">
                            <h2>Escrime</h2>
                            <p>J'aime la bagarre.</p>
                        </div>
                        <img src="../assets/img/swords.png" alt="2 katanas crossing each other" class="picto" />
                    </div>
                </div>
            </div>

            <div class=loisirs-container>
                <img src="../assets/img/plancheBois3.png" alt="" class='plank'>
                <div class="loisirs-cards-container" id="cards-container3">
                    <div class="loisirs-cards">
                        <div class="loisirs-text-container">
                            <h2>Tir sportif</h2>
                            <p>Pan, pan, pan.</p>
                        </div>
                        <img src="../assets/img/musket.png" alt="an image of a musket" class="picto" />
                    </div>
                </div>
            </div>

            <div class=loisirs-container>
                <img src="../assets/img/plancheBois3.png" alt="" class='plank'>
                <div class="loisirs-cards-container" id="cards-container4">
                    <div class="loisirs-cards">
                        <div class="loisirs-text-container">
                            <h2>Rhum</h2>
                            <p>Juste le boire, pas le distiller.</p>
                        </div>
                        <img src="../assets/img/barrel.png" alt="image of a barrel" class="picto" />
                    </div>
                </div>
            </div>

            <div class=loisirs-container>
                <img src="../assets/img/plancheBois3.png" alt="" class='plank'>
                <div class="loisirs-cards-container" id="cards-container5">
                    <div class="loisirs-cards">
                        <div class="loisirs-text-container">
                            <h2>Seduction</h2>
                            <p>Des fois ça marche.</p>
                        </div>
                        <img src="../assets/img/heart.png" alt="image of a heart" class="picto" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
</body>

</html>