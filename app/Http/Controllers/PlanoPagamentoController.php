<?php

namespace App\Http\Controllers;

use App\PlanoPagamento;
use Illuminate\Http\Request;

class PlanoPagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PlanoPagamento::paginate();
        return view('painel.planopagamento.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classe = new PlanoPagamento();
        return view('painel.planopagamento.create', compact('classe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plano = new PlanoPagamento();

        $this->preencheDados($request, $plano);

        $plano->save();
        return redirect()->route('planopagamento.index')
            ->with('notification-success', 'Plano de Pagamento criado com sucesso.');
    }

    private function preencheDados(Request $request, PlanoPagamento $plano)
    {
        if($request->multa)
            $plano->multa = str_replace(',', '.', str_replace('%', '', $request->multa));

        if($request->juros)
            $plano->juros = str_replace(',', '.', str_replace('%', '', $request->juros));

        if($request->vencimento)
        {
            $date = explode('/', $request->vencimento);
            $plano->vencimento = $date[2] . '-' . $date[1] . '-' . $date[0];
        }

        $campos = $request->except('_token', '_method', 'juros', 'multa', 'vencimento');
        foreach($campos as $campo=>$valor)
        {
            if(!empty($valor))
                $plano->$campo = $valor;
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlanoPagamento  $planoPagamento
     * @return \Illuminate\Http\Response
     */
    public function show(PlanoPagamento $planoPagamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlanoPagamento  $planoPagamento
     * @return \Illuminate\Http\Response
     */
    public function edit($planoPagamento)
    {
        $planoPagamento = PlanoPagamento::findOrFail($planoPagamento);
        $classe = $planoPagamento;
        return view('painel.planopagamento.edit', compact('classe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlanoPagamento  $planoPagamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $planoPagamento = PlanoPagamento::findOrFail($request->id);
        $this->preencheDados($request, $planoPagamento);
        $planoPagamento->save();

        return redirect()->route('planopagamento.index')
            ->with('notification-success', 'Plano de Pagamento alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlanoPagamento  $planoPagamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($planoPagamento)
    {
        $planoPagamento = PlanoPagamento::findOrFail($planoPagamento);
        $planoPagamento->delete();
        return redirect()->route('planopagamento.index')
            ->with('notification-info', 'Plano de Pagamento apagado com sucesso.'); 
    }
}
