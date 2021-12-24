<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="https://rsms.me/inter/inter.css" href="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container-lg">
        <p id="teks_depan">SISTEM INFORMASI SURAT MENYURAT SATU PINTU <br>MTSN 01 PEKANBARU</p>
        <div class="row justify-content-around">
            <div class="col-sm-7">
                <img src="{{URL::asset('/image/logo.png') }}" alt="Logo_Login" id="logo">
            </div>

            <div class="col-sm-5 shadow-sm p-3 mb-5 bg-body rounded" id="form_login">
                <div class="container-lg">
                    <form method="POST" action="/">
                    @csrf
                    <h4 style="font-family: 'Roboto', sans-serif; font-size: 24px"><b>LOGIN</b></h4>
                    <h5 style="font-family: 'Roboto', sans-serif;; font-size: 18px">Silahkan login terlebih dahulu</h5>
                    <br>
                        <div class="mb-4">
                            <input id="username" type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                        <div class="mb-5">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        @if (session('message'))
                        <div class="row justify-content-center">
                            <div class="alert alert-danger" role="alert">
                                {{session('message')}}
                              </div>
                            </button>
                        </div>
                        @endif
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary justify-content-center mt-4" id="button_login"><b>LOGIN</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

</html>