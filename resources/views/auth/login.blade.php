@extends('layouts.login')

@section('content')
<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
        <form class="m-t" method="POST" action="{{ route('login') }}">
            @csrf            
            <div class="card card-login card-hidden">
                <div class="text-center">
                    <br>
                    <img src="{{ asset('img/ABBC_logo.png') }}" style="width:100px;">
                    <p></p>
                    <p>Entre com usuário e senha para acessar o sistema.</p>
                </div>
                <div class="card-content">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">Login</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif                            
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">Senha</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif                            
                        </div>
                    </div>
                </div>
                <div class="footer text-center">
                    <button type="submit" class="btn btn-danger block full-width m-b">Entrar</button>
                </div>
                <div class="text-center">
                    <p>Em caso de problema para logar, por favor, entre em contato com o desenvolvimento.</p>

                    <p class="m-t"> <small>ABBC &copy; 2018 </small> </p>
                </div>
            </div>
        </form>
    </div>
@endsection
