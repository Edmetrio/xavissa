<?php

namespace App\Http\Controllers;

use App\Models\Models\itemcarrinha;
use App\Models\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CarrinhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = DB::table('itemcarrinha')
        ->join('produto', 'itemcarrinha.produto_id', '=', 'produto.id')
        ->where('itemcarrinha.user_id', Auth::user()->id)
        ->select('produto.*','itemcarrinha.quantidade as quantidade','itemcarrinha.id as itemid')
        ->get();
       
        $total = 0;
            foreach($produto as $p)
            {
                $p->valor_total = $p->preco * $p->quantidade;
                $total += $p->valor_total;
            }
                $t =  number_format($total,2,',','.');
                $m = $total * 64;
                $metical = number_format($m,2,',','.');
        $categoria = Categoria::where('visivel', 'on')->get();
        return view('carrinha', compact('produto','t', 'categoria','metical'));
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
        //
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
    public function update(Request $request)
    {
        $produto = DB::table('itemcarrinha')
        ->join('produto', 'itemcarrinha.produto_id', '=', 'produto.id')
        ->where('itemcarrinha.user_id', Auth::user()->id)
        ->select('produto.*','itemcarrinha.quantidade as quantidade','itemcarrinha.id as itemid')
        ->get();

        dd($request->quantidade);

        $total = 0;
            foreach($produto as $p)
            {
                $p->valor_total = $p->preco * $p->quantidade;
                $total += $p->valor_total;
            }
                $t = $total;
                
        return view('carrinha', compact('produto','t'));
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
