@extends('templates.app')
@section('content')

    <div class="page-header">
        <h1>Editar Estado</h1>
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
                {{$errors->has('nome') ? $errors->first() : ''}}
            </div>
            <div class="col">
                <label for="sigla">Sigla Estado:</label>
                <input type="text" name="sigla" id="sigla" class="form-control @error('sigla') is-invalid @enderror"
                       placeholder="Sigla Estado" maxlength="5"
                       value="{{$estado->sigla}}" required>
                {{$errors->has('sigla') ? $errors->first() : ''}}

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
