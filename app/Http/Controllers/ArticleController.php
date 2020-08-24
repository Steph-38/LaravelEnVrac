<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($n)
    {
        return view('article')->with('numero', $n);
    }
}

// // paramètre optionel mais valeur par défaut obligatoire
// Route::get('/test{n?}', function ($n = 1) {
//     return 'Je suis sur la page ' . $n;
// // Regex pour les valeurs attendues
// })->where('n', '[1-9]')
// // renomme la route
// ->name('caca');


// Route::get('facture/{n}', function ($n) {
//     return view('facture')->withNumero($n);
// })->where('n','[1-9]+');