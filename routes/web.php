<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'goHome'])->name('homePage');
Route::get('/contatti', [PublicController::class, 'goContact'])->name('contact');
Route::get('/chi_siamo', [PublicController::class, 'goAbout'])->name('aboutUs');

// rotta che invia i dati
Route::post('/contatti/submit', [PublicController::class, 'goContactSubmit'])->name('contactSubmit');

// rotte articles
Route::get('/nuovo_articolo', [ArticleController::class, 'goNewArticle'])->name('newArticle');
Route::post('/nuovo_articolo/salvataggio', [ArticleController::class, 'newArticleStore'])->name('newArticleStore');