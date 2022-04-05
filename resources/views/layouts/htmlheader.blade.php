<head>
    <title>@yield('htmlheader_titulo', 'Seu titulo aqui')</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/AdminLTE-3.2.0-rc/dist/js/adminlte.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('vendor/adminlte/dist/css/adminlte.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">

</head>