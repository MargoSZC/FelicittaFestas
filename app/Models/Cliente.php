<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = "cliente";

    protected $fillable = [
        'nome', 'telefone', 'email','cpf'
    ];

    public function categoriacliente(){
        return $this->belongsTo(Categoriacliente::class,'categoriacliente_id','id');
    }

}
