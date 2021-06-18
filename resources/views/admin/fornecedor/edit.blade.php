@extends('templates.app')
@section('title','Cadastro Fornecedor')
@section('content')

    <div class="page-header py-1">
        <h2>Cadastro de Fornecedor</h2>
        <hr>
    </div>
    <form action="{{route('fornecedores.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                Nome:
                <input class="form-control" type="text" name="nome" required autofocus>
            </div>
            @error('nome')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="row">
            <div class="col-md-4">
                RG:
                <input class="form-control" type="text" name="rg" id="rg">
            </div>

            <div class="col-md-4">
                CNPJ/CPF:
                <input class="form-control" type="text" name="cnpj_cpf" required id="cnpj_cpf">
                @error('cnpj_cpf')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="col-md-4">
                Dt. de Nascimento:
                <input class="form-control" type="date" name="data_nascimento">
                @error('data_nascimento')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                Dt. de Cadastro:
                <input class="form-control" type="date" name="data_cadastro" required>
            </div>

            <div class="col-md-4">
                Celular:
                <input class="form-control numero" type="text" name="celular" id="numero">
            </div>
            <div class="col-md-4">
                Telefone Fixo:
                <input class="form-control numero" type="text" name="fixo">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                Empresa:
                <select name="empresa_id" class="form-select" required>

                    @forelse($empresas as $empresa)
                        <option value="{{$empresa->id}}">{{$empresa->nome}}</option>
                    @empty
                        <option selected>Não foi possivel carregar os dados</option>
                    @endforelse

                </select>
            </div>
            <div class="col-md-6">
                Estado:
                <select name="estado_id" class="form-select" required>

                    @forelse($estados as $estado)
                        <option value="{{$estado->id}}">{{$estado->nome}} - {{$estado->sigla}}</option>
                    @empty
                        <option selected>Não foi possivel carregar os dados</option>
                    @endforelse

                </select>
            </div>
        </div>

        <hr>
        <div class="col-md-4">

            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>


            <a class="btn btn-warning btn-lg" href="{{route('fornecedores.index')}}">Voltar</a>

        </div>
    </form>


    <script>
        $(document).ready(function () {
            $("#cpf").mask("000.000.000-00");
            $("#numero").mask("(00) 00000-0000");
        });
    </script>

@endsection

