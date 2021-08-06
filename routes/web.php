<?php

use App\Http\Controllers\AumentarestoqueController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CarrinhaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EncomendaController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\ItemCarrinhaController;
use App\Http\Controllers\ItemfavoritoController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\PagarController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ReceberController;
use App\Http\Controllers\VendaController;
use App\Models\Models\Categoria;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

Route::get('entrar', [AuthenticatedSessionController::class, 'create']);

Route::resource('/', DashboardController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('produto', ProdutoController::class);

Route::get('pdestroy/{id}', [ProdutoController::class, 'destroy']);
Route::get('detalhes/{id}', [ProdutoController::class, 'detalhes'])->middleware(['auth'])->name('detalhes.detalhes');

Route::middleware(['auth'])->group(function () {
    Route::resource('carrinha', ItemCarrinhaController::class);
    Route::get('carrinha', [CarrinhaController::class, 'index']);
    Route::get('destroy/{id}', [ItemCarrinhaController::class, 'destroy']);
});

Route::resource('categoria', CategoriaController::class);
Route::get('cdestroy/{id}', [CategoriaController::class, 'destroy']);
Route::get('categoria/{id}', [CategoriaController::class, 'dashboard']);

Route::middleware(['auth'])->group(function () {
    Route::post('encomenda', [EncomendaController::class, 'store']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('historico', [EncomendaController::class, 'index']);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('venda', VendaController::class);
});

Route::get('contacto', [ContactosController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('pagamento', [PagamentoController::class, 'index'])->name('pagamento.pagamento');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('conta', ContaController::class);
    Route::post('endereco', [ContaController::class, 'endereco']);
    Route::post('telefone', [ContaController::class, 'telefone']);
});

//Administrador
Route::get('perfil', [PerfilController::class, 'index']);

Route::get('base', [PerfilController::class, 'base']);
Route::get('adicionar', [PerfilController::class, 'adicionar']);

Route::resource('estoque', EstoqueController::class);
Route::resource('aumentar', AumentarestoqueController::class);

Route::resource('pagar', PagarController::class);
Route::get('cpdestroy/{id}', [PagarController::class, 'destroy']);

Route::resource('receber', ReceberController::class);
Route::get('rdestroy/{id}', [ReceberController::class, 'destroy']);

Route::resource('favorito', ItemfavoritoController::class);
Route::get('fdestroy/{id}', [ItemfavoritoController::class, 'destroy']);

Route::view('processo', 'livewire.app');

require __DIR__ . '/auth.php';
