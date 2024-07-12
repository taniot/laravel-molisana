<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pasta;
use Illuminate\Http\Request;

class PastaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $pastas = Pasta::all();

        return view('pastas.index', compact('pastas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pastas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $pasta = new Pasta();

        $pasta->title = $data['title'];
        $pasta->cooking_time = $data['cooking_time'];
        $pasta->weight = $data['weight'];
        $pasta->type = $data['type'];
        $pasta->description = $data['description'];
        $pasta->image = $data['image'];

        $pasta->save();

        return redirect()->route('pastas.show', $pasta->id);
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    public function show(Pasta $pasta) //modello Pasta? mi passi un id? e allora cosa posso fare se non darti la pasta che corrisponde a quell'id? eccola
    {
        // $pasta = Pasta::find($id);

        return view('pastas.show', compact('pasta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
