<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Categoria extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];
    protected $primaryKey = 'id';


    protected $fillable=['nome','icon','cor','destacado','visivel'];
    protected $table='categoria';

    public function relProduto()
    {
        return $this->hasMany('App\Models\Models\Produto', 'categoria_id');
    }

    public function produto()
    {
        return $this->hasMany(Produto::class);
    }

}
