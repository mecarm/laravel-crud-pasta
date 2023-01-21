<?php

namespace App\Http\Controllers;

use App\Models\Pasta;
use Illuminate\Http\Request;

class PastaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pastas = Pasta::orderBy('id', 'asc')->paginate(4);

        $data = [
            'pastas' => $pastas
        ];

        // dd($data);

        return view('pages.pasta.index', $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pasta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_record = new Pasta();
        $new_record->fill($data);
        // $new_record->title = $data['title'];
        // $new_record->description = $data['description'];
        // $new_record->type = $data['type'];
        // $new_record->image = $data['image'];
        // $new_record->cooking_time = $data['cooking_time'];
        // $new_record->weight = $data['weight'];
        $new_record->save();

        return redirect()->route('pastas.show', ['pasta' => $new_record->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $elem = Pasta::findOrFail($id);
        // dd($elem);
        return view('pages.pasta.show', compact('elem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasta = Pasta::findOrFail($id);

        return view('pages.pasta.edit', compact('pasta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $pasta = Pasta::findOrFail($id);
        $request->validate(
            [
                'title' => 'required|max:50'
            ],
            [
                'title.required' => 'Attenzione il campo title è obbligatorio',
                'title.max' => 'Attenzione il campo non deve superare i 50 caratteri'
            ]
        );
        $pasta->update($data);

        return redirect()->route('pastas.show', $pasta->id)->with('success', "Hai modificato con successo la pasta: $pasta->title");
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasta = Pasta::findOrFail($id);
        $pasta->delete();

        return redirect()->route('pastas.index')->with('success', "Hai cancellato con successo la pasta: $pasta->title");
    }
}
