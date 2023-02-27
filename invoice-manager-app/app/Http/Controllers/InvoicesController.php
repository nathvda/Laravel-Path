<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Models\Invoice;
use App\Models\Client;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('invoices/index', ['invoices' => Invoice::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('invoices/create', ['clients' => Client::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        $validated = $request->validated();

        Invoice::create([
            'ref' => $validated['ref'],
            'title' => $validated['title'],
            'price' => $validated['price'],
            'tva' => $validated['tva'],
            'total' => $validated['price'] + (($validated['price'] / 100) * $validated['tva']) ,
            'client' => $validated['client'],
        ]);

        return redirect('/invoices');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        return view('/invoices/show', ['invoice' => $invoice]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        return view('invoices/edit', ['invoice' => $invoice]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatePostRequest $request, string $id)
    {
        $validated = $request->validated();

        Invoice::find($id)->update([
            'ref' => $validated['ref'],
            'title' => $validated['title'],
            'price' => $validated['price'],
            'tva' => $validated['tva'],
            'total' => $validated['price'] + (($validated['price'] / 100) * $validated['tva']) ,
            'client' => $validated['client']
        ]);

        return redirect('./invoices');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Invoice::find($id)->delete();

        return redirect('/invoices');
    }
}
