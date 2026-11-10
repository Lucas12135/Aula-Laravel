@extends('template')

@section('pagina', 'Serviços')

@section('conteudo')
<h1>Nossos serviços</h1>

<p>
    <a href="/form-add-servico">Adicionar Serviço</a>
</p>

<br>

@foreach ($servicos as $serv)
<p>
    {{ $serv->nome }} -
    <b>R$ {{ $serv->preco }}</b>
</p>

<p>
    <a href="/form-editar-servico/{{ $serv->id }}">Editar</a>
</p>

<form action="/deletar-servico/{{ $serv->id }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Excluir">
</form>
<hr>
@endforeach
@endsection