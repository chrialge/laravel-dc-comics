<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('comics.index', ['comics' => Comic::orderByDesc('id')->paginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $data = $request->all();
        // validate the user input

        $val_data = $request->validate([
            'title' => 'required|max:10',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|numeric',
            'series' => 'nullable| max:70',
            'sale_date' => 'nullable|date',
            'type' => 'nullable| max:10',

        ]);

        // dd($val_data);
        //create the resource

        // option 1(extend)
        // $comic= new Comic();
        // $comic->title = $data['title'];
        // $comic->price = $data['price'];
        // $comic->thumb = $data['thumb'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        // $comic->description = $data['description'];
        // $comic->save();
    
        Comic::create($val_data);
        //patter Post->redirect->GET
        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $val_data = $request->validate([
            'title' => 'required|max:10',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|numeric',
            'series' => 'nullable| max:70',
            'sale_date' => 'nullable|date',
            'type' => 'nullable| max:10',

        ]);
        // dd($request->all());
        $comic->update($val_data);
        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
