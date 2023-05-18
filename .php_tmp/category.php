<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category QuestRelic Chain</title>
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
                <h2>Catégories des items sur QuestRelic Chain</h2>

                <!-- accordeon** -->
                <div class="accordion accordion-flush" id="questrelicaccordion">

                    <!-- Item 1*** -->
                    <div id="questrelicaccordionitem" class="accordion-item">
                        <h2 class="accordion-header">
                            <button id="questrelicaccordionbutton" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Consommable
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#questrelicaccordion">
                            <div id="questrelicaccordionbody" class="accordion-body">
                                <h3>Potions</h3>
                                Elles sont souvent utilisées pour soigner les personnages, peut aussi donner des
                                capacités spéciales temporaires.
                                <h3>Parchemins</h3>
                                Ils peuvent être utilisés pour lancer des sorts spécifiques selon leur niveau et leur
                                type.
                                <h3>Pierres</h3>
                                Sont des objets magiques qui permettent aux joueurs d'acquérir des pouvoirs spéciaux ou
                                de renforcer leurs capacités.
                                <a href="category.php#questrelicaccordionitem">
                                    <div id="uparrow">⇧</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    
                    <!-- Item 2*** -->
                    <div id="questrelicaccordionitem" class="accordion-item">
                        <h2 class="accordion-header">
                            <button id="questrelicaccordionbutton" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Équipement
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#questrelicaccordion">
                            <div id="questrelicaccordionbody" class="accordion-body">
                                <h3>Amulettes</h3>
                                Objets sacré qui confère à son porteur des pouvoirs magiques, elles peuvent être
                                utilisées pour améliorer la défense, la régénération de la santé ou pour accroître la
                                puissance des sorts.
                                <h3>Armures</h3>
                                Équipement qui protège le personnage contre les dégâts infligés par les ennemis, elles
                                sont classées en fonction de leur résistance, de leur poids et de leur niveau de rareté.
                                <h3>Gants</h3>
                                Équipements qui confèrent des bonus à la défense et/ou à l'attaque du personnage. Ils
                                peuvent également avoir des propriétés magiques qui améliorent les compétences du
                                personnage.
                                <h3>Casques</h3>
                                Équipements essentiels pour protéger la tête des personnages. Ils peuvent offrir des
                                avantages défensifs en réduisant les dégâts subis ou en augmentant la résistance aux
                                éléments tels que le feu ou la glace.
                                <h3>Anneaux</h3>
                                Équipements qui procurent des bonus ou des effets magiques.En général, les joueurs
                                peuvent porter deux anneaux à la fois, chacun offrant des avantages différents.
                                <h3>Capes de Sorcier</h3>
                                Accessoire emblématique, souvent portée par les personnages de
                                classe magiciens ou sorciers.
                                <a href="category.php#questrelicaccordionitem">
                                    <div id="uparrow">⇧</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3*** -->
                    <div id="questrelicaccordionitem" class="accordion-item">
                        <h2 class="accordion-header">
                            <button id="questrelicaccordionbutton" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Fourniture
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#questrelicaccordion">
                            <div id="questrelicaccordionbody" class="accordion-body">
                                <h3>Coffres</h3>
                                Objet interactif que les joueurs peuvent ouvrir pour obtenir des récompenses. Ces
                                récompenses peuvent inclure des équipements, des objets de quête, de l'or ou d'autres
                                objets de valeur.
                                <h3>Pièces</h3>
                                Généralement, la principale unité de monnaie utilisée pour acheter des objets, des
                                équipements et des
                                services. Les pièces peuvent être gagnées en tuant des ennemis, en effectuant des quêtes
                                ou en vendant des objets.
                                <h3>Grimoires</h3>
                                Un livre de sorts et d'incantations utilisé dans les jeux de rôle vidéo ludique pour les
                                personnages de type magicien, sorcier ou enchanteur. Il peut contenir des sorts pour
                                lancer des attaques, guérir des blessures ou même invoquer des créatures.
                                <h3>Cartes</h3>
                                Outil essentiel dans les jeux. Elles permettent aux joueurs de se situer dans le monde
                                du jeu et de se repérer dans l'environnement en affichant des informations clés telles
                                que les lieux, les ennemis, les quêtes et les points d'intérêt.
                                <h3>Navire</h3>
                                Les navires ne se limitent pas à naviguer sur l'eau, ils peuvent également voler dans
                                les cieux grâce à la magie ou à une technologie avancée. Les navires volants sont
                                souvent des moyens de transport privilégiés pour explorer des terres inconnues.
                                <a href="category.php#questrelicaccordionitem">
                                    <div id="uparrow">⇧</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Item 4*** -->
                    <div id="questrelicaccordionitem" class="accordion-item">
                        <h2 class="accordion-header">
                            <button id="questrelicaccordionbutton" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor" aria-expanded="false" aria-controls="flush-collapseFor">
                                Arme
                            </button>
                        </h2>
                        <div id="flush-collapseFor" class="accordion-collapse collapse" data-bs-parent="#questrelicaccordion">
                            <div id="questrelicaccordionbody" class="accordion-body">
                                <h3>Magiques</h3>
                                Objet qui confère des pouvoirs
                                surnaturels à son porteur. Elles peuvent avoir des propriétés élémentaires, des effets
                                de
                                statut ou des capacités spéciales qui peuvent améliorer les compétences de combat du
                                personnage.
                                <h3>Mélées</h3>
                                Armes de combat rapproché dans les jeux, telles que les épées, les haches et les
                                marteaux. Elles sont souvent utilisées par les guerriers, les chevaliers et les
                                paladins.
                                <h3>À distance</h3>
                                Ces armes peuvent inclure des arcs ou des arbalètes. Elles sont souvent utilisées par
                                les personnages spécialisés dans le combat à distance, tels que les archers ou les
                                chasseurs.
                                <a href="category.php#questrelicaccordionitem">
                                    <div id="uparrow">⇧</div>
                                </a>
                            </div>
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