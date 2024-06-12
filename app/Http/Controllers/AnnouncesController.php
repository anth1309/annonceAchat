<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AnnouncesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announces = Announce::all();
        return view('announces.index', compact('announces'));
        //return view('announces.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'price' => 'required|numeric',
                'comment' => 'nullable|string',
                'date' => 'required|date',
                'link' => 'nullable|string|max:255',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:5120'
            ]);
        } catch (\Exception $e) {
            Log::error('Validation failed', ['error' => $e->getMessage()]);
            return redirect()->route('home')->with('error', 'Erreur de validation.');
        }

        try {
            $announce = Announce::create([
                'title' => $request->title,
                'city' => $request->city,
                'price' => $request->price,
                'comment' => $request->comment,
                'date' => $request->date,
                'link' => $request->link,
            ]);


            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePath = $image->store('announce_images', 'public');
                    $announce->photos()->create(['image_path' => $imagePath]);

                    Log::info('Image uploaded', ['image_path' => $imagePath]);
                }
            } else {
                Log::warning('No images found in the request.');
            }

            return redirect()->route('home')->with('success', 'Annonce créée avec succès.');
        } catch (\Exception $e) {
            Log::error('Error creating announce', ['error' => $e->getMessage()]);
            return redirect()->route('home')->with('error', 'Erreur lors de la création de l\'annonce.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
