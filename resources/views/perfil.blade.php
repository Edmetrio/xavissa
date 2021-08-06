@extends('header4')

@section('content')

<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Administrador</h3>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Perfil do Administrador</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- my account wrapper start -->
<div class="my-account-wrapper mt-no-text mb-no-text">
    <div class="container container-default-2 custom-area">
        <div class="row">
            <div class="col-lg-12 col-custom">
                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-custom">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Dashboard</a>
                                <a href="#Categoria" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                    Categorias</a>
                                <a href="#Produto" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                    Produtos</a>
                                <a href="#Historico" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                    Histórico de Vendas</a>
                                <a href="#Utilizador" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                    Utilizadores</a>
                                <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
                                    address</a>
                                <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account
                                    Details</a>
                                <a href="login.html"><i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-md-8 col-custom">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>
                                        <div class="welcome">
                                            <p>Hello, <strong>Alex Aya</strong> (If Not <strong>Aya !</strong><a href="login-register.html" class="logout"> Logout</a>)</p>
                                        </div>
                                        <p class="mb-0">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="Categoria" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Categorias</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Ordem</th>
                                                        <th>Produto</th>
                                                        <th>Icon</th>
                                                        <th>Acções</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($Categoria as $c)
                                                    <tr>
                                                        <td>{{$c->id}}</td>
                                                        <td>{{$c->nome}}</td>
                                                        <td>{{$c->icon}}</td>
                                                        <td><a href={{url("categoria/$c->id/edit")}} class="btn obrien-button-2 primary-color rounded-0"><i class="fa fa-edit mr-2"></i>Gerir</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="Produto" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Produtos</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th>Categoria</th>
                                                        <th>Preço</th>
                                                        <th>Acções</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($Produto as $p)
                                                    <tr>
                                                        <td>{{$p->nome}}</td>
                                                        <td>{{$p->categoria_id}}</td>
                                                        <td>{{$p->preco}}</td>
                                                        <td><a href={{url("produtos/$p->id")}} class="btn obrien-button-2 primary-color rounded-0"><i class="fa fa-edit mr-2"></i>Gerir</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="Historico" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Histórico de Vendas</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Utilizador</th>
                                                        <th>Produto</th>
                                                        <th>quantidade</th>
                                                        <th>Preço</th>
                                                        <th>Acções</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($Historico as $h)
                                                    <tr>
                                                        <td>{{$h->utinome}}</td>
                                                        <td>{{$h->nome}}</td>
                                                        <td>{{$h->quantidade}}</td>
                                                        <td>{{$h->valor_total}}.00MT</td>
                                                        <td><a href={{url("produtos/$p->id")}} class="btn obrien-button-2 primary-color rounded-0"><i class="fa fa-edit mr-2"></i>Gerir</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <h3 class="total-amount" style="float: right; margin-right: 20px; color: #62d2a2;">{{$t}}.00MT</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="Utilizador" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Utilizadores</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th>E-mail</th>
                                                        <th>estado</th>
                                                        <th>Acções</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($Utilizador as $u)
                                                    <tr>
                                                        <td>{{$u->nome}}</td>
                                                        <td>{{$u->email}}</td>
                                                        <td>{{$u->info}}</td>
                                                        <td><a href="cart.html" class="btn obrien-button-2 primary-color rounded-0"><i class="ion-bag"></i></a>
                                                            <a href="cart.html" class="btn obrien-button-2 primary-color rounded-0"><i class="ion-ios-heart-outline"></i></a>
                                                            <a href="cart.html" class="btn obrien-button-2 primary-color rounded-0"><i class="ion-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="cart-update-option d-block d-md-flex justify-content-between">
                                        <div class="apply-coupon-wrapper">
                                        </div>
                                        <div class="cart-update mt-sm-16">
                                            <a href="" class="btn obrien-button primary-btn">Actualizar</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Billing Address</h3>
                                        <address>
                                            <p><strong>Alex Aya</strong></p>
                                            <p>1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                            <p>Mobile: (123) 456-7890</p>
                                        </address>
                                        <a href="#" class="btn obrien-button-2 primary-color rounded-0"><i class="fa fa-edit mr-2"></i>Edit Address</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>
                                        <div class="account-details-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6 col-custom">
                                                        <div class="single-input-item mb-3">
                                                            <label for="first-name" class="required mb-1">First Name</label>
                                                            <input type="text" id="first-name" placeholder="First Name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-custom">
                                                        <div class="single-input-item mb-3">
                                                            <label for="last-name" class="required mb-1">Last Name</label>
                                                            <input type="text" id="last-name" placeholder="Last Name" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-input-item mb-3">
                                                    <label for="display-name" class="required mb-1">Display Name</label>
                                                    <input type="text" id="display-name" placeholder="Display Name" />
                                                </div>
                                                <div class="single-input-item mb-3">
                                                    <label for="email" class="required mb-1">Email Addres</label>
                                                    <input type="email" id="email" placeholder="Email Address" />
                                                </div>
                                                <fieldset>
                                                    <legend>Password change</legend>
                                                    <div class="single-input-item mb-3">
                                                        <label for="current-pwd" class="required mb-1">Current Password</label>
                                                        <input type="password" id="current-pwd" placeholder="Current Password" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-custom">
                                                            <div class="single-input-item mb-3">
                                                                <label for="new-pwd" class="required mb-1">New Password</label>
                                                                <input type="password" id="new-pwd" placeholder="New Password" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-custom">
                                                            <div class="single-input-item mb-3">
                                                                <label for="confirm-pwd" class="required mb-1">Confirm Password</label>
                                                                <input type="password" id="confirm-pwd" placeholder="Confirm Password" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="single-input-item single-item-button">
                                                    <button class="btn obrien-button primary-btn">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- Single Tab Content End -->
                            </div>
                        </div> <!-- My Account Tab Content End -->
                    </div>
                </div> <!-- My Account Page End -->
            </div>
        </div>
    </div>
</div>
<!-- my account wrapper end -->

<footer class="footer-area">
    <div class="footer-widget-area">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-custom">
                    <div class="single-footer-widget m-0">
                        <div class="footer-logo">
                            <a href="{{url('dashboard')}}">
                                <img src="assets/images/logo/footer.png" alt="Logo Image">
                            </a>
                        </div>
                        <p class="desc-content">Somos Responsaveis por todo tipo de produto agrícola </p>
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
                            <li><a href="about-us.html">Nossa Empresa</a></li>
                            <li><a href="contact-us.html">Contacte-Nos</a></li>
                            <li><a href="about-us.html">Nossos Serviços</a></li>
                            <li><a href="about-us.html">Correira</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                    <div class="single-footer-widget">
                        <h2 class="widget-title">Links Rapidos</h2>
                        <ul class="widget-list">
                            <li><a href="about-us.html">Sobre Nos</a></li>
                            <li><a href={{url("categoria")}}>Categorias</a></li>
                            <li><a href={{url("produto")}}>Produtos</a></li>
                            <li><a href={{url("carrinha")}}>Carrinha</a></li>
                            <li><a href="contact-us.html">Contactos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                    <div class="single-footer-widget">
                        <h2 class="widget-title">Suporte</h2>
                        <ul class="widget-list">
                            <li><a href="contact-us.html">Online</a></li>
                            <li><a href="contact-us.html">Política de Envio</a></li>
                            <li><a href="contact-us.html">Política de Retorno</a></li>
                            <li><a href="contact-us.html">Política de Privacidade</a></li>
                            <li><a href="contact-us.html">Termos de serviço</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-custom">
                    <div class="single-footer-widget">
                        <h2 class="widget-title">Contactos</h2>
                        <div class="widget-body">
                            <address>Maputo-Moçambique.<br>Tel.: +258 840000 000<br>Email: info@agricultura.co.mz</address>
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
                        <p>Copyright © 2021 <a href="https://firsteducation.edu.mz/" title="https://firsteducation.edu.mz/">First Education</a> | Feito Pela&nbsp;<strong>firsteducation</strong>&nbsp;by <a href="https://firsteducation.edu.mz/" title="https://firsteducation.edu.mz/">firsteducation</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End Here -->
</div>

<!-- Modal Area Start Here -->
<div class="modal fade obrien-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <img src="assets/images/product/3.jpg" alt="Product Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="modal-product">
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title">Banana</h4>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">20.00MT/Kg</span>
                                    </div>

                                    <p class="desc-content">Banana do Mercado Janet, é uma pseudobaga da bananeira, uma planta herbácea vivaz acaule da família Musaceae</p>
                                    <div class="quantity-with_btn">
                                        <div class="quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="0" type="text">
                                                <div class="dec qtybutton">-</div>
                                                <div class="inc qtybutton">+</div>
                                            </div>
                                        </div>
                                        <div class="add-to_cart">
                                            <a class="btn obrien-button primary-btn" href="cart.html">Adicionar na Carrinha</a>
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
<!-- Modal Area End Here -->

<!-- Scroll to Top Start -->
<a class="scroll-to-top" href="#">
    <i class="ion-chevron-up"></i>
</a>
<!-- Scroll to Top End -->

<!-- jQuery JS -->
<script src="{{url('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<!-- jQuery Migrate JS -->
<script src="{{url('assets/js/vendor/jQuery-migrate-3.3.0.min.js')}}"></script>
<!-- Modernizer JS -->
<script src="{{url('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{url('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<!-- Slick Slider JS -->
<script src="{{url('assets/js/plugins/slick.min.js')}}"></script>
<!-- Countdown JS -->
<script src="{{url('assets/js/plugins/jquery.countdown.min.js')}}"></script>
<!-- Ajax JS -->
<script src="{{url('assets/js/plugins/jquery.ajaxchimp.min.js')}}"></script>
<!-- Jquery Nice Select JS -->
<script src="{{url('assets/js/plugins/jquery.nice-select.min.js')}}"></script>
<!-- Jquery Ui JS -->
<script src="{{url('assets/js/plugins/jquery-ui.min.js')}}"></script>
<!-- jquery magnific popup js -->
<script src="{{url('assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>

<!-- Main JS -->
<script src="{{url('assets/js/main.js')}}"></script>

@endsection