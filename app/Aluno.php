<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contrato;

class Aluno extends Model
{
    public function contratos()
    {
        return Contrato::where('aluno_id', $this->id)->get();
    }
}
