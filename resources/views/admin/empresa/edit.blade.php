@extends('templates.app')
@section('content')

    <div class="page-header">
        <h2>Editar Empresa</h2>
        <hr>
    </div>
    <form action="{{route('empresas.update', $empresa->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome Empresa"
                   value="{{$empresa->nome}}">
        </div>
        <div class=" form-group">
            <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ" value="{{$empresa->cnpj}}">
        </div>
        <div class="form-group">
            <textarea name="descricao" id="descricao" cols="30" rows="3" class="form-control"
                      placeholder="Descrição da Empresa">{{$empresa->descricao}}</textarea>
        </div>
        <div class="form-group">

            <select name="estado_id" class="form-control">

                @foreach($estados as $estado)
                    <option
                        value="{{$estado->id}}"
                        @if ($estado->id==$empresa->estado->id) selected @endif>{{$estado->nome}} - {{$estado->sigla}}
                    </option>
                @endforeach

            </select>

        </div>
        <div>
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

