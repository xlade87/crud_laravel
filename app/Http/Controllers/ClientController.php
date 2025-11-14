<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'company' => 'nullable',
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index')
            ->with('success', 'Cliente creado correctamente.');
    }

    public function show(string $id)
    {
        $client = Client::find($id);
        return view('clients.show', compact('client'));
    }

    public function edit(string $id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'company' => 'nullable',
        ]);

        Client::find($id)->update($request->all());
        return redirect()->route('clients.index')
            ->with('success', 'Cliente actualizado correctamente.');
    }

    public function destroy(string $id)
    {
        Client::find($id)->delete();
        return redirect()->route('clients.index')
            ->with('success', 'Cliente eliminado correctamente.');
    }
}