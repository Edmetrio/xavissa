@extends('template')

@section('content')
<div class="content-wrap">
    <div class="page-title">
        <h1>Estoque</h1>
        <p>Área específica para @if(isset($pagar)) Alterar @else Adicionar @endif</p>
    </div>
    <div class="content-inner remove-ext5">
        <div class="row mrg20">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="wdgt-box chckut-wrp">
                    <div class="chckut-innr">
                        <div class="wdgt-titl">
                            <h4>Aumento de Estoque</h4>
                            <p>Por favor, preencha todos campos</p>
                            @if(session('status'))
                            <div class="alert alert-success" role="alert" style="text-align: center; font-weight: bold;">
                                <p class="status">{{session('status')}}</p>
                            </div>
                            @endif
                        </div>
                        <div class="chckut-inr">
                            <form action="{{url('aumentar')}}" method="POST">
                                @csrf
                                <div class="row mrg20">
                                    <div class="col-md-6 col-sm-12 col-lg-5">
                                        <select name="produto_id">
                                            @foreach($produto as $p)
                                            <option value="{{$p->id}}">{{$p->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="text" hidden name="utilizador_id" value="{{ Auth::user()->id }}">

                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <!-- <input type="number" name="quantidade" placeholder="Quantidade"> -->
                                        <div class="qt-ad-crt">
                                            <div class="qnty">
                                                <input type="text" name="quantidade" value="1" required>
                                            </div>
                                        <button type="submit" value=""> @if(isset($pagar)) Alterar @else Adicionar @endif</button>

                                        </div>
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