<!DOCTYPE html>
<html lang="pt-pt">

<!-- Mirrored from websroad.com/foxio/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 17:19:09 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- <link rel="icon" href="{{asset('assets/images/logo/logo.png')}}" sizes="32x32" type="image/png"> -->
    <title>First Tech</title>

    <link rel="stylesheet" href="{{ asset('assets/css1/icons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css1/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css1/plugins.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css1/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css1/responsive.css')}}">
    <!-- Color Scheme -->
    <link rel="stylesheet" href="{{asset('assets/css1/colors/color.css')}}" title="theme-color1">
    <link rel="alternate stylesheet" href="{{ asset('assets/css1/colors/color2.css')}}" title="theme-color2">
    <link rel="alternate stylesheet" href="{{ asset('assets/css1/colors/color5.css')}}" title="theme-color5">
    <link rel="alternate stylesheet" href="{{ asset('assets/css1/colors/color3.css')}}" title="theme-color3">
    <link rel="alternate stylesheet" href="{{ asset('assets/css1/colors/color6.css')}}" title="theme-color6">
    <link rel="alternate stylesheet" href="{{ asset('assets/css1/colors/color7.css')}}" title="theme-color7">
    <link rel="alternate stylesheet" href="{{ asset('assets/css1/colors/color8.css')}}" title="theme-color8">
    <link rel="alternate stylesheet" href="{{ asset('assets/css1/colors/color4.css')}}" title="theme-color4">
    <link rel="alternate stylesheet" href="{{ asset('assets/css1/colors/color9.css')}}" title="theme-color9">
    @livewireStyles
</head>

<body class="gray-bg">
    <main class="header-expand">
        <div class="sidepanel">
            <span class="sidebanel-btn"><i class="icon ion-ios-cog fa-spin"></i></span>
            <div class="sidepanel-inner">
                <h6>Theme</h6>
                <div class="option-list">
                    <a class="light-btn applied" href="#" title="">Light</a>
                    <a class="semi-dark-btn" href="#" title="">Semi Dark</a>
                    <a class="dark-btn" href="#" title="">Dark</a>
                </div>
            </div>
            <div class="sidepanel-inner">
                <h6>Theme Color</h6>
                <div class="option-list theme-color-options">
                    <a class="theme-color1" href="#" title="" onclick="setActiveStyleSheet('theme-color1'); return false;"></a>
                    <a class="theme-color2" href="#" title="" onclick="setActiveStyleSheet('theme-color2'); return false;"></a>
                    <a class="theme-color3" href="#" title="" onclick="setActiveStyleSheet('theme-color3'); return false;"></a>
                    <a class="theme-color4" href="#" title="" onclick="setActiveStyleSheet('theme-color4'); return false;"></a>
                    <a class="theme-color5" href="#" title="" onclick="setActiveStyleSheet('theme-color5'); return false;"></a>
                    <a class="theme-color6" href="#" title="" onclick="setActiveStyleSheet('theme-color6'); return false;"></a>
                    <a class="theme-color7" href="#" title="" onclick="setActiveStyleSheet('theme-color7'); return false;"></a>
                    <a class="theme-color8" href="#" title="" onclick="setActiveStyleSheet('theme-color8'); return false;"></a>
                    <a class="theme-color9" href="#" title="" onclick="setActiveStyleSheet('theme-color9'); return false;"></a>
                </div>
            </div>
            <div class="sidepanel-inner">
                <h6>Sidebar Layout</h6>
                <div class="option-list">
                    <a class="mini-header-btn" href="#" title="">Mini Header</a>
                    <a class="full-header-btn applied" href="#" title="">Full Header</a>
                </div>
            </div>
        </div><!-- Side Panel -->
        <div class="topbar">
            <div class="logo"><a href="{{url('/')}}" title="Logo"><img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo"></a></div><!-- Logo -->
            <span class="menu-btn"><i class="fa fa-align-right"></i></span>
            <form class="topbar-search">
                <input type="text" placeholder="Type and Hit Enter">
                <button type="submit"><i class="icon ion-android-search"></i></button>
            </form><!-- Topbar Search -->
            <ul class="topbar-lists">
                <li>
                    <a class="setng-btn" href="#" title=""><i class="icon ion-android-settings"></i></a>
                    <div class="set-lst">
                        <h4>General Settings</h4>
                        <ul class="sett-lst">
                            <li>
                                <span class="chck-bx">
                                    <input id="set1" type="checkbox">
                                    <label for="set1">Report Panel Usage</label>
                                </span>
                                <i>General Settings information</i>
                            </li>
                            <li>
                                <span class="chck-bx">
                                    <input id="set2" type="checkbox">
                                    <label for="set2">Mail Redirect</label>
                                </span>
                                <i>General Settings information</i>
                            </li>
                            <li>
                                <span class="chck-bx">
                                    <input id="set3" type="checkbox">
                                    <label for="set3">Expose Author Name</label>
                                </span>
                                <i>General Settings information</i>
                            </li>
                        </ul>
                        <h4>Chat Settings</h4>
                        <ul>
                            <li>
                                <span class="chck-bx">
                                    <input id="set4" type="checkbox">
                                    <label for="set4">Show Me As Online</label>
                                </span>
                            </li>
                            <li>
                                <span class="chck-bx">
                                    <input id="set5" type="checkbox">
                                    <label for="set5">Turn Off Notifications</label>
                                </span>
                            </li>
                        </ul>
                        <a class="btn-danger" href="#" title=""><i class="fa fa-trash"></i>Delete Chat History</a>
                    </div>
                </li>
                <li>
                    <a class="mail-btn" href="#" title=""><i class="icon ion-android-drafts"></i><span>02</span></a>
                    <div class="nti-drp-wrp">
                        <h4 class="thm-bg"><span>You Have</span> 4 New Messages</h4>
                        <div class="nti-lst">
                            <div class="nti-usr">
                                <img class="brd-rd50" src="assets/images1/resources/acti-thmb1.jpg" alt="acti-thmb1.jpg">
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Sadi Orlaf</a></h5><span>Just Now</span>
                                    <i>Privacy settings changed</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <img class="brd-rd50" src="assets/images/resources/acti-thmb2.jpg" alt="acti-thmb2.jpg">
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Katti Smith</a></h5><span>Just Now</span>
                                    <i>Mike has added you as friend</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <img class="brd-rd50" src="assets/images1/resources/acti-thmb3.jpg" alt="acti-thmb3.jpg">
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Willimes Domson</a></h5><span>Just Now</span>
                                    <i>like your timeline photo</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <img class="brd-rd50" src="assets/images1/resources/acti-thmb4.jpg" alt="acti-thmb4.jpg">
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Holli Doe</a></h5><span>Just Now</span>
                                    <i>Curabitur id eros limes suscipit blandit.</i>
                                </div>
                            </div>
                        </div>
                        <a href="#" title="">View All</a>
                    </div>
                </li>
                <li>
                    <a class="cnt-btn" href="#" title=""><i class="icon ion-android-contacts"></i></a>
                    <div class="cnt-lst">
                        <div class="usr">
                            <img class="brd-rd50" src="{{asset('assets/images1/resources/acti-thmb1.jpg')}}" alt="acti-thmb1.jpg">
                            <div class="usr-innr">
                                <h5><a href="#" title="">Smith Doe</a></h5>
                                <span>Co Worker</span>
                                <a href="#" title=""><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="usr">
                            <img class="brd-rd50" src="{{asset('assets/images1/resources/acti-thmb2.jpg')}}" lt="acti-thmb2.html">
                            <div class="usr-innr">
                                <h5><a href="#" title="">Katti Smith</a></h5>
                                <span>Graphic Designer</span>
                                <a href="#" title=""><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="usr">
                            <img class="brd-rd50" src="assets/images1/resources/acti-thmb3.jpg" alt="acti-thmb3.jpg">
                            <div class="usr-innr">
                                <h5><a href="#" title="">Willimes Domson</a></h5>
                                <span>Family Adviser</span>
                                <a href="#" title=""><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="usr">
                            <img class="brd-rd50" src="assets/images1/resources/acti-thmb4.jpg" alt="acti-thmb4.jpg">
                            <div class="usr-innr">
                                <h5><a href="#" title="">Holli Doe</a></h5>
                                <span>Company CEO</span>
                                <a href="#" title=""><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="noti-btn" href="#" title=""><i class="icon ion-ios-bell"></i><span>02</span></a>
                    <div class="nti-drp-wrp">
                        <h4 class="thm-bg"><span>You Have</span> 4 Notifications</h4>
                        <div class="nti-lst">
                            <div class="nti-usr">
                                <span class="brd-rd50 thm-bg"><i class="fa fa-cog"></i></span>
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Sadi Orlaf</a></h5><span>Just Now</span>
                                    <i>Privacy settings changed</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <span class="brd-rd50 bg-info"><i class="icon ion-ios-person"></i></span>
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Katti Smith</a></h5><span>Just Now</span>
                                    <i>Mike has added you as friend</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <span class="brd-rd50 bg-warning"><i class="icon ion-thumbsup"></i></span>
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Willimes Domson</a></h5><span>Just Now</span>
                                    <i>like your timeline photo</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <span class="brd-rd50 bg-danger"><i class="icon ion-information-circled"></i></span>
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Holli Doe</a></h5><span>Just Now</span>
                                    <i>Curabitur id eros limes suscipit blandit.</i>
                                </div>
                            </div>
                        </div>
                        <a href="#" title="">View All</a>
                    </div>
                </li>
            </ul><!-- Topbar Lists -->
        </div><!-- Topbar -->
        <header class="dark-bg">
            <div class="usr-inf" style="background-image: url(assets/images/logo/usr-inf-bg.png);">
                <div class="usr-inf-inner">
                    <!-- <span class="usr-img"><img src="{{asset('assets/images1/resources/user-img.jpg')}}" alt="user-img.jpg"><i class="usr-sts onln"></i></span> -->
                    <div class="usr-nm-desg">
                        <h4>{{ Auth::user()->name }}</h4>
                        <span>Designer</span>
                    </div>
                </div>
                <p>Dashboard da sua Loja Virtual</p>
                <div class="usr-inf-btns">
                    <a class="usr-msg" href="{{url('/')}}" title="">Início</a>
                    <a class="usr-log" href="" title="">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="usr-log" type="submit" value="">Sair</button>
                        </form>
                    </a>
                </div>
            </div><!-- User Info -->
            <nav>
                <ul>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-ios-briefcase"></i><span>Categoria</span></a>
                        <ul class="children">
                            <li><a href="{{url('base')}}" title="">Listar</a></li>
                            <li><a href="{{url('categoria/create')}}" title="">Adicionar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-ios-briefcase"></i><span>Produto</span></a>
                        <ul class="children">
                            <li><a href="{{url('base')}}" title="">Listar</a></li>
                            <li><a href="{{url('produto/create')}}" title="">Adicionar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-ios-briefcase"></i><span>Historico</span></a>
                        <ul class="children">
                            <li><a href="{{url('base')}}" title="">Listar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-ios-briefcase"></i><span>Cliente</span></a>
                        <ul class="children">
                            <li><a href="{{url('base')}}" title="">Listar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-ios-briefcase"></i><span>Estoque</span></a>
                        <ul class="children">
                            <li><a href="{{url('estoque')}}" title="">Listar</a></li>
                            <li><a href="{{url('estoque/create')}}" title="">Adicionar</a></li>
                            <li><a href="{{url('aumentar/create')}}" title="">Aumentar Estoque</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-ios-briefcase"></i><span>Conta a Pagar</span></a>
                        <ul class="children">
                            <li><a href="{{url('pagar')}}" title="">Listar</a></li>
                            <li><a href="{{url('pagar/create')}}" title="">Adicionar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-ios-briefcase"></i><span>Conta a Receber</span></a>
                        <ul class="children">
                            <li><a href="{{url('receber')}}" title="">Listar</a></li>
                            <li><a href="{{url('receber/create')}}" title="">Adicionar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-ios-briefcase"></i><span>Venda</span></a>
                        <ul class="children">
                            <li><a href="{{url('venda')}}" title="">Listar</a></li>
                            <li><a href="{{url('venda/create')}}" title="">Adicionar</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- Nav -->
        </header><!-- Header -->
        <div class="usr-inf">
                @livewire('venda')
            </div>
        <footer>
            <p>Copyright <a href="#" title="">FirstEducation</a> &copy; 2021</p>
            <ul class="btm-lnks">
                <li><a href="#" title="">Dashboard</a></li>
                <li><a href="#" title="">Definições</a></li>
                <li><a href="#" title="">Sobre nós</a></li>
                <li><a href="#" title="">Contace-nos</a></li>
            </ul>
        </footer><!-- Footer -->
    </main><!-- Main Wrapper -->

    <script src="{{ asset('assets/js1/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js1/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js1/plugins.min.js')}}"></script>
    <script src="{{ asset('assets/js1/custom-scripts.js')}}"></script>
    @livewireScripts
</body>

<!-- Mirrored from websroad.com/foxio/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 17:19:11 GMT -->

</html>
