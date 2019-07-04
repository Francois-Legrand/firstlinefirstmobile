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
            <!--carousel-->
            <?php
                include("carousel.php")
            ?>
        </header>
        <!--main-->
        <main class="all">
        <section>
            <article class="container__top container">
                <h4 class="title__site title__site--tarif" id="tarif">Nos tarifs</h4>
                <table class="container__table--primary">
                    <!--thead désigne l'entête du tableau-->
                    <thead>
                        <tr>
                    <!--th désigne la description de l'entête du tableau-->
                            <th>Réalisation</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!--tbody désigne le corp du tableau-->
                        <tr>
                    <!--td désigne la description du tableau-->
                            <td>Shampoing</td>
                            <td>7.50€</td>    
                        </tr>
                        <tr>
                            <td>Teinture</td>
                            <td>20€</td>
                        </tr>
                        <tr>
                            <td>Brushing</td>
                            <td>30€</td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="title__site title__site--tarification">Exemple de tarification</h4>
                <table>
                    <!--thead désigne l'entête du tableau-->
                    <thead>
                        <tr>
                    <!--th désigne la description de l'entête du tableau-->
                            <th>Réalisation</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <!--tfoot désigne le pièd du tableau-->
                        <td>Total</td>
                        <td>57.50€</td>
                    </tfoot>
                    <tbody>
                        <!--tbody désigne le corp du tableau-->
                        <tr>
                        <!--td désigne la description du tableau-->
                            <td>Shampoing</td>
                            <td>7.50€</td>    
                        </tr>
                        <tr>
                            <td>Teinture</td>
                            <td>20€</td>
                        </tr>
                        <tr>
                            <td>Brushing</td>
                            <td>30€</td>
                        </tr>
                    </tbody>
                </table>
            </article>
        </section>
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