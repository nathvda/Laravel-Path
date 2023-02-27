<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\CreateClientRequest;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clients/index', ['clients' => Client::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateClientRequest $request)
    {
        $validated = $request->validated();

        Client::create([
            'society' => $validated['society'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'tva' => $validated['tva'],
        ]);

        return redirect('./clients');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('/clients/show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('/clients/edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateClientRequest $request, string $id)
    {
        $validated = $request->validated();

        Client::find($id)->update([
            'society' => $validated['society'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'tva' => $validated['tva'], 
        ]);

        return redirect('./clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Client::find($id)->delete();

        return redirect('./clients');
    }
}
