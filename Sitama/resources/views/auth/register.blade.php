@extends('layouts.app')

@section('content')

    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Sistema</b>Laravel</a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Registro en el sistema</p>

            <form method="post" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="name"  value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>


                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                    <label>email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" required >
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                    <label>password</label>
                    <input id="password" type="password" class="form-control" name="password"  required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <label>comfirmar password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="row">

                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                    </div><!-- /.col -->
                </div>
@endsection