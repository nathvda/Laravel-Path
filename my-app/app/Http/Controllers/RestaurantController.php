<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Http\Requests\CreatePostRequest;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('restaurants/index', ['restaurants' => Restaurant::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurants/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {

        $validated =$request->validated();

        Restaurant::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'zipCode' => $validated['zipCode'],
            'town' => $validated['town'],
            'review' => $validated['review'],
            'adress' => $validated['adress']
        ]);

    } 


    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        return view('restaurants/show', compact('restaurant'));
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        return view('restaurants/edit', ['restaurant' => $restaurant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatePostRequest $request, string $id)
    {
        $validate = $request->validated();

        Restaurant::find($id)->update([
            'name' => $validate['name'],
            'description' => $validate['description'],
            'zipCode' => $validate['zipCode'],
            'town' => $validate['town'],
            'review' => $validate['review'],
            'adress' => $validate['adress']
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
