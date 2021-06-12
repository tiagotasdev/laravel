<?php

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
use Illuminate\Http\Request;
use App\Http\Controllers\MeuControlador;
use App\Http\Controllers\ClienteControlador;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', function() {
  return view ('outras.produtos');
})->name('produtos');

Route::get('departamentos', function() {
    return view ('outras.departamentos');
})->name('departamentos');

Route::get('nome', [MeuControlador::class, 'getNome']);
Route::get('idade', [MeuControlador::class, 'getIdade']);
Route::get('multiplicar/{n1}/{n2}', [MeuControlador::class, 'multiplicar']);

Route::resource('clientes', ClienteControlador::class);

Route::get('opcoes/{opcoes?}', function($opcao=null){
    return view('outras.opcoes', compact(['opcao']));
})->name('opcoes');

Route::get('bootstrap', function(){
    return view('outras.exemplo');
});
/*
Route::get('/ola/{nome}/{sobrenome}', function($nome, $sobrenome){
    echo "Ola! Seja bem vindo, $nome $sobrenome!";
});

Route::get('/seunome/{nome?}', function($nome=null){
    if (isset($nome))
       return "Ola! Seja bem vindo, $nome !";
       return "Você não digitou nenhum nome!";
});

Route::get('/rotacomregras/{nome}/{n}', function($nome, $n){
    for($i=0;$i<$n;$i++)
    echo "Ola! Seja bem vindo, $nome! <br>";
})->where('nome', '[A-Za-z]+')->where('n', '[0-9]+');

Route::prefix('/app')->group(function() {

    Route::get('/', function() {
        return view('app');
    })->name('app');

    Route::get('/user', function() {
        return view('user');
    })->name('app.user');

    Route::get('/profile', function() {
        return view('profile');
    })->name('app.profile');

});

Route::get('/produtos', function() {
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Impressora</li>";
    echo "<li>Mouse</li>";
    echo "</ol>";
})->name('meusprodutos');

Route::redirect('todosprodutos1','produtos', 301);

Route::get('todosprodutos2', function() {
    return redirect()->route('meusprodutos');
});


//////////////////////////////////

Route::post('/requisicoes', function(Request $request) {
    return 'Hello POST';
});

Route::delete('/requisicoes', function(Request $request) {
    return 'Hello Delete';
});

Route::put('/requisicoes', function(Request $request) {
    return 'Hello PUT';
});

Route::patch('/requisicoes', function(Request $request) {
    return 'Hello PATCH';
});

Route::options('/requisicoes', function(Request $request) {
    return 'Hello OPTIONS';
});

Route::get('/requisicoes', function(Request $request) {
    return 'Hello GET';
});
*/