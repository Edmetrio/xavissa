@extends('header5')

@section('content')

<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">CARRINHA</h3>
                    <ul>
                        <li><a href="{{url('/')}}">Ínicio</a></li>
                        <li>Lista de Produtos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Product Area Start Here -->
<div class="product-area">
    <div class="container container-default custom-area">

        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper mt-no-text mb-no-text">
            <div class="container container-default-2 custom-area">
                <form method="post" action="{{url('')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Cart Table Area -->
                            @if(session('status'))
                            <div class="alert alert-success" role="alert" style="text-align: center; font-weight: bold;">
                                <p class="status">{{session('status')}}</p>
                            </div>
                            @endif
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Imagem</th>
                                            <th class="pro-title">Produto</th>
                                            <th class="pro-price">Preço</th>
                                            <th class="pro-quantity">Quantidade</th>
                                            <th class="pro-subtotal">Total</th>
                                            <th class="pro-remove">Remover</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($produto as $p)
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/images/product/{{$p->icon}}" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="#">{{$p->nome}}<br></a></td>
                                            <td class="pro-price"><span>$ {{$p->preco}},00</span></td>
                                            <td class="pro-quantity">
                                                <div class="quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" name="quantidade" id="quantidade" value="{{$p->quantidade}}" type="text">
                                                        <div class="dec qtybutton">-</div>
                                                        <div class="inc qtybutton">+</div>
                                                        <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="pro-subtotal"><span>$ {{$p->valor_total}},00</span></td>
                                            <td class="pro-remove"><a href={{url("destroy/$p->itemid")}}><i class="ion-trash-b"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Cart Update Option -->
                            <div class="cart-update-option d-block d-md-flex justify-content-between">
                                <div class="apply-coupon-wrapper">

                                </div>
                                <div class="cart-update mt-sm-16">
                                    <a href="#" class="btn obrien-button primary-btn">Actualizar Carrinha</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 ml-auto">
                            <!-- Cart Calculation Area -->
                            <div class="cart-calculator-wrapper">
                                <div class="cart-calculate-items">
                                    <h3>Total na Carrinha</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <td>Sub Total</td>
                                                <td>$ {{$t}},00</td>
                                            </tr>
                                            <tr class="total">
                                                <td>Total</td>
                                                <td class="total-amount">$ {{$t}},00</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <input type="text" hidden name="valor_total" value="{{$t}}.00">
                                <input type="text" hidden name="utilizador_id" value="1">
                                <input type="text" hidden name="estado" value="Pendente">
                                <a class="btn obrien-button primary-btn d-block" href={{url("pagamento")}}>Encomendar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- cart main wrapper end -->
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