<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function article(){



      return view('blog.posts', [
        'posts'=>Article::where('published', 1)->orderBy('created_at', 'desc')->get()


      ]);
    }

    public function post($slug){



      return view('blog.post', [
        'post'=>Article::where('slug', $slug)->first()


      ]);
    }
}
