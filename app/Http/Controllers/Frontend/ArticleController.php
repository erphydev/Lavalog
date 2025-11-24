<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles(){
		return view('frontend.articles');
    }

	public function single ($id)
	{
		return view('frontend.single');
	}
}
