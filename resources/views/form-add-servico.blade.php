@extends('template')

    @section('pagina', 'Serviços')
    
    @section('conteudo')
        <h1>Adicionar Serviço</h1>

        <form action="/insert-servico" method="post">
            @csrf
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" required> <br><br>
            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" required></textarea> <br><br>
            <label for="preco">Preço:</label><br>
            <input type="text" n0ame="preco" step="0.01" required> <br><br>
            <input type="submit" value="Cadastrar">
        </form>
    @endsection