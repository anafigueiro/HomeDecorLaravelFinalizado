<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromocaoController;
use Illuminate\Support\Facades\Route;
//importar o arquivo do controlador
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RelacionamentoController;
use App\Http\Controllers\DesejoController;
use App\Http\Controllers\OuvidoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoriaProdutoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {

    Route::get('/welcome', function () {
        return view('welcome');
    })->middleware(['auth', 'verified'])->name('welcome');

    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/index',
    [Controller::class, 'index'])->name('index');

    //chamar uma função do controlador
    Route::get('/usuario', [UsuarioController::class, 'index']);

    //grafico
    Route::get('/desejo/chart/',
        [DesejoController::class, 'chart'])->name('desejo.chart');



    //chamar uma página em HTML
    Route::get('/pagina', function () {
        return view('index');
    });


    Route::get('/desejo',
    [DesejoController::class, 'index'])->name('desejo.index');

    //chama o formulário do aluno
    Route::get('/desejo/create',
        [DesejoController::class, 'create'])->name('desejo.create');

    //realiza a ação de salvar do formulário
    Route::post('/desejo',
        [DesejoController::class, 'store'])->name('desejo.store');

    //chama o formulário para edição
    Route::get('/desejo/edit/{id}',
        [DesejoController::class, 'edit'])->name('desejo.edit');

    //realiza a ação de atualizar os dados do formulário
    Route::put('/desejo/update/{id}',
        [DesejoController::class, 'update'])->name('desejo.update');

    //chama o método para excluir o registro
    Route::get('/desejo/destroy/{id}',
        [DesejoController::class, 'destroy'])->name('desejo.destroy');

    //chama o método para serch para pesquisar e filtrar o registro da listagem
    Route::post('/desejo/search',
        [DesejoController::class, 'search'])->name('desejo.search');

        //carrega uma listagem do banco
    Route::get('/produto',
    [ProdutoController::class, 'index'])->name('produto.index');

    //chama o formulário do aluno
    Route::get('/produto/create',
    [ProdutoController::class, 'create'])->name('produto.create');

    //realiza a ação de salvar do formulário
    Route::post('/produto',
    [ProdutoController::class, 'store'])->name('produto.store');

    //chama o formulário para edição
    Route::get('/produto/edit/{id}',
    [ProdutoController::class, 'edit'])->name('produto.edit');

    //realiza a ação de atualizar os dados do formulário
    Route::put('/produto/update/{id}',
    [ProdutoController::class, 'update'])->name('produto.update');

    //chama o método para excluir o registro
    Route::get('/produto/destroy/{id}',
    [ProdutoController::class, 'destroy'])->name('produto.destroy');

    //chama o método para serch para pesquisar e filtrar o registro da listagem
    Route::post('/produto/search',
    [ProdutoController::class, 'search'])->name('produto.search');

    Route::get('/produto/report/',
        [ProdutoController::class, 'report'])->name('produto.report');

    Route::get('/desejo',
        [DesejoController::class, 'index'])->name('desejo.index');

    //chama o formulário do aluno
    Route::get('/desejo/create',
        [DesejoController::class, 'create'])->name('desejo.create');

    //realiza a ação de salvar do formulário
    Route::post('/desejo',
        [DesejoController::class, 'store'])->name('desejo.store');

    //chama o formulário para edição
    Route::get('/desejo/edit/{id}',
        [DesejoController::class, 'edit'])->name('desejo.edit');

    //realiza a ação de atualizar os dados do formulário
    Route::put('/desejo/update/{id}',
        [DesejoController::class, 'update'])->name('desejo.update');

    //chama o método para excluir o registro
    Route::get('/desejo/destroy/{id}',
        [DesejoController::class, 'destroy'])->name('desejo.destroy');

    //chama o método para serch para pesquisar e filtrar o registro da listagem
    Route::post('/desejo/search',
        [DesejoController::class, 'search'])->name('desejo.search');

        /////////////////////////////////////////////////////////////////////////////
        Route::get('/ouvidoria/report/',
        [OuvidoriaController::class, 'report'])->name('ouvidoria.report');

        Route::get('/ouvidoria',
        [OuvidoriaController::class, 'index'])->name('ouvidoria.index');

    //chama o formulário do aluno
    Route::get('/ouvidoria/create',
        [OuvidoriaController::class, 'create'])->name('ouvidoria.create');

    //realiza a ação de salvar do formulário
    Route::post('/ouvidoria',
        [OuvidoriaController::class, 'store'])->name('ouvidoria.store');

    //chama o formulário para edição
    Route::get('/ouvidoria/edit/{id}',
        [OuvidoriaController::class, 'edit'])->name('ouvidoria.edit');

    //realiza a ação de atualizar os dados do formulário
    Route::put('/ouvidoria/update/{id}',
        [OuvidoriaController::class, 'update'])->name('ouvidoria.update');

    //chama o método para excluir o registro
    Route::get('/ouvidoria/destroy/{id}',
        [OuvidoriaController::class, 'destroy'])->name('ouvidoria.destroy');

    //chama o método para serch para pesquisar e filtrar o registro da listagem
    Route::post('/ouvidoria/search',
        [OuvidoriaController::class, 'search'])->name('ouvidoria.search');

        //carrega uma listagem do banco
    Route::get('/contato',
    [ContatoController::class, 'index'])->name('contato.index');

    //chama o formulário do aluno
    Route::get('/contato/create',
    [ContatoController::class, 'create'])->name('contato.create');

    //realiza a ação de salvar do formulário
    Route::post('/contato',
    [ContatoController::class, 'store'])->name('contato.store');

    //chama o formulário para edição
    Route::get('/contato/edit/{id}',
    [ContatoController::class, 'edit'])->name('contato.edit');

    //realiza a ação de atualizar os dados do formulário
    Route::put('/contato/update/{id}',
    [ContatoController::class, 'update'])->name('contato.update');

    //chama o método para excluir o registro
    Route::get('/contato/destroy/{id}',
    [ContatoController::class, 'destroy'])->name('contato.destroy');

    //chama o método para serch para pesquisar e filtrar o registro da listagem
    Route::post('/contato/search',
    [ContatoController::class, 'search'])->name('contato.search');


    //ROTAS DAS PROMOCOES
    Route::get('/promocao',
        [PromocaoController::class, 'index'])->name('promocao.index');

    //chama o formulário do aluno
    Route::get('/promocao/create',
        [PromocaoController::class, 'create'])->name('promocao.create');

    //realiza a ação de salvar do formulário
    Route::post('/promocao',
        [PromocaoController::class, 'store'])->name('promocao.store');

    //chama o formulário para edição
    Route::get('/promocao/edit/{id}',
        [PromocaoController::class, 'edit'])->name('promocao.edit');

    //realiza a ação de atualizar os dados do formulário
    Route::put('/promocao/update/{id}',
        [PromocaoController::class, 'update'])->name('promocao.update');

    //chama o método para excluir o registro
    Route::get('/promocao/destroy/{id}',
        [PromocaoController::class, 'destroy'])->name('promocao.destroy');

    //chama o método para serch para pesquisar e filtrar o registro da listagem
    Route::post('/promocao/search',
        [PromocaoController::class, 'search'])->name('promocao.search');

    Route::get('/promocao/chart/',
        [PromocaoController::class, 'chart'])->name('promocao.chart');

  
    Route::get('/relacionamento',
    [RelacionamentoController::class, 'index'])
    ->name('relacionamento');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/categoria',
        [CategoriaProdutoController::class, 'index'])->name('categoria.index');

    //chama o formulário do aluno
    Route::get('/categoria/create',
        [CategoriaProdutoController::class, 'create'])->name('categoria.create');

    //realiza a ação de salvar do formulário
    Route::post('/categoria',
        [CategoriaProdutoController::class, 'store'])->name('categoria.store');

    //chama o formulário para edição
    Route::get('/categoria/edit/{id}',
        [CategoriaProdutoController::class, 'edit'])->name('categoria.edit');

    //realiza a ação de atualizar os dados do formulário
    Route::put('/categoria/update/{id}',
        [CategoriaProdutoController::class, 'update'])->name('categoria.update');

    //chama o método para excluir o registro
    Route::get('/categoria/destroy/{id}',
        [CategoriaProdutoController::class, 'destroy'])->name('categoria.destroy');

    //chama o método para serch para pesquisar e filtrar o registro da listagem
    Route::post('/categoria/search',
        [CategoriaProdutoController::class, 'search'])->name('categoria.search');


});

require __DIR__.'/auth.php';
