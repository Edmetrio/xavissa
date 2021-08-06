@extends('header5')

@section('content')

<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Pagamento</h3>
                    <ul>
                        <li><a href="{{url('/')}}">Início</a></li>
                        <li>Tipos de Pagamento</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->

<div class="checkout-area">
    <div class="container container-default-2 custom-container">
        <div class="row">
            <div class="col-12">
                <div class="coupon-accordion">
                    <h3>Pagammento Via Cartão de Crédito/Débito <span id="showlogin">Clica aqui</span></h3>
                    <div id="checkout-login" class="coupon-content">
                        <div class="coupon-info">
                            <form method="post" action="{{url('encomenda')}}">
                                @csrf
                                <div class="checkbox-form">
                                    <h3>Detalhes de Pagamento</h3>
                                    <div class="row">
                                    <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Nome Completo</label>
                                                <input placeholder="Samuel Sibia" type="text">
                                            </div>
                                        </div>
                                    <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Telefone</label>
                                                <input placeholder="84 000 0000" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Endereço</label>
                                                <input placeholder="Av. Julius Nyerere" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Titular</label>
                                                <input placeholder="Samuel Sibia" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Número da Conta</label>
                                                <input placeholder="000000000000" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="checkout-form-list">
                                                <label>Mês <span class="required">*</span></label>
                                                <select class="myniceselect nice-select wide rounded-0">
                                                    <option data-display="Mês">Mês</option>
                                                    <option value="uk">Janeiro</option>
                                                    <option value="rou">Fevereiro</option>
                                                    <option value="fr">Março</option>
                                                    <option value="de">Abril</option>
                                                    <option value="aus">Maio</option>
                                                    <option value="uk">Junho</option>
                                                    <option value="rou">Julho</option>
                                                    <option value="fr">Agosto</option>
                                                    <option value="de">Setembro</option>
                                                    <option value="aus">Outubro</option>
                                                    <option value="de">Novembro</option>
                                                    <option value="aus">Dezembro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="checkout-form-list">
                                                <label>Ano <span class="required">*</span></label>
                                                <select class="myniceselect nice-select wide rounded-0">
                                                    <option data-display="Ano">Ano</option>
                                                    <option value="uk">2021</option>
                                                    <option value="rou">2022</option>
                                                    <option value="fr">2023</option>
                                                    <option value="rou">2024</option>
                                                    <option value="fr">2025</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-8">
                                            <div class="checkout-form-list">
                                                <label>Código CVV <span class="required">*</span></label>
                                                <input placeholder="3 ou 4 dígitos" type="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="your-order-table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="cart-product-name">Produtos</th>
                                                    <th class="cart-product-total">Quantidade - Preço</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($produto as $p)
                                                <tr class="cart_item">
                                                    <td class="cart-product-name"> {{$p->nome}}<strong class="product-quantity">
                                                        </strong></td>
                                                    <td class="cart-product-total text-center"><span class="amount"><strong class="product-quantity">
                                                                {{$p->quantidade}}</strong> * $ {{$p->preco}},00 </span></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal na Carrinha</th>
                                                    <td class="text-center"><span class="amount">$ {{$t}},00</span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td class="text-center"><strong><span class="amount">$ {{$t}},00</span></strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="different-address">
                                        <div class="order-button-payment">
                                            <input type="text" hidden name="valor_total" value="{{$t}}.00">
                                            <input type="text" hidden name="utilizador_id" value="{{ Auth::user()->id}}">
                                            <input type="text" hidden name="estado" value="Pendente">
                                            <button class="btn obrien-button primary-btn d-block">Pagar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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