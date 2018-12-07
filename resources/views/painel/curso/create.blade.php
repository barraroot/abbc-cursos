@extends('layouts.default')

@section('content')
<div class="content">
        <div class="animated fadeInDown">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="red">
                            <i class="material-icons">mode_edit</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Cadastro de Curso</h4>
                            <form class="form-horizontal" action="{{ route('curso.store') }}" method="post">
                                @csrf
                                @include('painel.curso._form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection