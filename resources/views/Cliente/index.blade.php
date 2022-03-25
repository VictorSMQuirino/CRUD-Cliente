@extends('layouts.app')
@section('htmlheader_titulo', 'Clientes')

@section('scripts_adicionais')
    <script src="{{asset('plugins/AdminLTE-3.2.0-rc/plugins/DataTables/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/listar_clientes.js')}}"></script>
@endsection

@section('links_adicionais')
    <link rel="stylsheet" href="{{asset('plugins/AdminLTE-3.2.0-rc/plugins/DataTables/datatables.min.css')}}">
@endsection

@section('conteudo')
    <div class="card">

    @if(Session::has('mensagem')) 
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <h5><i class="icon fas fa-ban"></i>Atenção!</h5>
            {{Session::get('mensagem')}}
        </div>
    @endif

        <div class="card-body">
            <div class="container">
                <h2>Listagem dos Clientes</h2>
                <a href="/cliente/create" class="btn btn-outline-info col-2">Cadastro de Cliente</a>
                <br><br><br>

                <table id="cliente" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>cpf</th>
                            <th>Telefone</th>
                            <th>Profissão</th>
                            <th>Email</th>
                            <th>Sexo</th>
                            <th>Endereço</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
@endsection