<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>INGRESAR</title>

    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/oneui.min.css')}}">

</head>
<body>


<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="hero-static d-flex align-items-center">
            <div class="w-100">
                <!-- Sign In Section -->
                <div class="content content-full bg-white">

                    <div class="row justify-content-center">

                        <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                            <!-- Header -->

                            <div class="text-center">
                                <p class="mb-2">
                                    <a class="btn-block-option" href="{{route('webpage')}}" data-toggle="tooltip"
                                       data-placement="left" title="Pagina Principal">
                                        <img src="{{asset('image_proyect/laravel.png')}}" alt="" width="30%">
                                    </a>
                                </p>
                                <h1 class="h4 mb-1">
                                    INGRESAR
                                </h1>
                                <h2 class="h6 font-w400 text-muted mb-3">
                                    <a class="btn-block-option" href="{{route('register')}}"
                                       data-toggle="tooltip" data-placement="left" title="Nueva Cuenta">
                                        <i class="fa fa-user-plus"></i>
                                    </a>
                                </h2>
                            </div>
                            <!-- END Header -->

                            <!-- Sign In Form -->
                            <form method="POST" action="{{ route('login') }}" class="js-validation-signin">
                                @csrf
                                <div class="py-3">
                                    {{-- &&&&&&&&&&&&&&&&&&& CORREO $$$$$$$$$$$$$$$$$$--}}
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input id="email" type="email"
                                                       class="form-control {{--form-control-alt form-control-lg--}} @error('email') is-invalid @enderror"
                                                       name="email"
                                                       value="{{ old('email') }}"
                                                       required
                                                       placeholder="Correo"
                                                       {{--autocomplete="email"--}}
                                                       autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- &&&&&&&&&&&&&&&&&&& PASSSWORD $$$$$$$$$$$$$$$$$$--}}
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <i class="fa fa-lock"></i>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input id="password"
                                                       type="password"
                                                       class="form-control {{--form-control-alt form-control-lg --}} @error('password') is-invalid @enderror"
                                                       name="password"
                                                       placeholder="Contraseña"
                                                       required {{--autocomplete="current-password"--}}>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{--&&&&&&&&&&&&&&&&&&&&&&&&& &&&&&&&&&&&&&&&&&&&&--}}
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="login-remember"
                                                   name="login-remember">
                                            <label class="custom-control-label font-w400"
                                                   for="login-remember">Recordar</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-block btn-primary">
                                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Ingresar
                                        </button>
                                        {{--@if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif--}}
                                    </div>
                                </div>
                            </form>
                            <!-- END Sign In Form -->
                        </div>
                    </div>
                </div>
                <!-- END Sign In Section -->

                <!-- Footer -->
                <div class="font-size-sm text-center text-muted py-3">
                </div>
                <!-- END Footer -->
            </div>
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->
</div>

<script src="{{asset('assets/js/oneui.core.min.js')}}"></script>
<script src="{{asset('assets/js/oneui.app.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/pages/op_auth_signup.min.js')}}"></script>
</body>
</html>
