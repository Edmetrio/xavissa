<?php

namespace App\Http\Controllers;

use App\Models\Models\Contareceber;
use App\Models\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receber = DB::table('contareceber')
        ->join('estado', 'contareceber.estado_id', 'estado.id')
        ->select('contareceber.*', 'estado.nome as contnome')
        ->get();

        $valor = 0;
        foreach($receber as $p)
        {
            $valor += $p->valor;
        }
            $t = $valor;
        return view('listareceber', compact('receber','t'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estado = Estado::whereIn('id', [2,4])->get();
        return view('createreceber', compact('estado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receber = Contareceber::create([
            'estado_id' => $request->estado_id,
            'user_id' => $request->user_id,
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'recebimento' => $request->recebimento,
            'valor' => $request->valor
        ]);
        if ($receber) {
            $request->session()->flash('status', 'Conta a Receber Adicionada!');
            return redirect('receber');
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
        $estado = Estado::whereIn('id', [2,4])->get();
        $receber = Contareceber::find($id);
        return view('createReceber', compact('receber','estado'));
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
        $receber = Contareceber::where(['id'=>$id])->update([
            'estado_id' => $request->estado_id,
            'user_id' => $request->user_id,
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'recebimento' => $request->recebimento,
            'valor' => $request->valor
        ]);
        if ($receber) {
            $request->session()->flash('status', 'Conta a Receber Actualizada!');
            return redirect('receber');
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
    public function destroy(Request $request, $id)
    {
        $receber = Contareceber::find($id)->delete();
        if ($receber) {
            $request->session()->flash('status', 'Conta a Receber Apagada!');
            return redirect('receber');
        } else {
            $request->session()->flash('status', 'Erro ao Apagar');
            return redirect('/');
        }
    }
}
