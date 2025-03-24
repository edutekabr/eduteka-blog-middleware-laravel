<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserLocation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //Verifica se o usuário informou a localização através da "Query string" na URL. Se ele não informar a localização, nossa aplicação define como padrão o "BRA"(Brasil)
        $location = $request->query("location") ?? "BRA";

        //Incorpora na requisição o parâmetro "location"
        $request->merge(["location" => $location]);


        //O código acima é executado antes de entrar na controller da aplicação
        $response = $next($request);
        //O código abaixo é executado antes de enviar a resposta para o visitante e após passar pela controller

        return $response;
    }
}
