@extends('layouts.app')
@section('htmlheader_titulo', 'Cadastrar Cliente')

@section('scripts_adicionais')
<script type="text/javascript" src="{{asset('plugins/maskedinput/jquery.maskedinput.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function($){
        $("#cpf_cliente").mask("999.999.999-99");
        $("#telefone_cliente").mask("(99) 99999-9999")
    });
</script>
@endsection


@section('conteudo')
    <div class="card">
        <section class="content-header">
            <div class="col-12">
                <h2>Cadastro de Cliente</h2>
            </div>
        </section>

        @if(Session::has('mensagem')) 
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <h5><i class="icon fas fa-ban"></i>AtenÁ„o!</h5>
                {{Session::get('mensagem')}}
            </div>
        @endif

        <div class="card-body">
            <div class="container">
                <form action="/cliente" method="POST">
                    @csrf <!--token de seguran√ßa-->
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
                            <input type="text" name="cpf_cliente" id="cpf_cliente" class="form-control @error('cpf_cliente') is-invalid @enderror" value="{{old('cpf_cliente')}}">
                            @error('cpf_cliente')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label>Telefone</label>
                            <input type="text" name="telefone_cliente" id="telefone_cliente" class="form-control @error('telefone_cliente') is-invalid @enderror" value="{{old('telefone_cliente')}}">
                            @error('telefone_cliente')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label>Profiss√£o</label>
                            <input type="text" name="profissao_cliente" class="form-control @error('profissao_cliente') is-invalid @enderror" value="{{old('profissao-cliente')}}">
                            @error('profissao_cliente')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label>Email</label>
                            <input type="text" name="email_cliente" class="form-control @error('email_cliente') is-invalid @enderror" value="{{old('email_cliente')}}">
                            @error('email_cliente')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label>Sexo</label>
                            <select id="valor_sexo" name="sexo_cliente" class="form-control form-control-sm">
                                <option>Selecione</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Endere√ßo</label>
                            <textarea name="endereco_cliente" row="10" class="form-control @error('endereco_cliente') is-invalid @enderror">{{old('endereco_cliente')}}</textarea>
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