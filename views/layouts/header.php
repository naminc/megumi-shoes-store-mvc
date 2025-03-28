<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>Juan - Shoes Store HTML Template</title>
	<link rel="canonical" href="https://naminc.io" />
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon" />
    <!--=== All Plugins CSS ===-->
    <link href="/assets/css/plugins.css" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="/assets/css/vendor.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="/assets/css/style.css?=<?= time(); ?>" rel="stylesheet">
    <!--=== Custom CSS ===-->
    <link href="/assets/css/custom/custom.css?=<?php echo time(); ?>" rel="stylesheet">
    <!-- Modernizer JS -->
    <script src="/assets/js/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <!-- Start Header Area -->
    <header class="header-area">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header top start -->
            <div class="header-top theme-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="welcome-message">
                                <p>Welcome to Megumi online store</p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-end">
                            <div class="header-top-settings">
                                <ul class="nav align-items-center justify-content-end">
                                    <li class="curreny-wrap">
                                        VND (VN)
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list curreny-list">
                                            <li><a href="#">$ usd</a></li>
                                            <li><a href="#"> € EURO</a></li>
                                        </ul>
                                    </li>
                                    <li class="language">
                                        <img src="/assets/img/icon/vi.png" alt="flag"> Tiếng Việt
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list">
                                            <li><a href="#"><img src="/assets/img/icon/en.png" alt="flag"> english</a></li>
                                            <li><a href="#"><img src="/assets/img/icon/fr.png" alt="flag"> french</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->
            <!-- header middle area start -->
            <div class="header-main-area sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        <!-- start logo area -->
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="/">
                                    <img src="https://i.imgur.com/YBAPqi9.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- start logo area -->
                        <!-- main menu area start -->
                        <div class="col-lg-8 position-static">
                            <div class="main-menu-area">
                                <div class="main-menu">
                                    <!-- main menu navbar start -->
                                    <?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
                                    <nav class="desktop-menu">
                                        <ul>
                                            <li class="active"><a href="/">Trang chủ</a></li>
                                            <li class="static"><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                                <ul class="megamenu dropdown">
                                                    <li class="mega-title"><a href="#">column 01</a>
                                                        <ul>
                                                            <li><a href="/shop.html">shop grid left
                                                                    sidebar</a></li>
                                                            <li><a href="/shop-grid-right-sidebar.html">shop grid right
                                                                    sidebar</a></li>
                                                            <li><a href="/shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                                            <li><a href="/shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 02</a>
                                                        <ul>
                                                            <li><a href="/product-details.html">product details</a></li>
                                                            <li><a href="/product-details-affiliate.html">product details affiliate</a></li>
                                                            <li><a href="/product-details-variable.html">product details variable</a></li>
                                                            <li><a href="/product-details-group.html">product details group</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 03</a>
                                                        <ul>
                                                            <li><a href="/cart.html">cart</a></li>
                                                            <li><a href="/checkout.html">checkout</a></li>
                                                            <li><a href="/compare.html">compare</a></li>
                                                            <li><a href="/wishlist.html">wishlist</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 04</a>
                                                        <ul>
                                                            <li><a href="/my-account.html">my-account</a></li>
                                                            <li><a href="/login-register.html">login-register</a></li>
                                                            <li><a href="/contact-us.html">contact us</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="/shop.html">shop <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="#">shop grid layout <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="/shop.html">shop grid left sidebar</a></li>
                                                            <li><a href="/shop-grid-right-sidebar.html">shop grid right sidebar</a></li>
                                                            <li><a href="/shop-grid-full-3-col.html">shop grid full 3 col</a></li>
                                                            <li><a href="/shop-grid-full-4-col.html">shop grid full 4 col</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">shop list layout <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="/shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                                            <li><a href="/shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                                            <li><a href="/shop-list-full-width.html">shop list full width</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">products details <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="/product-details.html">product details</a></li>
                                                            <li><a href="/product-details-affiliate.html">product details affiliate</a></li>
                                                            <li><a href="/product-details-variable.html">product details variable</a></li>
                                                            <li><a href="/product-details-group.html">product details group</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="/blog-left-sidebar.html">Blog <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="/blog-left-sidebar.html">blog left sidebar</a></li>
                                                    <li><a href="/blog-right-sidebar.html">blog right sidebar</a></li>
                                                    <li><a href="/blog-grid-full-width.html">blog grid no sidebar</a></li>
                                                    <li><a href="/blog-details.html">blog details</a></li>
                                                    <li><a href="/blog-details-audio.html">blog details audio</a></li>
                                                    <li><a href="/blog-details-video.html">blog details video</a></li>
                                                    <li><a href="/blog-details-left-sidebar.html">blog details left sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/contact-us.html">Liên hệ</a></li>
                                        </ul>
                                    </nav>
                                    <!-- main menu navbar end -->
                                </div>
                            </div>
                        </div>
                        <!-- main menu area end -->
                        <!-- mini cart area start -->
                        <div class="col-lg-2">
                            <div class="header-configure-wrapper">
                                <div class="header-configure-area">
                                    <ul class="nav justify-content-end">
                                        <li>

                                            <a href="#" class="offcanvas-btn">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </li>
                                        <li class="user-hover">
                                            <a href="#">
                                                <i class="ion-ios-person-outline"></i>
                                            </a>
                                            <ul class="dropdown-list">
                                            <?php if (isset($_SESSION['user'])): ?>
                                                <li><a href="/account/profile">Tài khoản</a></li>
                                                <li><a href="/auth/logout">Đăng xuất</a></li>
                                            <?php else: ?>
                                                <li><a href="/auth/login">Đăng nhập</a></li>
                                                <li><a href="/auth/login">Đăng ký</a></li>
                                            <?php endif; ?>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="minicart-btn">
                                                <i class="ion-bag"></i>
                                                <div class="notification">2</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- mini cart area end -->
                    </div>
                </div>
            </div>
            <!-- header middle area end -->
        </div>
        <!-- main header start -->
        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img src="/assets/img/logo/logo.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="/cart.html">
                                        <i class="ion-bag"></i>
                                    </a>
                                </div>
                                <div class="mobile-menu-btn">
                                    <div class="off-canvas-btn">
                                        <i class="ion-navicon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
    </header>
    <!-- end Header Area -->
    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="ion-android-close"></i>
            </div>
            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search Here...">
                        <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <!-- search box end -->
                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="index.html">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home version 01</a></li>
                                    <li><a href="/index-2.html">Home version 02</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">pages</a>
                                <ul class="megamenu dropdown">
                                    <li class="mega-title menu-item-has-children"><a href="#">column 01</a>
                                        <ul class="dropdown">
                                            <li><a href="/shop.html">shop grid left
                                                    sidebar</a></li>
                                            <li><a href="/shop-grid-right-sidebar.html">shop grid right
                                                    sidebar</a></li>
                                            <li><a href="/shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                            <li><a href="/shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title menu-item-has-children"><a href="#">column 02</a>
                                        <ul class="dropdown">
                                            <li><a href="/product-details.html">product details</a></li>
                                            <li><a href="/product-details-affiliate.html">product
                                                    details
                                                    affiliate</a></li>
                                            <li><a href="/product-details-variable.html">product details
                                                    variable</a></li>
                                            <li><a href="/product-details-group.html">product details
                                                    group</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title menu-item-has-children"><a href="#">column 03</a>
                                        <ul class="dropdown">
                                            <li><a href="/cart.html">cart</a></li>
                                            <li><a href="/checkout.html">checkout</a></li>
                                            <li><a href="/compare.html">compare</a></li>
                                            <li><a href="/wishlist.html">wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title menu-item-has-children"><a href="#">column 04</a>
                                        <ul class="dropdown">
                                            <li><a href="/my-account.html">my-account</a></li>
                                            <li><a href="/login-register.html">login-register</a></li>
                                            <li><a href="/contact-us.html">contact us</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">shop</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><a href="#">shop grid layout</a>
                                        <ul class="dropdown">
                                            <li><a href="/shop.html">shop grid left sidebar</a></li>
                                            <li><a href="/shop-grid-right-sidebar.html">shop grid right sidebar</a></li>
                                            <li><a href="/shop-grid-full-3-col.html">shop grid full 3 col</a></li>
                                            <li><a href="/shop-grid-full-4-col.html">shop grid full 4 col</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">shop list layout</a>
                                        <ul class="dropdown">
                                            <li><a href="/shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                            <li><a href="/shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                            <li><a href="/shop-list-full-width.html">shop list full width</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">products details</a>
                                        <ul class="dropdown">
                                            <li><a href="/product-details.html">product details</a></li>
                                            <li><a href="/product-details-affiliate.html">product details affiliate</a></li>
                                            <li><a href="/product-details-variable.html">product details variable</a></li>
                                            <li><a href="/product-details-group.html">product details group</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="/blog-left-sidebar.html">blog left sidebar</a></li>
                                    <li><a href="/blog-right-sidebar.html">blog right sidebar</a></li>
                                    <li><a href="/blog-grid-full-width.html">blog grid no sidebar</a></li>
                                    <li><a href="/blog-details.html">blog details</a></li>
                                    <li><a href="/blog-details-audio.html">blog details audio</a></li>
                                    <li><a href="/blog-details-video.html">blog details video</a></li>
                                    <li><a href="/blog-details-left-sidebar.html">blog details left sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="/contact-us.html">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
                <!-- user setting option start -->
                <div class="mobile-settings">
                    <ul class="nav">
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a href="#" class="dropdown-toggle" id="currency" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Currency
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="currency">
                                    <a class="dropdown-item" href="#">$ USD</a>
                                    <a class="dropdown-item" href="#">$ EURO</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a href="#" class="dropdown-toggle" id="myaccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    My Account
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                    <a class="dropdown-item" href="/my-account.html">my account</a>
                                    <a class="dropdown-item" href="/login-register.html"> login</a>
                                    <a class="dropdown-item" href="/login-register.html">register</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- user setting option end -->
                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li><i class="fa fa-mobile"></i>
                                <a href="#">0123456789</a>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>
                                <a href="#">info@yourdomain.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>