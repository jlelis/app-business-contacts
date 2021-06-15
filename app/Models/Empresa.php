<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'cnpj', 'descricao', 'estado_id'];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function fornecedores()
    {
        return $this->belongsTo(Fornecedor::class);
    }
}
