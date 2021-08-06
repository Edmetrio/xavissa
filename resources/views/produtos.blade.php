@extends('headerProduto')

@section('content')

<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Nome dos Produtos</h3>
                    <ul>
                        <li><a href="{{url('/')}}">Ínicio</a></li>
                        <li>Todos Produtos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->

<!-- Shop Main Area Start Here -->
<div class="shop-main-area shop-fullwidth">
    <div class="container container-default custom-area">
        <div class="row flex-row-reverse">
            <div class="col-12 col-custom widget-mt">
                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper">
                    <div class="shop_toolbar_btn">
                        <button data-role="grid_4" type="button" class="active btn-grid-4" data-toggle="tooltip" title="4"><i class="fa fa-th"></i></button>
                        <button data-role="grid_3" type="button" class="btn-grid-3" data-toggle="tooltip" title="3"> <i class="fa fa-th-large"></i></button>
                        <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                    </div>
                    <div class="shop-select">
                        <form class="d-flex flex-column w-100" action="#">
                            <div class="form-group">
                                <select class="form-control nice-select w-100">
                                    <option selected value="1">Alphabetically, A-Z</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <!--shop toolbar end-->
                <!-- Shop Wrapper Start -->

                <div class="row shop_wrapper grid_4">
                    @foreach($produto as $p)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-custom product-area">
                        <div class="single-product position-relative">
                            <div class="product-image">
                                <a class="d-block" href={{url("detalhes/$p->id")}}>
                                    <img src="assets/images/product/{{$p->icon}}" alt="" class="product-image-1 w-100">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-title">
                                    <h4 class="title-2"> <a href="product-details.html">{{$p->nome}}</a></h4>
                                </div>
                                <div class="price-box">
                                    <span class="regular-price ">$ {{$p->preco}},00</span>
                                </div>
                            </div>
                            <div class="add-action d-flex position-absolute">
                                <a href={{url("detalhes/$p->id")}} title="Adicionar na Carrinha">
                                    <i class="ion-bag"></i>
                                </a>
                                <!-- <a href="#" title="Add To Wishlist">
                                    <i class="ion-ios-heart-outline"></i>
                                </a> -->
                                <a href="#{{$p->nome}}" data-toggle="modal" title="Visão Rápida">
                                    <i class="ion-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Shop Wrapper End -->
                <!-- Bottom Toolbar Start -->
                <div class="row">
                    <div class="col-sm-12 col-custom">
                        <div class="toolbar-bottom mt-30">
                            <nav class="pagination pagination-wrap mb-10 mb-sm-0">
                                <ul class="pagination">
                                    <li class="disabled prev">
                                        <i class="ion-ios-arrow-thin-left"></i>
                                    </li>
                                    <li class="active"><a>1</a></li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li class="next">
                                        <a href="#" title="Next >>"><i class="ion-ios-arrow-thin-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                            <p class="desc-content text-center text-sm-right">Mostrar 1 - 12 de 34</p>
                        </div>
                    </div>
                </div>
                <!-- Bottom Toolbar End -->
            </div>
        </div>
    </div>
</div>

<!-- Product Area End Here -->

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