<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function home(){
        $blogs =  Blog::orderByDesc('created_at')->get();
        return view("welcome")->with("blogs",$blogs);
    }
    
}
