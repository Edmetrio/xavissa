@extends('header4')

@section('content')
<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Minha Conta</h3>
                    <ul>
                        <li><a href="{{url('/')}}">Início</a></li>
                        <li>Mina Conta</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('status'))
<div class="alert alert-success" role="alert" style="text-align: center; font-weight: bold;">
    <p class="status">{{session('status')}}</p>
</div>
@endif
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
                                <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                    Histórico de Compras</a>
                                <a href="#download" data-toggle="tab"><i class="fa fa-cloud-download"></i>
                                    Lista de Contactos</a>
                                <!-- <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i>
                                            Payment
                                            Method</a> -->
                                <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
                                    Meus Endereços</a>
                                <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Adicionar
                                    Endereço</a>
                                <a href="#account" data-toggle="tab"><i class="fa fa-user"></i> Adicionar
                                    Telefone</a>
                                <a href="login.html"><i class="fa fa-sign-out"></i> Terminar Sessão</a>
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
                                            <p>Olá, <strong>{{ Auth::user()->name}}</strong> (Se não for <strong>{{ Auth::user()->name}} !</strong><a href="{{url('entrar')}}" class="logout"> Termina a Sessão</a>)</p>
                                        </div>
                                        <p class="mb-0">No painel da sua conta. Você pode ver o seu histórico de compras, os seus endereços e telefones</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Histórico de Compras</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Imagem</th>
                                                        <th>Produto</th>
                                                        <th>Preco</th>
                                                        <th>Quantidade</th>
                                                        <th>Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($produto as $p)
                                                    <tr>
                                                        <td><img style="width: 50px;" src="assets/images/product/{{$p->icon}}"></td>
                                                        <td>{{$p->nome}}</td>
                                                        <td>{{$p->preco}}</td>
                                                        <td>{{$p->quantidade}}</td>
                                                        <td>{{$p->valor_total}}</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="download" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Lista Telefônicas</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Número</th>
                                                        <th>Operadora</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        @foreach($telefone as $t)
                                                        <tr>
                                                        <td>{{$t->numero}}</td>
                                                        <td>{{$t->nome}}</td>
                                                        </tr>
                                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Payment Method</h3>
                                        <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Meus Endereços</h3>
                                        <address>
                                            <p><strong>{{Auth::user()->name}}</strong></p>
                                            @foreach($endereco as $e)
                                            <p>{{$e->nome}} <br>
                                                <!-- San Francisco, CA 94103</p>
                                                    <p>Mobile: (123) 456-7890</p> -->
                                                @endforeach
                                        </address>
                                        <a href="#" class="btn obrien-button-2 primary-color rounded-0"><i class="fa fa-edit mr-2"></i>Edit Address</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Endereço</h3>
                                        <div class="account-details-form">
                                            <form method="POST" action="{{url('endereco')}}">
                                                @csrf
                                                <div class="single-input-item mb-3">
                                                    <label for="display-name" class="required mb-1">Endereço</label>
                                                    <input type="text" id="display-name" name="nome" placeholder="Av. Maguiguana, No. 120" />
                                                    <input type="text" hidden name="user_id" value="{{Auth::user()->id}}" />
                                                </div>
                                                <div class="single-input-item single-item-button">
                                                    <button class="btn obrien-button primary-btn">Adicionar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> 

                                <div class="tab-pane fade" id="account" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Adicionar Telefone</h3>
                                        <div class="account-details-form">
                                            <form method="POST" action="{{url('telefone')}}">
                                                @csrf
                                                <div class="single-input-item mb-3">
                                                    <label for="display-name" class="required mb-1">Operadora</label>
                                                    <select name="tipo_id" id="tipo_id">
                                                        @foreach($tipo as $t)
                                                        <option value="{{$t->id}}">{{$t->nome}}</option>
                                                        @endforeach
                                                    </select>
                                                    <label for="display-name" class="required mb-1">Número</label>
                                                    <input type="text" id="display-name" name="numero" placeholder="84 000 0000" />
                                                    <input type="text" hidden name="user_id" value="{{Auth::user()->id}}" />
                                                </div>
                                                <div class="single-input-item single-item-button">
                                                    <button class="btn obrien-button primary-btn">Adicionar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div> <!-- My Account Tab Content End -->
                    </div>
                </div> <!-- My Account Page End -->
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