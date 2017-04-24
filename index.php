<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Cham-Chan Garden</title>
	


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/business-casual.css" rel="stylesheet">

   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<img src ="img/logo.gif"align ="right" > 
    <div class="brand">Cham-Chan Garden</div>
    <div class="address-bar">Chanthaburi</div>

    <?php include "navbar.php"; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Our Garden</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Cham-Chan Garden</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"> <strong>Wiki </strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-center" src="img/value.jpg" alt="">
                    <hr class="visible-xs">
                    <center><h2>History of Durian</h2>
					The durian (/ˈdjʊriən/) is the fruit of several tree species belonging to the genus Durio. </center>
The name "durian" is derived from the Malay-Indonesian languages word for duri or "spike", 
a reference to the numerous spike protuberances of the fruit, together with the noun-building suffix -an. 
There are 30 recognised Durio species, at least nine of which produce edible fruit, and over 300 named 
varieties in Thailand.Durio zibethinus is the only species available in the international market all 
other species are sold only in their local regions. There are hundreds of durian cultivars; many consumers 
express preferences for specific cultivars, 
which fetch higher prices in the market.
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- <p>Copyright</p> -->
                    <p>เว็บไซต์นี้เพื่อการศึกษา</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/jquery.js"></script>

 
    <script src="js/bootstrap.min.js"></script>

  
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
