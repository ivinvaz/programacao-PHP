<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class PaginasController extends Controller
{
    public function mostrarItens()
    {
        // Substitua a lista de itens estática pelos produtos do banco de dados
        $produtos = Product::all(); // Seleciona todos os produtos da tabela 'products'

        return view('itens', [
            'itens' => $produtos, // Agora 'itens' conterá objetos Product
            'titulo' => 'Lista de Produtos'
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
