@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>cadastrar Usuários</h2>
    </div>

    <hr>
    @if($errors->any())
    <div class="boxError alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
                
            @endforeach

        </ul>
        
    </div>
    
    
    @endif
    <form method="post" action="{{route('usuario.cadastrarsalvar')}}">
        @csrf

        <div class="mb-3">
            <label for="nome"  class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{old('nome')}}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{old('nome')}}">
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="senha_confirmation" class="form-label">Confimar senha</label>
            <input type="password" name="senha_confirmation" id="senha_confirmation" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{route('usuario.index')}}" class="btn btn-danger">Cancelar</a>
    </form>

    
    
@endsection
