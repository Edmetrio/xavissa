@extends('headers.headerProduto')

@section('content')

<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">{{$produto->nome}}</h3>
                    <ul>
                        <li><a href="{{url('/')}}">Início</a></li>
                        <li>Perfil {{$produto->nome}}</li>
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
                                        <a href="#alterar" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                            Alterar</a>
                                        <a href="#apagar" data-toggle="tab"><i class="fa fa-cloud-download"></i>
                                            Apagar</a>
                                        <a href="#adicionar" data-toggle="tab"><i class="fa fa-credit-card"></i>
                                            Adicionar</a>
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
                                        <div class="tab-pane fade" id="alterar" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Alterar</h3>
                                                <div class="account-details-form">
                                                    <form action="#">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-6 col-custom">
                                                                <div class="single-input-item mb-3">
                                                                    <label for="first-name" class="required mb-1">Nome</label>
                                                                    <input type="text" id="nome" name="nome" value="{{$produto->nome}}" placeholder="Nome da Categoria" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-custom">
                                                                <div class="single-input-item mb-3">
                                                                    <label for="Icon" class="required mb-1">Icon</label>
                                                                    <input type="text" id="icon" name="icon" value="{{$produto->icon}}" placeholder="banana.png" /><br>
                                                                </div>
                                                                <td><a href="#" class="btn obrien-button-2 primary-color rounded-0"><i class="fa fa-cloud-download mr-2"></i>Download Foto</a></td>

                                                            </div>
                                                        </div>
                                                        <div class="single-input-item single-item-button">
                                                            <button class="btn obrien-button primary-btn">Alterar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="apagar" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Apagar</h3>
                                                <address>
                                                    <p><strong>{{$produto->nome}}</strong></p>
                                                    <p>categoria</p>
                                                    <p>{{$produto->preco}}.00MT</p>
                                                    <p>{{$produto->descricao}}<br>
                                                    <p>{{$produto->cor}}</p>
                                                </address>
                                                <a href="#" class="btn obrien-button-2 primary-color rounded-0"><i class="fa fa-edit mr-2"></i>Apagar</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="adicionar" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Adicionar</h3>
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
                                        <!-- Single Tab Content End -->
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