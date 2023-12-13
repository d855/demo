<?php
    
    use App\Models\Article;
    use Illuminate\Support\Facades\Route;
    
    Route::get('/', function () {
        return view('welcome');
    });
    
    
    Route::get('/articles', function () {
        return view('article.index');
    });
    
    Route::get('/articles/create', function () {
        return view('articles.create');
    });
    
    Route::get('/articles/{article:id}/edit', function (Article $article) {
        return view('articles.edit', [
            'article' => $article
        ]);
    })->name('articles.edit');