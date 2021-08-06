<?php

namespace App\Http\Controllers;

use App\Models\Models\Contapagar;
use App\Models\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagar = DB::table('contapagar')
        ->join('estado', 'contapagar.estado_id', 'estado.id')
        ->select('contapagar.*', 'estado.nome as contnome')
        ->latest()->paginate(5);
        $valor = 0;
        foreach($pagar as $p)
        {
            $valor += $p->valor;
        }
            $t = $valor;
        return view('listapagar', compact('pagar','t'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estado = Estado::whereIn('id', [1,3])->get();
        return view('createPagar', compact('estado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'descricao' => 'required',
            'pagamento' => 'required',
            'descricao' => 'required'
        ]);

        $pagar = Contapagar::create([
            'estado_id' => $request->estado_id,
            'user_id' => $request->user_id,
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'pagamento' => $request->pagamento,
            'valor' => $request->valor
        ]);
        if ($pagar) {
            $request->session()->flash('status', 'Conta a Pagar Adicionada!');
            return redirect('pagar');
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
        $estado = Estado::whereIn('id', [1,3])->get();
        $pagar = Contapagar::find($id);
        return view('createPagar', compact('pagar','estado'));
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
        $pagar = Contapagar::where(['id'=>$id])->update([
            'estado_id' => $request->estado_id,
            'user_id' => $request->user_id,
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'pagamento' => $request->pagamento,
            'valor' => $request->valor
        ]);
        if ($pagar) {
            $request->session()->flash('status', 'Conta a Pagar Alterada!');
            return redirect('pagar');
        } else {
            $request->session()->flash('status', 'Erro ao Alterar');
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
        $pagar = Contapagar::find($id)->delete();
        if ($pagar) {
            $request->session()->flash('status', 'Conta a Pagar Apagada!');
            return redirect('pagar');
        } else {
            $request->session()->flash('status', 'Erro ao Apagar');
            return redirect('/');
        }
    }
}
