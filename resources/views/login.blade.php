<!doctype html>
<html class="no-js" lang="pt-pt">


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mjay Servicos</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/images/favicon.ico')}}">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>

<body>

    <div class="contact-wrapper">
        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumbs-area position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="breadcrumb-content position-relative section-content">
                            <h3 class="title-3">Autenticar-se</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Login Area Start Here -->
        <div class="login-register-area mt-no-text mb-no-text">
            <div class="container container-default-2 custom-area">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-custom">
                        <div class="login-register-wrapper">
                            <div class="section-content text-center mb-5">
                                <h2 class="title-4 mb-2">Entrar</h2>
                                <p class="desc-content">Inseri as Credenciais de Acesso</p>
                            </div>
                            <form action="{{url('check')}}" method="post">
                                @csrf
                                <div class="results">
                                    @if(Session::get('success'))
                                    <div class="alert alert-danger">
                                        {{Session::get('success')}}
                                    </div>
                                    @endif

                                    @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{Session::get('fail')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="single-input-item mb-3">
                                    <input type="email" name="email" id="email" placeholder="Digite e-mail" value="{{ old('email') }}">
                                    <span class="text-danger">@error('email') {{ $message}} @enderror</span>
                                </div>
                                <div class="single-input-item mb-3">
                                    <input type="password" name="password" id="password" placeholder="Digite a palavra-passe" value="{{ old('password') }}">
                                    <span class="text-danger">@error('password') {{ $message}} @enderror</span>
                                </div>
                                <div class="single-input-item mb-3">
                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                        <div class="remember-meta mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-input-item mb-3">
                                    <button class="btn obrien-button-2 primary-color">Login</button>
                                </div>
                                <div class="single-input-item">
                                    Ainda não tem conta, <a href="{{url('register')}}">clique aqui</a> para se cadastrar

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Area End Here -->
    </div>

</body>



</html>