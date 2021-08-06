<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Produto extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $table = 'produto';
    protected $fillable = ['categoria_id', 'nome', 'icon', 'preco', 'descricao', 'destacado', 'visivel'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id', 'categoria_id');
    }

    public function relCategoria()
    {
        return $this->hasOne('App\Models\Models\Categoria', 'id', 'categoria_id');
    }

    public function relEstoque()
    {
        return $this->hasMany('App\Models\Models\Estoque', 'produto_id');
    }
}
