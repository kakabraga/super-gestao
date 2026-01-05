<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PrincipalController::class, 'principal'])
    ->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])
    ->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'contato'])
    ->name('site.contato');

Route::post('/contato', [ContatoController::class, 'salvar'])
    ->name('site.contato');
Route::get('/confimar', [ContatoController::class, 'confirmaSave'])->name('site.confirma_save');

Route::get('/login', [LoginController::class, 'loginView'])->name('site.login.view');
Route::get('/register', [LoginController::class, 'registerView'])->name('site.register.view');
Route::post('/login', [LoginController::class, 'login'])->name('site.login.submit');
Route::post('/register', [LoginController::class, 'register'])->name('site.register.submit');

Route::middleware('autenticacao:padrao')->prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'clientes';
    })->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])
        ->name('app.fornecedores');
    Route::get('/produtos', function () {
        return 'produtos';
    })->name('app.produtos');
});

Route::get('/teste/{idade}/{salario}', [TesteController::class, 'teste'])->name('site.teste');

Route::fallback(function () {
    return response("Rota não encontrada. Clique <a href='" . route('site.index') . "'>aqui</a> para ir para a página inicial",  404);
});



// Route::get('/contato/{nome?}/{categoria_id?}', function(String $nome = 'Corinthians', int $categoria_id = 1){
//     return "Nome: $nome, Categoria ID: $categoria_id";
// })->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
