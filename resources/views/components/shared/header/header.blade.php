<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/elegant-icons.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/magnific-popup.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/nice-select.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/slicknav.min.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/style.css') }} type="text/css">
</head>

<body>

    {{-- Toastr --}}
    @if (session('product_added'))
        <div class="alert alert-success">
            {{ session('product_added') }}
        </div>
    @endif

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                @guest
                    <a href={{ route('loginPage') }}>Sign in</a>
                @endguest
                @auth
                    <a href={{ route('logout') }}>Logout</a>
                @endauth
            </div>
        </div>
        <div class="d-flex justify-content-center text-center mb-4">
            @auth
                <img class="rounded-circle border border-dark" width="50px" height="50px"
                    src={{ auth()->user()->picture }} alt="">
            @endauth
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src={{ asset('img/icon/search.png') }} alt=""></a>
            {{-- <a href="#"><img src={{ asset("img/icon/heart.png")}} alt=""></a> --}}
            @auth
                <x-shared.header.components.header-cart />
            @endauth

        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                @auth
                                    <a href={{ route('profile') }}><img class="rounded-circle border border-dark"
                                            width="25px" height="25px" src={{ auth()->user()->picture }}
                                            alt=""></a>
                                @endauth
                                @guest
                                    <a href={{ route('loginPage') }}>Sign in</a>
                                @endguest
                                @auth
                                    <a href={{ route('logout') }}>Logout</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href={{ route('homePage') }}><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href={{ route('homePage') }}>Home</a></li>
                            <li><a href={{ route('shopPage') }}>Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href={{ route('cartPage') }}>Shopping Cart</a></li>
                                    {{-- <li><a href={{ route('checkoutPage') }}>Check Out</a></li> --}}
                                    @auth
                                        <li><a href={{ route('profile') }}>My Accoutn</a></li>
                                    @endauth
                                </ul>
                            </li>
                            @guest
                                <li><a href={{ route('loginPage') }}>Login</a></li>
                                <li><a href={{ route('registerPage') }}>Register</a></li>
                            @endguest

                            @auth
                                @if (auth()->user()->role == 'admin')
                                    <li><a href={{ route('addProductPage') }}>Add Products</a></li>
                                @endif
                            @endauth

                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src={{ asset('img/icon/search.png') }}
                                alt=""></a>
                        {{-- <a href="#"><img src={{ asset('img/icon/heart.png') }} alt=""></a> --}}
                        @auth
                            <x-shared.header.components.header-cart />
                        @endauth

                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->
