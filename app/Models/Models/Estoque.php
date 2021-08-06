<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;


class Estoque extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];
    protected $primaryKey = 'user_id';

    protected $table = 'estoque';
    protected $fillable = ['user_id','produto_id','quantidade'];

    public function relProduto()
    {
        return $this->hasOne('App\Models\Models\Produto', 'id', 'produto_id');
    }
}
