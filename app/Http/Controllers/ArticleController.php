<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;

class ArticleController extends Controller
{

    public function goNewArticle() {
        return view ('article.new_article');
    }

    public function newArticleStore(Request $request) {
        
        // dd('pippo');
    
        //? MASS ASSIGMENT metodo consigliato
        // $article::create;
        $article = Article::create([
            'name' => $request->name,
            'price' => $request->price,
            'brand' => $request->brand,
        ]);

        return redirect(route('homePage'))->with('success', 'Articolo aggiunto con successo!');
        
    }
}