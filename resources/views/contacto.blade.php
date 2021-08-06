@extends('headerProduto')

@section('content')


        <!-- Contact Us Area Start Here -->
        <div class="contact-us-area">
            <div class="container container-default-2 custom-area">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-custom">
                        <div class="contact-info-item">
                            <div class="con-info-icon">
                                <i class="ion-ios-location-outline"></i>
                            </div>
                            <div class="con-info-txt">
                                <h4>Nossa Localização</h4>
                                <p>(800) 123 456 789 / (800) 123 456 789 info@firsteducation.edu.mz</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-custom">
                        <div class="contact-info-item">
                            <div class="con-info-icon">
                                <i class="ion-iphone"></i>
                            </div>
                            <div class="con-info-txt">
                                <h4>Contactos-nos qualquer altura</h4>
                                <p>Mobile: +258 84 000 0000<br>Fax: 123 456 789</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-custom text-align-center">
                        <div class="contact-info-item">
                            <div class="con-info-icon">
                                <i class="ion-ios-email-outline"></i>
                            </div>
                            <div class="con-info-txt">
                                <h4>Suporte Geral</h4>
                                <p>info@firsteducation.edu.mz <br> samuel@firsteducation.edu.mz</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-custom">
                        <form method="post" action="mailto:info@firsteducation.edu.mz" id="contact-form" accept-charset="UTF-8" class="contact-form">
                            <div class="comment-box mt-5">
                                <h5 class="text-uppercase">Entrar em Contacto</h5>
                                <div class="row mt-3">
                                    <div class="col-md-6 col-custom">
                                        <div class="input-item mb-4">
                                            <input class="border rounded-0 w-100 input-area name" type="text" name="con_name" id="con_name" placeholder="Nome">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-custom">
                                        <div class="input-item mb-4">
                                            <input class="border rounded-0 w-100 input-area email" type="email" name="con_email" id="con_email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12 col-custom">
                                        <div class="input-item mb-4">
                                            <input class="border rounded-0 w-100 input-area email" type="text" name="con_content" id="con_content" placeholder="Assunto">
                                        </div>
                                    </div>
                                    <div class="col-12 col-custom">
                                        <div class="input-item mb-4">
                                            <textarea cols="30" rows="5" class="border rounded-0 w-100 custom-textarea input-area" name="con_message" id="con_message" placeholder="Mensagem"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-custom mt-40">
                                        <button type="submit" id="submit" name="submit" class="btn obrien-button primary-btn rounded-0 mb-0">Enviar Mensagem</button>
                                    </div>
                                    <p class="col-12 col-custom form-message mb-0"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Us Area End Here -->
        <!-- Google Maps -->
        <div class="google-map-area">
            <div id="contacts" class="map-area">
                <div id="googleMap"></div>
            </div>
        </div>
        <!-- Google Maps End -->

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
                                <p class="desc-content">Somos Responsaveis pela venda de todo tipo de pedras preciosas </p>
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
                                    <address>Av. Ahmed S Touré 2327 R/C-MAPUTO.<br>Tel.: +258 87 300 5501<br>Email: sales@mjayservicos.com</address>
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
    <!-- Map js -->
    <script src="{{url('https://maps.googleapis.com/maps/api/js?key=AIzaSyClpvcUyl31wMd7DJZQnnzI006S99u9nnM')}}"></script>
    <script src="{{url('https://www.google.com/jsapi')}}"></script>
    <script src="{{url('assets/js/plugins/map.js')}}"></script>

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