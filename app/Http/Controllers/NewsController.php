<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function getLastestNews(Request $request)
    {
        //Aqui pegamos a localização do usuário que foi tratada no middleware "CheckUserLocation"
        $userLocation = $request->query("location");

        //Traz somente as últimas notícias do país que o usuário se encontra.
        $latestNews = News::where('country_flag', $userLocation)
            ->orderBy('id','desc')
            ->take(10)
            ->get();

        return $latestNews;
    }
}
