<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ServicoModel;

class ServicoController extends Controller
{
    public function index()
    {
        $dados = ServicoModel::all();
        return view('servico.index')->with('dados', $dados);
    }

    public function show($id)
    {
        $dado = ServicoModel::where('id', $id)->get();

        if (!empty($dado)) {
            return view('servico.show')->with('dado', $dado);
        } else {
            return redirect()->route('servico');
        }
    }

    public function create()
    {
        return view('servico.create');
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        ServicoModel::create($dados);
        return redirect()->route('servico');
    }

    public function edit($id)
    {
        $dado = ServicoModel::where('id',$id)->get()->first();
        if(!empty($dado)){
            return view('servico.edit')->with('dado',$dado);
        } else {
            return redirect()->route('servico');
        }
    }

    public function update(Request $request, $id)
    {
        $dado = ServicoModel::find($id);

        $dado->titulo = $request->titulo;
        $dado->valor = $request->valor;

        $dado->save();

        return redirect()->route('servico');
    }

    public function destroy($id)
    {
        $dado = ServicoModel::where('id', $id)->get();
        if (!empty($dado)) {
            DB::delete('DELETE FROM servico WHERE id = ?', [$id]);
        }
        return redirect()->route('servico');
    }
}
