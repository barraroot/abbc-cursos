<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;

class UnidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Unidade::paginate();
        return view('painel.unidade.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classe = new Unidade();
        return view('painel.unidade.create', compact('classe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unidade = new Unidade();

        $unidade->nome = $request->nome;
        $unidade->cidade = $request->cidade;
        $unidade->estado = $request->estado;

        $unidade->save();

        return redirect()->route('unidade.index')
            ->with('notification-success', 'Unidade criada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function show(Turma $turma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function edit(Unidade $unidade)
    {
        $classe = $unidade;
        return view('painel.unidade.edit', compact('classe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unidade $unidade)
    {
        $unidade->nome = $request->nome;
        $unidade->cidade = $request->cidade;
        $unidade->estado = $request->estado;
        $unidade->save();

        return redirect()->route('unidade.index')
            ->with('notification-success', 'Unidade alterada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function destroy($turma)
    {
        $turma = Unidade::findOrFail($turma);
        $turma->delete();
        return redirect()->route('unidade.index')
            ->with('notification-info', 'Unidade apagada com sucesso.'); 
    }
}
