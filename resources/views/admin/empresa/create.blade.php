@extends('templates.app')
@section('title','Cadastro Empresa')
@section('content')

    <div class="page-header py-1">
        <h2>Cadastro de Empresa</h2>
        <hr>
    </div>
    <form action="{{route('empresas.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <label class="form-label">Nome Empresa:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome Empresa">
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="form-label">CNPJ Empresa:</label>
                <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ">
            </div>

            <div class="col-md-6">
                <label class="form-label">Estado Empresa:</label>
                <select name="estado_id" class="form-select">

                    @forelse($estados as $estado)
                        <option value="{{$estado->id}}">{{$estado->nome}} - {{$estado->sigla}}</option>
                    @empty
                        <option selected>Não foi possivel carregar os dados</option>
                    @endforelse

                </select>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label class="form-label">Descrição Empresa:</label>
                <textarea name="descricao" id="descricao" cols="20" rows="2" class="form-control"
                          placeholder="Descrição da Empresa"></textarea>
            </div>
        </div>

        <div class="col-md-12">
            <br>
            <button class="btn btn-lg btn-primary">Salvar</button>
            <a href="{{route('empresas.index')}}" class="btn btn-lg btn-warning">Voltar</a>
        </div>

    </form>
    <script>
        $(document).ready(function () {
            $("#cnpj").mask("00.000.000/0000-00");

        });
    </script>
@endsection

