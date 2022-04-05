@extends('layouts.app')
@section('htmlheader_titulo', 'Alterar Cliente')

@section('conteudo')
    <div class="card">
        <section class="content-header">
            <div class="col-12">
                <h2>Alteração de Cliente</h2>
            </div>
        </section>

        @if(Session::has('mensagem')) 
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <h5><i class="icon fas fa-ban"></i>Atenção!</h5>
                {{Session::get('mensagem')}}
            </div>
        @endif


        <div class="card-body">
            <div class="container">
                <form action="/cliente/{{$cliente->id}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Nome</label>
                            <input type="text" name="nome_cliente" class="form-control @error('nome_cliente') is-invalid @enderror" value="{{$cliente->nome}}">
                            @error('nome_produto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label>CPF</label>
                            <input type="text" name="cpf_cliente" id="cpf_cliente" class="form-control @error('cpf_cliente') is-invalid @enderror" value="{{$cliente->cpf}}">
                            @error('cpf_cliente')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label>Telefone</label>
                            <input type="text" name="telefone_cliente" id="telefone_cliente" class="form-control @error('telefone_cliente') is-invalid @enderror" value="{{$cliente->telefone}}">
                            @error('telefone_cliente')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label>Profissão</label>
                            <input type="text" name="profissao_cliente" class="form-control @error('profissao_cliente') is-invalid @enderror" value="{{$cliente->profissao}}">
                            @error('profissao_cliente')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label>Email</label>
                            <input type="text" name="email_cliente" class="form-control @error('email_cliente') is-invalid @enderror" value="{{$cliente->email}}">
                            @error('email_cliente')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label>Sexo</label>
                            <select id="valor_sexo" name="sexo_cliente" class="form-control form-control-sm" value="{{$cliente->sexo}}">
                                <option>Selecione</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Endereço</label>
                            <textarea name="endereco_cliente" row="10" class="form-control @error('endereco_cliente') is-invalid @enderror">{{$cliente->endereco}}</textarea>
                            @error('endereco_cliente')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info float-right" style="margin: 32px 0 0 50px">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection