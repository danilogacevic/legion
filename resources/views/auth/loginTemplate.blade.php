<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="keywords" content="corporate html template - agency theme - business html template - creative theme - portfolio html template - gallery theme - restaurant theme - ecommerce template - app template - landing page - real estate theme">
    <meta name="description" content="Bootstrap HTML5 template for agency, corporate, business, app and creative portfolio, it is suitable for any kind of websites, like ecommerce, restaurant, photography, gallery and retail website.">
    <meta name="author" content="EncodesLife">
    <link rel="icon" href="{{asset('img/favicon.png')}}">

    <title>Login Page 2 | Ecada - Responsive Multipurpose Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('js/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Theme skins -->
    <link id="skin" href="{{asset('css/theme-colors/orange.css')}}" rel="stylesheet">
    <link href="{{asset('js/style-switcher/css/style-switcher.css')}}" rel="stylesheet">
    <link href="{{asset('css/line-icons/line-icons.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.min.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->

    <!--[if IE 9]>
    <link href="{{asset('css/ie.css')}}" rel="stylesheet">
    <![endif]-->
</head>

<body>
<!-- START - Style Switcher -->
<i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
<div class="style-switcher animated fadeInRight">
    <div class="style-switcher-header">
        <div class="style-switcher-heading">Style Switcher</div>
        <div class="style-switcher-close"><i class="icon-close"></i></div>
    </div>
    <div class="style-switcher-body">
        <!-- Theme Colors -->
        <div class="style-switcher-heading">Theme Colors</div>
        <ul class="list-unstyled">
            <li class="theme-orange theme-active" data-style="orange" data-header="light"></li>
            <li class="theme-red" data-style="red" data-header="light"></li>
            <li class="theme-dark-red" data-style="dark-red" data-header="light"></li>
            <li class="theme-aqua" data-style="aqua" data-header="light"></li>
            <li class="theme-blue" data-style="blue" data-header="light"></li>
            <li class="theme-dark-blue last" data-style="dark-blue" data-header="light"></li>
            <li class="theme-purple" data-style="purple" data-header="light"></li>
            <li class="theme-brown" data-style="brown" data-header="light"></li>
            <li class="theme-yellow" data-style="yellow" data-header="light"></li>
            <li class="theme-light-green" data-style="light-green" data-header="light"></li>
            <li class="theme-teal" data-style="teal" data-header="light"></li>
            <li class="theme-green last" data-style="green" data-header="light"></li>
        </ul>
        <div class="style-switcher-heading">Header Color</div>
        <button type="button" class="btn-e btn-e-primary btn-sm margin-bottom-15 margin-right-10 header-light">Light</button>
        <button type="button" class="btn-e btn-e-primary btn-sm margin-bottom-15 header-dark">Dark</button>
    </div>
</div>
<!-- END - Style Switcher -->

<!-- START - Contain Wrapp -->
<div class="login-2">
    <div class="container-fluid padding-clear">
        <div class="login-bg"></div>

        <div class="login-content">
            <h1 class="text-center margin-bottom-25">
                <a href="index.html" class="logo">
                    <img src="{{asset('img/themes/logo-orange.png')}}" alt="Logo" />
                </a>
            </h1>

            <p class="login-slogan text-center">Sign in to continue to Ecada</p>
            <form action="{{route('login')}}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" class="form-control{{$errors->has('email') ? ' is_invalid' : ''}}" placeholder="Enter E-mail" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter Password" id="password" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="checkbox pull-left">
                    <label class="custom-checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        <div class="checkmark"></div>
                    </label>
                </div>
                <button class="btn-e btn-e-primary pull-right" type="submit">Log In</button>
                <div class="clearfix"></div>

                <div class="form-group">
                    <a target="_self" href="{{ route('password.request') }}"><i class="fa fa-lock margin-right-5"></i>Forgot your password ?</a>
                </div>
            </form>

            <div class="text-center">
                <p class="margin-bottom-10">Don't have an account ? <a target="_self" href="{{route('register')}}">Sign up Now</a></p>
                <p>Ecada © 2018</p>
            </div>
        </div>
    </div>
</div>
<!-- END - Contain Wrapp -->

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- BOOTSTRAP -->
<script src="{{asset('js/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- jQuery Easing -->
<script src="{{asset('js/jquery.easing-1.3.min.js')}}"></script>

<!-- Custom javaScript for this theme -->
<script src="{{asset('js/custom.js')}}"></script>

<!-- Theme option-->
<script src="{{asset('js/style-switcher/js/style-switcher.js')}}"></script>
</body>
</html>