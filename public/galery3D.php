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
                <h2>Galerie de Jean-Michel</h2>

                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle bottom offcanvas</button>

                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">NFT 25</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        ou lalam
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