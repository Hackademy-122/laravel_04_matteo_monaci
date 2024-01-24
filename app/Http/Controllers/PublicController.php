<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\ContactMail;
use App\Mail\AdmContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PublicController;


class PublicController extends Controller
{
    public function goHome(){

        $articles = Article::all();

        return view('welcome', compact('articles'));
    
    }

    public function goContact(){
        return view('contact');
    }

    public function goAbout(){
        return view('about_us');
    }

    public function goContactSubmit(Request $request){

        // $adm = 'matteomonaci1@gmail.com';
        $email = $request->input('email');
        $name = $request->input('name');
        $text = $request->input('text');
        
        // dd($email, $name, $message);

        try {
            
            Mail::to($email)->send(new ContactMail($name,$text));

        } catch (Throwable $e) {
            
            return redirect(route('homePage'))->with('error', "C'è stato un errore improvisso, riprova più tardi");
        
        }

        Mail::to('progetto@adm.com')->send(new AdmContactMail($email,$name,$text));

        return redirect(route('homePage'))->with('success', 'Email inviata, grazie per averci contattato');

    }

}