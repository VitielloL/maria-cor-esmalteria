<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ColaboradorModel;
use Illuminate\Support\Facades\DB;

class ColaboradorController extends Controller
{
    public function index()
    {
        $dados = ColaboradorModel::all();
        return view('colaborador.index')->with('dados', $dados);
    }

    public function show($id)
    {
        $dado = ColaboradorModel::where('id', $id)->get();

        if (!empty($dado)) {
            return view('colaborador.show')->with('dado', $dado);
        } else {
            return redirect()->route('colaborador');
        }
    }

    public function create()
    {
        return view('Colaborador.create');
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        ColaboradorModel::create($dados);

        return redirect()->route('colaborador');
    }

    public function edit($id)
    {
        $dado = ColaboradorModel::where('id',$id)->get()->first();

        if(!empty($dado)){
            return view('colaborador.edit')->with('dado',$dado);
        } else {
            return redirect()->route('colaborador');
        }
    }

    public function update(Request $request, $id)
    {
        $dado = ColaboradorModel::where('id',$id)->get();

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
        return redirect()->route('colaborador');
    }

    public function destroy($id)
    {
        $dado = ColaboradorModel::where('id', $id)->get();

        DB::delete('DELETE FROM colaborador WHERE id = ?', [$id]);

        return redirect()->route('colaborador');
    }
}
