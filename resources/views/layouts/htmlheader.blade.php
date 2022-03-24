<head>
    <title>@yield('htmlheader_titulo', 'Seu titulo aqui')</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/AdminLTE-3.2.0-rc/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/AdminLTE-3.2.0-rc/dist/js/adminlte.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('plugins/AdminLTE-3.2.0-rc/dist/css/adminlte.css')}}"></link>
    <link rel="stylesheet" href="{{asset('plugins/AdminLTE-3.2.0-rc/plugins/fontawesome-free/css/all.min.css')}}"></link>
    <link rel="stylesheet" href="{{asset('plugins/AdminLTE-3.2.0-rc/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}"></link>
    <link rel="stylesheet" href="{{asset('css/footer.css')}}"></link>

</head>