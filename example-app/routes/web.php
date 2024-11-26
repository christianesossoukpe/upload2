<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Bienvenue sur ma page d'accueil";
});

// Route::get('/articles', function () {
//     return "Bienvenue sur la page des articles";
// });
// Route::get('/articles', [ArticleController::class, 'index']);
// Route::get('/articles/{id}', [ArticleController::class, 'show']);


require __DIR__.'/auth.php';
