<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard(){
      return view('admin.dashboard', [
        'articles'=>Article::lastArticles(5),
        'count_articles'=>Article::count()
      ]);
    }
}
