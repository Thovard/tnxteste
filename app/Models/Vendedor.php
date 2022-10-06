<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    use HasFactory;

    protected $table = 'vendedores';
    protected $fillable =
    [
        'name',
        'empresas_id',
        'CPF',
        'Telefone',
        'password'
    ];
    public function empresa()
    {
        
        return $this->belongsto(Empresas::class);

    } 
}
