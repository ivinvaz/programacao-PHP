@extends("layouts.app")

@section('titulo', 'Lista de Contatos')

@section('conteudo')<h1>Minha Lista de Contatos</h1>

@if (count($contatos) > 0)
    <ul>
        @foreach ($contatos as $contato)
            <li>{{ $contato }}</li>
        @endforeach
    </ul>
@else
    <p>Nenhum item encontrado.</p>
@endif
@endsection