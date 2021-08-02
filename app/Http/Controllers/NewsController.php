<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => News::latest()
                ->filter(request()->query())
                ->paginate(6)
                ->withQueryString(),
        ]);
    }

    public function show(News $post)
    {
        return view('posts.show', compact('post'));
    }
}
