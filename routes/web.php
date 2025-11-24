<?php

use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


route::get ('/' , HomeController::class);
route::get ('/articles' , [ArticleController::class, 'articles'])->name('frontend.articles');
route::get ('/article/{id}' , [ArticleController::class, 'single'])->name('frontend.single');
route::fallback(function(){
	return view( 'frontend.404');
});

