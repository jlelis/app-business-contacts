@extends('templates.app')
@section('title','Lista Empresas')
@section('content')

    <div class="page-header py-1">

        <div class="row">
            <div class="col-auto mr-auto">
                <h2>Empresas Parceiras</h2>
            </div>
            <div class="col-auto">
                <a href="{{route('empresas.create')}}" class="btn btn-lg btn-success">Nova</a>
            </div>
        </div>
    </div>
    <p>Para consultar empresa cadastrada digite o nome:</p>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered text-nowrap">
            <thead>
            <tr>
                <th>#</th>
                <th>Empresa</th>
                <th>Descrição</th>
                <th>CNPJ</th>
                <th>Nome Estado</th>
                <th>Sigla Estado</th>
                <th colspan="2">Ações</th>


            </tr>
            </thead>
            <tbody id="myTable">
            @forelse($empresas as $empresa)
                <tr>
                    <td>{{$empresa->id}}</td>
                    <td>{{$empresa->nome}}</td>
                    <td>{{$empresa->descricao}}</td>
                    <td>{{$empresa->cnpj}}</td>
                    <td>{{$empresa->estado->nome}}</td>
                    <td>{{$empresa->estado->sigla}}</td>
                    <td>
                        <a href="{{route('empresas.edit',$empresa->id)}}" class="btn btn-warning">
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
                    <td>
                        <form action="{{route('empresas.destroy',$empresa->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd"
                                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>

                                <span>Excluir</span>
                            </button>
                        </form>

                    </td>

                </tr>
            @empty
                <p>Empresas Não encontradas!</p>
            @endforelse
            </tbody>

        </table>
    </div>

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
