@extends('layout.nav')

@section('conteudo')
    <div class="pt-5 pl-3 pr-3">
        <div class="d-flex justify-content-between">
            <h2 class="fst-italic fw-bold">Lista de Materiais</h2>
            <div class="pr-5">
                <a href='{{route('material.novo')}}' class='btn btn-success' style="height:40px;"><i class="fas fa-plus mr-1"></i> Cadastrar</a>
            </div>
        </div>

        @if (!empty($dados))
            <table class="table table-light table-striped">
                <thead class="table-warning">
                    <tr>
                        <td>Título</td>
                        <td>Valor</td>
                        <td>Quantidade</td>
                        <td>Descrição</td>
                        <td>Ações</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ( $dados as $dado )
                        @php
                            $linkReadMore = url('/material/' . $dado->id);
                            $linkEditItem = url ('/material/editar/' . $dado->id);
                            $linkRemoveItem = url ('/material/remover/' . $dado->id);
                        @endphp

                        <tr>
                            <td style="vertical-align:middle">{{$dado->titulo}}</td>
                            <td style="vertical-align:middle">{{$dado->valor}}</td>
                            <td>
                                <form action="<?= url('/material/update',['id' => $dado->id]);?>" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="d-flex">
                                        <div class="d-flex form-group">
                                                <input type="hidden" class="form-control" id="titulo" name="titulo" value="{{$dado->titulo}}">
                                                <input type="hidden" class="form-control" id="valor" name="valor" value="{{$dado->valor}}">
                                                <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{$dado->quantidade}}">
                                                <input type="hidden" class="form-control w-65" style="vertical-align:middle;" id="descricao" name="descricao" value="{{$dado->descricao}}">
                                                <button type="submit" class="btn btn-success text-white ml-2"><i class="fas fa-check"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td style="vertical-align:middle">{{$dado->descricao}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href={{$linkReadMore}} class="btn btn-info mr-2"><i class="fa fa-eye mr-1 mb-0" aria-hidden="true"></i> Ver Mais</a>
                                    <a href={{$linkEditItem}} class="btn btn-warning mr-2" style="color:white"><i class="fa fa-pen mr-1 mb-0" aria-hidden="true"></i>Editar</a>
                                    <a href={{$linkRemoveItem}} class="btn btn-danger mr-2"><i class="fa fa-trash mr-1 mb-0" aria-hidden="true"></i>Excluir</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
