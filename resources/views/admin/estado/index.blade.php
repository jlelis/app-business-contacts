@extends('templates.app')
@section('title','Lista Estados')
@section('content')

    <div class="page-header py-1">

        <div class="row">
            <div class="col-auto mr-auto">
                <h2>Estados do Brasil</h2>
            </div>
            <div class="col-auto">
                <a href="{{route('estados.create')}}" class="btn btn-lg btn-success">Novo</a>
            </div>
        </div>
    </div>
    <p>Para consultar o estado cadastrado digite o nome ou a sigla:</p>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome Estado</th>
            <th>Sigla Estado</th>
            <th>Ações</th>

        </tr>
        </thead>
        <tbody id="myTable">
        @forelse($estados as $estado)
            <tr>
                <td>{{$estado->id}}</td>
                <td>{{$estado->nome}}</td>
                <td>{{$estado->sigla}}</td>
                <td>
                    <a href="{{route('estados.edit',$estado->id)}}" class="btn btn-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd"
                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>

                        </svg>

                        <span>Editar</span>
                    </a>

                </td>

            </tr>
        @empty
            <p>Estados Não Cadastrados!</p>
        @endforelse
        </tbody>

    </table>


    <script>
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

    </script>
@endsection
