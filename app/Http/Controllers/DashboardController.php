<?php

namespace App\Http\Controllers;

use App\Models\Models\itemcarrinha;
use App\Models\Models\Categoria;
use App\Models\Models\Itemfavorito;
use App\Models\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        if(!Auth::user()){
        $numero = itemcarrinha::where('itemcarrinha.user_id', '')->count();
        $item = DB::table('itemcarrinha')
            ->join('produto', 'itemcarrinha.produto_id', '=', 'produto.id')
            ->where('itemcarrinha.user_id', '')
            ->select('produto.*', 'itemcarrinha.quantidade as quantidade', 'itemcarrinha.id as itemid')
            ->get();

        $total = 0;
        foreach ($item as $p) {
            $p->valor_total = $p->preco * $p->quantidade;
            $total += $p->valor_total;
        }
        $t = $total;
            $produto = Produto::where('visivel', 'on')->latest()->get();
            
            
        $categoria = Categoria::where('visivel', 'on')->get();
        return view('inicio', compact('produto', 'item', 't', 'numero', 'categoria'));
        }
        else{
            $numero = itemcarrinha::where('itemcarrinha.user_id', Auth::user()->id)->count();
            $item = DB::table('itemcarrinha')
                ->join('produto', 'itemcarrinha.produto_id', '=', 'produto.id')
                ->where('itemcarrinha.user_id', Auth::user()->id)
                ->select('produto.*', 'itemcarrinha.quantidade as quantidade', 'itemcarrinha.id as itemid')
                ->get();
    
            $total = 0;
            foreach ($item as $p) {
                $p->valor_total = $p->preco * $p->quantidade;
                $total += $p->valor_total;
            }
            $t = $total;
                $produto = Produto::where('visivel', 'on')->latest()->get();
            $categoria = Categoria::where('visivel', 'on')->latest()->get();
            return view('inicio', compact('produto', 'item', 't', 'numero', 'categoria'));
        }
    }

    public function erro(){
        
        return view('erro');
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
