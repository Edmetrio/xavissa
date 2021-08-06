<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Tech</title>

    <link rel="stylesheet" href="{{('assets/css/vendor/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{('../assets/css/vendor/font.awesome.min.css')}}">
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
                                    <img class="img-full" src="
                                    assets/images/logo/logo.png" alt="Header Logo">
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
                                        <a href="{{url('categoria')}}">
                                            <span class="menu-text">Categorias</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-submenu dropdown-hover">
                                            @foreach($categoria as $c)
                                            <li><a href="{{url('produto/'.$c->id)}}">{{$c->nome}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a  href="{{url('produto')}}" class="active">
                                            <span class="menu-text"> Todos Produtos</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{url('historico')}}">
                                            <span class="menu-text"> Sobre Nos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
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
                                        <span>
                                            <div>{{ Auth::user()->name }}</div>
                                        </span>
                                        <span>
                                    <li class="sidemenu-wrap d-none d-lg-flex">
                                        <a href="#">Minha Conta <i class="fa fa-caret-down"></i> </a>
                                        <ul class="dropdown-sidemenu dropdown-hover-2 dropdown-language">
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