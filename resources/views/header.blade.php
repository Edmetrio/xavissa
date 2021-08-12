<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Tech</title>

    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/font.awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/ionicons.min.css')}}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/slick.min.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery-ui.min.css')}}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">




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
                                        <a class="active" href="{{url('/')}}">
                                            <span class="menu-text"> Inicio</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{url('categoria')}}">
                                            <span class="menu-text">Categorias</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-submenu dropdown-hover">
                                            @foreach($categoria as $c)
                                            <li><a href={{url("produto/$c->id")}}>{{$c->nome}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{url('produto')}}">
                                            <span class="menu-text"> Todos Produtos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="menu-text"> Sobre Nos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('contacto')}}">
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
                                        @if (Route::has('login'))
                                        @auth
                                        <!-- <span>
                                            <div>{{ Auth::user()->name }}</div>
                                        </span> -->
                                        <span>
                                    <li class="sidemenu-wrap d-none d-lg-flex">
                                        <a href="#">Minha Conta <i class="fa fa-caret-down"></i> </a>
                                        <ul class="dropdown-sidemenu dropdown-hover-2 dropdown-language">
                                            <li><a href="{{url('conta')}}"><i class="ion-ios-contact" style="padding: 10px;"></i>{{ Auth::user()->name }}</a></li>
                                            <li><a href="{{url('conta')}}"><i class="ion-android-person" style="padding: 10px;"></i>Perfil</a></li>
                                            <li><a href="{{url('historico')}}"><i class="ion-clipboard" style="padding: 10px;"></i>Histórico de Compras</a></li>
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                        <i class="ion-android-lock" style="padding: 10px;"></i>
                                                        {{ __('Terminar Sessão') }}
                                                    </a>
                                                </form>
                                            </li>
                                            <li><a href="#"><i class="ion-android-exit" style="padding: 10px;"></i>Alterar Palavra-Passe</a></li>
                                        </ul>
                                    </li>
                                    </span>
                                    @else
                                    <span>
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Entrar</a>
                                    </span>
                                    @if (Route::has('register'))
                                    <span>
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrar</a>
                                    </span>
                                    @endif
                                    @endauth
                                    @endif
                                    </li>
                                    <li class="minicart-wrap">
                                        <a href="{{url('/carrinha')}}" class="minicart-btn toolbar-btn">
                                            <i class="ion-bag"></i>
                                            <span class="cart-item_count">{{$numero}}</span>
                                        </a>
                                        <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                            @foreach($item as $i)
                                            <div class="single-cart-item">
                                                <div class="cart-img">
                                                    <a href="cart.html"><img src="assets/images/product/{{$i->icon}}" alt=""></a>
                                                </div>
                                                <div class="cart-text">
                                                    <h5 class="title"><a href="cart.html">{{$i->nome}}</a></h5>
                                                    <div class="cart-text-btn">
                                                        <div class="cart-qty">
                                                            <span>{{$i->quantidade}}×</span>
                                                            <span class="cart-price">$ {{$i->preco}},00</span>
                                                        </div>
                                                        <a href={{url("destroy/$i->itemid")}}><i class="ion-trash-b"></i></a>
                                                        <!-- <button type="button"><i class="ion-trash-b"><a href={{url("destroy/$p->itemid")}}></a></i></button> -->
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="cart-price-total d-flex justify-content-between">
                                                <h5>Total :</h5>
                                                <h5>{{$t}},00MT</h5>
                                            </div>
                                            <div class="cart-links d-flex justify-content-center">
                                                <a class="obrien-button white-btn" href={{url("carrinha")}}>Ver</a>
                                                <a class="obrien-button white-btn" href="{{url('pagamento')}}">Conferir</a>
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
    <footer class="footer-area">
        <div class="footer-widget-area">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-custom">
                        <div class="single-footer-widget m-0">
                            <div class="footer-logo">
                                <a href="{{url('dashboard')}}">
                                    <img src="{{asset ('assets/images/logo/footer.png')}}" alt="Logo Image">
                                </a>
                            </div>
                            <p class="desc-content">Somos Responsaveis pela venda de todo tipo de produtos </p>
                            <div class="social-links">
                                <ul class="d-flex">
                                    <li>
                                        <a class="border rounded-circle" href="#" title="Facebook">
                                            <i class="fa fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="border rounded-circle" href="#" title="Linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="border rounded-circle" href="#" title="Youtube">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Sobre Nos</h2>
                            <ul class="widget-list">
                                <li><a href="{{url('contacto')}}">Nossa Empresa</a></li>
                                <li><a href="{{url('contacto')}}">Contacte-Nos</a></li>
                                <li><a href="{{url('contacto')}}">Nossos Serviços</a></li>
                                <li><a href="{{url('contacto')}}">Correira</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Links Rapidos</h2>
                            <ul class="widget-list">
                                <li><a href="{{url('contacto')}}">Sobre Nos</a></li>
                                <li><a href="{{url('categoria')}}">Categorias</a></li>
                                <li><a href="{{url('produto')}}">Produtos</a></li>
                                <li><a href="{{url('carrinha')}}">Carrinha</a></li>
                                <li><a href="{{url('contacto')}}">Contactos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Suporte</h2>
                            <ul class="widget-list">
                                <li><a href="#">Online</a></li>
                                <li><a href="#">Política de Envio</a></li>
                                <li><a href="#">Política de Retorno</a></li>
                                <li><a href="#">Política de Privacidade</a></li>
                                <li><a href="#">Termos de serviço</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Contactos</h2>
                            <div class="widget-body">
                                <address>Av. Ahmed S Touré 2327 R/C-MAPUTO<br>Tel.: +258 87 300 5501<br>Email: info@firsteducation.edu.mz</address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container custom-area">
                <div class="row">
                    <div class="col-12 text-center col-custom">
                        <div class="copyright-content">
                            <p>Copyright © 2021 <a href="https://firsteducation.edu.mz/" title="https://firsteducation.edu.mz/">FirstTech</a> | Feito Pela&nbsp;<strong>firstech</strong>&nbsp;by <a href="https://firsteducation.edu.mz/" title="https://firsteducation.edu.mz/">firstech</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End Here -->
    </div>

    @foreach($produto as $p)
    <!-- Modal Area Start Here -->
    <div class="modal fade obrien-modal" id="{{$p->nome}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close close-button" data-dismiss="modal" aria-label="Close">
                    <span class="close-icon" aria-hidden="true">x</span>
                </button>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 text-center">
                                <div class="product-image">
                                    <img src="{{asset('assets/images/product/'.$p->icon)}}" alt="Product Image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="modal-product">
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title">{{$p->nome}}</h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">$ {{$p->preco}},00</span>
                                        </div>

                                        <p class="desc-content">{{$p->descricao}}</p>
                                        <div class="quantity-with_btn">
                                            <div class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton">-</div>
                                                    <div class="inc qtybutton">+</div>
                                                </div>
                                            </div>
                                            <div class="add-to_cart">
                                                <a class="btn obrien-button primary-btn" href="{{url("detalhes/$p->id")}}">Adicionar na Carrinha</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Modal Area End Here -->
    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper" id="mobileMenu">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="fa fa-times"></i>
            </div>
            <div class="off-canvas-inner">

                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Procurar Produto...">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- mobile menu start -->
                <div class="mobile-navigation">

                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="{{url('/')}}">Inicio</a></li>
                            <li class="menu-item-has-children "><a href="{{url('categoria')}}">Categorias</a>
                                <ul class="dropdown">
                                    @foreach($categoria as $c)
                                    <li><a href="{{"produto/$c->id"}}">{{$c->nome}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="">Todos Produtos</a>
                            </li>
                            <li><a href="#">Sobre Nos</a></li>
                            <li><a href="{{url('contacto')}}">Contactos</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
                <div class="header-top-settings offcanvas-curreny-lang-support">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="#">Minha Conta</a>
                                <ul class="dropdown">
                                    <!-- <li><a href="#">Entrar</a></li>
                                    <li><a href="#">Registrar</a></li> -->
                                    @if (Route::has('login'))
                                    @auth
                                    <span>
                                        <div>{{ Auth::user()->name }}</div>
                                    </span>
                                    <span><a href="{{url('conta')}}"><i class="ion-android-person" style="padding: 10px;"></i>Perfil</a></span>
                                    <span><a href="{{url('historico')}}"><i class="ion-clipboard" style="padding: 10px;"></i>Histórico de Compras</a></span>
                                    <span><a href="#"><i class="ion-android-exit" style="padding: 10px;"></i>Alterar Palavra-Passe</a></span>
                                    <span>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <i class="ion-android-lock" style="padding: 10px;"></i>
                                            <button type="submit" value="">Terminar Sessão</button>
                                        </form>
                                    </span>
                                    @else
                                    <li><a href="{{ route('login') }}">Entrar</a></li>
                                    <li><a href="{{ route('register') }}">Registrar</a></li>
                                    <!-- <li>
                                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Entrar</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrar</a>
                                        </li> -->
                                    @endauth
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="top-info-wrap text-left text-black">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <a href="info%40yourdomain.html">(+258) 84 000 0000</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="info%40yourdomain.html">info@firsteducation.edu.mz</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-widget-social">
                        <a title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                        <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- Scroll to Top Start -->
    <a class="scroll-to-top" href="#">
        <i class="ion-chevron-up"></i>
    </a>
    <!-- Scroll to Top End -->

    <!-- jQuery JS -->
    <script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <!-- jQuery Migrate JS -->
    <script src="{{asset('assets/js/vendor/jQuery-migrate-3.3.0.min.js')}}"></script>
    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <!-- Slick Slider JS -->
    <script src="{{asset('assets/js/plugins/slick.min.js')}}"></script>
    <!-- Countdown JS -->
    <script src="{{asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>
    <!-- Ajax JS -->
    <script src="{{asset('assets/js/plugins/jquery.ajaxchimp.min.js')}}"></script>
    <!-- Jquery Nice Select JS -->
    <script src="{{asset('assets/js/plugins/jquery.nice-select.min.js')}}"></script>
    <!-- Jquery Ui JS -->
    <script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}"></script>
    <!-- jquery magnific popup js -->
    <script src="{{asset('assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>