<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function consumeApi()
    {
        $key = env('API_KEY');
        $url = 'https://newsapi.org/v2/top-headlines?country=id&apiKey=' . $key;
        $response = Http::withoutVerifying()->get($url);
        $data = $response->json()["articles"];

        return view('consume', ['articles' => $data]);
    }
}
