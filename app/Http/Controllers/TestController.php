<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function view($id){
    	$article = Article::fin($id);


    	$article->category;
    	$article->user;

    	/*return view('admin.index', ['article'=>$article]);*/
    	$dd($article);
    }
}
