<?php

namespace App\Http\Controllers;
use App\Models\ClienteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index()
    {
        $dados = ClienteModel::all();
        return view('cliente.index')->with('dados', $dados);
    }

    public function show($id)
    {
        $dado = ClienteModel::where('id', $id)->get();

        if (!empty($dado)) {
            return view('cliente.show')->with('dado', $dado);
        } else {
            return redirect()->route('cliente');
        }
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        ClienteModel::create($dados);

        return redirect()->route('cliente');
    }

    public function edit($id)
    {
        $dado = ClienteModel::where('id',$id)->get()->first();

        if(!empty($dado)){
            return view('cliente.edit')->with('dado',$dado);
        } else {
            return redirect()->route('cliente');
        }
    }

    public function update(Request $request, $id)
    {
        $dado = ClienteModel::where('id',$id)->get();

        $dado = $dado[0];

        $dado->nome = $request->nome;
        $dado->cpf = $request->cpf;
        $dado->email = $request-> email;
        $dado->data_nascimento = $request->data_nascimento;
        $dado->telefone = $request->telefone;
        $dado->celular = $request->celular;
        $dado->cep = $request->cep;
        $dado->uf = $request->uf;
        $dado->cidade = $request->cidade;
        $dado->bairro = $request->bairro;
        $dado->logradouro = $request->logradouro;
        $dado->numero = $request->numero;
        $dado->complemento = $request->complemento;

        $dado->push();
        return redirect()->route('cliente');
    }

    public function destroy($id)
    {
        $dado = ClienteModel::where('id', $id)->get();

        DB::delete('DELETE FROM cliente WHERE id = ?', [$id]);

        return redirect()->route('cliente');
    }
}
