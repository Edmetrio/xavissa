<?php

namespace App\Http\Controllers;

use App\Models\Models\Categoria;
use App\Models\Models\Endereco;
use App\Models\Models\Telefone;
use App\Models\Models\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::where('visivel', 'on')->get();
        $endereco = Endereco::where('user_id', Auth::user()->id)->get();
        $produto = DB::table('item_encomenda')
        ->join('produto', 'item_encomenda.produto_id', '=', 'produto.id')
        ->join('encomenda', 'item_encomenda.encomenda_id', '=', 'encomenda.id')
        ->where('encomenda.user_id',  Auth::user()->id)
        ->select('produto.*', 'produto.icon as proicon', 'item_encomenda.quantidade as quantidade')
        ->get();

        $total = 0;
            foreach($produto as $p)
            {
                $p->valor_total = $p->preco * $p->quantidade;
                $total += $p->valor_total;
            }
                $t = $total;

            $tipo = Tipo::all();
            
            $telefone = DB::table('telefone')
            ->join('tipo', 'telefone.tipo_id', '=', 'tipo.id')
            ->where('telefone.user_id', Auth::user()->id)
            ->get();
            /* dd($telefone); */

        return view('conta', compact('categoria', 'endereco','produto', 't', 'tipo','telefone'));
    }

    public function endereco(Request $request)
    {
        
        $endereco = Endereco::create([
            'user_id' => $request->user_id,
            'nome' => $request->nome
        ]);
        if ($endereco) {
            $request->session()->flash('status', 'Endereço adicionado!');
            return redirect('conta');
        } else {
            $request->session()->flash('status', 'Erro ao Adicionar');
            return redirect('/');
        }
    }

    public function telefone(Request $request)
    {
        /* $telefone = Telefone::create([
            'user_id' => $request->user_id,
            'tipo_id' => $request->tipo_id,
            'numero' => $request->numero
        ]); */
        $telefone = new Telefone();
        $telefone->user_id = Auth::user()->id;
        $telefone->tipo_id = $request->tipo_id;
        $telefone->numero = $request->numero;
        $telefone->save();
        if ($telefone) {
            $request->session()->flash('status', 'Telefone adicionado!');
            return redirect('conta');
        } else {
            $request->session()->flash('status', 'Erro ao Adicionar');
            return redirect('/');
        }
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
