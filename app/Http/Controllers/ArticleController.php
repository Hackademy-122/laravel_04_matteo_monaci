<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\ArticleController;

class ArticleController extends Controller
{

    public function goNewArticle() {
        return view ('article.new_article');
    }

    public function newArticleStore(ArticleRequest $request) {
        
        // dd('pippo');
    
        //? MASS ASSIGMENT metodo consigliato
        // $article::create;
        $article = Article::create([
            'name' => $request->name,
            'price' => $request->price,
            'brand' => $request->brand,
            //nel mass assigment non si può fare l'opzione default perché lui prende tutti i dati nello stesso momento e quindi lasciando vuoto l'input img lui riceverà null, non possiamo inserire qua in if perché siamo dentro un array quindi si fa con un'altro metodo fuori dal create
            // 'img' => $request->file('img')->store('public/img'),
        ]);

        if($request->img){
            $article->img = $request->file('img')->store('public/img');
            //in questo caso il save va dichiarato mentre con il metodo precedente è automatico
            $article->save();
        }



        return redirect(route('homePage'))->with('success', 'Articolo aggiunto con successo!');
        
    }
}