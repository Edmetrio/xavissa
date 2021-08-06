@extends('template')

@section('content')
<div class="content-wrap">
    <div class="page-title">
        <h1>Estoque</h1>
        <p>Área específica para Adicionar</p>
    </div>
    <div class="content-inner remove-ext5">
        <div class="row mrg20">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="wdgt-box chckut-wrp">
                    <div class="chckut-innr">
                        <div class="wdgt-titl">
                            <h4>Estoque</h4>
                            <p>Por favor, preencha todos campos</p>
                        </div>
                        <div class="chckut-inr">
                            <form action="{{url('estoque')}}" method="POST">
                                @csrf
                                <div class="row mrg20">
                                    <div class="col-md-6 col-sm-12 col-lg-5">
                                        <select name="produto_id">
                                            @foreach($produto as $p)
                                            <option value="{{$p->id}}">{{$p->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-3">
                                        <input type="text" name="quantidade" placeholder="Quantidade">
                                    </div>
                                    <input type="text" hidden name="user_id" value="{{ Auth::user()->id }}">

                                    <div class="col-md-6 col-sm-12 col-lg-2">
                                        <button type="submit" value="">Adicionar</button>
                                    </div>
                                </div><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection