<?php

namespace App\Http\Controllers;
use App\Models\ClienteModel;
use Illuminate\Http\Request;

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
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
