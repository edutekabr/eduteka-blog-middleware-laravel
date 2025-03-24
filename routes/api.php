<?php

use App\Http\Controllers\NewsController;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Criamos um grupo dessa forma todas as rotas cadastradas dentro dele irão executar nosso middleware
Route::middleware(["check.user.location"])->group(function () {
    
    /*Para acessar essa rota no navegador: 
        http://localhost:8000/api/news?location=BRA (Notícias do Brasil)
        http://localhost:8000/api/news?location=ARG (Notícias da Argentina)

        Obs: O número da porta pode variar.
    */
    Route::get("/news", [NewsController::class, "getLastestNews"]);
});