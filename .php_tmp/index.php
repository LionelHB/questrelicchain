<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'accueil QuestRelic Chain</title>
    <link rel="shortcut icon" href="assets/logo/shorticon.webp" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>


<body>
    <!-- **********************************************
                    HEADER*************************** ********* -->
    <?php
    include "_justHeader.php";
    ?>
    <!-- **********************************************
                    MAIN*************************** ********* -->
    <main>
        <?php
        include "_justNav.php";
        ?>

        <section id="container">
            <div class="maincontain welcometext">
                <h2>Bienvenue sur QuestRelic Chain</h2>

                <p>La galerie en ligne dédiée aux objets cultes des jeux de rôle ! Notre plateforme vous permet
                    d'exposer des objets virtuels uniques et authentifiés sous la forme de NFT (Non-Fungible Tokens).
                    Que vous soyez un collectionneur passionné ou simplement à la recherche d'un souvenir emblématique
                    de vos jeux préférés, QuestRelicChain est la destination idéale pour vous.</p>

                <p>Nous vous proposons une sélection de reliques issues des plus grands univers de jeu de rôle. Des
                    potions de soin aux armes légendaires, en
                    passant par les cristaux magiques ou les grimoires, chaque objet est minutieusement choisi pour son
                    charme, son esthétique et la nostalgie qu'il provoque. Avec QuestRelicChain, vous pouvez être sûr de
                    posséder des
                    pièces uniques et précieuses, qui témoignent de l'histoire et de la richesse de cet univers
                    fantastique.</p>

                <p> Notre plateforme est entièrement basée sur la technologie blockchain, garantissant la sécurité, la
                    transparence et la traçabilité de chaque transaction effectuée. Vous pouvez donc les exposer en
                    toute
                    confiance, sachant que chaque NFT est unique, vérifiable et stocké de manière permanente sur la
                    blockchain.</p>

                <p> Notre équipe est passionnée par les jeux de rôle et les grands oubliés que sont les "items", et nous
                    sommes
                    fiers de partager cette passion avec notre communauté grandissante d'amateurs et de collectionneurs.
                    Nous vous invitons à explorer les galeries en ligne qui peublent notre sanctuaire et à découvrir les
                    trésors que nous avons en
                    réserve pour vous.</p>

                <p> Rejoignez-nous dès maintenant sur QuestRelicChain, la plateforme incontournable pour les
                    collectionneurs d'objets de jeux de rôle en NFT.</p>
                <a href="index.php">
                    <p>L'équipe QuestRelic Chain</p>
                </a>
            </div>
        </section>

        <!--design03** -->
        <div id="design03" class="designimage"></div>

        <!--contact form** -->

        <section id="container">
            <div id="contactus" class="maincontain containerform">
                <h2>Contactez nous</h2>
                <form action="">
                    <div class="textform">
                        <label for="name"></label>
                        <input class="myinput" type="text" placeholder="Nom">

                        <label for="name"></label>
                        <input class="myinput" type="text" placeholder="Prénom">

                        <label for="email"></label>
                        <input class="myinput" type="email" placeholder="E-mail">
                    </div>
                    
                    <div class="areabutton">
                        <textarea name="message" cols="30" rows="5" placeholder="Votre message"></textarea>

                        <button class="questbutton" type="submit">Envoyer</button>
                    </div>
                </form>

                <div id="linkcontactpro">
                    <p>Pour un contact professionnel, c'est par
                        <a href="contactpro.php#formpro">ICI !</a>
                    </p>
                </div>
            </div>
        </section>

    </main>

    <!-- **********************************************
                    FOOTER*************************** ********* -->
    <?php
    include "_justFooter.php";
    ?>

</body>

</html>