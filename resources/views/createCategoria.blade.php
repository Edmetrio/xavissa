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
                                <form action="{{url('categoria')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mrg20">
                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                            <input type="text" name="nome" placeholder="Nome da Categoria*">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                            <input type="file" name="image" id="image" placeholder="prata.jpg*">
                                        </div>
                                        <button type="submit" value="">Submeter</button>
                                    </div><br>
                                </form>

                               <!--  <div class="invoc-dta">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Nome da Categoria</th>
                                                <th>Icon</th>
                                                <th>Visibilidade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categoria as $c)
                                            <tr>
                                                <td><span>{{$c->nome}}</span></td>
                                                <td>{{$c->icon}}</td>
                                                <td><span>{{$c->visivel}}</span></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="invoc-tl">
                                        <span>Total:<i>{{$numero}}</i></span>
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