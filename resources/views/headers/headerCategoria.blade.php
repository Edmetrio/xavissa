<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mj Serviços</title>

    <link rel="stylesheet" href="{{('assets/css/vendor/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{('assets/css/vendor/font.awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{('assets/css/vendor/ionicons.min.css')}}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{('assets/css/plugins/slick.min.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{('assets/css/plugins/animate.min.css')}}">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="{{('assets/css/plugins/jquery-ui.min.css')}}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{('assets/css/plugins/nice-select.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{('assets/css/plugins/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{('assets/css/style.css')}}">




</head>

<body>

    <div class="main-header">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-12 col-custom">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                            <div class="header-logo d-flex align-items-center">
                                <a href="{{url('/')}}">
                                    <img class="img-full" src="assets/images/logo/logo.png" alt="Header Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-7 position-static d-none d-lg-block col-custom">
                            <nav class="main-nav d-flex justify-content-center">
                                <ul class="nav">
                                    <li>
                                        <a href="{{url('/')}}">
                                            <span class="menu-text"> Inicio</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{url('categoria')}}" class="active">
                                            <span class="menu-text">Categorias</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-submenu dropdown-hover">
                                            <li><a href="{{url('produto')}}">Cereais</a></li>
                                            <li><a href="{{url('produto')}}">Frutas</a></li>
                                            <li><a href="{{url('produto')}}">Legumes</a></li>
                                            <li><a href="{{url('produto')}}">Tubérculos</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a  href="{{url('produto')}}" class="active">
                                            <span class="menu-text"> Todos Produtos</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="about-us.html">
                                            <span class="menu-text"> Sobre Nos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact-us.html">
                                            <span class="menu-text">Contactos</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-2 col-xl-3 col-sm-6 col-6 col-custom">
                            <div class="header-right-area main-nav">
                                <ul class="nav">
                                    <li class="login-register-wrap d-none d-xl-flex">
                                        <span><a href="login.html">Entrar</a></span>
                                        <span><a href="register.html">Registrar</a></span>
                                    </li>
                                    <li class="minicart-wrap">
                                        <a href="#" class="minicart-btn toolbar-btn">
                                            <i class="ion-bag"></i>
                                            <span class="cart-item_count">3</span>
                                        </a>
                                        <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                            <div class="single-cart-item">
                                                <div class="cart-img">
                                                    <a href="cart.html"><img src="assets/images/cart/1.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-text">
                                                    <h5 class="title"><a href="cart.html">Coco do Mercado Zimpeto</a></h5>
                                                    <div class="cart-text-btn">
                                                        <div class="cart-qty">
                                                            <span>1×</span>
                                                            <span class="cart-price">20,00MT</span>
                                                        </div>
                                                        <button type="button"><i class="ion-trash-b"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-cart-item">
                                                <div class="cart-img">
                                                    <a href="cart.html"><img src="assets/images/cart/2.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-text">
                                                    <h5 class="title"><a href="cart.html" title="10. This is the large title for testing large title and there is an image for testing - white">Repolho do Mercado Central</a></h5>
                                                    <div class="cart-text-btn">
                                                        <div class="cart-qty">
                                                            <span>2×</span>
                                                            <span class="cart-price">40,00MT/kg</span>
                                                        </div>
                                                        <button type="button"><i class="ion-trash-b"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-cart-item">
                                                <div class="cart-img">
                                                    <a href="cart.html"><img src="assets/images/cart/3.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-text">
                                                    <h5 class="title"><a href="cart.html">Pimento do Mercado Janet</a></h5>
                                                    <div class="cart-text-btn">
                                                        <div class="cart-qty">
                                                            <span>3×</span>
                                                            <span class="cart-price">120,00MT</span>
                                                        </div>
                                                        <button type="button"><i class="ion-trash-b"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-price-total d-flex justify-content-between">
                                                <h5>Total :</h5>
                                                <h5>180,00MT</h5>
                                            </div>
                                            <div class="cart-links d-flex justify-content-center">
                                                <a class="obrien-button white-btn" href="cart.html">Ver</a>
                                                <a class="obrien-button white-btn" href="checkout.html">Conferir</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mobile-menu-btn d-lg-none">
                                        <a class="off-canvas-btn" href="#">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
</body>

</html>