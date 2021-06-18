@extends('templates.app')
@section('title',$title)
@section('content')

    <div class="page-header">
        <h2>Editar Empresa</h2>
        <hr>
    </div>
    <form action="{{route('empresas.update', $empresa->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <label class="form-label">Nome Empresa:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome Empresa"
                       value="{{$empresa->nome}}">
            </div>
            @error('nome')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror

        </div>

        <div class="row">
            <div class="col-md-6">
                <label class="form-label">CNPJ Empresa:</label>
                <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ"
                       value="{{$empresa->cnpj}}">
                @error('cnpj')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Estado Empresa:</label>
                <select name="estado_id" class="form-select">

                    @foreach($estados as $estado)
                        <option
                            value="{{$estado->id}}"
                            @if ($estado->id==$empresa->estado->id) selected @endif>{{$estado->nome}}
                            - {{$estado->sigla}}
                        </option>
                    @endforeach

                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label class="form-label">Descrição Empresa:</label>
                <textarea name="descricao" id="descricao" cols="20" rows="2" class="form-control"
                          placeholder="Descrição da Empresa">{{$empresa->descricao}}</textarea>
            </div>
            @error('descricao')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="col-md-12">
            <br>
            <button class="btn btn-lg btn-primary">Salvar</button>
            <a href="{{route('empresas.index')}}" class="btn btn-lg btn-warning">Voltar</a>
        </div>
        </div>

    </form>
    <script>
        $(document).ready(function () {
            $("#cnpj").mask("00.000.000/0000-00");

        });
    </script>
@endsection

