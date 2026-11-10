@extends('template')

@section('pagina', 'Sobre Nós')


@section('conteudo')
    <h1>Sobre Laravel</h1>

    <p>
        @if($txt)
        Frase: {{ $txt }}
        @endif
    </p>

    <h3>Características do Laravel:</h3>
    <ul>
        @foreach ($dados as $dd)
        <li>{{ $dd }}</li>
        @endforeach
    </ul>
@endsection