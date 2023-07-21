<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = "produto";

    protected $fillable = [
        'nome', 'quantidade', 'valor','categoriaproduto_id', 'imagemproduto'
    ];

    public function categoriaproduto(){
        return $this->belongsTo(Categoriaproduto::class,'categoriaproduto_id','id');
    }

}
