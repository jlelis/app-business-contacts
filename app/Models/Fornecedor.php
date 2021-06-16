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
        return $this->hasOne(Estado::class,'id','estado_id');
    }

    public function empresas()
    {
        return $this->belongsTo(Empresa::class,'empresa_id','id');
    }
}
