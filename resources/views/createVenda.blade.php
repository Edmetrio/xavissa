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
                            <form action="{{url('venda')}}" method="POST">
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
                                        <select name="produto_id">
                                            @foreach($produto as $p)
                                            <option value="{{$p->id}}">{{$p->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <input type="numeric" name="quantidade" placeholder="Quantidade*">
                                    </div>
                                    <div>
                                        <button type="submit" value="">Adicionar</button>
                                    </div>
                                </div>
                            </form>

                            <!-- <div class="invoc-dta">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Nome da Categoria</th>
                                                <th>Icon</th>
                                                <th>Visibilidade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                    <div class="invoc-tl">
                                        <span>Total:<i></i></span>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection