<!DOCTYPE html>
<html lang="pt-br">
    @section('htmlheader')
        @include('layouts.htmlheader')
        @yield('scripts_adicionais')
        @yield('links_adicionais')

    @show 
<body>
    @yield('conteudo')
    @include('layouts.footer')
</body>
</html>