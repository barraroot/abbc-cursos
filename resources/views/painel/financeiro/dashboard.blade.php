@extends('layouts.default')

@section('content')
<div class="container-fluid animated fadeInDown">
    <div class="row">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="blue">
                <i class="material-icons">attach_money</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">Financeiro</h4>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon" style="background-color: greenyellow">
                                <div class="card-icon">
                                    <i class="fas fa-money-bill-wave"></i>
                                </div>
                                <p class="card-category">Receber</p>
                            <h3 class="card-title">
                                R$
                                <small>0,00</small>
                            </h3>
                        </div>
                        <div class="card-content">
                            <p>Acesso a area de recebimentos e controle de contratos de alunos.</p>
                            <p class="text-right"><a href="#" class="btn" style="background-color: greenyellow">Acessar</a></p>
                        </div>
                    </div>
                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon" style="background-color: crimson">
                                <div class="card-icon red">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                </div>
                                <p class="card-category">Pagar</p>
                            <h3 class="card-title">
                                R$
                                <small>0,00</small>
                            </h3>
                            </div>
                            <div class="card-content">
                                <p>Acesso a area de pagamentos e controle de contas.</p>
                                <p class="text-right"><a href="#" class="btn" style="background-color: crimson">Acessar</a></p>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="col-lg-offset-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon" style="background-color:darkblue">
                                <div class="card-icon red">
                                    <i class="fas fa-arrows-alt-v"></i>
                                </div>
                                <p class="card-category">Caixa</p>
                            <h3 class="card-title">
                                R$
                                <small>0,00</small>
                            </h3>
                            </div>  
                            <div class="card-content">
                                <p>Acesso ao livro caixa, onde constam seus pagamentos e recebimentos.</p>
                                <p class="text-right"><a href="#" class="btn" style="background-color: darkblue">Acessar</a></p>
                            </div> 
                        </div>
                    </div> 

            </div>

    </div>
</div>
@endsection
