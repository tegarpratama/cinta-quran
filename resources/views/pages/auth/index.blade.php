<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cinta Qur'An Foundation</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="{{ asset('assets/back/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/back/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/back/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/back/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/back/css/style.css') }}" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login-content">
                        <div class="login-form">
                            <h4>Selamat Datang</h4>
                            
                            @if (session('status'))
                                <div class="alert alert-danger text-center text-light mt-2 mb-2" role="alert">
                                    <strong>{{ session('status') }}</strong>
                                </div>
                            @endif

                            <form method="POST" action="{{ Route('login.post') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="Email" required name="email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" required name="password">
                                </div>

                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>