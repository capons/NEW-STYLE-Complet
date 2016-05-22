<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="style/index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <p class="no-margin w-title"><span style="color:red">b</span>Shop</p>
            </div>
            <div id="basket-wreaper" class="col-lg-8">
                <ul>
                    <li>
                        <button id="s-join" class="btn b_full_container">Join</button>
                    </li>
                    <li>
                        <button id="s-sign-in" class="btn b_full_container">Sign in</button>
                    </li>
                    <li>
                        <button id="s-shop-bag" class="btn b_full_container"><p class="no-margin"><span id="s-basket-n">Shopping Bag</span><span id="b-t-order">(0)</span><span id="shop_bag"></span></p></button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div style="margin-right: 0px" class="row">
        <div id="nav-wreaper" class="col-xs-12">
            <div class="container">
            <nav style="padding-left: 9px;" class="navbar navbar-default no-margin">
                <div class="container-fluid no-padding">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse no-padding" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a  href="#">Link </a></li>
                            <li><a href="#">Link</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            </div>
        </div>
    </div>
</header>
<!--carusel section -->
<section>
    <div id="carousel-example-generic" class="carousel slide sl-head" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <!--
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner sl-head" role="listbox">
            <!-- First slide-->
            <div  class="item wrapper-sl-head active">
                <!--
                <img style="min-height: 536px;" src="image/carusel_bg.png" alt="...">
                -->
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-xs-6 carusel-left-wrapper">
                            <div class="col-xs-12 sl-head-captive-wrapper">
                                <p class="no-margin header-carisel-slide-t-c">We provide worlds</p>
                                <p class="no-margin header-carisel-slide-t-c">Top fashion for less</p>
                                <p class="no-margin header-carisel-slide-t-c">fashionpress.</p>
                                <p class="header-carusel-slide-t-f">FashionPress the name of hi class fashion web.</p>
                            </div>
                        </div>
                        <div class="col-xs-6 carusel-right-wrapper">
                            <div class="col-xs-12">
                                <img  src="image/carusel-main-img.png" alt="..." class="img-circle image_full_w">
                                <div class="carusel-price-bl">
                                    <div class="carusel-product-details">
                                        <p class="no-margin">Product name</p>
                                        <p class="no-margin">price $</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Second Slide -->
            <div style="min-height: 536px;height: 536px;" class="item">
                <!--
                <img src="..." alt="...">
                -->
                <div class="carousel-caption">
                    1234556456456
                </div>

            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="car_left_control" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="car_right_control" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!--search section -->
<section class="s-content">
    <div class="container">
        <div class="row">
            <div class="col-xs-8">
                <form action="" method="get" class="form-horizontal s-form">
                    <div class="form-group has-success has-feedback no-margin">
                        <label  class="control-label col-lg-3 s-label">SEARCH PRODUCT</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="text" class="form-control s-m-input" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
                                <span class="input-group-addon no-padding no-border"><button class="no-padding no-border s-b-search"></button></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xs-4 s-control-wrapper">
                <button class="s-control-b-full">
                </button>
                <button class="s-control-b-mult">
                </button>
            </div>
        </div>
    </div>
</section>
<!--content -->
<section class="content-wrapper">
    <div class="container">
        <div class="row">
            <!--product menu-->
            <div class="col-sm-3">
                <div class="content-menu-t-wrapper">
                    <ul class="c-p-menu-title">
                        <li><p class="no-margin">PRODUCTS MENU</p></li>
                    </ul>
                    <ul class="c-p-main-menu">
                        <?php
                        $i ='';
                        for($i=1; $i<=8; $i++){?>
                            <li><a href="#" class="no-margin"><span class="menu-dot"></span>category name<span class="p-menu-h-line" style="width: 3px;height: 36px;position: absolute;top:0px;right:0px;background-color: inherit;display: inline-block"></span></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-xs-12 no-padding c-review-wrapper">
                    <p class="happy-clients-t">OUR HAPPY CLIENTS</p>
                    <div class="col-xs-12 no-padding review-body">
                        <p class="no-margin c-review-text">
                            I am happy to see that fast web store!!!!!
                        </p>
                        <img class="c-review-arrow" src="image/client-say-arrow1.png" alt="alt">
                    </div>
                </div>
                <div class="col-xs-12 no-padding c-review-name-body">
                    <p class="no-margin"><span class="client-icon"></span>Bogdan Dvinin, test company.</p>
                </div>
                
            </div>
            <!--product block -->
            <div class="col-sm-9 main-product-wrapper">
                <div class="col-lg-12 product-content-body">
                <?php
                for($i=0 ; $i <=5 ; $i++) {
                    ?>
                    <div class="col-xs-4 no-padding product-presentation-body">
                        <!--product image -->
                        <div class="col-xs-12 product-image-body">
                            <img src="image/product_img.png">
                        </div>
                        <!--product title -->
                        <div class="col-xs-12 product-title">
                            <p>Kids Moon Colorblock Footer Tights</p>
                        </div>
                        <div class="product-bottom-line">
                            <!--Border line -->
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-lg-6 no-padding">

                                <div class="product-r-border">
                                    <!--Border line -->
                                </div>
                                <!--product price -->
                                <p class="product-price">
                                    $ 8.99</p>
                            </div>
                            <div class="col-lg-6 no-padding product-buy-body">
                                <button></button>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </div>
                <div class="col-lg-12">
                    <p class="popular-product-p"><span>POPULAR</span> PRODUCTS NOW</p>
                </div>
                <!--Popular product -->
                <div class="col-lg-12 product-content-body">
                    <?php
                    for($i=0 ; $i <=5 ; $i++) {
                        ?>
                        <div class="col-xs-4 no-padding product-presentation-body">
                            <!--product image -->
                            <div class="col-xs-12 product-image-body">
                                <img src="image/product_img.png">
                            </div>
                            <!--product title -->
                            <div class="col-xs-12 product-title">
                                <p>Kids Moon Colorblock Footer Tights</p>
                            </div>
                            <div class="product-bottom-line">
                                <!--Border line -->
                            </div>
                            <div class="col-xs-12 no-padding">
                                <div class="col-lg-6 no-padding">

                                    <div class="product-r-border">
                                        <!--Border line -->
                                    </div>
                                    <!--product price -->
                                    <p class="product-price">
                                        $ 8.99</p>
                                </div>
                                <div class="col-lg-6 no-padding product-buy-body">
                                    <button></button>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
            </div>
        </div>
    </div>
</section>
<!--footer -->
<footer>
    <div id="footer-bg-c" class="col-xs-12">

    </div>
    <div id="footer-main-bg" class="col-xs-12" style="display: table">
        <div class="container footer-b-wrapper">
                <div class="col-sm-3">
                    <div class="col-xs-12 footer-block-title">
                        <p>ABOUT</p>
                    </div>
                    <div class="col-xs-12">
                        <p class="no-margin w-name"><span style="color:red">b</span>Shop</p>
                    </div>
                    <div class="col-xs-12 footer-b-t-cont">
                        <p>My test project, watch and appreciate</p>
                    </div>
                    <!-- block right line-->
                    <div class="footer-block-r-line">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-xs-12 footer-block-title">
                        <p>FOLLOW US</p>
                    </div>
                    <div class="col-xs-12">
                        <a class="footer-facebooc-c" href="#"><span class="f-facebook"></span>FACEBOOK</a>
                    </div>
                    <div class="col-xs-12">
                        <a class="footer-google-c" href="#"><span class="f-google"></span>GOOGLE+</a>
                    </div>
                    <div class="col-xs-12">
                        <a class="footer-instagram-c" href="#"><span class="f-instagram"></span>INSTAGRAM</a>
                    </div>
                    <div class="col-xs-12 footer-by-line">
                        <a class="footer-twitter-c" href="#"><span class="f-twitter"></span>TWITTER</a>
                    </div>
                    <!-- block right line-->
                    <div class="footer-block-r-line">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-xs-12 footer-block-title">
                        <p>CONTACT INFO</p>
                    </div>
                    <div class="col-xs-12 footer-contact-m-i">
                        <p class="no-margin">PHONE: 063-754-96-56</p>
                        <p>EMAIL: bogdandvini@gmail.com</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-xs-12 footer-w-cr-i">
                        <p class="no-margin">Dvinin Bogdan Yrievich</p>
                        <p class="no-margin">Ukraine,Zaporizhia</p>
                    </div>
                </div>
        </div>
    </div>
    <div class="col-xs-12 footer-end-bg">
        <div class="container">
            <div class="col-lg-8">
                <ul id="footer-end-nav">
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Creative Rights Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Support & FAQ</a></li>
                </ul>
            </div>
            <div class="col-sm-4 w-avtor">
                <p class="no-margin">&copy; Bogdan Dvinin 2016 Inc.</p>
            </div>
        </div>

    </div>
</footer>



</body>
</html>