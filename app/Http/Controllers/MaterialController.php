<?php

namespace App\Http\Controllers;

use App\Models\MaterialModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $dados = MaterialModel::all();
        return view('material.index')->with('dados', $dados);
    }

    public function show($id)
    {
        $dado = MaterialModel::where('id', $id)->get();

        if (!empty($dado)) {
            return view('material.show')->with('dado', $dado);
        } else {
            return redirect()->route('material');
        }
    }

    public function create()
    {
        return view('material.create');
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        MaterialModel::create($dados);

        return redirect()->route('material');
    }

    public function edit($id)
    {
        $dado = MaterialModel::where('id',$id)->get()->first();
        if(!empty($dado)){
            return view('material.edit')->with('dado',$dado);
        } else {
            return redirect()->route('material');
        }
    }

    public function update(Request $request, $id)
    {
        $dado = MaterialModel::find($id);

        $dado->titulo = $request->titulo;
        $dado->valor = $request->valor;
        $dado->quantidade = $request->quantidade;
        $dado->descricao = $request->descricao;
        $dado->save();

        return redirect()->route('material');
    }

    public function destroy($id)
    {
        $dado = MaterialModel::where('id', $id)->get();
        if (!empty($dado)) {
            DB::delete('DELETE FROM material WHERE id = ?', [$id]);
        }

        return redirect()->route('material');
    }
}
