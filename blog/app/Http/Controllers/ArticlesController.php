<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;
use App\Http\Requests\CreateArticleRequest;

class ArticlesController extends Controller {

	public function index()
    {
//        $articles = Article::latest()->get();

//        $articles = Article::order_by('published_at', 'desc');

        $articles = Article::latest('published_at')->published()->get();
//        $articles = Article::all()->sortByDesc("published_at");


        return view('articles.index', compact('articles'));
//        return $articles;
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        dd($article->published_at);
        return view('articles.show', compact('article'));

        return $article;
        return $id;
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(CreateArticleRequest $request)
    {
//        $input['published_at'] = Carbon::now();

        Article::create($request->all());

        return redirect('articles');
    }

    public function edit($id)
    {
        dd($id);
        $article = Article::findOrFail($id);

        return view('articles.edit', compact($article));
    }
}
