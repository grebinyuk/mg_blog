@extends('layouts.app')

@section('title', $post->meta_title)
@section('meta_keyword', $post->meta_keyword)
@section('title', $post->meta_title)
@section('meta_description', $post->meta_description)


@section('content')
  <div class="container">


      <div class="row">
        <div class="col-sm-12">
          <h2>{{$post->title}}</h2>
          <div class="image" style="width:400px; height:300px">
            <img src="#" alt="Щось тут не те">
          </div>
          <p>{!!$post->description_short!!}</p>
        </div>

      </div>

    

    {{-- {{$posts->links()}} --}}
  </div>
@endsection
