<?php

namespace App\Http\Controllers;

use App\Models\Models\Aumentarestoque;
use App\Models\Models\Estoque;
use App\Models\Models\Produto;
use Illuminate\Http\Request;

class AumentarestoqueController extends Controller
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
        $produto = Produto::all();
        return view('createEstoqueAumento', compact('produto'));
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
        $estoque = Estoque::where(['produto_id' => $request->produto_id])->first();
        $quantTotal = $estoque->quantidade + $request->quantidade;
        $aestoque = Aumentarestoque::create([
            'produto_id' => $request->produto_id,
            'user_id' => $request->user_id,
            'quantidade' => $request->quantidade
        ]);
        if ($aestoque) {
            $aumentaEstoque = Estoque::where(['produto_id' => $request->produto_id])->update([
                'quantidade' => $quantTotal
            ]);
            $request->session()->flash('status', 'Estoque Aumentado com sucesso!!');
            return redirect('aumentar/create');
        } else {
            $request->session()->flash('status', 'Erro ao Aumentar Estoque');
            return redirect('/');
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
