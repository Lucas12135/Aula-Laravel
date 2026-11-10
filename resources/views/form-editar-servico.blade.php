@extends('template')

    @section('pagina', 'Editar Serviços')
    
    @section('conteudo')
        <h1>Editar Serviço</h1>

        <form action="/update-servico/{{$servico->id}}" method="post">
            @csrf
            @method('PUT')
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" value="{{ $servico->nome }}" required> <br><br>

            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" required>{{ $servico->descricao }}</textarea> <br><br>

            <label for="preco">Preço:</label><br>
            <input type="text" name="preco" step="0.01" value="{{ $servico->preco }}" required> <br><br>
            <input type="submit" value="Salvar Alterações">
        </form>
    @endsection