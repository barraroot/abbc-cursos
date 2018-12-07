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
                                    <a href="{{ route('planopagamento.create') }}" class="btn btn-danger">Incluir Plano de Pagamento<div class="ripple-container"></div></a>
                                    <a href="#" class="btn btn-facebook">Relatórios<div class="ripple-container"></div></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="red">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Lista de Plano de Pagamento</h4>
                        <div class="card-content">
    
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Descrição</th>
                                            <th>Periodicidade</th>
                                            <th>Inicio</th>
                                            <th class="text-right">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $plano)
                                            <tr>
                                                <td class="text-center">{{$plano->id}}</td>
                                                <td>{{$plano->descricao}}</td>
                                                <td>{{$plano->type}}</td>
                                                <td>{{date('d/m/Y', strtotime($plano->vencimento))}}</td>
                                                <td class="td-actions text-right">
                                                    <a href="{{route('planopagamento.edit', $plano->id)}}" class="btn btn-success">
                                                        <i class="material-icons">edit</i>
                                                        Editar
                                                    </a>
                                                    <button rel="tooltip" class="btn btn-danger" onclick="deleteform{{ $plano->id}}.submit()">
                                                        <i class="material-icons">close</i>
                                                        Apagar
                                                    </button>                                                    
                                                    <form class="form" 
                                                        id="deleteform{{ $plano->id}}"
                                                        action="{{route('planopagamento.destroy', $plano->id)}}" 
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