<?php

namespace App\Http\Controllers;

use App\Models\Models\Estado;
use App\Models\Models\Estoque;
use App\Models\Models\itemcarrinha;
use Illuminate\Http\Request;

class ItemCarrinhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* return $request->input(); */
        $quantEst = Estoque::where('produto_id', $request->produto_id)->first();
        if($quantEst->quantidade >= $request->quantidade)
        {
            $quant = $quantEst->quantidade - $request->quantidade;
            $item = Estoque::where(['produto_id' => $request->produto_id])->update([
                'quantidade' => $quant
            ]);
            $item = itemcarrinha::create([
                'user_id' => $request->user_id,
                'produto_id' => $request->produto_id,
                'quantidade' => $request->quantidade
            ]);
            if ($item) {
                $request->session()->flash('status', 'Produto adicionado!');
                return redirect('carrinha');
            }
        }else {
            $request->session()->flash('status', 'Erro ao Diminuir Estoque!');
            return redirect('/');
         }
        
        /* $item = itemcarrinha::create([
            'utilizador_id' => $request->utilizador_id,
            'produto_id' => $request->produto_id,
            'quantidade' => $request->quantidade
        ]);
        if ($item) {
            $request->session()->flash('status', 'Produto adicionado!');
            return redirect('carrinha');
        } else {
            $request->session()->flash('status', 'Erro ao Adicionar');
            return redirect('/');
        } */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $quantItem = itemcarrinha::where(['id'=>$id])->first();
        /* dd($quantItem->produto_id); */
        $estoque = Estoque::where('produto_id', $quantItem->produto_id)->first();
        $quantidadeTotal = $estoque->quantidade + $quantItem->quantidade;
        
        $removerItem = itemcarrinha::find($id)->delete();
        if($removerItem)
        {
            Estoque::where(['produto_id' => $quantItem->produto_id])->update([
                'quantidade' => $quantidadeTotal 
            ]);
            $request->session()->flash('status', 'Eliminado com Sucesso');
            return redirect('carrinha');
        }
        else{
            $request->session()->flash('status', 'Erro ao Eliminado');
            return redirect('/');
        }
    }
}
