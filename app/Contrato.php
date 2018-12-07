<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{

    public function aluno()
    {
        return Aluno::find($this->aluno_id);
    }    

    public function unidade()
    {
        return Unidade::find($this->unidade_id);
    }

    public function curso()
    {
        return Curso::find($this->curso_id);
    }

    public function turma()
    {
        return Turma::find($this->turma_id);
    }

    public function plano()
    {
        return PlanoPagamento::find($this->planopagamento_id);
    }    
}
