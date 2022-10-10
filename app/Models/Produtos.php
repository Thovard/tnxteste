<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'Produtos';
    protected $fillable = [
        'name',
        'empresas_id',
        'Categoria',
    ];

    public function produtos()
    {
        return $this->belongsto(Empresas::class);

    }
}
