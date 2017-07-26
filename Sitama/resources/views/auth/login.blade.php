@extends('layouts.app')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Sistema</b>Laravel</a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Ingrese al sistema</p>

            <form method="post" action="{{ route('login') }}">
                {{ csrf_field() }}


                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" name="email"  value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                </input>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="row form-group">
                    <div class="col-xs-6 ">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                !!Recordar!!
                            </label>
                        </div>
                    </div>

                </div>

                <div class="row form-group">
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                        </div><!-- /.col -->

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            olvido su password?
                        </a>
                    </div>


            </form>




        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

@endsection
