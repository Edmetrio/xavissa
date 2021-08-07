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

                </div>
                <div class="wdgt-box prd-wrp">
                    <div class="wdgt-titl">
                        <h4>Produtos</h4>
                        <p>Todos produtos na sua Loja</p>
                    </div>
                            <div class="col-md-4 col-sm-6 col-lg-12">
                                            <h4>Contextual Classes Table</h4>
                                            <table class="table">
                                                <thead>
                                                       <tr>
                                                        <th scope="col">Nome</th>
                                                        <th scope="col">E-mail</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($cliente as $c)

                                                    <tr class="table-active">
                                                        <td>{{$c->name}}</td>
                                                        <td>{{$c->email}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection