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

    // public function show($id) {
    //    $fumetto = Comic::find($id);
    //     return $fumetto;
    // }

    // public function show(Comic $comic) {
    //     return $comic;
    // }

    // chiave primaria
    public function show(Comic $comic) {
        return view('comics/show', ['fumetto'=>$comic]);
    }

    public function create() {
        return view('comics/create');
    }

    public function store(Request $request) {
        $newComic = new Comic();
        $newComic->title = $request['title'];
        $newComic->description = $request['description'];
        $newComic->thumb = $request['thumb'];
        $newComic->price = $request['price'];
        $newComic->series = $request['series'];
        $newComic->sale_date = $request['sale_date'];
        $newComic->type = $request['type'];
        $newComic->save();
        return redirect()->route('comics.show', ['comic'=>$newComic]);
    }

    public function destroy(Comic $comic) {
        $comic->delete();
        return redirect()->route('comics.index');
    }

    public function edit(Comic $comic) {
        return view('comics/edit', ['fumetto'=>$comic]);
    }

    public function update(Request $request, Comic $comic) {
        $comic->title = $request['title'];
        $comic->description = $request['description'];
        $comic->thumb = $request['thumb'];
        $comic->price = $request['price'];
        $comic->series = $request['series'];
        $comic->sale_date = $request['sale_date'];
        $comic->type = $request['type'];
        $comic->update();
        return redirect()->route('comics.show', ['comic'=>$comic]);
    }
}
