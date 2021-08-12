<?php

namespace App\Http\Controllers;

use App\Models\Models\itemcarrinha;
use App\Models\Models\Categoria;
use App\Models\Models\Estoque;
use App\Models\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
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
            $produto = Produto::where('visivel', 'on')->get();
            $categoria = Categoria::where('visivel', 'on')->get();
            /* $categoria = Categoria::where('id', '64ae1627-c859-4624-8d92-d735a3ce821f')->with('produto')->get(); */

            return view('produtos', compact('produto', 'categoria', 'item', 'numero', 't'));
        } else {
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
            $produto = Produto::where('visivel', 'on')->get();
            $categoria = Categoria::where('visivel', 'on')->get();
            /* $categoria = Categoria::where('id', '64ae1627-c859-4624-8d92-d735a3ce821f')->with('produto')->get(); */

            return view('produtos', compact('produto', 'categoria', 'item', 'numero', 't'));
        }
    }

    public function detalhes($id)
    {
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
        $detalhes = Produto::find($id);
        $categoria = Categoria::where('visivel', 'do')->get();
        $produto = Produto::where('visivel', 'on')->get();
        return view('detalhes', compact('detalhes', 'item', 'numero', 't', 'categoria', 'produto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categoria::all();
        return view('createProduto', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'icon' => 'required|mimes:jpg,png,jped|max:5048'
        ]);
        /* $tamanho = $request->file('image')->getSize(); */
        $nome = $request->file('icon')->getClientOriginalName();
        $NovoNome = $request->nome . '.' . $request->icon->extension();
        $request->icon->move(public_path('assets/images/product'), $NovoNome);

        $produto = produto::create([
            'categoria_id' => $request->categoria_id,
            'nome' => $request->nome,
            'icon' => $NovoNome,
            'preco' => $request->preco,
            'descricao' => $request->descricao
        ]);
        Estoque::create([
            'user_id' => $request->user_id,
            'produto_id' => $produto->id,
            'quantidade' => $request->quantidade
        ]);
        if ($produto) {
            $request->session()->flash('status', 'Produto adicionado!');
            return redirect('base');
        } else {
            $request->session()->flash('status', 'Erro ao Produto');
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
        if (Auth::user()) {
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
            /* $produto = Categoria::find($id)->relProduto; */
            $produto = produto::join('categoria', 'produto.categoria_id', 'categoria.id')
                ->where('categoria.id', $id)
                ->where('produto.visivel', 'on')
                ->where('categoria.visivel', 'on')
                ->select('produto.*')
               
                ->get();
                /* dd($produto); */

            $cat = Categoria::find($id);
            $categoria = Categoria::where('visivel', 'on')->get();
            return view('produtoDeta', compact('produto', 'categoria', 'item', 'numero', 't', 'cat'));
        } else {
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
            /* $produto = Categoria::find($id)->relProduto; */
            $produto = produto::join('categoria', 'produto.categoria_id', 'categoria.id')
                ->where('categoria.id', $id)
                ->where('produto.visivel', 'on')
                ->where('categoria.visivel', 'on')
                ->select('produto.*')
              
                ->get();


            $cat = Categoria::find($id);
            $categoria = Categoria::where('visivel', 'on')->get();
            return view('produtoDeta', compact('produto', 'categoria', 'item', 'numero', 't', 'cat'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        $categoria = Produto::find($id)->relCategoria;
        $estoque = Estoque::where('produto_id', $id)->first();
        return view('editProduto', compact('produto', 'categoria','estoque'));
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
        /* return $request->input(); */
        $produto = produto::where(['id' => $id])->update([
            'categoria_id' => $request->categoria_id,
            'nome' => $request->nome,
            'icon' => $request->icon,
            'preco' => $request->preco,
            'descricao' => $request->descricao,
            'visivel' => $request->visivel
        ]);
        if ($produto) {
            $request->session()->flash('status', 'Produto Actualizado!');
            return redirect('base');
        } else {
            $request->session()->flash('status', 'Erro ao Actualizar');
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $produto = Produto::find($id)->delete();
        if ($produto) {
            $request->session()->flash('status', 'Eliminado com Sucesso');
            return redirect('base');
        } else {
            $request->session()->flash('status', 'Erro ao Eliminar');
            return redirect('/');
        }
    }
}
