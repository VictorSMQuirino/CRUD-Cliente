@extends('layouts.app')
@section('htmlheader_titulo', 'Cadastrar Cliente')


@section('conteudo')
    <div class="card">
        <section class="content-header">
            <div class="col-12">
                <h2>Cadastro de Cliente</h2>
            </div>
        </section>

       

        <div class="card-body">
            <div class="container">
                <form action="/cliente" method="POST">
                    @csrf <!--token de segurança-->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Nome</label>
                            <input type="text" name="nome_cliente" class="form-control @error('nome_cliente') is-invalid @enderror" value="{{old('nome_cliente')}}">
                            @error('nome_produto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label>CPF</label>
                            <input type="text" name="cpf_cliente" id="cpf_cliente" class="form-control @error('cpf_cliente') is-invalid @enderror" value="{{'cpf_cliente'}}">
                            @error('cpf_cliente')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label>Telefone</label>
                            <input type="text" name="telefone_cliente" id="telefone_cliente" class="form-control @error('telefone_cliente') is-invalid @enderror" value="{{'telefone_cliente'}}">
                            @error
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label>Profissão</label>
                            <input type="text" name="profissao_cliente" class="form-control @error('profissao_cliente') is-invalid @enderror" value="{{'profissao-cliente'}}">
                            @error
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection