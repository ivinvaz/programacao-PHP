<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function mostrarItens()
    {
        $listaDeItens = [
            'Maçã',
            'Banana',
            'Laranja',
            'Uva',
            'Pêssego'
        ];

        return view('itens', [
            'itens' => $listaDeItens,
            'titulo' => 'Lista de Compras' 
        ]);
    }

    public function mostrarContato()
    {
        $listaDeContatos = [
            "Contato1",
            "Contato2",
            "Contato3",
            "Contato4",
            "Contato5"
        ];
        
        return view("contato", [
                "contatos" => $listaDeContatos,
                "titulo" => "Lista de Contatos"
            ]
            );
    }
}
