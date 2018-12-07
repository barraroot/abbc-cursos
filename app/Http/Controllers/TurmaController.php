<?php

namespace App\Http\Controllers;

use App\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Turma::paginate();
        return view('painel.turma.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classe = new Turma();
        return view('painel.turma.create', compact('classe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turma = new Turma();

        $turma->descricao = $request->descricao;

        $turma->save();

        return redirect()->route('turma.index')
            ->with('notification-success', 'Turma criado com sucesso.');
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
    public function edit(Turma $turma)
    {
        $classe = $turma;
        return view('painel.turma.edit', compact('classe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turma $turma)
    {
        $turma->descricao = $request->descricao;
        $turma->save();

        return redirect()->route('turma.index')
            ->with('notification-success', 'Turma alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function destroy($turma)
    {
        $turma = Turma::findOrFail($turma);
        $turma->delete();
        return redirect()->route('turma.index')
            ->with('notification-info', 'Turma apagado com sucesso.'); 
    }
}
