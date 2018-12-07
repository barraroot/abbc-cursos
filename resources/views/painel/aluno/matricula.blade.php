@extends('layouts.default')

@section('content')
<div class="content">
        <div class="animated fadeInDown">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="red">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Matricula do Aluno</h4>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="list-group-item">
                                        <h4 class="list-group-item-heading">Dados do Aluno</h4>
                                    <p class="list-group-item-text"><strong>Nome: </strong>{{$aluno->nome}}</p>
                                        <p class="list-group-item-text"><strong>Endereço: </strong>{{$aluno->end_rua}}, {{$aluno->end_num}} {{$aluno->end_bairro}} {{$aluno->end_cep}}</p>
                                        <p class="list-group-item-text"><strong>Cidade/Estado: </strong>{{$aluno->end_cidade}}/{{$aluno->end_estado}}</p>
                                    <p class="list-group-item-text"><strong>Telefone/Celular: </strong>{{$aluno->tel}} / {{$aluno->cel}}</p>
                                        <p class="list-group-item-text"><strong>Email: </strong>{{$aluno->email}}</p>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <form action="{{route('aluno.matriculaset')}}" method="post" class="form-inlie">
                                    <input type="hidden" name="aluno_id" value="{{$aluno->id}}">
                                    @csrf
                                    <div class="form-group col-md-4">
                                        <label for="contrato">N. Contrato</label>
                                        <input type="text" class="form-control" name="contrato" id="contrato" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="dia_contratacao">Contratação</label>
                                        <input type="text" class="form-control form-control border-input date datepicker" name="dia_contratacao" id="dia_contratacao" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="unidade">Unidade</label>
                                        <select name="unidade_id" id="unidade" class="form-control">
                                            @foreach ($unidades as $item)
                                            <option value="{{$item->id}}">{{$item->nome}}</option>   
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="curso">Curso</label>
                                        <select name="curso_id" id="curso" class="form-control">
                                            @foreach ($cursos as $item)
                                            <option value="{{$item->id}}">{{$item->descricao}}</option>   
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="turma">Turma</label>
                                        <select name="turma_id" id="turma" class="form-control">
                                            @foreach ($turmas as $item)
                                            <option value="{{$item->id}}">{{$item->descricao}}</option>   
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="plano">Plano de Pagamento</label>
                                        <select name="planopagamento_id" id="plano" class="form-control">
                                            @foreach ($planos as $item)
                                            <option value="{{$item->id}}">{{$item->descricao}}</option>   
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <button type="submit" class="btn btn-info"><i class="material-icons">info</i> Matricular</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Unidade</th>
                                                <th>Curso</th>
                                                <th>Turma</th>
                                                <th>Plano de Pagamento</th>
                                                <th>Contrato</th>
                                                <th>Contratação</th>
                                                <th class="text-right">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($aluno->contratos() as $item)
                                            <tr>
                                                <td>{{$item->unidade()->nome}}</td>
                                                <td>{{$item->curso()->descricao}}</td>
                                                <td>{{$item->turma()->descricao}}</td>
                                                <td>{{$item->plano()->descricao}}</td>
                                                <td>{{$item->contrato}}</td>
                                                <td>{{date('d/m/Y', strtotime($item->dia_contratacao))}}</td>
                                                <td>
                                                    <a href="{{route('imprimir.carne', $item->id)}}" class="btn btn-info" target="_blank">
                                                        <i class="material-icons">print</i>
                                                        Imprimir Carne
                                                    </a>
                                                    <button rel="tooltip" class="btn btn-danger" onclick="deleteform{{ $item->id}}.submit()">
                                                        <i class="material-icons">close</i>
                                                        Cancelar
                                                    </button>                                                    
                                                    <form class="form" 
                                                        id="deleteform{{ $item->id}}"
                                                        action="{{route('aluno.cancela-matricula', $item->id)}}" 
                                                        method="post">
                                                        {{method_field('DELETE')}}
                                                        @csrf
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection