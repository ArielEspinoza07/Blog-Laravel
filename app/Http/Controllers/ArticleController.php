<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Session;
use Blog\Http\Requests;
use Blog\Http\Requests\ArticleRequest;
use Blog\Http\Controllers\Controller;
use Blog\Article;
use Blog\Tag;
use Blog\Category;
use Blog\Image;
use Auth;

class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::where('user_id','=',Auth::user()->id)->paginate(5);

        return view('article.index',['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','id')->lists('name','id');
        $tags = Tag::orderBy('name','id')->lists('name','id');
        return view('article.create',['categories' => $categories,'tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        if ($request->file('image')) {
            # code...
            $file = $request->file('image');
            $name = 'blogexodia_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/images/articles/';
            $file->move($path, $name);
        }

        $article = new Article($request->all());
        $article->user_id = Auth::user()->id;
        $article->save();

        $article->tags()->sync($request->tags);

        $image = new Image();
        $image->name = $name;
        $image->article()->associate($article);
        $image->save();

        return Redirect::to('article')->with('message','Articulo Creado Correctamente');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $categories = Category::orderBy('name','id')->lists('name','id');
        $tags = Tag::orderBy('name','id')->lists('name','id');
        $my_tags = $article->tags->lists('id')->ToArray();
        return view("article.edit",["article" => $article,'categories' => $categories,'tags' => $tags,'my_tags' => $my_tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        if ($request->file('image')) {
            # code...
            $file = $request->file('image');
            $name = 'blogexodia_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/images/articles/';
            $file->move($path, $name);
        }



        $article = Article::find($id);
        $article->fill($request->all());
        $article->save();

        $article->tags()->sync($request->tags);

        $image = new Image();
        $image->name = $name;
        $image->article()->associate($article);
        $image->save();

        Session::flash('message','Articulo Actualizado Correctamente');
        return Redirect::to('article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        Session::flash('message','Articulo Eliminado Correctamente');
        return Redirect::to('article');
    }
}
