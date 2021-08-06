@extends('template')

@section('content')
<div class="content-wrap">
    <div class="page-title">
        <h1>Contas a Pagar</h1>
        <p>Área específica para @if(isset($pagar)) Alterar @else Adicionar @endif</p>
    </div>
    <div class="content-inner remove-ext5">
        <div class="row mrg20">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="wdgt-box chckut-wrp">
                    <div class="chckut-innr">
                        <div class="wdgt-titl">
                            <h4>Contas a Pagar</h4>
                            <p>Por favor, preencha todos campos</p>
                        </div>
                        <div class="chckut-inr">
                            @if(isset($pagar))
                            <form action={{url("pagar/$pagar->id")}} method="POST">
                                @method('PUT')
                                @csrf
                                @else
                                <form action="{{url('pagar')}}" method="POST">
                                    @csrf
                                    @endif
                                    <div class="row mrg20">
                                        <div class="col-md-6 col-sm-12 col-lg-8">
                                            <input type="text" name="nome" placeholder="Nome da Conta a Pagar" value="{{$pagar->nome ?? ''}}" required>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-4">
                                            <input type="number" name="valor" placeholder="Valor da Conta a Pagar" value="{{$pagar->valor ?? ''}}" required>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                            <input type="date" name="pagamento" placeholder="Data de Pagamento" value="{{$pagar->pagamento ?? ''}}" required>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-12">
                                            <input type="text" name="descricao" placeholder="Descrição" value="{{$pagar->descricao ?? ''}}" required>
                                        </div>
                                        <input type="text" hidden name="user_id" value="{{ Auth::user()->id}}">
                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                        <select name="estado_id">
                                            @foreach($estado as $e)
                                            <option value="{{$e->id}}">{{$e->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                        <div class="col-md-6 col-sm-12 col-lg-2">
                                            <button type="submit" value="">@if(isset($pagar)) Alterar @else Adicionar @endif</button>
                                        </div>
                                    </div><br><br>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection