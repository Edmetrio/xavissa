<?php

namespace App\Http\Controllers;

use App\Models\Models\Categoria;
use App\Models\Models\item_encomenda;
use App\Models\Models\Produto;
use App\Models\Models\Utilizador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categoria = Categoria::all();
        $Produto = Produto::all();
        $Historico = DB::table('item_encomenda')
        ->join('produto', 'item_encomenda.produto_id', '=', 'produto.id')
        ->join('encomenda', 'item_encomenda.encomenda_id', '=', 'encomenda.id')
        ->join('utilizador', 'encomenda.utilizador_id', '=', 'utilizador_id')
        ->where('encomenda.utilizador_id', '0c82dc77-33d5-4b82-850c-3fbd7fe0ad0b')
        ->select('produto.*', 'produto.icon as proicon', 'item_encomenda.quantidade as quantidade',
        'utilizador.nome as utinome')
        ->get();

        
         $total = 0;
            foreach($Historico as $p)
            {
                $p->valor_total = $p->preco * $p->quantidade;
                $total += $p->valor_total;
            }
                $t = $total;

        $Utilizador = Utilizador::all();
        return view('perfil', compact('Categoria','Produto','Historico','t','Utilizador'));
    }

    public function base()
    {
        $produto = Produto::all();
        $categoria = Categoria::all();
        return view('base', compact('produto','categoria'));
    }

    public function adicionar()
    {
        $produto = Produto::all();
        $categoria = Categoria::all();
        $numero = Categoria::all()->count();
        return view('adicionar', compact('produto','categoria','numero'));
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
