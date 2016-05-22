<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Article;   //imported
use Carbon\Carbon;


class ArticlesController extends Controller
{
    public function index()
    {
        //return 'get all articles';
        $articles = Article::latest(('published_at'))->published()->get();
        
        //$articles = Article::latest(('published_at'))->where('published_at', '<=', Carbon::now())->get();  //to show articles upto present.
        
        return view('articles.index', compact('articles'));
    }
    
    public function show($id)
    {
        $article = Article::findOrFail($id);
        
        //dd($article->created_at->year); // shows year/month/ format('Y-m')/diffForHumans()
        
        return view('articles.show', compact('article'));
      
//        if(is_null($article))
//        {
//            abort(404);
//        }
        
        //return $article;
    }
    
    public function create()
    {
        return view('articles.create');
    }
    
    public function store(ArticleRequest $request)
    {
        //$input['published_at'] = Carbon::now();
        
        //$article = new Article;
        //$article->title = $input['title'];
        Article::create($request->all());
        
        return redirect('articles');
    }
    
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }
    
    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        
        $article->update($request->all());
        
        return redirect('articles');
    }
    
}
