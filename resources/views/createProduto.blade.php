@extends('template')

@section('content')
<div class="content-wrap">
    <div class="page-title">
        <h1>Adicionar</h1>
        <p>Área específica para Adicionar</p>
    </div>
    <div class="content-inner remove-ext5">
        <div class="row mrg20">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="wdgt-box chckut-wrp">
                    <div class="chckut-innr">
                        <div class="wdgt-titl">
                            <h4>Categoria</h4>
                            <p>Por favor, preencha todos campos</p>
                        </div>
                        <div class="chckut-inr">
                            <form action="{{url('produto')}}" method="POST"  enctype="multipart/form-data">
                                @csrf
                                <div class="row mrg20">
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <select name="categoria_id">
                                        @foreach($categoria as $c)
                                            <option value="{{$c->id}}">{{$c->nome}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <input type="text" name="nome" placeholder="Nome do Produto*">
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <input type="file" name="icon" placeholder="prata.jpg*">
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <input type="number" name="preco" placeholder="Preço*">
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <input type="text" name="descricao" placeholder="Descrição*">
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <input type="number" name="quantidade" placeholder="Quantidade*">
                                    </div>
                                    <input type="text" hidden name="user_id" value="{{ Auth::user()->id }}">
                                    <div>
                                    <button type="submit" value="">Adicionar</button>
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
@endsection