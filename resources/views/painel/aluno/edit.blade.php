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
                            <h4 class="card-title">Cadastro de Aluno</h4>
                            <form class="form-horizontal" action="{{ route('aluno.update', $classe->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$classe->id}}">
                                <input type="hidden" name="_method" value="put">
                                @include('painel.aluno._form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('js/painel/form-aluno.js')}}"></script>
@endsection