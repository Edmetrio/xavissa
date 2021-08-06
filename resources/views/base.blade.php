@extends('template')

@section('content')
<div class="content-wrap">
    <div class="page-title">
        <h1>Categorias e Produtos</h1>
        <p>Todas Categorias e Produtos</p>
    </div>
    <div class="content-inner remove-ext5">
        <div class="row mrg20">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="wdgt-box prd-wrp">
                    <div class="wdgt-titl">
                        <h4>Categoria</h4>
                        <p>Todas Categorias da sua Loja você encontra aqui</p>
                    </div>
                    <div class="remove-ext3">
                        <div class="row">
                            @foreach($categoria as $c)
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="prd-box">
                                    <div class="prd-thmb">
                                        <!-- <div class="col-md-6 col-sm-12 col-lg-6">
                                                <span class="prd-prc">Visibilidade</span>
                                            </div> -->
                                        <img src="{{ asset('assets/images/slider/'.$c->icon)}}" alt="prd-img1-1.jpg">
                                        <div class="prd-btns">
                                            <a class="prd-wshlst-btn" href="{{url('categoria/'.$c->id.'/edit')}}" title="Alterar"><i class="fa fa-pencil edit-btn"></i></a>
                                            <a class="prd-adcrt-btn" href="{{url('cdestroy/'.$c->id)}}" title="Apagar"><i class="fa fa-trash-o"></i></a>
                                        </div>
                                    </div>
                                    <div class="prd-inf">
                                        @if($c->visivel == '')<span class="ratng"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                        @elseif($c->visivel == 1)<span class="ratng"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                        @elseif($c->visivel == 'on')<span class="prd-prc">Visível</span>@endif
                                        <h4><a href="{{url('categoria/'.$c->id.'/edit')}}" title="">{{$c->nome}}</a></h4>
                                        <div class="opt-btn">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="wdgt-box prd-wrp">
                    <div class="wdgt-titl">
                        <h4>Produtos</h4>
                        <p>Todos produtos na sua Loja</p>
                    </div>
                    <div class="remove-ext3">
                        <div class="row">
                            @foreach($produto as $p)
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="prd-box text-center">
                                    <div class="prd-thmb">
                                        <img src="{{ asset('assets/images/product/'.$p->icon)}}" alt="prd-img2-1.jpg">
                                        <div class="prd-btns">
                                            <a class="prd-wshlst-btn" href="{{url('produto/'.$p->id.'/edit')}}" title="Alterar"><i class="fa fa-pencil edit-btn"></i></a>
                                            <a class="prd-adcrt-btn" href="{{url('pdestroy/'.$p->id)}}" title="Apagar"><i class="fa fa-trash-o"></i></a>
                                        </div>
                                    </div>
                                    <div class="prd-inf">
                                    @if($p->visivel == '')<span class="ratng"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                        @elseif($p->visivel == 1)<span class="ratng"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                        @elseif($p->visivel == 'on')<span class="prd-prc">Visível</span>@endif
                                        <h4><a href="{{url('produto/'.$p->id.'/edit')}}" title="">{{$p->nome}}</a></h4>
                                        <span class="prd-prc">$ {{$p->preco}},00</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection