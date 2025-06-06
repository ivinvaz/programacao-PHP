<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // O Laravel assume que a tabela para o modelo 'Product' é 'products' (pluralizado e snake_case).
    // Se sua tabela tiver um nome diferente, você precisaria definir:
    // protected $table = 'meus_produtos';

    // Se a chave primária não for 'id', ou não for auto-incrementável:
    // protected $primaryKey = 'product_id';
    // public $incrementing = false;

    // Colunas que podem ser preenchidas em massa (mass assignment)
    // Isso é importante para segurança ao criar ou atualizar múltiplos registros.
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock'
    ];
}
