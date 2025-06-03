@extends('layouts.app') 

@section('titulo', 'Lista de Compras') 

@section('conteudo') <h1>Minha Lista de Itens</h1>

    @if (count($itens) > 0)
        <ul>
            @foreach ($itens as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum item encontrado.</p>
    @endif
@endsection