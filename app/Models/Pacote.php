<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacote extends Model
{
    use HasFactory;
    protected $table = "pacote";

    protected $fillable = [
        'nome', 'descricao', 'valor','categoriapacote_id', 'imagem'
    ];

    public function categoriapacote(){
        return $this->belongsTo(Categoriapacote::class,'categoriapacote_id','id');
    }

}
