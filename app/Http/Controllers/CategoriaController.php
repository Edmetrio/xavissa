<?php

namespace App\Http\Controllers;

use App\Models\Models\itemcarrinha;
use App\Models\Models\Categoria;
use App\Models\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $categoria = Http::get('http://exemplo.firsteducation.edu.mz/api/Categoria')->json();
        dd($categoria); */
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
            $categoria = Categoria::where('visivel', 'on')->get();
            $produto = Produto::where('visivel', 'on')->get();
            return view('categoria', compact('categoria', 'numero', 'item', 't', 'produto'));
        } 
        else {
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
            $categoria = Categoria::where('visivel', 'on')->get();
            $produto = Produto::where('visivel', 'on')->get();
            return view('categoria', compact('categoria', 'numero', 'item', 't', 'produto'));
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produto = Produto::all();
        $categoria = Categoria::all();
        $numero = Categoria::all()->count();
        return view('createCategoria', compact('produto', 'categoria', 'numero'));
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
            'image' => 'required|mimes:jpg,png,jped|max:5048'
        ]);
        /* $tamanho = $request->file('image')->getSize(); */
        $nome = $request->file('image')->getClientOriginalName();

        $NovoNome = $request->nome . '.' . $request->image->extension();

        $request->image->move(public_path('assets/images/slider'), $NovoNome);
        $categoria = Categoria::create([
            'nome' => $request->nome,
            'icon' => $NovoNome
        ]);
        if ($categoria) {
            $request->session()->flash('status', 'Categoria adicionado!');
            return redirect('base');
        } else {
            $request->session()->flash('status', 'Erro ao Categoria');
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
        $produto = Produto::all();
        $categoria = Categoria::find($id);
        $numero = Categoria::all()->count();
        return view('editCategoria', compact('produto', 'categoria', 'numero'));
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
        $categoria = Categoria::where(['id' => $id])->update([
            'nome' => $request->nome,
            'icon' => $request->icon,
            'visivel' => $request->visivel
        ]);
        if ($categoria) {
            $request->session()->flash('status', 'Categoria adicionado!');
            return redirect('base');
        } else {
            $request->session()->flash('status', 'Erro ao Categoria');
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
        $categoria = Categoria::find($id)->delete();
        if ($categoria) {
            $request->session()->flash('status', 'Eliminado com Sucesso');
            return redirect('base');
        } else {
            $request->session()->flash('status', 'Erro ao Eliminado');
            return redirect('/');
        }
    }
}
