<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les partenaires QuestRelic Chain</title>
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

        <!--first section** -->
        <section id="container">
            <div class="maincontain procontainer">
                <h2>Partenaire(s)</h2>
                <ul>
                    <li><a href="#"><img class="imglogopro" src="assets/logo/logopartnair/tatajosi.webp" alt="logo, Chez TataJosi">
                            <p>Chez TataJosy</p>
                        </a>
                    </li>
                    <li><a href="#"><img class="imglogopro" src="assets/logo/logopartnair/goblinfarceur.webp" alt="logo, goblin farceur">
                            <p>Le Goblin Farceur</p>
                        </a>
                    </li>
                    <li><a href="#"><img class="imglogopro" src="assets/logo/logopartnair/aubondragon.webp" alt="logo, au bon dragon">
                            <p>Au Bon Dragon</p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <!--second section** -->

        <section id="container">
            <div class="maincontain welcometext">
                <h2>Comme d'autres, rejoignez l'aventure "QuestRelic Chain"</h2>
                <p>"QuestRelic Chain" est un site de NFTs dédiée aux objets cultes des jeux de rôle, qui permet aux
                    utilisateurs de
                    partager leurs créations artistiques sous forme de jetons non fongibles sur la blockchain
                    Ethereum. Notre plateforme offre une galerie en ligne où les créateurs peuvent exposer leurs
                    NFTs, ainsi qu'une section communautaire où les utilisateurs peuvent interagir et échanger des
                    idées.</p>

                <p> Nous sommes fiers d'avoir créé une communauté dynamique et passionnée, qui se rassemble autour
                    de la nostalgie des RPG ou l'amour des "triple A" récent et des arts numériques. Notre site offre
                    l'opportunité aux utilisateurs de montrer au monde entier leur collection et de trouver des
                    acheteurs pour leurs
                    NFTs. Nous mettons également à disposition des outils communautaires qui permettent aux utilisateurs
                    de faire connaissance et de discuter autours des NFTs ou
                    du prix de leurs NFTs (par exemple).</p>
            </div>
        </section>

        <!--design06** -->
        <div id="design06" class="designimage"></div>

        <!--third section** -->
        <section id="container">
            <div class="maincontain welcometext">

                <h2>Contactez-nous pour toute proposition</h2>
                <p>Nous souhaitons continuer à développer notre plateforme et à étendre notre communauté. C'est
                    pourquoi nous invitons tous partenaires potentiels, amateurs ou passionné des reliques vidéo
                    ludiques à nous
                    rejoindre et participer à cette aventure.</p>

                <p>Nous sommes impatients de vous voir sur "QuestRelic Chain" et de découvrir toutes les merveilles que
                    vous
                    avez à partager avec notre communauté !</p>
                <p> Si vous avez des questions, des idées ou des propositions, n'hésitez pas à nous contacter via le
                    formulaire
                    ci-dessous.</p>

                <p class="signminicuteteam">L'équipe <a href="index.php"><span>QuestRelic Chain.</span></a> </p>
            </div>
        </section>

        <!--design07** -->
        <div id="design07" class="designimage"></div>

        <!--form section** -->
        <section id="container">
            <div class="maincontain containerform">
                <h2>Formulaire de contact professionnel</h2>

                <!--contact form** -->
                <form action="">

                    <div id="formpro" class="textform contactproform">
                        <label for="firstname"></label>
                        <input class="myinput" type="text" placeholder="Nom">

                        <label for="lastname"></label>
                        <input class="myinput" type="text" placeholder="Prénom">

                        <label for="Enterprise"></label>
                        <input class="myinput" type="text" placeholder="Votre société">

                        <label for="telephone"></label>
                        <input class="myinput" type="tel" placeholder="Téléphone">

                        <label for="email"></label>
                        <input class="myinput" type="email" placeholder="E-mail">

                        <label for="object"></label>
                        <input class="myinput" type="text" placeholder="Objet">
                    </div>

                    <textarea name="message" cols="1" rows="12" placeholder="Votre message"></textarea>

                    <button class="questbutton" type="submit">Envoyer</button>
                </form>
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