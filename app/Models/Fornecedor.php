<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'data_nascimento',
        'data_cadastro',
        'rg',
        'cnpj_cpf',
        'celular',
        'fixo',
        'estado_id',
        'empresa_id',
    ];

    protected $table = 'fornecedores';

    public function estado()
    {
        return $this->hasOne(Estado::class);
    }

    public function empresa()
    {
        return $this->hasOne(Empresa::class);
    }
}
