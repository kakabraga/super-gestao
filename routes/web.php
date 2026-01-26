<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
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

Route::get('/login/{erro?}', [LoginController::class, 'loginView'])->name('site.login.view');
Route::get('/register', [LoginController::class, 'registerView'])->name('site.register.view');
Route::post('/login', [LoginController::class, 'login'])->name('site.login.submit');
Route::post('/register', [LoginController::class, 'salvar'])->name('site.register.submit');


Route::middleware('autenticacao:padrao')->prefix('/app')->group(function () {
    Route::get('/clientes',  [ClienteController::class, 'index'])->name('app.cliente');
    Route::get('/fornecedor', [FornecedorController::class, 'index'])->name('app.fornecedor');
    Route::get('/fornecedor/adicionar', [FornecedorController::class, 'adicionar'])->name('app.fornecedor.adicionar');
    Route::get('/home', [HomeController::class, 'index'])->name('app.home');
    Route::get('/sair', [LoginController::class, 'logout'])->name('app.logout');
    
    Route::post('/fornecedor/listar', [FornecedorController::class, 'listar'])->name('app.fornecedor.listar');
    Route::get('/fornecedor/listar', [FornecedorController::class, 'listar'])->name('app.fornecedor.listar');
    Route::post('/fornecedor',  [FornecedorController::class, 'save'])->name('app.fornecedor.submit');
    Route::get('/fornecedor/editar/{id}', [FornecedorController::class, 'editar'])->name('app.fornecedor.editar');
    Route::get('/fornecedor/excluir/{id}', [FornecedorController::class, 'excluir'])->name('app.fornecedor.excluir');
    
    Route::resource('produto', ProdutoController::class);
    // Route::get('/produto/create',  [ProdutoController::class, 'create'])->name('app.produto.create');
    // Route::get('/produto',  [ProdutoController::class, 'index'])->name('app.produto');
    });

Route::get('/teste/{idade}/{salario}', [TesteController::class, 'teste'])->name('site.teste');

Route::fallback(function () {
    return view("site.fallback");
});



// Route::get('/contato/{nome?}/{categoria_id?}', function(String $nome = 'Corinthians', int $categoria_id = 1){
//     return "Nome: $nome, Categoria ID: $categoria_id";
// })->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
