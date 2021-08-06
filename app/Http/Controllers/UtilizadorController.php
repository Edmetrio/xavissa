<?php

namespace App\Http\Controllers;

use App\Models\Models\Utilizador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UtilizadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function save(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'info' => 'required',
            'email' => 'required|email|unique:utilizador',
            'password' => 'required|min:5|max:12'
        ]);

        $utilizador = new Utilizador;
        $utilizador->nivel_id = $request->nivel_id;
        $utilizador->nome = $request->nome;
        $utilizador->info = $request->info;
        $utilizador->foto = $request->foto;
        $utilizador->email = $request->email;
        $utilizador->password = Hash::make($request->password);
        $query = $utilizador->save();

        if($query)
        {
            return back()->with('success', 'Você foi autenticado');
        } 
        else {
            return back()->with('fail', 'Algo está errado');
        }
    }

        public function check(Request $request)
        {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:5|max:12'
            ]);

            $utilizador = Utilizador::where('email','=',$request->email)->first();
            dd($utilizador);
            if(Auth::attempt($utilizador))
            {
                return redirect('/');
            } else {
                return redirect('login');
            }
            /* if($utilizador)
            {  
                if(Hash::check($request->password, $utilizador->password))
                {
                    $request->session()->put('LoggedUser', $utilizador->id);
                    return redirect('/'); 
                }
                else{
                    return back()->with('fail', 'Palavra-Passe Incorrecta');
                }
            }
            else{
                return back()->with('fail', 'Não achamos essa conta de E-mail');
            } */
        }

        /* public function profile()
        {
            if(session()->has('LoggedUser'))
            {
                $utilizador = Utilizador::where('id','=',session('LoggedUser'))->first();
                $data = [
                    'LoggedUserInfo'=>$utilizador
                ];
            }
            return view('dashboard', $data);  
        } */

        public function logout()
        {
            if(session()->has('LoggedUser')){
                session()->pull('LoggedUser');
                return redirect('login');
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
