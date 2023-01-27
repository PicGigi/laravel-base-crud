<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index() {
        $lista = Comic::all();
        return view('comics/index', ['utente'=>'Luigi', 'fumetti'=>$lista]);
    }

    public function show($id) {
        $fumetto = Comic::find($id);
        return $fumetto->title;
    }
}
