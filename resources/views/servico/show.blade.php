@extends('layout.nav')

@section('conteudo')
    <div class="pt-5 pl-3 pr-3">
        @if (!empty($dado))
            @foreach ( $dado as $d )
                <h2 class="fw-bold fst-italic" style="margin-bottom:15px;">{{$d->titulo}}</h2>
                <p class="text-center table-warning fw-bold fst-italic">Dados Serviço</p>
                    <div class="form-group row">
                        <div class="col-md-1">
                            <label class="form-label" for="valor">Valor: </label>
                            <input type="text" class="form-control" id="valor" value="{{$d->valor}}" disabled>
                        </div>
                    </div>
                    <div class="mt-4 text-left">
                        <a href="{{route('servico')}}" class="btn btn-secondary">Voltar</a>
                    </div>
            @endforeach
        @endif
    </div>
@endsection
