<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'CNPJ',
        'Telefone',
        'cep',
        'estado',
        'cidade',
        'bairro',
        'Numero',
        'password'
    ];

    public function vendedor()
    {
        return $this->hasMany(Vendedor::class);

    }
    public function produtos()
    {
        return $this->hasMany(Produtos::class);

    }
}
