@extends('headerDetalhes')

@section('content')

<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Detalhes do Produto</h3>
                    <ul>
                        <li><a href="{{url('/')}}">Ínicio</a></li>
                        <li>Detalhes do Produto</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
    
<div class="single-product-main-area">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-lg-5 col-custom">
                <div class="product-details-img horizontal-tab">
                    <div class="product-slider popup-gallery product-details_slider" data-slick-options='{
                        "slidesToShow": 1,
                        "arrows": false,
                        "fade": true,
                        "draggable": false,
                        "swipe": false,
                        "asNavFor": ".pd-slider-nav"
                        }'>
                        <div class="single-image border">
                            <a href="{{asset('assets/images/product/'.$detalhes->icon)}}">
                                <img src="{{asset('assets/images/product/'.$detalhes->icon)}}" alt="Product">
                            </a>
                        </div>
                        @foreach($produto as $p)
                        <div class="single-image border">
                            <a href="{{asset('assets/images/product/'.$p->icon)}}">
                                <img src="{{asset('assets/images/product/'.$p->icon)}}" alt="Product">
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="pd-slider-nav product-slider" data-slick-options='{
                        "slidesToShow": 4,
                        "asNavFor": ".product-details_slider",
                        "focusOnSelect": true,
                        "arrows" : false,
                        "spaceBetween": 30,
                        "vertical" : false
                        }' data-slick-responsive='[
                            {"breakpoint":1501, "settings": {"slidesToShow": 4}},
                            {"breakpoint":1200, "settings": {"slidesToShow": 4}},
                            {"breakpoint":992, "settings": {"slidesToShow": 4}},
                            {"breakpoint":575, "settings": {"slidesToShow": 3}}
                        ]'>
                        @foreach($produto as $p)
                        <div class="single-image border">
                            <a href="{{asset('assets/images/product/'.$p->icon)}}">
                                <img src="{{asset('assets/images/product/'.$p->icon)}}" alt="Product">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-custom">
                <input class="cart-plus-minus-box" hidden name="utilizador_id" value="1" type="text">
                <input class="cart-plus-minus-box" hidden name="produto_id" value="{{$detalhes->id}}" type="text">
                <div class="product-summery position-relative">
                    <div class="product-head mb-3">
                        <h2 class="product-title">{{$detalhes->nome}}</h2>
                    </div>
                    <div class="price-box mb-2">
                        <span class="regular-price">$ {{$detalhes->preco}},00</span>
                    </div>
                    <div class="product-rating mb-3">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="sku mb-3">
                        <span>SKU: 12345</span>
                    </div>
                    <p class="desc-content mb-5">{{$detalhes->descricao}}</p>
                    <form method="post" action="{{url('favorito')}}">
                        @csrf
                        <input class="cart-plus-minus-box" hidden name="utilizador_id" value="0c82dc77-33d5-4b82-850c-3fbd7fe0ad0b" type="text">
                        <input class="cart-plus-minus-box" hidden name="produto_id" value="{{$detalhes->id}}" type="text">
                        <input class="cart-plus-minus-box" hidden name="estado" value="on" type="text">
                        <div class="quantity-with_btn mb-4">
                            <div class="add-to_cart">
                                <button class="btn obrien-button-2 treansparent-color pt-0 pb-0">Adicionar ao Favorito</button>
                            </div>
                        </div>
                    </form>
                    <div class="social-share mb-4">
                        <span>Mostrar :</span>
                        <a href="https://firsteducation.edu.mz/"><i class="fa fa-facebook-square facebook-color"></i></a>
                        <a href="https://firsteducation.edu.mz/"><i class="fa fa-twitter-square twitter-color"></i></a>
                        <a href="https://firsteducation.edu.mz/"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                        <a href="https://firsteducation.edu.mz/"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-no-text">
        </div>
    </div>
</div>

<!-- jQuery JS -->
<script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<!-- jQuery Migrate JS -->
<script src="{{asset('assets/js/vendor/jQuery-migrate-3.3.0.min.js')}}"></script>
<!-- Modernizer JS -->
<script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<!-- Slick Slider JS -->
<script src="{{asset('assets/js/plugins/slick.min.js')}}"></script>
<!-- Countdown JS -->
<script src="{{asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>
<!-- Ajax JS -->
<script src="{{asset('assets/js/plugins/jquery.ajaxchimp.min.js')}}"></script>
<!-- Jquery Nice Select JS -->
<script src="{{asset('assets/js/plugins/jquery.nice-select.min.js')}}"></script>
<!-- Jquery Ui JS -->
<script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}"></script>
<!-- jquery magnific popup js -->
<script src="{{asset('assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

@endsection