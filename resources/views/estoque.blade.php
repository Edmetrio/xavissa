@extends('template')

@section('content')
<div class="content-wrap">
            <div class="page-title">
                <h1>Estoque</h1>
                <p>Todos produtos em Estoque</p>
            </div>
            <div class="content-inner remove-ext5">
                <div class="row mrg20">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="wdgt-box prd-wrp">
                            <div class="wdgt-titl">
                                <h4>Produtos</h4>
                                <p>Todos produtos em estoque</p>
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
                                                <span class="ratng"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                                <h4><a href="#" title="">{{$p->nome}}</a></h4>
                                                <span class="prd-prc">{{$p->quantidade}}</span>
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