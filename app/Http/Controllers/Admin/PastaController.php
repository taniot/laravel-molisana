<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePastaRequest;
use App\Models\Pasta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PastaController extends Controller
{



    public function livington()
    {

        $pastas = Pasta::all();


        return view('pastas.livington', compact('pastas'));
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        //pastas -> tabella db -> comics
        //Pasta -> model -> Comic



        $pastas = Pasta::all(); //un elenco di record / paste o comics


        // [
        //     'pastas' => $pastas
        // ]

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
    public function store(StorePastaRequest $request)
    {
        // $data = $request->all(); //$_GET $_POST

        // $request->validate([
        //     'title' => 'required|min:5|max:50|string',
        //     'cooking_time' => 'integer|nullable|min:0',
        //     'weight' => 'integer|nullable',
        //     'description' => 'string|nullable',
        //     'image' => 'nullable'
        // ]);

        //gestione della validazione delegata a un metodo del controller
        // $data = $this->validation($request->all());

        $data = $request->validated();



        //validazione -> qui o in un altro file


        // Pasta::create(['title'=>$data['title']])

        // dd($data);

        $pasta = new Pasta();

        // $pasta->title = $data['title'];
        // $pasta->cooking_time = $data['cooking_time'];
        // $pasta->weight = $data['weight'];
        // $pasta->type = $data['type'];
        // $pasta->description = $data['description'];
        // $pasta->image = $data['image'];

        $pasta->fill($data);

        //$pasta->title = 'GESTITO DA ME';


        //ho bisogno save
        $pasta->save(); //consolida -> id di riferimento

        // return redirect()->route('pastas.show', $pasta->id);
        return redirect()->route('pastas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    //public function show(Pasta $pasta) //modello Pasta? mi passi un id? e allora cosa posso fare se non darti la pasta che corrisponde a quell'id? eccola
    {

        //return 'sono io la rotta barbina';
        $pasta = Pasta::find($id); //SELECT * FROM pastas where id = ? LIMIT 1

        if ($pasta === null) {
            // abort(404);
            return redirect()->route('home');
        }


        return view('pastas.show', compact('pasta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $pasta = Pasta::findOrFail($id);

        return view('pastas.edit', compact('pasta'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    public function update(Request $request, Pasta $pasta)
    {

        //$data = $request->all();
        $data = $this->validation($request->all());

        $pasta->update($data);
        //NO BISOGNO SAVE

        // $pasta->title = $data['title'];
        //$pasta->save(); //consolida -> id di riferimento



        // $pasta->title = $data['title'];
        // $pasta->cooking_time = $data['cooking_time'];
        // $pasta->weight = $data['weight'];
        // $pasta->type = $data['type'];
        // $pasta->description = $data['description'];
        // $pasta->image = $data['image'];

        // $pasta->save(); //consolida -> id di riferimento

        return redirect()->route('pastas.show', $pasta->id);


        //$pasta = Pasta::findOrFail($id);

        // dd($data, $pasta);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasta $pasta)
    //public function destroy(string $id)
    {
        // $pasta = Pasta::findOrFail($id);

        $pasta->delete();

        return redirect()->route('pastas.index');
    }


    public function validation($data) //$request->all()
    {

        $validation = Validator::make($data, [
            'title' => 'required|min:5|max:50|string',
            'cooking_time' => 'integer|nullable|min:0',
            'weight' => 'integer|nullable',
            'description' => 'string|nullable',
            'image' => 'nullable'
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'cooking_time.min' => 'Ahia, non hai rispettato il valore minimo'
        ])->validate();

        return $validation;
    }
}
