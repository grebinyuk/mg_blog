@extends('admin.layouts.app_admin')

@section('content')

  <div class="container" id="dashboard">
      <div class="row " >

        <div class="col-sm-4">
            <div class="jumbotron statistic-item">
                <p class="text-center text-uppercase font-weight-bold text-secondary h2">Posts <span class="text-danger">{{$count_articles}}</span></p>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="jumbotron statistic-item">
                <p class="text-center text-uppercase font-weight-bold text-secondary h2">visitors <span class="text-danger">0</span></p>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="jumbotron statistic-item">
                <p class="text-center text-uppercase font-weight-bold text-secondary h2">Today <span class="text-danger">0</span></p>
            </div>
        </div>


      </div>

      <div class="row justify-content-center">

        <div class="col-sm-8">
            <a href="{{route('admin.article.create')}}" class="btn btn-block btn-secondary">Create Post</a>
            @foreach ($articles as $article)
              <a href="{{route('admin.article.edit', $article)}}" class="list-group-item list-group-item-info">
                <h4 class="list-group-item-heading">{{$article->title}}</h4>
                <p class="list-group-item-text">{{$article->description_short}}</p>
              </a>
            @endforeach

        </div>
      </div>
  </div>
  <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
  <script>src="{{asset('js/app.js')}}" </script>
@endsection
