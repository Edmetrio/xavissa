@extends('headerProduto')

@section('content')

<div class="breadcrumbs-area position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="breadcrumb-content position-relative section-content">
                            <h3 class="title-3">FAVORITO</h3>
                            <ul>
                                <li><a href="{{url('/')}}">Ínicio</a></li>
                                <li>Lista dos Favoritos</li>
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
               
<!-- Wishlist main wrapper start -->
@if(session('status'))
            <div class="alert alert-success" role="alert" style="text-align: center; font-weight: bold;">
                <p class="status">{{session('status')}}</p>
            </div>
            @endif
<div class="wishlist-main-wrapper mt-no-text mb-no-text">
            <div class="container container-default-2 custom-area">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Wishlist Table Area -->
                        <div class="wishlist-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Imagem</th>
                                        <th class="pro-title">Prduto</th>
                                        <th class="pro-price">Preço</th>
                                        <th class="pro-stock">Estado</th>
                                        <th class="pro-cart">Adicionar na Carrinha</th>
                                        <th class="pro-remove">Remover</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($produto as $p)
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/images/product/{{$p->icon}}" alt="Product" /></a></td>
                                        <td class="pro-title"><a href="#">{{$p->descricao}}<br></a></td>
                                        <td class="pro-price"><span>{{$p->preco}},00MT/Kg</span></td>
                                        <td class="pro-stock"><span><strong>Em Estoque</strong></span></td>
                                        <td class="pro-cart"><a href={{url("detalhes/$p->id")}} class="btn obrien-button primary-btn text-uppercase">Adicionar na Carrinha</a></td>
                                        <td class="pro-remove"><a href={{url("fdestroy/$p->id")}}><i class="ion-trash-b"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wishlist main wrapper end -->
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