<?php

namespace App\Http\Controllers;

use App\Models\Models\Categoria;
use App\Models\Models\itemcarrinha;
use App\Models\Models\Itemfavorito;
use App\Models\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ItemfavoritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numero = itemcarrinha::count();
        $item = DB::table('itemcarrinha')
            ->join('produto', 'itemcarrinha.produto_id', '=', 'produto.id')
            ->where('itemcarrinha.utilizador_id', '0c82dc77-33d5-4b82-850c-3fbd7fe0ad0b')
            ->select('produto.*', 'itemcarrinha.quantidade as quantidade', 'itemcarrinha.id as itemid')
            ->get();

        $total = 0;
        foreach ($item as $p) {
            $p->valor_total = $p->preco * $p->quantidade;
            $total += $p->valor_total;
        }
        $t = $total;
        $produto = DB::table('itemfavorito')
            ->join('produto', 'itemfavorito.produto_id', '=', 'produto.id')
            ->where('itemfavorito.utilizador_id', '0c82dc77-33d5-4b82-850c-3fbd7fe0ad0b')
            ->get();
        $categoria = Categoria::where('visivel', 'on')->get();
        return view('favorito', compact('produto', 'categoria', 'numero', 'item', 't'));
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
        $favorito = Itemfavorito::create([
            'utilizador_id' => $request->utilizador_id,
            'produto_id' => $request->produto_id,
            'estado' => $request->estado
        ]);
        if ($favorito) {
            $request->session()->flash('status', 'Adicionado como Favorito');
            return redirect('/');
        } else {
            $request->session()->flash('status', 'Erro ao Adicionar');
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
        $numero = itemcarrinha::count();
        $item = DB::table('itemcarrinha')
            ->join('produto', 'itemcarrinha.produto_id', '=', 'produto.id')
            ->where('itemcarrinha.utilizador_id', '0c82dc77-33d5-4b82-850c-3fbd7fe0ad0b')
            ->select('produto.*', 'itemcarrinha.quantidade as quantidade', 'itemcarrinha.id as itemid')
            ->get();

        $total = 0;
        foreach ($item as $p) {
            $p->valor_total = $p->preco * $p->quantidade;
            $total += $p->valor_total;
        }
        $t = $total;
        $detalhes = Produto::find($id);
        $categoria = Categoria::where('visivel', 'do')->get();
        $produto = Produto::where('visivel', 'on')->get();
        return view('favoritoDet', compact('produto', 'categoria', 'detalhes', 'numero', 'item', 't'));
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
    public function destroy(Request $request, $id)
    {
        $removerItem = Itemfavorito::find($id)->delete();
        if($removerItem)
        {
            $request->session()->flash('status', 'Eliminado com Sucesso');
            return redirect('favorito');
        }
        else{
            $request->session()->flash('status', 'Erro ao Eliminado');
            return redirect('/');
        }
    }
}
