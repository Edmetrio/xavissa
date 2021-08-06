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
                            <form action="{{url("produto/$produto->id")}}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="row mrg20">
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <select name="categoria_id">
                                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <input type="text" name="nome" value="{{$produto->nome}}" placeholder="Nome da Categoria*">
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <input type="text" name="icon" value="{{$produto->icon}}" placeholder="prata.jpg*">
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <input type="text" name="preco" value="{{$produto->preco}}" placeholder="Preço*">
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <input type="text" name="descricao" value="{{$produto->descricao}}" placeholder="Descrição*">
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <input type="number" name="quantidade" value="{{$estoque->quantidade}}" placeholder="Quantidade*">
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-2">
                                        <span class="prd-prc">Visibilidade</span>
                                            <label class="switch-light switch-candy" onclick="">
                                                <input type="checkbox" name="visivel">
                                                <span>
                                                    <span>Off</span>
                                                    <span>on</span>
                                                    <a></a>
                                                </span>
                                            </label>
                                        </div>
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