@extends('layout.nav')

@section('conteudo')
    <div class="pt-5 pr-3 pl-3">
        <h2 class="fw-bold fst-italic" style="margin-bottom:15px;"> Editar Cliente </h2>

        <form  action="<?= url('/cliente/update',['id' => $dado->id]);?>" method="post">
            @csrf
            @method('PUT')

            <p class="text-center table-warning fw-bold fst-italic">Dados Cadastrais</p>

            <div class="form-group row">
                <div class="col-md-5">
                    <label class="form-label" for="nome">Nome:</label>
                    <input type="text" class="form-control"  id="nome" name="nome" value="{{$dado->nome}}">
                </div>
                <div class="col-md-5">
                    <label class="form-label" for="email">Email: </label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$dado->email}}">
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="cpf">CPF: </label>
                    <input type="text" class="form-control FLDSTRREQ_cpf" id="cpf" name="cpf" minlength="11" maxlength="16" value="{{$dado->cpf}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">
                    <label class="form-label" for="data_nascimento">Data Nascimento: </label>
                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="{{date('d-m-Y', strtotime($dado->data_nascimento))}}">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="telefone">Telefone: </label>
                    <input type="text" class="form-control FLDSTRREQ_telefone" id="telefone" name="telefone" minlength="9" maxlength="16" value="{{$dado->telefone}}">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label" for="celular">Celular: </label>
                    <input type="text" class="form-control FLDSTRREQ_celular" id="celular" name="celular" minlength="9" maxlength="16" value="{{$dado->celular}}">
                </div>
            </div>

            <p class="text-center table-warning fw-bold fst-italic">Dados Residênciais</p>

            <div class="form-group row">
                <div class="col-md-2">
                    <label class="form-label" for="cep">CEP: </label>
                    <input type="text" class="form-control FLDSTROPT_cep" id="cep" name="cep" minlength="7" maxlength="12" value="{{$dado->cep}}">
                </div>
                <div class="col-md-1">
                    <label class="form-label" for="uf">UF: </label>
                    <input type="text" class="form-control" id="uf" name="uf" minlength="2" maxlength="2" value="{{$dado->uf}}">
                </div>
                <div class="col-md-5">
                    <label class="form-label" for="cidade">Cidade: </label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="{{$dado->cidade}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="bairro">Bairro: </label>
                    <input type="text" class="form-control" id="bairro"  name="bairro" value="{{$dado->bairro}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label class="form-label" for="cep">Logradouro: </label>
                    <input type="text" class="form-control" id="cep" name="logradouro" value="{{$dado->logradouro}}">
                </div>
                <div class="col-md-1">
                    <label class="form-label" for="numero">Nº: </label>
                    <input type="text" class="form-control" id="numero" name="numero" value="{{$dado->numero}}">
                </div>
                <div class="col-md-5">
                    <label class="form-label" for="complemento">Complemento: </label>
                    <input type="text" class="form-control" id="complemento" name="complemento" value="{{$dado->complemento}}">
                </div>
            </div>

            <div class="mt-4 text-left">
                <button type="submit" class="btn btn-success text-white">Salvar</button>
                <a href="{{route('cliente')}}" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{mix("js/jqueryMask-cep-pessoa.js")}}"></script>
@endsection

