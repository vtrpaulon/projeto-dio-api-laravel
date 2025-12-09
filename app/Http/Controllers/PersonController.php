<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        return Person::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome'     => 'required|string',
            'idade'    => 'required|integer',
            'telefone' => 'required|string'
        ]);

        return Person::create($data);
    }

    public function show($id)
    {
        return Person::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $person = Person::findOrFail($id);

        $data = $request->validate([
            'nome'     => 'string',
            'idade'    => 'integer',
            'telefone' => 'string'
        ]);

        $person->update($data);

        return $person;
    }

    public function destroy($id)
    {
        $person = Person::findOrFail($id);
        $person->delete();

        return response()->json(['message' => 'Registro deletado com sucesso']);
    }
}