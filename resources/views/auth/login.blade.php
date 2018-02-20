@extends('auth.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <div class="card card-signup">
                <form class="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="header header-primary text-center">
                        <h4>Log In</h4>
                        {{-- <div class="social-line">
                            <a href="#pablo" class="btn btn-simple btn-just-icon">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a href="#pablo" class="btn btn-simple btn-just-icon">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#pablo" class="btn btn-simple btn-just-icon">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div> --}}
                    </div>
                    {{-- <p class="text-divider">Or Be Classical</p> --}}
                    <div class="content">

                        {{-- <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">face</i>
                            </span>
                            <input type="text" class="form-control" placeholder="First Name...">
                        </div> --}}

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            {{-- <input type="text" class="form-control" placeholder="Email..." autofocus> --}}
                                <input id="email" type="email" placeholder="Email..." class="form-control" name="email" value="{{ old('email') }}" required autofocus />

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif                            
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock_outline</i>
                            </span>
                            {{-- <input type="password" placeholder="Contraseña..." class="form-control" /> --}}
                            <input id="password" type="password" placeholder="Contraseña..." class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        {{-- If you want to add a checkbox to this form, uncomment this code --}}

                        <div class="checkbox">
                            {{-- <label>
                                <input type="checkbox" name="optionsCheckboxes" checked>
                                Recuerdame...
                            </label> --}}
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame...
                            </label>
                        </div>
                    </div>
                    {{-- <div class="footer text-center">
                        <a href="#pablo" class="btn btn-simple btn-primary btn-lg">Get Started</a>
                    </div> --}}

                    <div type="submit" class="footer text-center">
                        <button class="btn btn-primary btn-raised">
                            Log In
                        </button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                Recupera Password?
                        </a>
                    </div>

                    {{-- <div class="row">
                        <div class="col-md-4 col-md-offset-4 text-center">
                            <button class="btn btn-primary btn-raised">
                                Envía tu mensaje
                            </button>
                        </div>
                    </div> --}}

                </form>
            </div>
        </div>
    </div>
</div>

@stop