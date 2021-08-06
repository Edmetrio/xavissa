@extends('template')

@section('content')
<div class="content-wrap">
    <div class="page-title">
        <h1>Contas a Pagar</h1>
        <p>Área específica para Adicionar</p>
    </div>
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="wdgt-box wrkng-ordr styl2">
            <div class="wdgt-opt">
                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
            </div>
            <div class="wdgt-ldr">
                <div class="ball-pulse">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            @if(session('status'))
            <div class="alert alert-success" role="alert" style="text-align: center; font-weight: bold;">
                <p class="status">{{session('status')}}</p>
            </div>
            @endif
            <h4>Contas a Pagar</h4>
            <div class="slct-box">
                <i class="icon ion-android-funnel"> Sort By:</i>
                <select>
                    <option>Date</option>
                    <option>Date</option>
                    <option>Date</option>
                    <option>Date</option>
                    <option>Date</option>
                </select>
            </div>
            <div class="ordr-tbl-wrp">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Data de pagamento</th>
                            <th>Estado</th>
                            <th>Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pagar as $p)
                        <tr>
                            <td>{{$p->nome}}</td>
                            <td>
                                <h4><a href="#" title="">{{$p->descricao}}</a></h4>
                            </td>
                            <td>${{$p->valor}},00</td>
                            <td>{{$p->pagamento}}</td>
                            <td><a class="prd-wshlst-btn" href="{{url("pagar/$p->id/edit")}}" title="Alterar"><i class="fa fa-pencil edit-btn"></i></a>
                                <a class="prd-adcrt-btn" href="{{url("cpdestroy/$p->id")}}" title="Apagar"><i class="fa fa-trash-o"></i></a>
                            </td>
                            @if($p->estado_id == 1)<td><span class="lmtd">{{$p->contnome}}</span></td> 
                            @else <td><span class="nostck">{{$p->contnome}}</span></td>@endif

                        </tr>
                        @endforeach
                        <!--                         <tr>
                            <td>PR087218</td>
                            <td>
                                <h4><a href="#" title="">Natasha Kim</a></h4>
                            </td>
                            <td>$14000</td>
                            <td>Online Payment</td>
                            <td><span class="avabl">No Stock</span></td>
                        </tr> -->
                    </tbody>
                </table>
                <h4 style="float: right;">$ {{$t}},00</h4>
            </div>
        </div>
    </div>
</div>
@endsection