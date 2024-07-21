<?php
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ApiController::class, 'index']);

Route::get('/brand/{brand}', function($brand){

    $brandArray = match ($brand) {
        "disney" => ["/img/disney-bg.jpg", "/img/disney.png", "7067611", "5905", "338"],
        "pixar" => ["/img/pixar-bg.jpg", "/img/pixar.jpg", "7067603", "7067605", "7067606"],
        "marvel" => ["/img/marvel-bg.jpg", "/img/marvel.png", "7067607", "8136", "7067607"],
        "starwars" => ["/img/star-wars-bg.jpg", "/img/star-wars.png", "7067607", "8136", "7067607"],
        "national" => ["/img/national-geographic-bg.jpg", "/img/national-geographic.png", "7067613", "7067613", "7067613"],
        default => abort(404)
    };

    return view('brandPage', compact('brandArray', 'brandArray'));
});

Route::get('/Detail/{movieId}', [ApiController::class, 'useDetailPage']);

Route::get('/search', function(){
    return view('searchPage');
});