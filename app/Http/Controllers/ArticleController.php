<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //if(Auth::check()){
        $posts = Article::all(); //select * from blog_posts
        return view('blog.index', ['posts' => $posts]);
        //}
        //return redirect(route('login'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;

        $newPost = Article::create([
            'title_fr' => $request->title_fr,
            'title_en' => $request->title_en,
            'body_fr' => $request->body_fr,
            'body_en' => $request->body_en,
            'user_id' => Auth::user()->id
        ]);

        return redirect(route('blog.show', $newPost->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(Article $blogPost)
    {
        return view ('blog.show', ['blogPost' => $blogPost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $blogPost)
    {
        return view('blog.edit', ['blogPost' => $blogPost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $blogPost)
    {
        $blogPost->update([
            'title_fr' => $request->title_fr,
            'title_en' => $request->title_en,
            'body_en' => $request->body_en,
            'body_en' => $request->body_en,
        ]);

        return redirect(route('blog.show', $blogPost));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $blogPost)
    {
        //return $blogPost;
        $blogPost->delete();

        return redirect(route('blog.index'));
    }
}
