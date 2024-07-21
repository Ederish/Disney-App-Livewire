<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.themoviedb.org/3/list/8136', [
            'api_key' => 'a6304e3aeae5ada05e23b5e4bbbb9eff',
            'language' => 'es-MX'
        ]);
        $movies = $response->json();

        return view('welcome', compact('movies'));
    }

    public function useDetailPage($movieId)
    {
        $response = Http::get("https://api.themoviedb.org/3/movie/{$movieId}", [
            'api_key' => 'a6304e3aeae5ada05e23b5e4bbbb9eff'
        ]);
        $movieData = $response->json();

        return view('DetailPage', compact('movieData'));
    }
    public function show($id)
    {
        $movieData = Movie::find($id); // O el método que uses para obtener los datos de la película
        $datos = $this->getAdditionalData($id); // Método para obtener los datos adicionales

        return view('detailPage', compact('movieData', 'datos'));
    }
}