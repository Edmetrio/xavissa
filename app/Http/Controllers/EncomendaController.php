<?php

namespace App\Http\Controllers;

use App\Models\Models\itemcarrinha;
use App\Models\Models\Categoria;
use App\Models\Models\Encomenda;
use App\Models\Models\item_encomenda;
use App\Models\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class EncomendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categoria = Categoria::where('visivel', 'on')->get();
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
            
        $numero = Produto::all()->count();

        return view('historico', compact('categoria','produto','t','categoria','numero'));
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
        if (itemcarrinha::where('user_id', Auth::user()->id)->exists()) {

            $encomenda = new Encomenda();
            $encomenda->user_id = Auth::user()->id;
            $encomenda->estado = $request['estado'];
            $encomenda->valor_total = $request['valor_total'];
            $encomenda->save();
            if ($encomenda) {
                $itenscarrinho = itemcarrinha::where('user_id', Auth::user()->id)->get();
                foreach ($itenscarrinho as $itens) {
                    item_encomenda::create([
                        'encomenda_id' => $encomenda->id,
                        'produto_id' => $itens->produto_id,
                        'quantidade' => $itens->quantidade,
                        'subtotal' => $itens->subtotal
                    ]);
                }
                itemcarrinha::where('user_id', Auth::user()->id)->delete();
                $request->session()->flash('status', 'Encomenda feita com Sucesso!');
                return redirect('/');
            } else {
                $request->session()->flash('status', 'Erro ao Encomendar!');
                return redirect('carrinha');
            }
        } else {
            echo 'Erro ao carregar Utilizador';
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
