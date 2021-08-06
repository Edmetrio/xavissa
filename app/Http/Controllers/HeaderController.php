<?php

namespace App\Http\Controllers;

use App\Models\Models\Categoria;
use App\Models\Models\itemcarrinha;
use App\Models\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeaderController extends Controller
{
    public function lista()
    {
        $numero = itemcarrinha::count();
        $item = DB::table('itemcarrinha')
        ->join('produto', 'itemcarrinha.produto_id', '=', 'produto.id')
        ->where('itemcarrinha.utilizador_id', '0c82dc77-33d5-4b82-850c-3fbd7fe0ad0b')
        ->select('produto.*','itemcarrinha.quantidade as quantidade','itemcarrinha.id as itemid')
        ->get();
        $total = 0;
            foreach($item as $p)
            {
                $p->valor_total = $p->preco * $p->quantidade;
                $total += $p->valor_total;
            }
                $t = $total;
        $produto = Produto::where('visivel', 'on')->get();
        $categoria = Categoria::where('visivel', 'on')->get();
        return view('headerProduto', compact('produto','categoria','item','t','numero'));
    }
}
