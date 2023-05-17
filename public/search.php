<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher sur QuestRelic Chain</title>
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
            <div class="maincontain formsearch">

                <!-- contain** -->
                <h2>Recherche</h2>

                <p>Vous cherchez un NFT particulier ? Une galerie ? Un posteur précis ? <br>
                    Essayer de faire une recherche ici !</p>

                <div id="nftsearch" class="containerform">
                    <form action="search">
                        <div class="textform">
                            <select name="search">
                                <option value="nftsearch">NFT</option>
                                <option value="galerysearch">Galerie</option>
                            </select>

                            <label for=""></label>
                            <input type="text" placeholder="Mot-clé">

                            <button class="questbutton" type="submit">Chercher</button>

                        </div>
                    </form>
                </div>
            </div>

        </section>


        <!--second section** -->
        <section id="container">
            <div class="maincontain maincard">
                <h2>Exemples de nfts QuestRelic Chain</h2>

                <!-- contain** -->
                <div id="cardcontenttop">
                    <!--**first card**-->
                    <div class="card">
                        <img src="assets/nft/consumable/potion/potion04.webp" alt="Image">
                        <div class="cardinfo">
                            <h3>Potion de soin</h3>
                            <p>Dans les RPG, les potions de soin sont des éléments clés qui peuvent guérir
                                instantanément les blessures les plus graves d'un personnage.</p>
                        </div>
                    </div>

                    <!--**seconde card**-->
                    <div class="card">
                        <img src="assets/nft/consumable/stone/stone08.webp" alt="Image">
                        <div class="cardinfo">
                            <h3>Pierre de Nécromancie</h3>
                            <p>Une pierre de nécromancie est un objet sombre et puissant, utilisé dans la magie noire
                                pour invoquer les morts. Ces pierres sont des cristaux ornés d'inscriptions maléfique.
                            </p>
                        </div>
                    </div>

                    <!--**third card**-->
                    <div class="card">
                        <img src="assets/nft/weapon/range/bow/bow05.webp" alt="Image">
                        <div class="cardinfo">
                            <h3>l'arc</h3>
                            <p>Les archers doivent être agiles et précis, car la précision de leurs tirs dépend de leur
                                habileté. Les arcs peuvent également être utilisés pour la chasse ou pour d'autres
                                activités.</p>
                        </div>
                    </div>

                    <!--**fourth card**-->
                    <div class="card">
                        <img src="assets/nft/equipment/glove/glove05.webp" alt="Image">
                        <div class="cardinfo">
                            <h3>Gants</h3>
                            <p>Les gants peuvent rendre invincibles sur le champ de bataille. Qui cherche à devenir un
                                véritable héro doit chercher les gants les plus puissants, les plus rares et les plus
                                légendaires.</p>
                        </div>
                    </div>
                </div>

                <div id="cardcontenttbottom">
                    <!--**fifth card**-->
                    <div class="card">
                        <img src="assets/nft/furniture/chest/chest05.webp" alt="Image">
                        <div class="cardinfo">
                            <h3>Coffre</h3>
                            <p>Ils peuvent contenir des armes légendaires, des objets magiques ou des potions rares. Il
                                faut être prêt à chercher, à trouver et à ouvrir tous les coffres qui se trouvent sur sa
                                route.</p>
                        </div>
                    </div>

                    <!--**sixth card**-->
                    <div class="card">
                        <img src="assets/nft/equipment/wizardscloak/wizardscloak06.webp" alt="Image">
                        <div class="cardinfo">
                            <h3>Tenue de magicien</h3>
                            <p>La maîtrise de la magie et la puissance mystique. Elles confèrent des pouvoirs
                                incroyables et une aura de mystère, elle rend capable de manipuler les forces les plus
                                élémentaires de l'univers.</p>
                        </div>
                    </div>

                    <!--**seventh card**-->
                    <div class="card">
                        <img src="assets/nft/furniture/map/map5.webp" alt="Image">
                        <div class="cardinfo">
                            <h3>Carte</h3>
                            <p> La connaissance, l'exploration et l'aventure. Elles sont un outil indispensable.
                                Aventurier ou chasseur de trésors qui cherche à découvrir les secrets cachés du monde.
                            </p>
                        </div>
                    </div>

                    <!--**eighth card**-->
                    <div class="card">
                        <img src="assets/nft/weapon/melee/sword/sword06.webp" alt="Image">
                        <div class="cardinfo">
                            <h3>Épée</h3>
                            <p> S'il devait y avoir un classique, ce serait elle. L'épée est le symbole ultime de la
                                guerre et de la victoire.Claymore, katana, gladius sont les armes les plus courantes
                                dans les RPGs.</p>
                        </div>
                    </div>
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