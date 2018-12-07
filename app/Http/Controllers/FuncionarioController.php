<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::paginate();
        return view('painel.funcionario.index', compact(('data')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classe = new User();
        return view('painel.funcionario.create', compact('classe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ver_email = User::where('email', $request->email)->get();
        if(count($ver_email) > 0)
            return redirect()->route('funcionario.index')
                ->with('notification-error', 'E-mail ['. $request->email .'] já cadastrado.');   

        $ver_cpf = User::where('cpf', $request->cpf)->get();
        if(count($ver_cpf) > 0)
            return redirect()->route('funcionario.index')
                ->with('notification-error', 'CPF ['. $request->cpf .'] já cadastrado.');   
                                
        $user = new User();
        $this->preencheDados($request, $user);

        $user->save();

        return redirect()->route('funcionario.index')
            ->with('notification-success', 'Funcionário criado com sucesso.');        
    }

    private function preencheDados(Request $request, User $user)
    {
        if($request->cpf)
            $user->cpf = str_replace('-','',str_replace('.','',str_replace('/','', $request->cpf)));

        if($request->nascimento)
        {
            $date = explode('/', $request->nascimento);
            $user->nascimento = $date[2] . '-' . $date[1] . '-' . $date[0];
        }

        $senha = str_random(8);
        $user->password = $senha;

        $campos = $request->except('_token', '_method', 'cpf', 'nascimento');
        foreach($campos as $campo=>$valor)
        {
            if(!empty($valor))
                $user->$campo = $valor;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $user = User::findOrFail($user);
        $classe = $user;
        return view('painel.funcionario.edit', compact('classe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        $user = User::findOrFail($user);

        $this->preencheDados($request, $user);

        $user->save();
        return redirect()->route('funcionario.index')
            ->with('notification-success', 'Funcionário criado com sucesso.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        $user = User::findOrFail($user);
        $user->delete();
        return redirect()->route('funcionario.index')
            ->with('notification-info', 'Funcionário apagado com sucesso.'); 
    }
}
