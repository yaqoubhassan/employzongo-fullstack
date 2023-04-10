<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        $this->middleware('auth:api')->only('store');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return ArticleResource::collection($articles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $user = auth('api')->user();
        $article = new Article();
        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->category = $request->input('category');

        $article->user()->associate($user);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::random(25) . '.' . $file->getClientOriginalExtension();
            $folder = 'public/uploads/articles';
            $url = $this->uploadSingle($file, $folder, $fileName);
            $article->image = $url;
        }
        $article->save();

        return new ArticleResource($article);
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
