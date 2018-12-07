<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Unidade;
use App\Curso;
use App\Turma;
use App\PlanoPagamento;
use App\Contrato;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Aluno::paginate();
        return view('painel.aluno.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classe = new Aluno();
        return view('painel.aluno.create', compact('classe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno = new Aluno();

        $this->preencheDados($request, $aluno);

        $aluno->save();
        return redirect()->route('aluno.index')
            ->with('notification-success', 'Aluno criado com sucesso.');
    }

    private function preencheDados(Request $request, Aluno $aluno)
    {
        if($request->end_cep)
            $aluno->end_cep = str_replace('-','', $request->end_cep);

        if($request->tel)
            $aluno->tel = str_replace(' ','',str_replace(')','',str_replace('(','',str_replace('-','', $request->tel))));

        if($request->cel)
            $aluno->cel = str_replace(' ','',str_replace(')','',str_replace('(','',str_replace('-','', $request->cel))));

        if($request->cpf_cnpj)
            $aluno->cpf_cnpj = str_replace('-','',str_replace('.','',str_replace('/','', $request->cpf_cnpj)));

        if($request->nasc)
        {
            $date = explode('/', $request->nasc);
            $aluno->nasc = $date[2] . '-' . $date[1] . '-' . $date[0];
        }

        if($request->resp_cep)
            $aluno->resp_cep = str_replace('-','', $request->resp_cep);
        
        if($request->resp_nasc)
        {
            $date = explode('/', $request->resp_nasc);
            $aluno->resp_nasc = $date[2] . '-' . $date[1] . '-' . $date[0];
        }
        
        $senha = str_random(8);
        $aluno->password = $senha;

        $campos = $request->except('_token','resp_cep', 'resp_nasc', 'end_cep', 'tel', 'cel', 'cpf_cnpj', 'resp_estado', 'nasc', '_method');
        foreach($campos as $campo=>$valor)
        {
            if(!empty($valor))
                $aluno->$campo = $valor;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        $classe = $aluno;
        return view('painel.aluno.edit', compact('classe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {
        $this->preencheDados($request, $aluno);
        $aluno->save();

        return redirect()->route('aluno.index')
            ->with('notification-success', 'Aluno alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy($aluno)
    {
        $aluno = Aluno::findOrFail($aluno);
        $aluno->delete();
        return redirect()->route('aluno.index')
            ->with('notification-info', 'Aluno apagado com sucesso.'); 
    }

    public function matricula($id)
    {
        $aluno = Aluno::findOrFail($id);
        
        $unidades = Unidade::all();
        $cursos = Curso::all();
        $turmas = Turma::all();
        $planos = PlanoPagamento::all();

        return view('painel.aluno.matricula', compact('aluno', 'unidades', 'cursos', 'turmas', 'planos'));
    }

    public function setMatricula(Request $request)
    {
        $dados = $request->except('_token');
        if($dados['dia_contratacao'])
        {
            $date = explode('/', $dados['dia_contratacao']);
            $dados['dia_contratacao'] = $date[2] . '-' . $date[1] . '-' . $date[0];
        }

        $contrato = new Contrato();
        $contrato->aluno_id = $dados['aluno_id'];
        $contrato->contrato = $dados['contrato'];
        $contrato->dia_contratacao = $dados['dia_contratacao'];
        $contrato->unidade_id = $dados['unidade_id'];
        $contrato->curso_id = $dados['curso_id'];
        $contrato->turma_id = $dados['turma_id'];
        $contrato->planopagamento_id = $dados['planopagamento_id'];
        $contrato->save();

        return redirect()->route('aluno.matricula', $contrato->aluno_id)
            ->with('notification-info', 'Aluno matriculado com sucesso.'); 
    }

    public function cancelarMatricula($id)
    {
        $contrato = Contrato::findOrFail($id);
        $contrato->delete();
        return redirect()->route('aluno.matricula', $contrato->aluno_id)
            ->with('notification-info', 'Matricula cancelada com sucesso, os pagamentos também foram excluidos.'); 
    }
}
