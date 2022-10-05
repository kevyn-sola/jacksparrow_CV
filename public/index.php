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

<body>
    <header>
        <div class="head-fullscreen">
            <div class="bg-menu"></div>
            <div class="background-image"></div>
        </div>
        <nav>
            <div class="title">
                <h1>J<span id="scale-ack">AcK</span> Sparrow</h1>
            </div>
            <div class="menu-burger" id="menu-burger">
                <div class="lines-container">
                    <div class="burger-lines line-top"></div>
                    <div class="burger-lines line-middle"></div>
                    <div class="burger-lines line-bot"></div>
                </div>
            </div>
            <div class="display-menu" id="display-menu">
                <div class="menu-burger-open" id="menu-burger-open">
                    <div class="lines-container">
                        <div class="burger-lines-open line-top-open"></div>
                        <div class="burger-lines-open line-middle-open"></div>
                        <div class="burger-lines-open line-bot-open"></div>
                    </div>
                </div>
                <a href="#top" class="display-menu-title">Menu</a>
                <a href="#profil" class="display-menu-links">Profil</a>
                <a href="#competences" class="display-menu-links">Competences</a>
                <a href="#experience-pro" class="display-menu-links">Experience professionelle</a>
                <a href="#loisirs" class="display-menu-links">Loisirs</a>
                <a href="#contact" class="display-menu-links">Contact</a>
            </div>
        </nav>
        <h2 class="subtitle-header">Free to contract !</h2>
        <div class="scroll-down-indicator">
            <a href="#profil" class="scrooll-half-cross">
                <div class="scroll-half-cross-lines half-cross-line1"></div>
                <div class="scroll-half-cross-lines half-cross-line2"></div>
            </a>
        </div>
    </header>
    <main>
        <section class="section section1" id="profil">
            <div class="profil-jack">

                <div class="img-icon-profil">
                    <img src="/img/jack-profil.png" alt="Photo de Jack Sparrow">
                    <div class="permis">
                        <img src="/img/icon-anchor.png" alt="Icone d'une ancre de bateau" id="ancre-bateau">
                        <p> Permis Bateau </p>
                    </div>
                </div>
                <div class="content-profil">
                    <h1>Capitaine Jack Sparrow</h1>
                    <p>Seigneur pirate de la mer des Caraïbes, Née le 11 janvier 1693. <br>
                        J’aime boire du rhum et séduire des femmes. <br>
                        Toujours partant pour chercher quelque trésors surnaturel, rien de bon qu’une bonne quête à la
                        recherche de richesse ! <br>
                        Je suis particulièrement partisan du choix de la négociation plutôt que de faire parler les
                        armes. <br>
                        Certains vous diront que je suis un traitre mais ne faite pas attention à ce genre de calomnies.
                        <br>

                    </p>
                    <p class="info-profil">
                        Vous pouvez me retrouver à Nassau dans les Caraïbes <br>
                        ou <br>
                        Me contacter par perroquet voyageur de la compagnie Papagaio Livia en choisissant de remplir le
                        formulaire à la fin de cette page. <br>



                    </p>
                </div>
            </div>
            <div class="sign_jack">
                <img id="signature" src="/img/c2635b48197b847d0d05a39561d74aea.png" alt="signature jack" />
            </div>
        </section>
        <div class="ba_pirates">
            <video id="background-video" src="/video/video_bg_jack.mp4" autoplay loop muted>
            </video>
        </div>
        <section class="section section2" id="competences">
            <?php require 'skill_Data.php' ?>
        </section>
        <div class="ba_pirates">
            <video id="background-video" src="/video/video_bg.mp4" autoplay loop muted>
            </video>
        </div>


        <section class="section section3" id="experience-pro">
            <?php require 'experience_pro.php' ?>
        </section>


        <div class="ba_pirates"></div>
        <section class="section section4">
            <h1 id="loisirs">Loisirs</h1>
            <div class="loisirs">
                <div class="loisirs-cards-container" id="cards-container1">
                    <div class="loisirs-cards">
                        <div class="loisirs-text-container">
                            <h2>Pecher</h2>
                            <p>Kraken, merle, sardine.</p>
                        </div>
                        <img src="img/kraken.png" alt="an image of a kraken" />
                    </div>
                    <div class="background-block"></div>
                    <div class="background-block2"></div>
                </div>

                <div class="loisirs-cards-container" id="cards-container2">
                    <div class="loisirs-cards">
                        <div class="loisirs-text-container">
                            <h2>Escrime</h2>
                            <p>J'aime la bagarre.</p>
                        </div>
                        <img src="/img/swords.png" alt="2 katanas crossing each other" />
                    </div>
                    <div class="background-block"></div>
                    <div class="background-block2"></div>
                </div>

                <div class="loisirs-cards-container" id="cards-container3">
                    <div class="loisirs-cards">
                        <div class="loisirs-text-container">
                            <h2>Tir sportif</h2>
                            <p>Pan, pan, pan.</p>
                        </div>
                        <img src="img/musket.png" alt="an image of a musket" />
                    </div>
                    <div class="background-block"></div>
                    <div class="background-block2"></div>
                </div>

                <div class="loisirs-cards-container" id="cards-container4">
                    <div class="loisirs-cards">
                        <div class="loisirs-text-container">
                            <h2>Rhum</h2>
                            <p>Juste le boire, pas le distiller.</p>
                        </div>
                        <img src="img/barrel.png" alt="image of a barrel" />
                    </div>
                    <div class="background-block"></div>
                    <div class="background-block2"></div>
                </div>

                <div class="loisirs-cards-container" id="cards-container5">
                    <div class="loisirs-cards">
                        <div class="loisirs-text-container">
                            <h2>Seduction</h2>
                            <p>Des fois ça marche.</p>
                        </div>
                        <img src="img/heart.png" alt="image of a heart" />
                    </div>
                    <div class="background-block"></div>
                    <div class="background-block2"></div>
                </div>
            </div>
        </section>
        <div class="lastImg"></div>
    </main>
    <footer>
        <form action="" method="get" class="form-parchemin" id="contact">
            <div class="form-input">
                <legend>Allez mon gars... Contact moi!</legend>
                <label for="name">Ecrit ton nom!</label>
                <input type="text" name="name" id="name" required placeholder="Name" />
            </div>
            <div class="form-input">
                <label for="email">Ajoute ton adresse postal numerique!</label>
                <input type="text" name="email" id="email" required placeholder="Email adress" />
            </div>
            <div class="form-input">
                <div class="form-btn-flex">
                    <input class="form-btn" type="submit" value="Appose ta marque !!" />
                    <img src="/img/cachet_cire_jack.png" alt="Cachet de cire Pirates" />
                </div>
            </div>
            <div class="copyright">
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
            </div>
        </form>
    </footer>
</body>

</html>