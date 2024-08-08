@extends('admin.dashboard')
@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Cadastrar Serviços</h2>
    </div>
    <hr>

    @if ($errors->any())
        <div class="boxError alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('servico.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="usuario_id" class="form-label">Usuarios</label>
            <select name="usuario_id" id="usuario" class="form-control">
                <option value="1">Taina</option>
                <option value="2">Junior</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoria</label>
            <select name="categoria" id="categoria" class="form-control">
                <option value="1">tecnologia</option>
                <option value="2">contabilidade</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Seu Titulo"
                value="{{ old('titulo') }}">
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="text" name="valor" class="form-control" id="valor" placeholder="Valor"
                value="{{ old('valor') }}">
        </div>
        
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Telefone"
                value="{{ old('telefone') }}">
        </div>
        <div class="mb-3">
            <label for="celular" class="form-label">Celular</label>
            <input type="text" name="celular" class="form-control" id="calular" placeholder="celular"
                value="{{ old('celular') }}">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Endereço"
                value="{{ old('endereco') }}">
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Numero</label>
            <input type="text" name="numero" class="form-control" id="numero" placeholder="Numero"
                value="{{ old('numero') }}">
        </div>
        <div class="mb-3">
            <label for="complemento" class="form-label">Complemente</label>
            <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Complemento"
                value="{{ old('complemento') }}">
        </div>
        <div class="mb-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro"
                value="{{ old('bairro') }}">
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade"
                value="{{ old('cidade') }}">
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" name="estado" class="form-control" id="estado" placeholder="Estado"
                value="{{ old('estado') }}">
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" name="cep" class="form-control" id="cep" placeholder="cep"
                value="{{ old('cep') }}">
        </div>



        <div class="mb-3">
            <label for="foto" class="form-label">Fotos</label>
            <input type="file" name="foto" class="form-control" id="foto" placeholder="Fotos" multiple>
                
        </div>


        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10">
                {{ old('descricao') }}
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('servico.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection