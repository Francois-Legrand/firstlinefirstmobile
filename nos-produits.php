<!DOCTYPE html>
<html lang="fr">
    <head>
    <title>First-line</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/compiled-4.8.0.min.css">
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <link href="bootstrap-social.css" rel="stylesheet" >
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright|Quicksand&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="style.css">
    </head>
    <body id="body">
        <!--top of page-->
        <header>
            <!--menu-->
            <?php
                include("menu.php")
            ?>
        </header>
        <!--main-->
        <main class="all">
            <!--carousel-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="pause">
                <ol class="carousel-indicators">
                    <!--indique l'ordre de déroulement des carousels-->
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container__picture">
                            <h3 class="title__site">Nos produits</h3>
                            <div class="slide__picture">
                                <img  src="img/produits/day-cream-leavein-karite-hydra-rene-furterer_0.png" class="d-block w-300px" alt="day cream leavein karite hydra rene furterer">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/Lumicia_Shampooing_revelation_lumière_Rene-Furterer.png" class="d-block w-300px" alt="Lumicia Shampooing revelation lumière Rene Furterer">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/day-cream-leavein-karite-nutri-rene-furterer.png" class="d-block w-300px" alt="day cream leavein karite nutri rene furterer">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/mask-karite-nutri-rene-furterer.png" class="d-block w-300px" alt="mask karite nutri rene furterer">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/oil-karite-nutri-rene-furterer_0.png" class="d-block w-300px" alt="oil karite nutri rene furterer">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/overnight-haircare-leavein-karite-nutri-rene-furterer.png" class="d-block w-300px" alt="overnight haircare leavein karite nutri rene furterer">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/RF-INITIA-Packshots-shamp-douceur-brillance-250ml-400x493.png" class="d-block w-300px" alt="shamp douceur brillance 250ml">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/rf_website_okara-color_color-protection-mask_jar_200ml_packshot_product-page_400x493.png" class="d-block w-300px" alt="okara color protection mask 200ml">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/rf_website_okara-color_color-protection-shampoo_200ml_packshot_product-page_400x493.png" class="d-block w-300px" alt="protection shampoo 200ml">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/rf_website_triphasic_stimulating-shampoo_200ml_packshot_product-page_400x493_0.png" class="d-block w-300px" alt="triphasic stimulating shampoo 200ml">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/shampoo-karite-nutri-rene-furterer_0.png" class="d-block w-300px" alt="shampoo-karite-nutri-rene-furterer">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/rf_fiche-produits-packshots-okara-protectcolor-masque-sublim-pot-droit-400x493.png" class="d-block w-300px" alt="okara protectcolor masque sublim pot">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/shampoo_5_sens_renefurterer_2.png" class="d-block w-300px" alt="shampoo 5 sens renefurterer">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/7_-_gloss_brillance_ultime.png" class="d-block w-300px" alt="gloss brillance ultime">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/masque-reparateur-apres-soleil.png" class="d-block w-300px" alt="masque reparateur apres soleil">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/traitement_antichute_concentre_rf80.png" class="d-block w-300px" alt="traitement antichute concentre">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/1_-_mousse_vegetale_volume_et_fixation.png" class="d-block w-300px" alt="mousse vegetale volume et fixation">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/rf_website_vitalfan_vitalite_30caps_packshot_product-page_400x493_0.png" class="d-block w-300px" alt="vitalfan vitalite">
                            </div>
                        </div>
                    </div>
                </div>
                <!--bouton de déroulement des carousels-->
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="fa fa-chevron-right #2BA9E1" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </main>
        <!--footer-->
        <?php
            include("footer.php");
        ?>
    </body>
    <!--script-->
    <?php
        include("script.php");
    ?>
</html>