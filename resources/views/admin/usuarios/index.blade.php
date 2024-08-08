@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Lista de Usuarios</h2>
        <a href="{{ route('usuario.cadastrar') }}" class="btn btn-primary">Cadastrar</a>
    </div>

    <hr>
    @if (session('sucesso'))
        <div class="alert alert-success">
            {{ session('sucesso') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>

                <th>Nome</th>
                <th>E-mail</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nome }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('usuario.visualizar', ['id'=> $user->id]) }}"
                            class="btn btn-primary">Visualizar</a>
                        <a href="{{ route('usuario.edit', ['id'=> $user->id]) }}" class="btn btn-secondary">Editar</a>

                        <form action="{{ route('usuario.destroy', ['id' => $user->id]) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Realmente deseja exluir esse usúario ?')" >Excluir</button>
                        </form>

                    </td> 
                </tr>
            @endforeach

        </tbody>
    </table>
    {{$usuarios->links()}}
@endsection
