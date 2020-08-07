<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogPost = Blog::all()->sortByDesc('updated_at');

        return view('blog', compact('blogPost'));
    }


    public function store(Request $request)
    {
        Blog::create($request->validate([
            'title' => 'required',
            'body' => 'required|max:255'
        ]));

        return back();
    }


    public function edit(Blog $blog)
    {
        $blogPost = Blog::all()->sortByDesc('created_at');

        return view('blog', ['blogPost' => $blogPost , 'blogToUpdate' => $blog]);
    }


    public function update(Request $request, Blog $blog)
    {
        $blog->update($request->all());

        $blogPost = Blog::all()->sortByDesc('updated_at');

        return view('blog', compact('blogPost'));
    }


    public function destroy(Blog $blog)
    {
        $blog->delete();

        return back();
    }
}
