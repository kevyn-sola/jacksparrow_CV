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

        <div class="border-top"></div>
        
        <section class="section section1" id="profil">
            <?php require 'profil.php'; ?>
        </section>

        <div class="border-top"></div>


        <div class="ba_pirates">
            <video id="background-video" src="/assets/video/video_bg_jack.mp4" autoplay loop muted>
            </video>
        </div>



        <section class="section section2" id="competences">
            <div class="skill">
                <?php require 'skill_Data.php'; ?>
            </div>
        </section>

        
        <div class="ba_pirates">
            <video id="background-video" src="/assets/video/video_bg_jack.mp4" autoplay loop muted>
            </video>
        </div>



        <section class="section section3" id="experience-pro">
            <?php require 'experience_pro.php' ?>
        </section>



        <div class="ba_pirates"></div>
        <video id="background-video" src="../assets/video/video_bg_jack.mp4" autoplay loop muted>
        </video>

        <section class="section section4">
            <div class="planche-title">
                <h1>Loisirs</h1>
            </div>
            <h1 id="loisirs">Loisirs</h1>
            <div class="loisirs">
                <?php require 'loisirs.php' ?>
            </div>
        </section>

        <div class="lastImg"></div>
    </main>



    <div>
        <?php require 'form.php'; ?>
    </div>
    <footer>
        <h2>Github:</h2>
        <div class="links">
            <a href="https://github.com/hhertout" target="_blank">Hugues Hertout</a>
            <a href="https://github.com/V-Gillet" target="_blank">Valentin Gillet</a>
            <a href="https://github.com/toomanyMG" target="_blank">Mikael Gallé</a>
            <a href="https://github.com/Planger45" target="_blank">Kevyn Sola</a>
        </div>
    </footer>



</body>

</html>