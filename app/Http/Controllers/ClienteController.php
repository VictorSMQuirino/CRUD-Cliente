<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Redirect;
use Illuminate\Support\Facades\DB;
use Session;
use Datatables;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Cliente.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestCliente $request)
    {
        try{
            $cliente = new Cliente();
            $cliente->nome = $request->nome_cliente;
            $cliente->cpf = $request->cpf_cliente;
            $cliente->telefone = $request->telefone_cliente;
            $cliente->profissao = $request->profissao_cliente;
            $cliente->email = $request->email_cliente;
            $cliente->sexo = $request->sexo_cliente;
            $cliente->endereco = $request->endereco_cliente;

            DB::transaction(function() use ($cliente){
                $cliente->save();
            });

            Session::flash('mensagem', 'Cliente cadastrado!');
            return Redirect::to('/cliente');

        } catch(\Exception $error){
            Session::flas('mensagem', 'Ocorreu um erro. Não foi possível cadastrar.');
            return back()->withInput(); //Retorna com os campos preenchidos
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::get();
        return Datatables::of($cliente)
        ->editColumn('acao', function($cliente){
            return '<div class="btn-group btn-group-sm">
                        <a href="/cliente/'.$cliente->id.'/edit"
                            class="btn btn-info"
                            title="Editar" data-toggle="tooltip">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="#"
                            class="btn btn-danger btnExcluir"
                            data-id="'.$cliente->id.'"
                            title="Excluir" data-toggle="tooltip">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>';
        })
        ->escapeColumns([0])
        ->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('Cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestCliente $request, $id)
    {
        try{
            $cliente = Cliente::find($id);
            $cliente->nome = $request->nome_cliente;
            $cliente->cpf = $request->cpf_cliente;
            $cliente->telefone = $request->telefone_cliente;
            $cliente->profissao = $request->profissao_cliente;
            $cliente->email = $request->email_cliente;
            $cliente->sexo = $request->sexo_cliente;
            $cliente->endereco = $request->endereco_cliente;

            DB::transaction(function() use ($cliente){
                $cliente->save();
            });

            Session::flash('mensagem', 'Cliente atualizado!');
            return Redirect::to('/cliente');

        } catch(\Exception $error){
            Session::flas('mensagem', 'Ocorreu um erro. Não foi possível atualizar.');
            return back()->withInput(); //Retorna com os campos preenchidos
        }

        return Redirect::to('/cliente/'.$cliente->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $cliente = Cliente::find($id);
            $cliente->delete();
            return response()->json(array('status' =>"OK"));
        } catch(\Exception $erro){
            return response()->json(array('erro' =>"ERRO"));
        }
    }
}
