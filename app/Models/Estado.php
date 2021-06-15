<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $fillable = ['nome','sigla'];
    public function empresa()
    {
        return $this->hasOne(Empresa::class);
    }
}
