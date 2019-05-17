<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function article(){

      // $article=Article::where('slug', $slug)->first();

      return view('blog.posts', [
        'posts'=>Article::where('published', 1)->get()
        // 'posts'=>$article->where('published', 1)->paginate(12)

      ]);
    }

    public function post($slug){

      // $article=Article::where('slug', $slug)->first();

      return view('blog.post', [
        'post'=>Article::where('slug', $slug)->first()
        // 'posts'=>$article->where('published', 1)->paginate(12)

      ]);
    }
}


// public function category($slug){
//   $category=Category::where('slug', $slug) -> first();
//   return view('blog.category', [
//     'category' => $category,
//     'articles' => $category-articles()->where('published', 1)->paginate(12)
//   ]);
// }
//
// public function article($slug){
//   return view('blog.article', [
//     'article' => Article::where('slug', $slug)->first()
//   ]);
//}
