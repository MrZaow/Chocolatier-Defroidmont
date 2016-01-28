<!DOCTYPE html>
<html lang="fr">
<?php include("../../includes/head.php") ?>
<body>
    <?php include("../../includes/fr/header.php") ?>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(../../images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <img src="../../images/logo3.png" alt="Logo chocolaterie Defroidmont">
                                    <h1 class="animation animated-item-1">Chocolatier Defroidmont</h1>
                                    <h4 class="animation animated-item-2">Le goût. L'émotion.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(../../images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h1 class="animation animated-item-1">Nos chocolats de Pâques sont là !</h1>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="paques.php">Voir les chocolats de Pâques</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(../../images/equipe-defroidmont.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">N’hésitez pas à passer vos commandes</h2>
                                    <h3 class="animation animated-item-2">Téléphone : 086 21 84 40</h3>
                                    <h3 class="animation animated-item-3">Mail : contact@chocolatier-defroidmont.be</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="services" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-time icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Heures d'ouverture</h3>
                            <h4>Erezée</h4>
                            <p>Ouvert du mardi au samedi de 10h à 18h et le dimanche de 10h à 16h30</p>
                            <h4>Durbuy</h4>
                            <p>Ouvert tous les jours de 10h à 16h30 sauf le mardi et le mercredi</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-shopping-cart icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Vente de chocolat</h3>
                            <p>Vente de chocolat artisanal, dégustations et conseils.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-group icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Visite du musée</h3>
                            <p>Visite à la découverte du musée du chocolat.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section><!--/#services-->

    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Nos délicieux produits</h3>
                    <p>Quelques un des chocolats que nous produisons dans notre chocolaterie à Érezée</p>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <a href="../../pages/fr/ballotins.php">
                                                    <img id="produit" class="img-responsive" src="../../images/ballotins.jpg" alt="Ballotins">
                                                </a>
                                                <h5>
                                                    Ballotins
                                                </h5>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <a href="../../pages/fr/blocnature.php">
                                                    <img id="produit" class="img-responsive" src="../../images/blocnature.jpg" alt="">
                                                </a>
                                                <h5>
                                                    Blocs nature
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <a href="../../pages/fr/blocnature.php">
                                                    <img id="produit" class="img-responsive" src="../../images/blocfruit.jpg" alt="">
                                                </a>
                                                <h5>
                                                    Blocs fruit
                                                </h5>
                                            </div>
                                        </div>
                                    </div>    
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <a href="../../pages/fr/tablettesbrisure.php">
                                                    <img id="produit" class="img-responsive" src="../../images/tablettebrisure.jpg" alt="">
                                                </a>
                                                <h5>
                                                    Tablettes brisure
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <a href="../../pages/fr/tablettesorigine.php">
                                                    <img id="produit" class="img-responsive" src="../../images/taborigine1.jpg" alt="">
                                                </a>
                                                <h5>
                                                    Tablettes d'origine
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <a href="../../pages/fr/batonsfourres.php">
                                                    <img id="produit" class="img-responsive" src="../../images/baton.jpg" alt="">
                                                </a>
                                                <h5>
                                                    Bâtons fourrés
                                                </h5>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <a href="../../pages/fr/pate.php">
                                                    <img id="produit" class="img-responsive" src="../../images/pate.jpg" alt="">
                                                </a>
                                                <h5>
                                                    Pâtes à tartiner
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->

    <section id="testimonial" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                        <h2>Ce que nos clients pensent de nous</h2>
                        <p>La satisfaction de nos clients est notre priorité</p>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <blockquote>
                                <p>
                                    Les pralines sont extras! Philippe Defroidmont est sans cesse à la recherche de nouvelles
                                    sensations pour éveiller les papilles gustatives de ses clients...
                                    La boutique est sympathique avec de bons produits de bouche, idéal pour vos cadeaux quelconques.
                                </p>
                                <small>Emeline Quirynen de <cite title="Source Title">Google Maps</cite></small>
                            </blockquote>
                            <blockquote>
                                <p>
                                    Visite bien sympathique. Un petit retour dans l'histoire de cette famille qui visiblement aime son chocolat. 
                                    Un réel plaisir de dégustation si on l'aime, le chocolat
                                </p>
                                <small>Virginie Danny de <cite title="Source Title">TripAdvisor</cite></small>
                            </blockquote>
                        </div>
                        <div class="col-md-6">
                            <blockquote>
                                <p>
                                    C'est toujours un plaisir de terminer une ballade par un tour dans cette chocolaterie pour une dégustation sur la terrasse.
                                    Mais les pralines achetées sont trop vite mangées et il faudrait déjà y retourner :)
                                </p>
                                <small>Lucie V de <cite title="Source Title">TripAdvisor</cite></small>
                            </blockquote>
                            <blockquote>
                                <p>Super musée, très didactique, bien fait. Très intéressant de voir à l'oeuvre dans l'atelier.
                                 Dégustations agréables! petite boutique avec souvenirs gourmands à rapporter, divin!</p>
                                <small>Natalie F de <cite title="Source Title">TripAdvisor</cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->

    <?php include("../../includes/fr/bottom.php") ?>

    <?php include("../../includes/fr/footer.php") ?>

    <?php include("../../includes/script.php") ?>
</body>
</html>