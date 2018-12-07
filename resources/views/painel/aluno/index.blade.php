@extends('layouts.default')

@section('content')
<div class="content">
        <div class="animated fadeInDown">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card card-stats">
                            <div class="card-content">
                                <form action="#" method="post">
                                    <a href="{{ route('aluno.create') }}" class="btn btn-danger">Incluir Aluno<div class="ripple-container"></div></a>
                                    <a href="#" class="btn btn-facebook">Relatórios<div class="ripple-container"></div></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="red">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Lista de Alunos</h4>
                        <div class="card-content">
    
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th>Cidade</th>
                                            <th>Telefone</th>
                                            <th>Celular</th>
                                            <th class="text-right">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $aluno)
                                            <tr>
                                                <td class="text-center">{{$aluno->id}}</td>
                                                <td>{{$aluno->nome}}</td>
                                                <td>{{$aluno->cpf_cnpj}}</td>
                                                <td>{{$aluno->end_cidade}}</td>
                                                <td>{{$aluno->tel}}</td>
                                                <td>{{$aluno->cel}}</td>
                                                <td class="td-actions text-right">
                                                    <a class="btn btn-info open-AddBookDialog" href="{{route('aluno.matricula', $aluno->id)}}">
                                                        <i class="material-icons">info</i>
                                                        Matricula
                                                    </a>
                                                    <a href="{{route('aluno.edit', $aluno->id)}}" class="btn btn-success">
                                                        <i class="material-icons">edit</i>
                                                        Editar
                                                    </a>
                                                    <button rel="tooltip" class="btn btn-danger" onclick="deleteform{{ $aluno->id}}.submit()">
                                                        <i class="material-icons">close</i>
                                                        Apagar
                                                    </button>                                                    
                                                    <form class="form" 
                                                        id="deleteform{{ $aluno->id}}"
                                                        action="{{route('aluno.destroy', $aluno->id)}}" 
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
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection