@extends('layouts.app')

@section('titulo', $titulo ?? 'Lista de Produtos')

@section('conteudo')
    <h1>{{ $titulo }}</h1>

    @if (count($itens) > 0)
        <ul>
            @foreach ($itens as $produto)
                <li>
                    <strong>{{ $produto->name }}</strong> - R$ {{ number_format($produto->price, 2, ',', '.') }}
                    <br>
                    <small>{{ $produto->description }} (Estoque: {{ $produto->stock }})</small>
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhum produto encontrado.</p>
    @endif
@endsection