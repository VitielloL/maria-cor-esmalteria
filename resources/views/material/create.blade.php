@extends('layout.nav')

@section('conteudo')
    <div class="pt-5 pr-3 pl-3">
        <h2 class="fw-bold fst-italic" style="margin-bottom:15px;"> Novo Material </h2>

        <form action='{{route('material.store')}}' method="POST">
            @csrf

            <p class="text-center table-warning fw-bold fst-italic">Dados do Material</p>

            <div class="form-group row">
                <div class="col-md-5">
                    <label class="form-label" for="titulo">Título: </label>
                    <input type="text" class="form-control" id="titulo" name="titulo">
                </div>
                <div class="col-md-1">
                    <label class="form-label" for="valor">Valor: </label>
                    <input type="number" class="form-control" id="valor" name ="valor">
                </div>
                <div class="col-md-1">
                    <label class="form-label" for="quantidade">Quantidade: </label>
                    <input type="number" class="form-control" id="quantidade" name ="quantidade">
                </div>
                <div class="col-md-5">
                    <label class="form-label" for="descricao">Descrição: </label>
                    <input type="text" class="form-control" id="descricao" name="descricao">
                </div>
            </div>

            <div class="mt-4">
                <button type ="submit "class="btn btn-success">Cadastrar</button>
                <a href="{{route('material')}}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
