<?php

namespace App\Http\Controllers;

use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = $request->only(['category']);

        $tags = Tag::where($filter)->get();
        return TagResource::collection($tags);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'category' => ['string', Rule::in(['Articles', 'Jobs', 'Normal'])]
        ]);


        $validated['slug'] = Str::slug($validated['name']);
        $tag = Tag::firstOrCreate([
            'name' => $validated['name'],
            'category' => $validated['category'],
        ], [
            'slug' => $validated['slug']
        ]);
        return new TagResource($tag);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
