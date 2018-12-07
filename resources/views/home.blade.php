@extends('layouts.default')

@section('content')
<div class="container-fluid animated fadeInDown">
    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12">



            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">person</i>
                      </div>
                      <p class="card-category">Alunos</p>
                      <h3 class="card-title">{{$data['user']}}
                        <small>alunos</small>
                      </h3>
                    </div>
                  </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">assignment_ind</i>
                      </div>
                      <p class="card-category">Funcionários</p>
                      <h3 class="card-title">{{$data['func']}}
                        <small>pessoas</small>
                      </h3>
                    </div>
                  </div>
                </div>                

                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">book</i>
                      </div>
                      <p class="card-category">Cursos</p>
                      <h3 class="card-title">{{$data['curso']}}
                        <small>cursos</small>
                      </h3>
                    </div>
                  </div>
                </div> 
                
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">person</i>
                      </div>
                      <p class="card-category">Turmas</p>
                      <h3 class="card-title">{{$data['turma']}}
                        <small>turmas</small>
                      </h3>
                    </div>
                  </div>
                </div>                 

              </div>



        </div>
    </div>
</div>
@endsection
