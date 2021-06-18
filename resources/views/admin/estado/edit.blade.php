@extends('templates.app')
@section('title','Edit Estados')
@section('content')

    <div class="page-header">
        <h2>Editar Estado</h2>
        <hr>
    </div>

    <form action="{{route('estados.update',$estado->id)}}" method="post">
        @method('PUT')
        @csrf

        <div class="row">
            <div class="col">
                <label for="nome">Nome Estado:</label>
                <input type="text" name="nome" id="nome"
                       class="form-control @error('nome') is-invalid @enderror"
                       placeholder="Nome Estado" value="{{$estado->nome}}" required>
                @error('nome')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col">
                <label for="sigla">Sigla Estado:</label>
                <input type="text" name="sigla" id="sigla" class="form-control @error('sigla') is-invalid @enderror"
                       placeholder="Sigla Estado" maxlength="5"
                       value="{{$estado->sigla}}" required>
                @error('sigla')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

            </div>

            <br>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-primary">Salvar</button>
            <a href="{{route('estados.index')}}" class="btn btn-lg btn-warning">Voltar</a>
        </div>

    </form>

    @if($errors->any())
        @foreach($errors->all() as $erro)
            {{$erro}}
            <br>
        @endforeach

    @endif
@endsection
