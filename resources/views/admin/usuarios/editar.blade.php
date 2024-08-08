@extends('admin.dashboard')

@if($errors->any())
<div class="boxError alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
            
        @endforeach

    </ul>
    
</div>


@endif

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Editar Usuário</h2>
    </div>

    <hr>
       

    <form method="post" action="{{ route('usuario.update',['id'=>$usuario->id]) }}">
        @csrf
        @method('put')
        <div class=" mb-3 ">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome"
                value="{{ old('nome', $usuario->nome) }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email"
                value="{{ old('email', $usuario->email) }}">
        </div>

        <p class="boxError alert alert-primary">Mantenha o campo da senha branco caso deseja manter a senha</p>

        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Digite uma senha">
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar senha</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirme sua senha">
        </div>  
        
        <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{route('usuario.index')}}" class="btn btn-danger">Cancelar</a>
    </form>


@endsection
