<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Kantur">
    <meta name="keywords" content="Kantur,Bakas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kantur</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper" id="top-nav-wrapper">
        <!-- <button class="btn btn-danger" id="btn-cross-mobile"><i class="fa fa-times"></i></button> -->
        <div class="humberger__menu__logo">
            <a href="#">
                <!-- <img src="assets/img/logo.png" alt="Kantur"> -->
                <h3><b>BAKAS.COM</b></h3>
            </a>
        </div>
        <!-- <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>$150.00</span></div>
    </div> -->

        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./shop-grid.php">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.php">Shop Details</a></li>
                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                        <li><a href="./checkout.php">Check Out</a></li>
                        <li><a href="./blog-details.php">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.php">Blog</a></li>
                <li><a href="#" tabindex="-1" aria-disabled="true" data-toggle="modal" data-target="#signUpModal">Sign
                        Up</a></li>
                <li><a href="#" tabindex="-1" aria-disabled="true" data-toggle="modal" data-target="#loginModal">Sign
                        In</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__widget">
            <!-- <div class="header__top__right__language">
            <img src="assets/img/language.png" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Spanis</a></li>
                <li><a href="#">English</a></li>
            </ul>
        </div> -->
            <!-- <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div> -->
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> info@kantur.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->
    <!-- nav top  -->
    <div id="top-nav">
        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php">
                            <!-- <img src="assets/img/logo.png" alt=""> -->
                            <h3><b>BAKAS.COM</b></h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="#" tabindex="-1" aria-disabled="true" data-toggle="modal"
                                    data-target="#signUpModal">Sign Up</a></li>
                            <li><a href="#" tabindex="-1" aria-disabled="true" data-toggle="modal"
                                    data-target="#loginModal">Sign In</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div> -->

            </div>
            <div class="humberger__open" id="top-nav-toggler">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </div>
    <!-- end of nav top  -->
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> info@kantur.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <!-- <div class="header__top__right__language">
                            <img src="assets/img/language.png" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Spanis</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div> -->
                            <!-- <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php">
                            <!-- <img src="assets/img/logo.png" alt=""> -->
                            <h3><b>BAKAS.COM</b></h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="#" tabindex="-1" aria-disabled="true" data-toggle="modal"
                                    data-target="#signUpModal">Sign Up</a></li>
                            <li><a href="#" tabindex="-1" aria-disabled="true" data-toggle="modal"
                                    data-target="#loginModal">Sign In</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div> -->

            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <div class="hero__categories sidebar__dropmenu">
                        <div class="hero__categories__all ">
                            <i class="fa fa-bars"></i>
                            <span>All Categories</span>
                        </div>
                        <!-- mobile nav  -->
                        <div class="mobile__side">

                            <ul>
                                <li class="mobile__list__item"><a href="#">Vegetables</a>
                                    <ul class="header__menu__dropdown">
                                        <li class="mobile__sublist__item">Shop Details

                                            <ul class="subheader__menu__dropdown">
                                                <li><a href="./shop-details.php">Shop Details</a></li>
                                                <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                                <li><a href="./checkout.php">Check Out</a></li>
                                                <li><a href="./blog-details.php">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                        <li><a href="./checkout.php">Check Out</a></li>
                                        <li><a href="./blog-details.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="mobile__list__item1"><a href="#">Fruit & Nut Gifts</a>
                                    <ul class="header__menu__dropdown1">
                                        <li><a href="./shop-details.php">Shop Details</a></li>
                                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                        <li><a href="./checkout.php">Check Out</a></li>
                                        <li><a href="./blog-details.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Fresh Berries</a></li>
                                <li><a href="#">Ocean Foods</a></li>
                                <li><a href="#">Fresh Bananas</a></li>
                            </ul>
                        </div>
                        <!-- end mobile nav  -->
                        <!-- menu items start  -->
                        <div class="desktop__side">
                            <ul class="side__ul">
                                <!-- items -->
                                <!-- <div class="dropdown">

                                    <li class="dropdown" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Vegetables</li>
                                    <div class="dropdown-menu list1" aria-labelledby="dropdownMenuButton">
                                        <div class="dropdown">

                                            <a class="dropdown dropdown-item" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Vegetables</a>
                                            <div class="dropdown-menu dropdown__menu__second"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div> -->
                                <div class="list1" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item subid1" href="#">list 1 ko saman</a>
                                    <a class="dropdown-item" href="#">list 1 ko saman</a>
                                    <a class="dropdown-item" href="#">list 1 ko saman</a>
                                </div>
                                <div class="sublist1" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">list 1 ko saman</a>
                                    <a class="dropdown-item" href="#">list 1 ko saman</a>
                                    <a class="dropdown-item" href="#">list 1 ko saman</a>
                                </div>
                                <div class="list2" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                                <!-- end items  -->

                                <li class="id1"><a href="#">Fruit & Nut Gifts</a></li>
                                <li class="id2"><a href="#">Fresh Berries</a></li>
                                <li><a href="#">Vegetables</a></li>
                                <li><a href="#">Fresh Fruits</a></li>

                                <li><a class="custom__list" href="#">Butter & Eggs</a></li>
                                <li><a href="#">Vegetables</a></li>
                                <li><a href="#">Fresh Fruits</a></li>

                                <li><a class="custom__list" href="#">Butter & Eggs</a></li>


                                <li><a href="#">Fastfood</a></li>
                                <li><a href="#">Fresh Onion</a></li>





                            </ul>
                        </div>
                        <!-- end menu items  -->
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <!-- <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                                
                            </div> -->
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>981545784</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="assets/img/banner/banner-1.jpg"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="assets/img/banner/banner-2.jpg"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="assets/img/banner/banner-1.jpg"
                                            alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- model section  -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login Here</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username:</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Password:</label>
                            <input class="form-control" id="password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <button type="button" class=" form-control btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign Up Here</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username:</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Password:</label>
                            <input class="form-control" id="password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <button type="button" class=" form-control btn btn-primary">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <!-- model section end  -->